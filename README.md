# FBCTF [![Build Status](https://travis-ci.org/ethanaldrich9986/ctf.svg?branch=master)]

## What is EACTF?

The Ethan Aldrich CTF is a platform to host Jeopardy and “King of the Hill” style Capture the Flag competitions.
It is based off of and expanded upon Facebook's FBCTF located [here] (https://github.com/facebook/fbctf)

<div align="center"><img src="screencapture.gif" /></div>

## How do I use FBCTF?

* Organize a competition. This can be done with as few as two participants, all the way up to several hundred. The participants can be physically present, active online, or a combination of the two.
* Follow setup instructions below to spin up platform infrastructure.
* Enter challenges into admin page
* Have participants register as teams
* Enjoy!

For more information, see the [Admin Guide](https://github.com/ethanaldrich9986/ctf/wiki/Admin-Guide)

# Installation

The FBCTF platform was designed with flexibility in mind, allowing for different types of installations depending on the needs of the end user. The FBCTF platform can be installed either in Development Mode, or Production Mode.

[Quick Setup Guide](https://github.com/ethanaldrich9986/ctf/wiki/Quick-Setup-Guide) (_Recommended Installation_)

The [Quick Setup Guide](https://github.com/ethanaldrich9986/ctf/wiki/Quick-Setup-Guide) details the quick setup mode which provides a streamlined and consistent build of the platform but offers less flexibility when compared to a custom installation. If you would prefer to perform a custom installation, please see the [Development Installation Guide](https://github.com/facebook/fbctf/wiki/Installation-Guide,-Development) or [Production Installation Guide](https://github.com/facebook/fbctf/wiki/Installation-Guide,-Production).

## Reporting an Issue

First, ensure the issue was not already reported by doing a search. If you cannot find an existing issue, create a new issue. Make the title and description as clear as possible, and include a test case or screenshot to reproduce or illustrate the problem if possible.

If you have issues installing the platform, please provide the entire output of the provision script in your issue. Also include any error messages you find in `/var/log/hhvm/error.log`.

## Contribute

You’ve used it, now you want to make it better? Awesome! Pull requests are welcome! Click [here](https://github.com/ethanaldrich9986/ctf/blob/master/CONTRIBUTING.md) to find out how to contribute.

If you find a security vulnerability in the platform, please submit it via the process outlined on that page and do not file a public issue.

## Have more questions?

Check out the [wiki pages](https://github.com/ethanaldrich9986/ctf/wiki) attached to this repo.