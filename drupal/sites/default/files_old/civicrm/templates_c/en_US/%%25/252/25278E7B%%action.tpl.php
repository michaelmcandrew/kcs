<?php /* Smarty version 2.6.26, created on 2011-06-06 16:12:05
         compiled from CRM/common/action.tpl */ ?>
<?php echo '
<script type="text/javascript">
 cj('; ?>
<?php if ($this->_tpl_vars['isSnippet']): ?>document<?php else: ?>'#crm-container'<?php endif; ?><?php echo ')
 	.bind(\'click\', function(event) {
    if (cj(event.target).is(\'.btn-slide\')) {
      cj(\'.panel\').css(\'display\', \'none\');
      cj(event.target).children().show();
      cj(\'.btn-slide-active\').removeClass(\'btn-slide-active\');	
      cj(event.target).addClass(\'btn-slide-active\');
    } else {
    	cj(\'.btn-slide .panel\').hide();
    	cj(\'.btn-slide-active\').removeClass(\'btn-slide-active\');	
	} 
  });
</script>
'; ?>