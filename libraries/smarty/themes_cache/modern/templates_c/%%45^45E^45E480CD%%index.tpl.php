<?php /* Smarty version 2.6.26, created on 2012-12-18 23:04:12
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'cat', 'index.tpl', 88, false),array('modifier', 'basename', 'index.tpl', 285, false),array('modifier', 'replace', 'index.tpl', 285, false),array('function', 'eF_template_printBlock', 'index.tpl', 90, false),array('function', 'eF_template_printMessageBlock', 'index.tpl', 107, false),array('function', 'eF_template_printForm', 'index.tpl', 222, false),array('insert', 'customBlock', 'index.tpl', 92, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php echo ''; ?><?php $this->assign('title', "<a class='titleLink' href = '".($_SERVER['PHP_SELF'])."'>".(@_STARTPAGE)."</a>"); ?><?php echo ''; ?><?php if ($_GET['ctg'] == 'contact'): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/contact.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_contact_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'signup' && $this->_tpl_vars['T_CONFIGURATION']['signup']): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/signup.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_signup_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'reset_pwd'): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/reset_pwd.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_reset_pwd_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'expired'): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/expired.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_session_expired_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'lesson_info' && $this->_tpl_vars['T_CONFIGURATION']['lessons_directory'] == 1): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/lessons_info.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_lesson_info_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'lessons'): ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'login'): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=login'>".(@_LOGINENTRANCE)."</a>"); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'checker'): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/checker.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_checker_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/links.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_links_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/news.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_news_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_login_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/online_users.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_online_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/search.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_search_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/checker.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_checker_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_CONFIGURATION']['lessons_directory'] == 1): ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo $this->_tpl_vars['T_DIRECTIONS_TREE']; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_lessons_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/cart.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_selectedLessons_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_POSITIONS']['leftList'] || ! $this->_tpl_vars['T_POSITIONS']): ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['T_POSITIONS']['leftList'] )): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['T_POSITIONS']['leftList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['left_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['left_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['left_list']['iteration']++;
?><?php echo ''; ?><?php $this->assign('capture_name', ((is_array($_tmp=((is_array($_tmp='t_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_code') : smarty_modifier_cat($_tmp, '_code'))); ?><?php echo ''; ?><?php if ($this->_smarty_vars['capture'][$this->_tpl_vars['capture_name']]): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['title'],'content' => $this->_smarty_vars['capture'][$this->_tpl_vars['capture_name']],'image' => ($this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['image'])), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'customBlock', 'file' => ($this->_tpl_vars['T_CUSTOM_BLOCKS'][$this->_tpl_vars['item']]['name']).".tpl", 'assign' => 'content')), $this); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['title'],'content' => $this->_tpl_vars['content'],'image' => ($this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['image'])), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_LOGINENTRANCE,'content' => $this->_smarty_vars['capture']['t_login_code'],'image' => $this->_tpl_vars['T_BLOCKS']['login']['image']), $this);?><?php echo ''; ?><?php if ($this->_tpl_vars['T_CONFIGURATION']['disable_online_users'] != 1): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_USERSONLINE,'content' => $this->_smarty_vars['capture']['t_online_code'],'image' => $this->_tpl_vars['T_BLOCKS']['online']['image']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['left_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_MESSAGE'] && ! $this->_tpl_vars['T_FACEBOOK_ACCOUNT_MERGE_POPUP']): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($_GET['ctg'] == 'contact'): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=contact'>".(@_CONTACTUS)."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_CONTACTUS,'content' => $this->_smarty_vars['capture']['t_contact_code'],'image' => "32x32/mail.png"), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'signup' && $this->_tpl_vars['T_CONFIGURATION']['signup']): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=signup'>".(@_SIGNUP)."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_REGISTERANEWACCOUNT,'content' => $this->_smarty_vars['capture']['t_signup_code'],'image' => "32x32/user.png"), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'checker'): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=checker'>".(@_OPTIONSCHECKER)."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_OPTIONSCHECKER,'content' => $this->_smarty_vars['capture']['t_checker_code'],'image' => "32x32/success.png"), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'reset_pwd'): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=reset_pwd'>".(@_RESETPASSWORD)."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_RESETPASSWORD,'content' => $this->_smarty_vars['capture']['t_reset_pwd_code'],'image' => "32x32/exclamation.png"), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'expired'): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=expired'>".(@_SESSIONEXPIRED)."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_SESSIONEXPIRED,'content' => $this->_smarty_vars['capture']['t_session_expired_code'],'image' => "32x32/exclamation.png"), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'lessons' && $this->_tpl_vars['T_CONFIGURATION']['lessons_directory'] == 1): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=lessons'>".(@_COURSES)."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_COURSES,'content' => $this->_smarty_vars['capture']['t_lessons_code'],'image' => $this->_tpl_vars['T_BLOCKS']['lessons']['image']), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'lesson_info' && $this->_tpl_vars['T_CONFIGURATION']['lessons_directory'] == 1): ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_LESSON_INFO']): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=lessons'>".(@_COURSES)."</a><span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=lesson_info&lessons_ID=".($this->_tpl_vars['T_LESSON']->lesson['id'])."&course=".($this->_tpl_vars['T_COURSE']->course['id'])."'>".(@_INFOFORLESSON).": &quot;".($this->_tpl_vars['T_LESSON']->lesson['name'])."&quot;</a>"); ?><?php echo ''; ?><?php $this->assign('lesson_title', (@_INFORMATIONFORLESSON)." <span class = 'innerTableName'>&quot;".($this->_tpl_vars['T_LESSON']->lesson['name'])."&quot;</span>"); ?><?php echo ''; ?><?php elseif ($this->_tpl_vars['T_COURSE_INFO']): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=lessons'>".(@_COURSES)."</a><span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=lesson_info&courses_ID=".($this->_tpl_vars['T_COURSE']->course['id'])."'>".(@_INFOFORCOURSE).": &quot;".($this->_tpl_vars['T_COURSE']->course['name'])."&quot;</a>"); ?><?php echo ''; ?><?php $this->assign('lesson_title', (@_INFORMATIONFORCOURSE)." <span class = 'innerTableName'>&quot;".($this->_tpl_vars['T_COURSE']->course['name'])."&quot;</span>"); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['lesson_title'],'content' => $this->_smarty_vars['capture']['t_lesson_info_code'],'image' => "32x32/information.png"), $this);?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'login'): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_LOGINENTRANCE,'content' => $this->_smarty_vars['capture']['t_login_code'],'image' => "32x32/keys.png"), $this);?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php elseif (isset ( $_GET['ctg'] ) && $this->_tpl_vars['T_POSITIONS']['enabled'][$_GET['ctg']]): ?><?php echo ''; ?><?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'customBlock', 'file' => ($this->_tpl_vars['T_CUSTOM_BLOCKS'][$_GET['ctg']]['name']).".tpl", 'assign' => 'content')), $this); ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=".($_GET['ctg'])."'>".($this->_tpl_vars['T_CUSTOM_BLOCKS'][$_GET['ctg']]['title'])."</a>"); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_CUSTOM_BLOCKS'][$_GET['ctg']]['title'],'content' => $this->_tpl_vars['content'],'image' => "32x32/generic.png"), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['T_POSITIONS']['centerList'] )): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['T_POSITIONS']['centerList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['center_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['center_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['center_list']['iteration']++;
?><?php echo ''; ?><?php $this->assign('capture_name', ((is_array($_tmp=((is_array($_tmp='t_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_code') : smarty_modifier_cat($_tmp, '_code'))); ?><?php echo ''; ?><?php if ($this->_smarty_vars['capture'][$this->_tpl_vars['capture_name']]): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['title'],'content' => $this->_smarty_vars['capture'][$this->_tpl_vars['capture_name']],'image' => ($this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['image'])), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'customBlock', 'file' => ($this->_tpl_vars['T_CUSTOM_BLOCKS'][$this->_tpl_vars['item']]['name']).".tpl", 'assign' => 'content')), $this); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['title'],'content' => $this->_tpl_vars['content'],'image' => ($this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['image'])), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_CONFIGURATION']['lessons_directory'] == 1): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_COURSES,'content' => $this->_smarty_vars['capture']['t_lessons_code'],'image' => $this->_tpl_vars['T_BLOCKS']['lessons']['image']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['center_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_POSITIONS']['rightList'] || ! $this->_tpl_vars['T_POSITIONS']): ?><?php echo ''; ?><?php if (isset ( $this->_tpl_vars['T_POSITIONS']['rightList'] )): ?><?php echo ''; ?><?php $_from = $this->_tpl_vars['T_POSITIONS']['rightList']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['right_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['right_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['right_list']['iteration']++;
?><?php echo ''; ?><?php $this->assign('capture_name', ((is_array($_tmp=((is_array($_tmp='t_')) ? $this->_run_mod_handler('cat', true, $_tmp, $this->_tpl_vars['item']) : smarty_modifier_cat($_tmp, $this->_tpl_vars['item'])))) ? $this->_run_mod_handler('cat', true, $_tmp, '_code') : smarty_modifier_cat($_tmp, '_code'))); ?><?php echo ''; ?><?php if ($this->_smarty_vars['capture'][$this->_tpl_vars['capture_name']]): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['title'],'content' => $this->_smarty_vars['capture'][$this->_tpl_vars['capture_name']],'image' => ($this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['image'])), $this);?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php require_once(SMARTY_CORE_DIR . 'core.run_insert_handler.php');
echo smarty_core_run_insert_handler(array('args' => array('name' => 'customBlock', 'file' => ($this->_tpl_vars['T_CUSTOM_BLOCKS'][$this->_tpl_vars['item']]['name']).".tpl", 'assign' => 'content')), $this); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => $this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['title'],'content' => $this->_tpl_vars['content'],'image' => ($this->_tpl_vars['T_BLOCKS'][$this->_tpl_vars['item']]['image'])), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endforeach; endif; unset($_from); ?><?php echo ''; ?><?php else: ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_CONFIGURATION']['disable_news'] != 1): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_SYSTEMNEWS,'content' => $this->_smarty_vars['capture']['t_news_code'],'image' => $this->_tpl_vars['T_BLOCKS']['news']['image']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_CONFIGURATION']['lessons_directory'] == 1): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_SELECTEDLESSONS,'content' => $this->_smarty_vars['capture']['t_selectedLessons_code'],'image' => $this->_tpl_vars['T_BLOCKS']['selectedLessons']['image']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['right_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo ''; ?><?php if (! $this->_tpl_vars['layoutClass'] && $this->_tpl_vars['T_POSITIONS']['layout'] == 'left'): ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideRight'); ?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['layoutClass'] && $this->_tpl_vars['T_POSITIONS']['layout'] == 'right'): ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideLeft'); ?><?php echo ''; ?><?php elseif (! $this->_tpl_vars['layoutClass'] && $this->_tpl_vars['T_POSITIONS']['layout'] == 'simple'): ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($_SESSION['login_mode'] == 1 || $_GET['login_mode'] == 1): ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php endif; ?><?php echo ' '; ?><?php echo ''; ?><?php if ($_GET['ctg'] == 'agreement' && $_SESSION['s_login']): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])."<span>&nbsp;&raquo;&nbsp;</span><a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=agreement'>".(@_LICENSENOTE)."</a>"); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_MESSAGE'] && ! $this->_tpl_vars['T_FACEBOOK_ACCOUNT_MERGE_POPUP']): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php ob_start(); ?><?php echo '<div class = "license">'; ?><?php echo $this->_tpl_vars['T_CONFIGURATION']['license_note']; ?><?php echo '</div><div class = "licenseHandles">'; ?><?php echo $this->_tpl_vars['T_AGREEMENT_FORM']['javascript']; ?><?php echo '<form '; ?><?php echo $this->_tpl_vars['T_AGREEMENT_FORM']['attributes']; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['T_AGREEMENT_FORM']['hidden']; ?><?php echo ''; ?><?php echo $this->_tpl_vars['T_AGREEMENT_FORM']['submit_decline']['html']; ?><?php echo ' '; ?><?php echo $this->_tpl_vars['T_AGREEMENT_FORM']['submit_accept']['html']; ?><?php echo '</form></div>'; ?><?php $this->_smarty_vars['capture']['agreement_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_IMPORTANTNOTICE,'content' => $this->_smarty_vars['capture']['agreement_code'],'image' => "32x32/exclamation.png"), $this);?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['center_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php elseif ($_GET['ctg'] == 'password_change' && $_SESSION['s_login']): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_MESSAGE']): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printForm(array('form' => $this->_tpl_vars['T_CHANGE_PASSWORD_FORM']), $this);?><?php echo ''; ?><?php $this->_smarty_vars['capture']['change_password_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_CHANGEPASSWORD,'content' => $this->_smarty_vars['capture']['change_password_code'],'image' => "32x32/exclamation.png"), $this);?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['center_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_CONFIGURATION']['lock_down']): ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_MESSAGE'] && ! $this->_tpl_vars['T_FACEBOOK_ACCOUNT_MERGE_POPUP']): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php ob_start(); ?><?php echo '<div class = "lock">'; ?><?php echo $this->_tpl_vars['T_CONFIGURATION']['lock_message']; ?><?php echo '. <a href = "index.php?ctg=login">'; ?><?php echo @_LOGINASADMIN; ?><?php echo '</a></div>'; ?><?php $this->_smarty_vars['capture']['lockdown_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_LOCKDOWN,'content' => $this->_smarty_vars['capture']['lockdown_code'],'image' => "32x32/lock.png"), $this);?><?php echo ''; ?><?php if ($_GET['ctg'] == 'login'): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_LOGINENTRANCE,'content' => $this->_smarty_vars['capture']['t_login_code'],'image' => "32x32/keys.png"), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php $this->assign('layoutClass', 'hideBoth'); ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['center_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php if ($_GET['checkout']): ?><?php echo ''; ?><?php $this->assign('title', ($this->_tpl_vars['title'])." &raquo; <a class='titleLink' href = '".($_SERVER['PHP_SELF'])."?ctg=checkout&checkout=1'>".(@_REVIEWANDCHECKOUT)."</a>"); ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_MESSAGE'] && ! $this->_tpl_vars['T_FACEBOOK_ACCOUNT_MERGE_POPUP']): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_SELECTEDLESSONS,'content' => $this->_smarty_vars['capture']['t_selectedLessons_code'],'image' => $this->_tpl_vars['T_BLOCKS']['selectedLessons']['image']), $this);?><?php echo ''; ?><?php $this->_smarty_vars['capture']['center_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php if (! $this->_tpl_vars['T_CONFIGURATION']['onelanguage']): ?><?php echo '<select onchange = "var new_location = location.toString().replace(/(\\?|&)bypass_language=.*/, \'\');location = new_location+(new_location.toString().match(/\\?/) ? \'&\' : \'?\')+\'bypass_language=\'+this.options[this.selectedIndex].value">'; ?><?php $_from = $this->_tpl_vars['T_LANGUAGES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['languages_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['languages_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['languages_list']['iteration']++;
?><?php echo '<option value = "'; ?><?php echo $this->_tpl_vars['key']; ?><?php echo '" '; ?><?php if ($this->_tpl_vars['key'] == $this->_tpl_vars['T_LANGUAGE']): ?><?php echo 'selected'; ?><?php endif; ?><?php echo '>'; ?><?php echo $this->_tpl_vars['item']; ?><?php echo '</option>'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</select>'; ?><?php endif; ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['header_language_code'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/common_layout.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php if ($this->_tpl_vars['T_FACEBOOK_ACCOUNT_MERGE_POPUP']): ?><?php echo '<div id = \'facebook_login\' style = "display:none" align = "left">'; ?><?php if ($this->_tpl_vars['T_MESSAGE']): ?><?php echo ''; ?><?php echo smarty_function_eF_template_printMessageBlock(array('content' => $this->_tpl_vars['T_MESSAGE'],'type' => $this->_tpl_vars['T_MESSAGE_TYPE']), $this);?><?php echo ''; ?><?php endif; ?><?php echo ''; ?><?php ob_start(); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/blocks/facebook_login.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?><?php $this->_smarty_vars['capture']['t_facebook_login'] = ob_get_contents(); ob_end_clean(); ?><?php echo ''; ?><?php echo smarty_function_eF_template_printBlock(array('title' => @_FACEBOOKCONNECT,'content' => $this->_smarty_vars['capture']['t_facebook_login'],'image' => "32x32/facebook.png"), $this);?><?php echo '</div>'; ?><?php endif; ?><?php echo ''; ?>


<script type = "text/javascript">
translations['_COUPON'] = '<?php echo @_COUPON; ?>
';
translations['_CLICKTOENTERDISCOUNTCOUPON'] = '<?php echo @_CLICKTOENTERDISCOUNTCOUPON; ?>
';
<?php if ($_SESSION['s_login']): ?>
 <?php if (((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('basename', true, $_tmp) : basename($_tmp)))) ? $this->_run_mod_handler('replace', true, $_tmp, '.php', '') : smarty_modifier_replace($_tmp, '.php', '')) == 'index'): ?>
  redirectLocation ='index.php?ctg=checkout&checkout=1&register_lessons=1';
 <?php else: ?>
  redirectLocation ='<?php echo $_SERVER['PHP_SELF']; ?>
?ctg=lessons&catalog=1&checkout=1';
 <?php endif; ?>
<?php else: ?>
 redirectLocation ='index.php?ctg=login&register_lessons=1';
<?php endif; ?>
</script>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/closing.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>