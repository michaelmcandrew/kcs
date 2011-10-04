<?php /* Smarty version 2.6.26, created on 2011-06-07 10:00:21
         compiled from CRM/common/stateCountry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'crmURL', 'CRM/common/stateCountry.tpl', 36, false),)), $this); ?>
<?php if ($this->_tpl_vars['config']->stateCountryMap): ?>
<script language="JavaScript" type="text/javascript">
<?php $_from = $this->_tpl_vars['config']->stateCountryMap; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['stateCountryMap']):
?>
<?php if ($this->_tpl_vars['stateCountryMap']['country'] && $this->_tpl_vars['stateCountryMap']['state_province']): ?>
<?php echo '
cj(function()
{
'; ?>

        countryID       = "#<?php echo $this->_tpl_vars['stateCountryMap']['country']; ?>
"
	    stateProvinceID = "#<?php echo $this->_tpl_vars['stateCountryMap']['state_province']; ?>
"
        callbackURL     = "<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/jqState','h' => 0), $this);?>
"
<?php echo '
	cj(countryID).chainSelect(stateProvinceID, callbackURL, null );
});
'; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['stateCountryMap']['state_province'] && $this->_tpl_vars['stateCountryMap']['county']): ?>
<?php echo '
cj(function()
{
'; ?>

	    stateProvinceID = "#<?php echo $this->_tpl_vars['stateCountryMap']['state_province']; ?>
"
        countyID       = "#<?php echo $this->_tpl_vars['stateCountryMap']['county']; ?>
"
        callbackURL     = "<?php echo CRM_Utils_System::crmURL(array('p' => 'civicrm/ajax/jqCounty','h' => 0), $this);?>
"
<?php echo '
	cj(stateProvinceID).chainSelect(countyID, callbackURL, null );
});
'; ?>

<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</script>
<?php endif; ?>