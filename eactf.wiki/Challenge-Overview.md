Note: If you'd like access to the private repository of existing challenges, please email ctf@fb.com with your Github username and background on the event. 

----------------------------------------------------------------------------------------------------------------------------
The FBCTF uses three different types of challenges: Quiz, Flags and Bases.

## Quiz Levels

Quiz questions are the equivalent of trivia questions. One question that has one answer and the answers can be anything from a single word to a whole sentence, not being case sensitive.

## Flag Levels

Flags are problems that you need to break apart to find the hidden solution. The end goal of a flag question is to recover a "flag" that you can submit for points. All flags should be in the format `flag{some_text_here}`, which is a good practice organizing competitions given the consistency it provides. Any problem that does not use this flag format should explicitly specify so in the description. In a typical flag problem, you may be provided with the URL of a website that you must hack or of a service that you need to connect to using `netcat`. The goal of these challenges can range from dumping the flag from a database on the system, getting a shell on the system, or simply tricking the application to display the flag. These challenges can provide links or attachments to complete the description of them.

## Base Levels

Bases are the levels that are part of the "King of the Hill" type of games. They represent a system, that has to be compromised and whoever takes it gets a number of points, the first time. In addition to that, it also rewards control based on time, rewarding with a number of points every cycle. All this numbers can be fully customized using the Configuration section in the admin page.

In order to setup a Base level, you need an agent running in the target system to read the contents of the file ```/tmp/SCORE_POINTS```. If the file contains the name of one of the teams participating in the competition, the points will go to that team. For example, if the challenge allows to execute commands in the target system, something like ```echo "ThisIsATeamName" > /tmp/SCORE_POINTS``` will take control of that machine and the platform will start giving points to the team named ```ThisIsATeamName```. [Here] (https://github.com/facebook/fbctf/blob/master/extra/score_base.py) there is an example of an scoring agent that works with the platform.
When creating a Base level, you need to create a Link to the actual system. Just add a Link from the admin page using the format ```IP_Address:Port``` and it will be ready to go.

## Hints

The FBCTF platform also allows for hints, which may be provided by the organizer. In some cases, hints will be in the problem description. In other cases, you will see a hint button below the challenge. If there is no hint penalty, clicking on the hint button will display the hint. If there is a penalty, the penalty will be displayed on the button, and you can pay the penalty to access the hint, if you have enough points to do so.

For samples of challenges and quizzes, please see the [demo_levels] (https://github.com/facebook/fbctf/tree/master/demo_levels) file in this repository. 
