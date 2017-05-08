<?hh // strict

require_once ($_SERVER['DOCUMENT_ROOT'].'/../vendor/autoload.php');

class LiveSyncDataController extends DataController {

  public async function genGenerateData(): Awaitable<void> {
    $data = array();
    await tr_start();
    $input_auth_key = idx(Utils::getGET(), 'auth', '');
    $livesync_awaits = Map {
      'livesync_enabled' => Configuration::gen('livesync'),
      'livesync_auth_key' => Configuration::gen('livesync_auth_key'),
    };
    $livesync_awaits_results = await \HH\Asio\m($livesync_awaits);
    $livesync_enabled = $livesync_awaits_results['livesync_enabled'];
    $livesync_auth_key = $livesync_awaits_results['livesync_auth_key'];

    if ($livesync_enabled->getValue() === '1' &&
        hash_equals(
          strval($livesync_auth_key->getValue()),
          strval($input_auth_key),
        )) {

      $livesync_enabled_awaits = Map {
        'all_teams' => Team::genAllTeams(),
        'all_scores' => ScoreLog::genAllScores(),
        'all_hints' => HintLog::genAllHints(),
        'all_levels' => Level::genAllLevels(),
      };
      $livesync_enabled_awaits_results =
        await \HH\Asio\m($livesync_enabled_awaits);
      $all_teams = $livesync_enabled_awaits_results['all_teams'];
      invariant(
        is_array($all_teams),
        'all_teams should be an array and not null',
      );

      $all_scores = $livesync_enabled_awaits_results['all_scores'];
      invariant(
        is_array($all_scores),
        'all_scores should be an array and not null',
      );

      $all_hints = $livesync_enabled_awaits_results['all_hints'];
      invariant(
        is_array($all_hints),
        'all_hints should be an array and not null',
      );

      $all_levels = $livesync_enabled_awaits_results['all_levels'];
      invariant(
        is_array($all_levels),
        'all_levels should be an array and not null',
      );

      $data = array();
      $teams_array = array();
      $team_livesync_exists = Map {};
      $team_livesync_key = Map {};
      foreach ($all_teams as $team) {
        $team_id = $team->getId();
        $team_livesync_exists->add(
          Pair {$team_id, Team::genLiveSyncExists($team_id, "fbctf")},
        );
      }
      $team_livesync_exists_results = await \HH\Asio\m($team_livesync_exists);
      foreach ($team_livesync_exists_results as $team_id => $livesync_exists) {
        if ($livesync_exists === true) {
          $team_livesync_key->add(
            Pair {$team_id, Team::genGetLiveSyncKey($team_id, "fbctf")},
          );
        }
      }
      $team_livesync_key_results = await \HH\Asio\m($team_livesync_key);
      $teams_array = $team_livesync_key_results->toArray();

      $scores_array = array();
      $scored_teams = array();

      foreach ($all_scores as $score) {
        if (in_array($score->getTeamId(), array_keys($teams_array)) ===
            false) {
          continue;
        }
        $scores_array[$score->getLevelId()][$teams_array[$score->getTeamId()]]['timestamp'] =
          $score->getTs();
        $scores_array[$score->getLevelId()][$teams_array[$score->getTeamId()]]['capture'] =
          true;
        $scores_array[$score->getLevelId()][$teams_array[$score->getTeamId()]]['hint'] =
          false;
        $scored_teams[$score->getLevelId()][] = $score->getTeamId();
      }
      foreach ($all_hints as $hint) {
        if ($hint->getPenalty()) {
          if (in_array($hint->getTeamId(), array_keys($teams_array)) ===
              false) {
            continue;
          }
          $scores_array[$hint->getLevelId()][$teams_array[$hint->getTeamId()]]['hint'] =
            true;
          if (in_array(
                $hint->getTeamId(),
                $scored_teams[$hint->getLevelId()],
              ) ===
              false) {
            $scores_array[$hint->getLevelId()][$teams_array[$hint->getTeamId()]]['capture'] =
              false;
            $scores_array[$hint->getLevelId()][$teams_array[$hint->getTeamId()]]['timestamp'] =
              $hint->getTs();
          }
        }
      }

      $levels_array = array();
      $entities = Map {};
      $categories = Map {};
      foreach ($all_levels as $level) {
        $level_id = $level->getId();
        $entities->add(Pair {$level_id, Country::gen($level->getEntityId())});
        $categories->add(
          Pair {
            $level_id,
            Category::genSingleCategory($level->getCategoryId()),
          },
        );
      }
      $entities_results = await \HH\Asio\m($entities);
      invariant(
        $entities_results instanceof Map,
        'entities_results should of type Map and not null',
      );

      $categories_results = await \HH\Asio\m($categories);
      invariant(
        $categories_results instanceof Map,
        'categories_results should of type Map and not null',
      );

      foreach ($all_levels as $level) {
        $level_id = $level->getId();
        $entity = $entities_results->get($level_id);
        invariant(
          $entity instanceof Country,
          'entity should of type Country and not null',
        );

        $category = $categories_results->get($level_id);
        invariant(
          $category instanceof Category,
          'category should of type Category and not null',
        );

        if (array_key_exists($level->getId(), $scores_array)) {
          $score_level_array = $scores_array[$level_id];
        } else {
          $score_level_array = array();
        }
        $one_level = array(
          'active' => $level->getActive(),
          'type' => $level->getType(),
          'title' => $level->getTitle(),
          'description' => $level->getDescription(),
          'entity_iso_code' => $entity->getIsoCode(),
          'category' => $category->getCategory(),
          'points' => $level->getPoints(),
          'bonus' => $level->getBonusFix(),
          'bonus_dec' => $level->getBonusDec(),
          'penalty' => $level->getPenalty(),
          'teams' => $score_level_array,
        );
        $levels_array[] = $one_level;
      }

      $data = $levels_array;
    } else if ($livesync_enabled->getValue() === '0') {
      $data['error'] = tr(
        'LiveSync is disabled, please contact the administrator for access.',
      );
    } else if (strval($input_auth_key) !==
               strval($livesync_auth_key->getValue())) {
      $data['error'] =
        tr(
          'LiveSync auth key is invalid, please contact the administrator for access.',
        );
    } else {
      $data['error'] = tr(
        'LiveSync failed, please contact the administrator for assistance.',
      );
    }
    $this->jsonSend($data);
  }

}

/* HH_IGNORE_ERROR[1002] */
$syncData = new LiveSyncDataController();
\HH\Asio\join($syncData->genGenerateData());
