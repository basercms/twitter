<?php $bcBaser->js('/twitter/js/twitter_update') ?>
<?php $bcBaser->css('/twitter/css/twitter') ?>
<?php $bcBaser->element('status/'.$statusTemplate, array('plugin'=>'twitter')) ?>
<div id="TwitterUpdateBox" class="corner5">
	<div class="clearfix">
		<?php echo $bcForm->create('Twitter', array('url'=> array('plugin'=>'twitter', 'controller'=>'twitter','action'=>'tinyurl'),'action'=>'tinyurl'), false) ?>
		<span id="TextCounter">0</span>
		<strong>Twitterへ送信</strong>　　<?php echo $bcForm->checkbox('Twitter.tinyurl',array('label'=>'URLを短くする')) ?>　
		<?php $bcBaser->img('/img/ajax-loader-s.gif',array('alt'=>'loding...','id'=>'AjaxLoader','class'=>'display-none')) ?>
		<?php echo $bcForm->end(null, false) ?>
	</div>
	<?php echo $bcForm->create('Twitter', array('url'=> array('plugin'=>'twitter','controller'=>'twitter', 'action'=>'update'), 'action'=>'update'), false) ?>
	<?php echo $bcForm->textarea('Twitter.status',array('cols'=>76)) ?>
	<div class="submit" style="display:inline;"><?php echo $bcForm->end(array('lable'=>'ツイート','div'=>false,'id'=>'TwitterUpdateSubmit', 'class' => 'button'), false) ?></div>
	<div id="ResultMessage" style="display:none">&nbsp;</div>
</div>