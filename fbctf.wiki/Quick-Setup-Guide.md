## Overview

This guide is intended to help you get the platform up and running with as little effort as possible.

Please note that this guide is to be used with Ubuntu 14.04 LTS as the host operating system.  Other Linux distributions or operating systems are not _supported_ by the quick setup process.

This guide details the quick setup mode which provides a streamlined and consistent build of the platform but offers less flexibility when compared to a custom installation.  If you would prefer to perform a custom installation, please see the [Development Installation Guide](https://github.com/facebook/fbctf/wiki/Installation-Guide,-Development) or [Production Installation Guide](https://github.com/facebook/fbctf/wiki/Installation-Guide,-Production).

The FBCTF platform was designed with flexibility in mind, allowing for different types of installations, depending on the needs of the end user. The FBCTF platform can be installed either in Development Mode, or Production Mode. Development is for testing and agility, and production is for better performance and typically used for live events. Production mode utilizes an HHVM web cache, which speeds up processing.

You will need to select your mode, _production_ or _development_ before proceeding.

## Quick Setup Options

Option | Description
--- | ---
[Direct Installation](#direct-install)|Used when directly installing to the system you are on; this is useful when installing on bare metal, an existing VM, or a cloud-based host.
[Multi-Server Direct Installation](#multi-direct-install)|Used when directly installing the platform with each service on a separate system; this is useful when installing on bare metal systems, existing VMs, or cloud-based hosts.
[Standard Docker Startup](#docker)|Used when running FBCTF as a single docker container.
[Multi-Container Docker Startup](#multi-docker)|Used when running FBCTF on docker with each service hosted in a separate docker container.  This mode should provide better performance but requires additional system resources.
[Standard Vagrant Startup](#vagrant)|Used when running FBCTF as a single vagrant container.
[Multi-Container Vagrant Startup](#multi-vagrant)|Used when running FBCTF on vagrant with each service hosted in a separate vagrant container. This mode should provide better performance but requires additional system resources.

## Direct Installation
<a name="direct-install"></a>
From the system you wish to install the platform, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup install prod`` ****or**** ``quick_setup install dev``

## Multi-Server Direct Installation
<a name="multi-direct-install"></a>
For this setup you will need four systems, one for each service (nginx, hhvm, memcached, and mysql).  It is ****strongly**** recommended that you install each services in the same mode (production or development).  You will also need the replace the relevant IP addresses in the commands specified below.

From the system you intend to use as the MySQL host, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup install_multi_mysql prod`` ****or**** ``quick_setup install_multi_mysql dev``

From the system you intend to use as the Memcached host, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup install_multi_cache prod`` ****or**** ``quick_setup install_multi_cache dev``

From the system you intend to use as the HHVM host, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup install_multi_hhvm prod <IP of MySQL Server> <IP of Memcached Server>`` ****or**** ``quick_setup install_multi_hhvm dev <IP of MySQL Server> <IP of Memcached Server>``

From the system you intend to use as the Nginx host, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup install_multi_nginx prod <IP of HHVM Server>`` ****or**** ``quick_setup install_multi_nginx dev <IP of HHVM Server>``

## Standard Docker Startup
<a name="docker"></a>
From the system you wish to launch the platform, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup start_docker prod`` ****or**** ``quick_setup start_docker dev``

## Multi-Container Docker Startup
<a name="multi-docker"></a>
From the system you wish to launch the platform, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup start_docker_multi prod`` ****or**** ``quick_setup start_docker_multi dev``

## Standard Vagrant Startup
<a name="vagrant"></a>
From the system you wish to launch the platform, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup start_vagrant prod`` ****or**** ``quick_setup start_vagrant dev``

## Multi-Container Vagrant Startup
<a name="multi-vagrant"></a>
From the system you wish to launch the platform, execute the following:
* ``git clone https://github.com/facebook/fbctf``
* ``cd fbctf``
* ``source ./extra/lib.sh``
* ``quick_setup start_vagrant_multi prod`` ****or**** ``quick_setup start_vagrant_multi dev``