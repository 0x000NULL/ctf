## What is a CTF? 

CTF, which stands for “Capture the Flag,” is a computer-based competition used to teach information security skills through hands-on experience. Players earn points and gain control of the game map by completing tasks with their team that identify potential threats, and secure computers and networks against virtual attacks. Because learning attack techniques is often the best way to learn how to protect against them, CTFs teach both defense and offense skills. Points are awarded to teams on the basis of speed and accuracy. At the end of the allotted time, the team with the most points is declared the winner.

## Why did Facebook create the FBCTF Platform?

The current demand for information security talent far outweighs the supply of qualified candidates. The U.S. Bureau of Labor Statistics predicts more than two thirds of the 1.4 million security jobs needed by 2020 will go unfilled due to the insufficient pool of college graduates with the necessary experience and skill. Much of this is due to the lack of exposure students receive to computer science and security principles until they reach college.

CTFs are a proven resource for teaching and demonstrating practical application of security concepts students learn in the classroom. Across the world, many students already participate in similar competitions, but the barrier of entry remains far too high for most educational organizations to run their own programs. By providing an Open Source resource for all to leverage, Facebook is making it easier for these organizations to teach security skills to students in a safe, legal, and meaningful way.

## Who should use the FBCTF platform?

The platform was built with education and competition organizers in mind. Dozens of high school and college-level student clubs, national competition organizations, educational institutions, and industry groups have already run successful competitions using the Facebook CTF platform.

## What kind of license does the FBCTF platform utilize?

Facebook CTF is provided with a Attribution-Non Commercial Creative Commons (CC BY-NC 4.0) License. Please read the full license here and you can learn more about the Creative Commons license here.

## How do I use Facebook's CTF?

