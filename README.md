#Keywords, Unique Random Charset & Length

Plugin for YOURLS

##Description

Based off ozh, peterberbec, giveforward and LudoBoggio's work. And not forget to ivanakimov, the writer of Hashids. 
https://github.com/ivanakimov/hashids.php
Credit to all of them.

Overrides default behavior allowing: a custom minimum link length and links are random. Does not use the sequential incrementing. The plugin generates unique keyword based on next_id. It does not mess with existing links or custom links, only new,unique and randomly generated links. Keyword minimum length and character set are user-controlled via the admin interface.

##Installation

1. In /user/plugins, create a new folder named key_char_len
2. Drop these files in that directory.
3. Go to the Plugins administration page ( eg http://sho.rt/admin/plugins.php ) and activate the plugin.
4. Change value of salt ($salt) and minimum character ($id) in /user/plugins/Hashids-Yourls/plugin.php

##License YOURLS' license, aka "Do whatever the hell you want with it".
