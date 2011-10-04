<?php /* Smarty version 2.6.26, created on 2011-09-01 09:27:27
         compiled from CRM/Block/Dashboard.tpl */ ?>
<div class="block-civicrm">
<?php $_from = $this->_tpl_vars['dashboardLinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dash']):
?>
<a accesskey="<?php echo $this->_tpl_vars['dash']['key']; ?>
" href="<?php echo $this->_tpl_vars['dash']['url']; ?>
"><?php echo $this->_tpl_vars['dash']['title']; ?>
</a>
<?php endforeach; endif; unset($_from); ?>
</div>