<?php /* Smarty version 2.6.26, created on 2012-12-20 02:18:07
         compiled from install/install.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'eF_template_printMessageBlock', 'install/install.tpl', 7, false),array('function', 'eF_template_printBlock', 'install/install.tpl', 30, false),array('function', 'cycle', 'install/install.tpl', 233, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<?php $this->assign('path_title', "<a href = '".($_SERVER['PHP_SELF'])."'>Start</a>"); ?>
<?php if ($_GET['upgrade']): ?><?php $this->assign('upgrade', "&upgrade=1"); ?><?php endif; ?>
<?php ob_start(); ?>
    <?php if ($this->_tpl_vars['T_MESSAGE']): ?>
      <?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?>

    <?php endif; ?>

 <?php if ($_GET['step'] == 1): ?>
     <?php if ($this->_tpl_vars['T_CONFIGURATION_EXISTS'] && ! $_GET['upgrade'] && $_GET['step'] == 1): ?>
      <?php echo smarty_function_eF_template_printMessageBlock(array('content' => "An existing configuration file was found, which probably means an existing installation is already in place. If you continue, it will be overwritten. Perhaps you prefer to <a href = '".($_SERVER['PHP_SELF'])."?step=".($_GET['step'])."&upgrade=1'>upgrade</a>?",'type' => 'failure'), $this);?>

      <?php endif; ?>
  <?php ob_start(); ?>
  <?php $this->assign('path_title', ($this->_tpl_vars['path_title'])."&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?step=1".($this->_tpl_vars['upgrade'])."'>Step 1/2</a>"); ?>
  <div class = "headerTools">
   <span>
    <img src = "images/16x16/php.png" alt = "phpinfo" title = "phpinfo"></img>
    <a href = "install/phpinfo.php" target = "new">Check current PHP settings</a>
   </span>
   <span>
    <img src = "images/16x16/flag_<?php if ($_SESSION['error_level'] == 'warning'): ?>yellow<?php elseif ($_SESSION['error_level'] == 'all'): ?>red<?php else: ?>green<?php endif; ?>.png" alt = "error reporting level" title = "error reporting level"></img>
    <a href = "javascript:void(0)" onclick = "setErrorReporting(this)" title = "error reporting level">Error reporting: <?php if ($_SESSION['error_level'] == 'warning'): ?>Warning<?php elseif ($_SESSION['error_level'] == 'all'): ?>All<?php else: ?>Off<?php endif; ?></a>
   </span>
  </div>
  <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/check_status.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

  <div style = "text-align:right"><input type = "submit" name = "next_step" value = "Continue &raquo;" onclick = "<?php if ($this->_tpl_vars['T_MISSING_SETTINGS']): ?>if (confirm('Some mandatory elements were not found. Are you sure you want to continue?'))<?php endif; ?>window.location = '<?php echo $_SERVER['PHP_SELF']; ?>
?step=2<?php if ($_GET['upgrade']): ?>&upgrade=1<?php endif; ?>'" class = "flatButton <?php if ($this->_tpl_vars['T_MISSING_SETTINGS']): ?>inactiveElement<?php endif; ?>"></div>
  <?php $this->_smarty_vars['capture']['step_1_code'] = ob_get_contents(); ob_end_clean(); ?>
  <?php echo smarty_function_eF_template_printBlock(array('title' => 'Efront Installation Wizard','content' => $this->_smarty_vars['capture']['step_1_code']), $this);?>

  <script>
  <?php echo '
  function setErrorReporting(el) {
   el.previous().src = \'themes/default/images/others/progress1.gif\';
   parameters = {set_error_level: 1, method: \'get\'};
   var url = window.location.toString();
   ajaxRequest(el, url, parameters, onSetErrorReporting);
  }
  function onSetErrorReporting(el, response) {
   switch (response) {
   case \'warning\':
    el.previous().src = \'images/16x16/flag_yellow.png\';
    el.update(\'Error reporting: Warnings\');
    break;
   case \'all\':
    el.previous().src = \'images/16x16/flag_red.png\';
    el.update(\'Error reporting: All\');
    break;
   default:
    el.previous().src = \'images/16x16/flag_green.png\';
    el.update(\'Error reporting: Off\');
    break;
   }
  }
  '; ?>

  </script>
 <?php elseif ($_GET['step'] == 2): ?>
   <?php $this->assign('path_title', ($this->_tpl_vars['path_title'])."&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?step=1".($this->_tpl_vars['upgrade'])."'>Step 1/2</a>&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?step=2".($this->_tpl_vars['upgrade'])."'>Step 2/2</a>"); ?>

  <?php ob_start(); ?>
            <?php echo $this->_tpl_vars['T_DATABASE_FORM']['javascript']; ?>

            <form <?php echo $this->_tpl_vars['T_DATABASE_FORM']['attributes']; ?>
>
                <?php echo $this->_tpl_vars['T_DATABASE_FORM']['hidden']; ?>

                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Database host:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_host']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['db_host']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_host']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Database user:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_user']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['db_user']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_user']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Database password:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_password']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['db_password']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_password']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Database name:&nbsp;</div>
 <?php if ($_GET['upgrade']): ?>
                  <div class = "explanation">Upgrading to a different database is safer (leaving old data intact) but may be very slow</div>
 <?php endif; ?>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_name']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['db_name']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_name']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow" style = "display:none">
                 <div class = "formLabel">
                  <div class = "header">Database prefix:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_prefix']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['db_prefix']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['db_prefix']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
 <?php if (! $_GET['upgrade']): ?>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Administrator username:&nbsp;</div>
                  <div class = "explanation"><?php echo @_ONLYALLOWEDCHARACTERSLOGIN; ?>
</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['admin_name']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['admin_name']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['admin_name']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Administrator password:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['admin_password']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['admin_password']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['admin_password']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Administrator email:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['admin_email']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['admin_email']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['admin_email']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header"><span style = "vertical-align:middle">Create default lessons and users:&nbsp;</span><?php echo $this->_tpl_vars['T_DATABASE_FORM']['default_data']['html']; ?>
</div>
                 </div>
                </div>
 <?php else: ?>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">Upgrade from database:&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div class = "field"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['old_db_name']['html']; ?>
</div>
                  <?php if ($this->_tpl_vars['T_DATABASE_FORM']['old_db_name']['error']): ?><div class = "error"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['old_db_name']['error']; ?>
</div><?php endif; ?>
                 </div>
                </div>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header"><span style = "vertical-align:middle">Backup database:&nbsp;</span><?php echo $this->_tpl_vars['T_DATABASE_FORM']['backup']['html']; ?>
</div>
                 </div>
                </div>
 <?php endif; ?>
                <div class = "formRow">
                 <div class = "formLabel">
                  <div class = "header">&nbsp;</div>
                 </div>
                 <div class = "formElement">
                  <div><?php echo $this->_tpl_vars['T_DATABASE_FORM']['submit_form']['html']; ?>
 <?php if ($this->_tpl_vars['T_FAILED_TABLES']): ?><?php echo $this->_tpl_vars['T_DATABASE_FORM']['delete_form']['html']; ?>
<?php endif; ?></div>
                 </div>
                </div>
                <div>&nbsp;</div>
                <div class = "formRequired"><?php echo $this->_tpl_vars['T_DATABASE_FORM']['requirednote']; ?>
</div>
            </form>
  <?php $this->_smarty_vars['capture']['step_2_code'] = ob_get_contents(); ob_end_clean(); ?>
  <?php echo smarty_function_eF_template_printBlock(array('title' => 'Efront Installation Wizard','content' => $this->_smarty_vars['capture']['step_2_code']), $this);?>

 <?php elseif ($_GET['restore']): ?>
  <?php $this->assign('path_title', ($this->_tpl_vars['path_title'])."&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?restore=1'>Emergency restore</a>"); ?>
  <table style = "width:100%">
   <tr class = "topTitle">
    <td>Name</td>
    <td class = "centerAlign">Operations</td></tr>
  <?php $_from = $this->_tpl_vars['T_BACKUP_FILES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['backups_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['backups_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['file']):
        $this->_foreach['backups_list']['iteration']++;
?>
   <tr class = "defaultRowHeight <?php echo smarty_function_cycle(array('values' => "oddRowColor, evenRowColor"), $this);?>
">
    <td><?php echo $this->_tpl_vars['file']; ?>
</td>
    <td class = "centerAlign"><img class = "ajaxHandle" src = "images/16x16/undo.png" alt = "Restore" title = "Restore" onclick = "if (confirm('This operation is irreversible! Are you sure?')) location = location+'&file=<?php echo $this->_tpl_vars['file']; ?>
';"></td>
   </tr>
  <?php endforeach; else: ?>
   <tr class = "oddRowColor defaultRowHeight"><td class = "emptyCategory" colspan="2">No data found</td></tr>
  <?php endif; unset($_from); ?>
  </table>
 <?php elseif ($_GET['finish']): ?>
  <?php ob_start(); ?>
  <?php $this->assign('path_title', ($this->_tpl_vars['path_title'])."&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?step=1".($this->_tpl_vars['upgrade'])."'>Step 1/2</a>&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?step=2".($this->_tpl_vars['upgrade'])."'>Step 2/2</a>&nbsp;&raquo;&nbsp;<a href = '".($_SERVER['PHP_SELF'])."?finish=1".($this->_tpl_vars['upgrade'])."'>Finish</a>"); ?>
  <div style = "text-align:center;font-size:14px;">
   <p>Congratulations!</p>
   <p><img src = "images/others/success.png" alt = "Finished" title = "Finished Installation"></p>
   <p>eFront installed succesfully!</p>
   <p>Click <a href = "index.php?delete_install=1" style = "font-weight:bold;text-decoration:underline">here</a> to delete the installation directory automatically and navigate to the system <a href = "index.php">index page</a>.</p>
  </div>
  <?php $this->_smarty_vars['capture']['finish_code'] = ob_get_contents(); ob_end_clean(); ?>
  <?php echo smarty_function_eF_template_printBlock(array('title' => 'Efront Installation Wizard','content' => $this->_smarty_vars['capture']['finish_code']), $this);?>

 <?php else: ?>
  <?php ob_start(); ?>
  <div style = "text-align:center;font-size:14px;">
   <p>Welcome to eFront's installation wizard! Click on a button below to start.</p>
   <table style = "margin:auto;">
    <tr><td style = "padding:20px 10px 0px 10px"><img src = "images/others/start.png" alt = "Install" title = "Start installation wizard" style = "cursor:pointer;" onclick = "window.location='<?php echo $_SERVER['PHP_SELF']; ?>
?step=1'"></td>
    <?php if ($this->_tpl_vars['T_CONFIGURATION_EXISTS']): ?>
     <td style = "padding:20px 10px 0px 10px"><img src = "images/others/upgrade.png" alt = "Upgrade" title = "Start upgrade wizard" style = "cursor:pointer;" onclick = "window.location='<?php echo $_SERVER['PHP_SELF']; ?>
?step=1&upgrade=1'"></td>
    <?php endif; ?>
    </tr>
    <tr><td style = "padding:0px 10px 20px 10px">New installation</td>
    <?php if ($this->_tpl_vars['T_CONFIGURATION_EXISTS']): ?>
     <td style = "padding:0px 10px 20px 10px;">Upgrade existing installation</td>
    <?php endif; ?>
    </tr>
   </table>
   <p>Need help? Check the <a style = "color:blue" target = "new" href = "http://docs.efrontlearning.net/">documentation</a> or ask the <a style = "color:blue" target = "new" href = "http://forum.efrontlearning.net/">support forums</a>!</p>
  </div>
  <?php $this->_smarty_vars['capture']['start_code'] = ob_get_contents(); ob_end_clean(); ?>
  <?php echo smarty_function_eF_template_printBlock(array('title' => 'Efront Installation Wizard','content' => $this->_smarty_vars['capture']['start_code'],'options' => $this->_tpl_vars['T_INSTALLATION_OPTIONS']), $this);?>

 <?php endif; ?>
<?php $this->_smarty_vars['capture']['center_code'] = ob_get_contents(); ob_end_clean(); ?>

<?php ob_start(); ?>
  <div id = "logo">
   <a href = "index.php"><img src = "themes/modern/images/logo/logo.png" title = "eFront" alt = "eFront" border = "0"></a>
  </div>
  <div id = "path">
   <div id = "path_title"><?php echo $this->_tpl_vars['path_title']; ?>
</div>
   <div id = "path_language"></div>
  </div>
<?php $this->_smarty_vars['capture']['header_code'] = ob_get_contents(); ob_end_clean(); ?>
<?php ob_start(); ?>
  <a href = "www.efrontlearning.net">eFront</a> version <?php echo @G_VERSION_NUM; ?>
 build <?php echo @G_BUILD; ?>
 &bull; <?php echo $this->_tpl_vars['T_VERSION_TYPE']; ?>
 Edition
<?php $this->_smarty_vars['capture']['footer_code'] = ob_get_contents(); ob_end_clean(); ?>

<table class = "pageLayout simple">
 <tr><td class = "header" colspan = "3"><?php echo $this->_smarty_vars['capture']['header_code']; ?>
</td></tr>
 <tr><td class = "left"></td>
  <td class = "center" style = "vertical-align:top;padding-top:50px"><?php echo $this->_smarty_vars['capture']['center_code']; ?>
</td>
  <td class = "right"></td></tr>
 <tr><td class = "footer" colspan = "3"><?php echo $this->_smarty_vars['capture']['footer_code']; ?>
</td></tr>
</table>

<div id = "error_details" style = "display:none"><pre><?php echo $this->_tpl_vars['T_EXCEPTION_TRACE']; ?>
</pre></div>
<script>if (document.getElementById('dimmer') && document.getElementById('dimmer').style.display != 'none') eF_js_showDivPopup();</script>
<table id = "popup_table" class = "divPopup" style = "display:none;">
    <tr class = "defaultRowHeight">
        <td class = "topTitle" id = "popup_title"></td>
        <td class = "topTitle" style = "width:1%;"><img src = "images/16x16/close.png" alt = "Close" name = "" id = "popup_close" title = "Close" onclick = "eF_js_showDivPopup('', '', this.name)"/>
    </td></tr>
    <tr><td colspan = "2" id = "popup_data" style = "vertical-align:top;"></td></tr>
    <tr><td colspan = "2" id = "frame_data" style = "width:100%;height:100%">
        <iframe name = "POPUP_FRAME" id = "popup_frame" src = "about:blank" style = "border-width:0px;width:100%;height:100%;padding:0px 0px 0px 0px">Sorry, but your browser needs to support iframes to see this</iframe>
    </td></tr>
</table>

<div id="dimmer" class = "dimmerDiv" style="display:none;"></div>


<script type = "text/javascript" src = "js/scripts.php?load=<?php echo $this->_tpl_vars['T_HEADER_LOAD_SCRIPTS']; ?>
"> </script>
</body>
</html>