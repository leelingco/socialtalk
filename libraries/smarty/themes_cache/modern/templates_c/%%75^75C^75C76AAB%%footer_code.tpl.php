<?php /* Smarty version 2.6.26, created on 2013-02-23 23:13:37
         compiled from includes/footer_code.tpl */ ?>
<?php if ($this->_tpl_vars['T_THEME_SETTINGS']->options['show_footer'] && $this->_tpl_vars['T_CONFIGURATION']['show_footer']): ?>
 <?php if ($this->_tpl_vars['T_CONFIGURATION']['additional_footer']): ?>
  <?php echo $this->_tpl_vars['T_CONFIGURATION']['additional_footer']; ?>

 <?php else: ?>
 <?php endif; ?>
<?php endif; ?>