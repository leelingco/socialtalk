<?php /* Smarty version 2.6.26, created on 2013-02-24 11:05:23
         compiled from studentpage.tpl */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
<head>
    <meta http-equiv = "Content-Type" content = "text/html; charset = utf-8"/>
    <link rel="shortcut icon" href="<?php echo $this->_tpl_vars['T_FAVICON']; ?>
">
</head>
<script>
var global_sideframe_width = '<?php echo $this->_tpl_vars['T_SIDEFRAME_WIDTH']; ?>
';
</script>

<?php if ($this->_tpl_vars['T_SIDEBAR_MODE'] == 0): ?>
 <frameset framespacing = "0" frameborder = "0" border="no" id = "framesetId" cols = "<?php echo $this->_tpl_vars['T_SIDEFRAME_WIDTH']; ?>
, *">
    <?php if (isset ( $this->_tpl_vars['T_SIDEBAR_URL'] )): ?>
     <frame name = "sideframe" src ="<?php echo $this->_tpl_vars['T_SIDEBAR_URL']; ?>
" scrolling="no"/>
    <?php else: ?>
     <frame name = "sideframe" src ="new_sidebar.php" scrolling="no"/>
    <?php endif; ?>

  <?php if (isset ( $this->_tpl_vars['T_MAIN_URL'] )): ?>
   <frame name = "mainframe" src ="<?php echo $this->_tpl_vars['T_MAIN_URL']; ?>
"/>
  <?php else: ?>
   <?php if ($_GET['message'] && $_GET['message_type']): ?>
    <frame name = "mainframe" src ="student.php?message=<?php echo $_GET['message']; ?>
&message_type=<?php echo $_GET['message_type']; ?>
"/>
   <?php else: ?>
    <frame name = "mainframe" src ="student.php"/>
   <?php endif; ?>
  <?php endif; ?>
 </frameset>
<?php else: ?>

 <frameset framespacing = "0" frameborder = "0" border="no" id = "framesetId" cols = "0, *">
    <frame name = "sideframe" src ="" scrolling="no"/>
  <?php if (isset ( $this->_tpl_vars['T_MAIN_URL'] )): ?>
   <frame name = "mainframe" src ="<?php echo $this->_tpl_vars['T_MAIN_URL']; ?>
"/>
  <?php else: ?>
   <?php if ($_GET['message'] && $_GET['message_type']): ?>
    <frame name = "mainframe" src ="student.php?message=<?php echo $_GET['message']; ?>
&message_type=<?php echo $_GET['message_type']; ?>
"/>
   <?php else: ?>
    <frame name = "mainframe" src ="student.php"/>
   <?php endif; ?>
  <?php endif; ?>
 </frameset>
<?php endif; ?>
</html>