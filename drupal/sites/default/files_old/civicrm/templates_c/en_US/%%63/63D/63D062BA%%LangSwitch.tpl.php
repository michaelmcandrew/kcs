<?php /* Smarty version 2.6.26, created on 2011-06-06 16:12:05
         compiled from CRM/Block/LangSwitch.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', 'CRM/Block/LangSwitch.tpl', 26, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['langSwitch'] ) && count($this->_tpl_vars['langSwitch']) > 1): ?>
  <form action="#">
    <select name="lcMessages" onchange="window.location='<?php echo $_SERVER['REQUEST_URI']; ?>
<?php if (strpos ( $_SERVER['REQUEST_URI'] , '?' ) === false): ?>?<?php else: ?>&<?php endif; ?>lcMessages='+this.value">
      <?php $_from = $this->_tpl_vars['langSwitch']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['locale'] => $this->_tpl_vars['language']):
?>
        <option value="<?php echo $this->_tpl_vars['locale']; ?>
" <?php if ($this->_tpl_vars['locale'] == $this->_tpl_vars['tsLocale']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['language']; ?>
</option>
      <?php endforeach; endif; unset($_from); ?>
    </select>
  </form>
<?php endif; ?>