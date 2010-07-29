<?php
/* SVN FILE: $Id$ */
/**
 * Twitterタイムライン読み込み
 *
 * PHP versions 4 and 5
 *
 * BaserCMS :  Based Website Development Project <http://basercms.net>
 * Copyright 2008 - 2010, Catchup, Inc.
 *								9-5 nagao 3-chome, fukuoka-shi
 *								fukuoka, Japan 814-0123
 *
 * @copyright		Copyright 2008 - 2010, Catchup, Inc.
 * @link			http://basercms.net BaserCMS Project
 * @package			twitter.views
 * @since			Baser v 0.1.0
 * @version			$Revision$
 * @modifiedby		$LastChangedBy$
 * @lastmodified	$Date$
 * @license			http://basercms.net/license/index.html
 */
$TwitterConfig = ClassRegistry::init('Twitter.TwitterConfig');
$config = $TwitterConfig->findExpanded();
$baser->js('/twitter/js/jquery.tweet',true);
?>

<script type='text/javascript'>
$(document).ready(function(){
	var username = '<?php echo $config['username'] ?>';
	var count = '<?php echo $config['view_num'] ?>';
	if(!username){
		$('.tweet').hide();
		return;
	}
	if(!count){
		count = 3;
	}
	$(".tweet").tweet({
		username: username,
		join_text: "auto",
		avatar_size: 48,
		count: count,
		intro_text: '<h2>Twitter <a href="http://twitter.com/'+username+'">@'+username+'</a></h2>',
		auto_join_text_default: "",
		auto_join_text_reply: "",
		loading_text: "loading tweets..."
	});
});
</script>

<div class="side-navi">
	<div class="tweet"></div>
</div>