* Organize a competition. This can be with as few as two participants and up to several thousand. Players can participate in-person, online, or a combination of the two. 
* Follow the setup instructions in GitHub repo to spin up the platform infrastructure. 
* Enter challenges into Admin Panel. For a step-by-step guide, please see the [demo_levels](https://github.com/facebook/fbctf/tree/master/demo_levels) file in this repo. 
* Register participants in teams
* Hack away!

## How can I contribute to the FBCTF Platform?

Anyone can contribute towards the FBCTF platform. Using GitHub, you can generate your own branch of the project, and make code changes. A Pull Request to the main project can be made, and if approved will be merged into FBCTF itself.

## Where can I find challenges for the FBCTF platform?

The FBCTF team maintains a private repository of challenges, designed for the collegiate level. These challenges include areas such as reverse-engineering, forensics, web application security, cryptology, and basic system administration.

You can request access to these challenges by contacting ctf@fb.com with your GitHub username and background on your event. Demo starter levels for the platform are located here.

For samples of challenges and quizzes, please see the [demo_levels](https://github.com/facebook/fbctf/tree/master/demo_levels) file in this repository.

## How do I obtain assistance with FBCTF?

Start by looking through the provided documentation:

* [Readme](https://github.com/facebook/fbctf/blob/master/README.md)
* [Frequently Asked Questions](https://github.com/facebook/fbctf/wiki/FAQ)
* [Challenge Overview](https://github.com/facebook/fbctf/wiki/FBCTF-Challenge-Overview)

Remember that if you are having an issue, chances are high that somebody else has experienced it in the past. Search through the [GitHub FBCTF Issues section](https://github.com/facebook/fbctf/issues).

Examine your installation and operational logs. At times these logs will provide a clear answer to your issue. Look through the following logs, and note any anomalies:

* `/var/log/hhvm/error.log`
* `/var/log/nginx/error.log`
* Output of provision.sh script

If you still cannot find any information to resolve your issue, please post under the [GitHub FBCTF Issues section](https://github.com/facebook/fbctf/issues). When posting your issue, ensure you include as much information as possible. This will assist developers with tracking down and resolving your issue. Include the following information in your post:

* Informative and Concise Subject for your Issue
* Current version of FBCTF installed (commit head)
* System and Installation details, such as the Linux distribution used, and installation method you chose.
* Detailed description of the problem. Include steps to reproduce the problem when possible.
* Screenshots to help describe the problem when appropriate.
* Relevant output from any logs examined above.
* All steps you have taken to resolve the issue.

## I found a bug, what should I do?

When discovering a bug in the platform, first search the [GitHub FBCTF Issues section](https://github.com/facebook/fbctf/issues). You may find that somebody else has already reported the issue, or that it’s a misconfiguration. Update the existing issue as appropriate.

If nobody else has reported the issue, file a new issue on the [GitHub FBCTF Issues section](https://github.com/facebook/fbctf/issues). Ensure you provide all relevant details, as shown [above](https://github.com/facebook/fbctf/wiki/FAQ#how-do-i-obtain-assistance-with-fbctf). If you already have a workaround, provide that information in your issue request.

If you have found a solution or are providing a bug fix for the issue at hand, please file a Pull Request on GitHub with the corrections. The FBCTF team always appreciates external ideas and assistance!

## How can I change the Language used for the platform?

FBCTF supports a wide range of languages, and can be changed by selecting the appropriate language at the bottom of the admin configuration page. More languages are constantly being added to the platform.

The FBCTF team is always open to comments, suggestions, and improvements on the platform!

## What kind of Rules should I use for an event?

You can find a FBCTF created template of general rules for an event [here](https://github.com/facebook/fbctf/wiki/Rules). This should be modified depending on the structure and style of your event.

## How difficult should the challenges be when designing a FBCTF event?

The difficulty of any the game depends entirely on the challenges chosen by the organizer. The user experiences was designed to be easy enough for anyone to use. Facebook has hosted CTFs across all age and skill levels from middle school to advanced security engineers.

You can build your own challenges or use various public challenges found online. Additionally the FBCTF team maintains a private repository of challenges, designed for the collegiate level. These challenges include areas such as reverse-engineering, forensics, web application security, cryptology, and basic system administration.

You can request access to these challenges by contacting [ctf@fb.com](mailto:ctf@fb.com) with your GitHub username and background on your event. Demo starter levels for the platform are located [here](https://github.com/facebook/fbctf/tree/master/demo_levels).

## Can I run the platform without SSL?

No, not without modification. The platform was designed only to run over HTTPS/SSL. You must use either a self-signed certificate, your own certificate, or a certificate generated from [Let’s Encrypt](https://letsencrypt.org/).

## Can I host a large event using the FBCTF platform?

Events of up to 70 teams have successfully been run with FBCTF, utilizing a Large EC2 instance. The platform was designed to scale efficiently.

## Can I run FBCTF in the Cloud?

The FBCTF platform can be run on various cloud providers, including any Infrastructure as a Service (IaaS) platform.  FBCTF can be run on any hypervisor or container that supports installation of Ubuntu 14.04.  Additionally, FBCTF has been built using Vagrant and Docker, with the required configurations provided within the repository.

Running FBCTF on a cloud platform provides many benefits for public competition, or event across multiple sites. It is recommended that you utilize a production installation when using a cloud platform for an event.

## What size cloud instance should I utilize for FBCTF?

This depends heavily on the number of participants utilizing the platform during your event.  FBCTF is optimized and utilizes caching to minimize the resources required.  For example a 70 team event has been successfully ran using a Large EC2 instance.

## Should I use Development or Production mode when provisioning?

Development mode is designed for development of the platform, and generates a self-signed SSL certificate. It is highly recommended if you use this mode, to utilize Vagrant and VirtualBox as the provider. This ensure environmental stability. When provisioning in development mode, the admin password for the platform will always be *password*.

Production mode is designed strictly for use of the platform. By default, it will generate a valid SSL certificate using Let’s Encrypt. Production mode generates a random password at the end of the provisioning script. Ensure you note this password, as this is the only time it will be displayed.

## How do I access the platform after installation?

The platform is accessed through HTTP on the server you provisioned. For example, http://10.10.10.5 on Vagrant.

## What directory is the platform installed in?

By default, the FBCTF platform is installed in `/var/www/fbctf`

## Why am I getting a blank page or bad gateway error when accessing the platform?

* Ensure Ubuntu 14.04 x64 is being utilized. The platform is only supported on this distro.
* Ensure no other HTTP servers are installed, such as Apache. The platform utilizes NGINX. Restart the system after any HTTP server changes.
* Disable any Ad Blocker software.
* Carefully read the provisioning script output to ensure there are no errors during installation.
* Examine the output of curl -vk https://localhost on the platform system.

## How do I reset the admin password for the platform?

If you lose or forget the admin password for the platform, run the following commands from the fbctf folder. The parameters must be changed if you have not utilized the defaults in the database name, user, and password:

`source /var/www/fbctf/extra/lib.sh`  
`set_password [new_password] ctf ctf fbctf /var/www/fbctf/`

## How do I reset the database from the command line?

If you need to reset your database, the following command will set it back to original defaults. Note that the default database password is `ctf`.

`cat /var/www/fbctf/database/schema.sql /var/www/fbctf/database/countries.sql /var/www/fbctf/database/logos.sql | mysql -u ctf -p fbctf`  

The admin password must then be reset using [these](https://github.com/facebook/fbctf/wiki/FAQ#how-do-i-reset-the-admin-password-for-the-platform) instructions above.

## How can I debug issues with FBCTF?

Always check the HHVM log for issues. This is located by default at:

`/var/log/hhvm/error.log`

You can additionally modify: /etc/hhvm/server.ini to utilize a debugger. Instructions can be found [here](https://docs.hhvm.com/hhvm/configuration/INI-settings#debugger).

## How do I update the platform after new merges take place?

FBCTF can be updated by running the provision script in a special mode. Keep in mind that you should run it from the folder `/var/www/fbctf`:

`./extra/provision.sh -m prod -U -s $PWD -d /var/www/fbctf`

Note that any database changes must be manually updated at this time.

## When and how should I flush memcached?

Memcached is utilized for the FBCTF platform, in order to make efficient use of system resources. Instead of constantly querying the database for every display refresh and action, the platform will utilize a cache when data has not changed.

When performing all actions through the FBCTF platform, Memcached will be flushed automatically when appropriate. However, if changes are being made to the database outside the platform (via script or manually), Memcached must be flushed in many cases. This can be done by running the following command:

`echo 'flush_all' | nc localhost 11211`

## How can teams utilize custom icons?

Teams must self-register in order to use custom icons. While registering, click *Upload Your Own* and select a support image type. This currently includes the JPG, GIF, and PNG image types. The size of the custom icon must be below 1000KB. After selecting your icon in the upload screen, a preview will be displayed on the screen. Once you are happy with the custom icon, click *Sign Up*.

## Teams are not able to capture levels during an event

In order for teams to capture levels, several options must be enabled in the admin panel:

* Ensure the Game is not Paused or Stopped.
* Ensure Scoring is enabled.
* Ensure the Team in question is enabled.
* Remind Teams that all Flags are case sensitive.

## How do I prevent unauthorized teams from signing up during an event?

Utilize the *Tokenized Registration* Type under the admin panel. This prevents teams from signing up publicly, and event admins can distribute generated tokens to teams in order to register.

## What is the difference between Quizzes and Flags?

*Quizzes* are the simplest type of Level, and should be utilized for simple question and answer puzzles. All information in order to complete the puzzle should be contained in the Quiz question.

*Flags* are intended as a more interactive type of Level, and can include Attachments as well as Links. For example, you can link to a web server where teams must hack a web service in order to generate the Flag answer. Alternatively you can also attach files, such as a Python script that must be reverse engineered in order to generate the answer.

## What is the difference between Disabling and Deleting a Team?

It is important to note that Deleting a team is intended as a permanent measure, and should be avoided whenever you want to preserve data. Deleting a team purges all logs and scores related to the team.

Disabling a team invalidates all login sessions to the FBCTF platform, and disables the ability for the team in question to login to the platform, capture bases, or perform any authenticated activity. However, all data related to the team will be preserved.

## What is the difference between Disabling a Team and turning off Visibility?

The Visibility for Teams can be disabled, removing them from the scoreboard completely. However, the Team can still capture levels and participate in the event.

Disabling a team invalidates all team login sessions, and prevents the team from performing any authenticated actions in the event. However, the Team will be visible on the scoreboard.

## Can a Team change settings on their profile?

No. Once a team registers, they cannot change any profile settings. Only event admins can edit teams at this point.

## Can the Database for an event be changed manually or by using a script?

Yes. However, only experts should attempt to change the database manually, and great care must be taken. Ensure you match database calls as made by the FBCTF platform. By turning on the MySQL general query log, you can examine database calls that take place during a platform action, and duplicate the calls manually or through your script.

It is also important that you understand how Memcached works with the FBCTF platform. In general, flush Memcached after making any changes to the database. This can be performed by running the following command:

`echo 'flush_all' | nc localhost 11211`

## Why can’t Teams in the event click on Countries or perform other actions?

The Team in question may have been logged out of the event, due to session invalidation by an admin or a session timeout. The team should refresh the page, which will lead back to the login page if their session has been invalidated.

## How do I make a code change to FBCTF in Production Mode?

In production mode, FBCTF utilizes HHVM in *Repo Authoritative Mode*. This compiles the PHP source files into a bytecode repo, increasing speed and efficiency. When code changes are made to the PHP source files, the HHVM repo must be rebuilt. After making your code changes, run the following commands to rebuild the HHVM repo:

```
sudo rm /var/cache/hhvm/hhvm.hhbc
sudo hhvm-repo-mode enable "/var/www/fbctf"
sudo chown www-data:www-data /var/cache/hhvm/hhvm.hhbc
sudo service hhvm start
sudo service nginx restart
```

## How can I backup and restore an event using the Database?

Backup and restoration of entire events can be done either through the FBCTF platform or on the command line.

Through the FBCTF Platform:

1. Click the *Controls* tab under the Game Admin panel.
2. Click *Export Full Game* to export your event.
3. Click *Import Full Game* to import your saved event.

Through the Command Line:

1. Backup database by typing `mysqldump -u ctf -p fbctf > backup.sql`
2. Restore database by typing `cat backup.sql | mysql -u ctf -p fbctf`
3. Flush Memcached by typing `echo 'flush_all' | nc localhost 11211`

Note that Memcached should always be flushed after any type of data import.

## How does Default Bonus and Default Bonus Dec work?

The *Default Bonus* is a set number of points awarded to the first team which captures a level. For example, if the Default Bonus is left at the default of 30 points, and a Quiz is worth 100 points, the first team to capture that particular Quiz will receive 130 points.

The *Default Bonus Dec* is how many points will be deducted from the initial Default Bonus for every subsequent team that captures a level. For example, if a Flag is worth 100 points, the Default Bonus is 30 points, and the Default Bonus Dec is 10 points, the first team to capture the Flag in question will receive 130 points. The second team will receive 120 points, and the third team 110 points. Subsequent teams will receive no bonus, and will only get the base 100 points.

## Do Teams take a penalty for incorrectly answering levels?

No. Teams take no penalty for answering levels incorrectly. Only the Default Bonus and Default Bonus Dec alter the number of points a team receives for capturing a level, as described elsewhere.

## How can I mass create and import Levels such as Quizzes and Flags?

The FBCTF platform has built-in import and export functions on the Controls admin page. You can create levels externally using a standardized JSON format, as shown below:

```
{
    "levels": [
        {
            "type": "quiz",
            "title": "Quiz 1",
            "active": true,
            "description": "This is the first quiz",
            "entity_iso_code": "BY",
            "category": "Quiz",
            "points": 100,
            "bonus": 30,
            "bonus_dec": 10,
            "bonus_fix": 30,
            "flag": "Quiz Answer",
            "hint": "This is a hint for the first quiz",
            "penalty": 0
        },
        {
            "type": "flag",
            "title": "Flag 1",
            "active": true,
            "description": "This is the first flag",
            "entity_iso_code": "EG",
            "category": "None",
            "points": 100,
            "bonus": 30,
            "bonus_dec": 10,
            "bonus_fix": 30,
            "flag": "Flag Answer",
            "hint": "This is a hint for the first flag",
            "penalty": 0
        },
        {
            "type": "base",
            "title": "Base 1",
            "active": true,
            "description": "This is the first base",
            "entity_iso_code": "DZ",
            "category": "None",
            "points": 100,
            "bonus": 30,
            "bonus_dec": 10,
            "bonus_fix": 30,
            "flag": "",
            "hint": "This is a hint for the first base",
            "penalty": 0
        }
    ]
}
```
