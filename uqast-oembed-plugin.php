<?php
/*
Plugin Name: uQast Video Embed WordPress oEmbed Plugin
Plugin URI: http://www.uQast.com
Description: A plugin that allows you to embed uQast videos
Version: 0.1
Author: Andy Beard, uQast
Author URI: http://www.uQast.com/
License: GPL
*/
wp_oembed_add_provider( '#http://(www\.)?(uqast)?\.com/.*#i', 'http://www.uqast.com/services/oembed/?url=', true );
?>