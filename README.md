# Keywords, Unique Random Charset & Length

Plugin for YOURLS to create a random URL string, with a minumim length

## Description

This is a fork of afahmiparidin's project at https://github.com/afahmiparidin/Hashids-Yourls. The changes were submitted to him as a full request, but never accepted.

His original description:

Based off ozh, peterberbec, giveforward and LudoBoggio's work. And not forget to ivanakimov, the writer of Hashids. 
https://github.com/ivanakimov/hashids.php
Credit to all of them.

Overrides default behavior allowing: a custom minimum link length and links are random. Does not use the sequential incrementing. The plugin generates unique keyword based on next_id. It does not mess with existing links or custom links, only new,unique and randomly generated links. Keyword minimum length and character set are user-controlled via the admin interface.

## Customization
You need to add two global parameters to your YOURLS configuration:

* HASHID_SALT
  a "hash value" individual to your installation. This should be a random string with at least 12 characters.
* HASHID_MINLEN
  the minimum length of the generated URL element.

## Installation

* place the files in "plugins/Hashids-Yourls"
* Go to the Plugins administration page ( eg http://sho.rt/admin/plugins.php ) and activate the plugin.
* Change value of salt ($salt) and minimum character ($id) in /user/plugins/Hashids-Yourls/plugin.php

## License
YOURLS' license, aka "Do whatever the hell you want with it".
