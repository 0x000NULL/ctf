FBCTF Admin Guide 


**Begin Game**

The *Begin Game* button starts an event, and automatically performs several functions. This includes turning on *Scoring* and *Timer* in the *Configuration* page. Ensure all game settings and levels are configured before clicking *Begin Game*.

**Configuration**

This is the default admin page where registration, login, and game settings take place.

![](http://i.imgur.com/DVZ07Ur.png)

**Registration**

By default, *Registration* is turned off. In this mode, administrators must manually register players. Any players attempting to self register will get a *Team Registration Not Available* page.

Turning *Registration* on allows players to self register for an event. Two registration types are available. In *Open* mode, registration is public. In login *Tokenized* mode, admins must generate and distribute tokens to registering players. These tokens are required as input when registering a team.

*Player Names* can be enabled, allowing registering teams to input names and email addresses for their players. The number of *Players Per Team* can be changed from the default of *3*.

![](http://i.imgur.com/MMiulzM.png)

**Login**

*Login* is enabled by default, but can be disabled, preventing any teams from logging in. However, admins are able to login regardless.

![](http://i.imgur.com/Dthjltd.png)

*Team Selection* can be enabled, in order to present users with a dropdown box when logging in. By default, they will need to type in a team name.

**Active Directory / LDAP**

This feature allows authentication to be handled by an LDAP server. This may ease administration of a larger event.

![](http://i.imgur.com/zdzbl7j.png)

**Game**

The *Scoring* option allows for teams to capture levels such as *Quizzes*, *Flags*, and *Bases*. This option works in conjunction with *Begin Game*. However, it can be turned on or off and any time to manually run an event. When Scoring is turned off, teams will not be able to capture any levels, and will receive an *Incorrect* response when attempted.

*Refresh Gameboard* is enabled by default, and allows for background refreshes of the scoreboard between page loads. It is highly recommended to leave this option enabled during an event.

*Bases Cycle (S)* represents the number of seconds between each Base check. This works in conjunction with the *Keep Points* under *Levels: Bases*. While a Base is under control of a particular team, that team will be rewarded the *Keep Points* in an ongoing manner, with the interval of *Bases Cycle (S)*.

*Progressive Cycle (S)* represents the number of seconds between each refresh of the Progressive Scoreboard. This is accessed on the *Gameboard* by clicking *Scoreboard* at the top of the screen during an event.

The *Default Bonus* is by default set to 30 points. This is the bonus awarded to the first team capturing a particular *Level*. *Default Bonus Dec* is by default set to 10 points, and decrements from the *Default Bonus* by this amount during each distinct team capture. For example, using the above values, the first team to capture a level will be rewarded with a 30 point bonus. The second team will be awarded a 20 point bonus, and the third team 10 points. Subsequent teams in this scenario will receive no bonus for the Level in question.

![](http://i.imgur.com/bTxSpoB.png)

**Timer**

The *Timer* is enabled automatically during the start of an event, and shows a game timer on team displays, based on the values utilized below. Note that the game timer is currently display only, and games must be started, paused, and ended manually by admins. The Timer can be disabled completely for events which have no time limit.

The *Server Time* represents the time as set on the system, and cannot be modified directly.

*Game Duration* is set to 3 hours by default, and works in conjunction with the *Timer* to show teams how much time is left in an event. Note that admins must still manually stop the event, in order to prevent teams from capturing levels post event.

*Begin Time* and *Expected End Time* are calculated based on when the event was started manually, and the set game duration time.

![](http://i.imgur.com/CREWScj.png)

**Language Change**

FBCTF supports a wide range of languages, which can be changed by selecting the appropriate language at the bottom of the *Admin Configuration* page. More languages are constantly being added to the platform. If you'd like to use a language we don't currently support, file a PR! 

![](http://i.imgur.com/jiYMS2t.png)

**Controls**

The *Controls* tab enables administrators to import and export various elements of an event. This allows for easier management of events.

Several utilities are also included in the controls tab. *Flush Memcached* should be used whenever the database is changed directly, and in some other more advanced use cases. *Reset Database* can be used to purge all data and reset the database to defaults. Note that admin accounts will remain intact.

![](http://i.imgur.com/FA0FFjz.png)

**Announcements**

*Announcements* allow admins to send out global messages to teams participating in an event. These will show up in real time on team sidebars.

![](http://i.imgur.com/59dGTlN.png)

**Levels: Quiz**

*Quizzes* are the most basic type of *Level*, allowing for a simple question and answer format. They are not case sensitive. After creation of a Quiz, it must be enabled. This is done either per Quiz, or globally with the toggle switch at the top of the screen.

The Quiz *Title* and *Question* should be populated with all information needed by teams in order to complete the Quiz.

The Quiz *Answer* is not case sensitive, and is required as input from teams in order to successfully complete the Quiz.

Points should be assigned to the Quiz, based on either the difficulty of the Quiz, or at the admin’s discretion. Harder Quizzes can have a higher value, rewarding teams with more points. *Bonus* is set to the global default, but can be overridden per Quiz. Similarly, *-Dec* can be set manually per Quiz, decrementing the bonus by a set amount each time a distinct team captures the Quiz.

*Hints* can be added to Quizzes, but will require teams to pay a penalty. When the *Hint Penalty* is set to 0, hints are free. Keep in mind that when Hint Penalties are set to a non-zero value, teams will need to capture at least one level in order to generate the points to buy the hint.

By default, Quizzes are assigned to a random country. This value can be overridden by admins, if they desire a particular country for the Quiz.

Quizzes are always assigned to the *Quiz* category. This allows teams to filter visibility of Quizzes.

![](http://i.imgur.com/LoxQ8AA.png)

**Levels: Flag**

*Flags* are an interactive type of *Level*, which can include embedded *Attachments* and *Links*. This allows for challenges related to a particular file or web link. For example, an image containing steganography can be attached to a flag. Unlike *Quizzes*, flags are case sensitive. After creation of a Flag, it must be enabled. This is done either per Flag, or globally with the toggle switch at the top of the screen.

This Flag *Title* and *Description* should be populated with all information needed by teams in order to complete the Flag, aside from any attachments or links.

The *Flag* field is case sensitive, and is required as input from teams in order to successfully complete the Flag.

Points should be assigned to the Flag, based on either the difficulty of the Flag, or at the admin’s discretion. Harder Flags can have a higher value, rewarding teams with more points. *Bonus* is set to the global default, but can be overridden per Flag. Similarly, *-Dec* can be set manually per Flag, decrementing the bonus by a set amount each time a distinct team captures the Flag.

*Hints* can be added to Flags, but will require teams to pay a penalty. When the *Hint Penalty* is set to 0, hints are free. Keep in mind that when Hint Penalties are set to a non-zero value, teams will need to capture at least one level in order to generate the points to buy the hint.

By default, Flags are assigned to a random country. This value can be overridden by admins, if they desire a particular country for the Flag.

Flags can also be assigned to different *Categories*. By default, the Category is set to *None.* Admins must first create categories in the *Levels: Categories* tab. When utilizing Categories, teams will be able to filter Flag visibility based on the Category.

![](http://i.imgur.com/8J0L7Y2.png)

**Levels: Bases**

*Bases* are a specialized type of *Level*, representing a target system which must be compromised by teams in order to capture points. This is used in a *King of the Hill* game type, where teams compete over control of these target systems. Controlling a Base rewards a Team with both initial capture points, and also points over time while the Base is controlled by that team. After creation of a Base, it must be enabled. This is done either per Base, or globally with the toggle switch at the top of the screen.

In order for Bases to function, an agent must be installed on the target system. The requirements of the agent are that it must read and output the contents of a */tmp/SCORE_POINTS* file when queried over HTTP. For example, you can utilize the _built-in scoring agent_, which contains a mini web server. This agent will return the contents of the SCORE_POINTS file in JSON format when queried over HTTP. The contents of this file should include the team name to receive points. You can also create your own custom scoring agent.

In addition to having an agent installed on the target system, a *Link* must also be created after creation of the Base. This can be done by clicking the *Edit* button, and entering a network address for the target web server, in the format *IP_Address:Port*. Ensure you save the Base after adding this information.

The *Title* and *Description* fields should be populated with general information on the target system.

The *Keep Points* field rewards capturing Teams with an ongoing number of points, based on the *Bases Cycle (S)* option set in the *Configuration* page. For example, if *Team Alpha* controls the target system, they will receive the *Keep Points* every 5 seconds, which is the default value for Bases Cycle (S).

*Capture Points* are awarded to a Team once upon capture of the Base in question.

*Hints* can be added to Bases, but will require teams to pay a penalty. When the *Hint Penalty* is set to 0, hints are free. Keep in mind that when Hint Penalties are set to a non-zero value, teams will need to capture at least one level in order to generate the points to buy the hint.

By default, Bases are assigned to a random country. This value can be overridden by admins, if they desire a particular country for the Base.

Bases can also be assigned to different *Categories*. By default, the Category is set to *None.* Admins must first create categories in the *Levels: Categories* tab. When utilizing Categories, teams will be able to filter Base visibility based on the Category.

![](http://i.imgur.com/7TfSQiC.png)

**Levels: Categories**

The *Categories* tab allows admins to create distinct categories, in order to group *Flags*. This can be helpful for organization when many flags exist in an event.

![](http://i.imgur.com/WXqUiLS.png)

**Levels: Countries**

The *Countries* tab allows admins to globally enable and disable countries utilized in an event. To enable or disable a country, click *Enabled* or *Disabled* to the right of the country in question.

![](http://i.imgur.com/sJZ7mLt.png)

**Teams**

The *Teams* tab allows admins to create, manage, and delete teams in an event. When *Registration* is turned off, admins must create teams manually.

The global toggle switch at the top of the screen is used to enable or disable all teams, other than admins. Note that disabling all teams will invalidate current login sessions, and prevent teams from capturing any levels. When re-enabled, the teams must all login to the platform.

Any team can be enabled or disabled with the team specific toggle switch. Note that disabling a team will invalidate all their current login sessions, and prevent the team from capturing any levels. When re-enabled, the team must login to the platform. Disabling a team is useful for situations where the desired result is to stop all team activity.

In order to create a team, click *Add Team*. Enter the *Team Name*, which will be utilized as both the team login name, as well as the team name displayed on the scoreboard. Enter a *Password*, which is required in order for team members to login to the platform. Select a *Logo* for the team, from the emblem library provided. Finally, click *Create Team* to save the changes.

Any team can be promoted to admin status with the *Admin Level* toggle switch.

All parameters of a *Team* can be modified. Click the *Edit* button for the team in question, and make changes as desired. Click the *Save* button to finish.

The *Visibility* of a Team can be disabled, removing it from the scoreboard completely. This is useful in cases where you don’t want the team to be publicly visible.

Deleting a team can be performed by clicking the *Edit* button for the team in question, followed by *Delete*. Note that this will remove all remnants of the team, including scoring and logs. If you wish to preserve these areas, *Disable* the team instead.

The Teams tab also allows for viewing the status of a team, including *Names* participating in the team, details on the team *Score*, and capture *Failures*. These areas are accessed by utilizing the menu slider above each team.

![](http://i.imgur.com/soReLj4.png)

**Teams: Logos**

The *Logos* admin tab is used to globally enable and disable logos in the emblem library. It can also be used to view which teams are using particular emblems. Note that custom logos cannot be created in this menu. Teams must self register in order to utilize a custom logo.

Click the *Enable* or *Disable* button next to each emblem, in order to change its status.

Click the dropdown box next to a particular emblem, in order to see all teams utilizing it.

![](http://i.imgur.com/ch2Bcu9.png)

**Teams: Sessions**

The *Sessions* tab is used to track and manage individual login sessions to the platform. Information on the cookie utilized, as well as access time and page information is displayed.

*Creation Time* shows when a session started. This is when the team first logged into the platform.

*Last Access* shows when a team was last active. Note that certain actions are not tracked. For example, a team residing on the *Scoreboard* page with only background refreshes taking place may not trigger a *Last Access* time update.

*Last Page Access* displays the last page a session loaded. This is designed to give a general idea of a session’s status. Note that background refreshes are generally not included in this metric. For example, a team residing on the *Scoreboard* page will not trigger a *Last Page Access* update.

Sessions can be deleted by clicking the *Edit* button, followed by *Delete*. Note that sessions are automatically deleted and invalidated when disabling or deleting teams.

![](http://i.imgur.com/wkI61MK.png)

**Game Logs**

*Game Logs* section provides event admins with a timeline of capture activity. This area provides information on both successes and failures for each team, along with other details such as number of points, and the capture text on failures. This allows admins to review submitted responses from each team.

![](http://i.imgur.com/zr7uA0l.png)
