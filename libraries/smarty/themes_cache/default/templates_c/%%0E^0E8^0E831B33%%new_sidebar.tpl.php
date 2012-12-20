<?php /* Smarty version 2.6.26, created on 2012-12-19 23:14:39
         compiled from new_sidebar.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'new_sidebar.tpl', 62, false),array('modifier', 'eF_truncate', 'new_sidebar.tpl', 125, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "includes/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<script language = "JavaScript" type = "text/javascript">

    // Translations used in the sidebar.js script
    var translations = new Array();
    translations['lessons'] = '<?php echo @_LESSONS; ?>
';
    translations['servername'] = '<?php echo @G_SERVERNAME; ?>
';
    translations['onlineusers'] = '<?php echo @_ONLINEUSERS; ?>
';
    translations['nousersinroom'] = '<?php echo @_THEREARENOOTHERUSERSRIGHTNOWINTHISROOM; ?>
';
    translations['redirectedtomain']= '<?php echo @_REDIRECTEDTOEFRONTMAIN; ?>
';
    translations['s_type'] = '<?php echo $_SESSION['s_type']; ?>
';
    translations['s_login'] = '<?php echo $_SESSION['s_login']; ?>
';
    translations['clicktochange'] = '<?php echo @_CLICKTOCHANGESTATUS; ?>
';
    translations['userisonline'] = '<?php echo @_USERISONLINE; ?>
';
    translations['and'] = '<?php echo @_AND; ?>
';
    translations['hours'] = '<?php echo @_HOURS; ?>
';
    translations['minutes'] = '<?php echo @_MINUTES; ?>
';
    translations['userjustloggedin']= '<?php echo @_USERJUSTLOGGEDIN; ?>
';
    translations['user'] = '<?php echo @_USER; ?>
';
    translations['sendmessage'] = '<?php echo @_SENDMESSAGE; ?>
';
    translations['web'] = '<?php echo @_WEB; ?>
';
 translations['user_stats'] = '<?php echo @_USERSTATISTICS; ?>
';
 translations['user_settings'] = '<?php echo @_USERPROFILE; ?>
';
 translations['logout_user'] = '<?php echo @_LOGOUTUSER; ?>
';
 translations['_ADMINISTRATOR'] = '<?php echo @_ADMINISTRATOR; ?>
';
 translations['_PROFESSOR'] = '<?php echo @_PROFESSOR; ?>
';
 translations['_STUDENT'] = '<?php echo @_STUDENT; ?>
';



    // Global variables
    var menuCount = '<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
'; // How many menus are initially loaded?
    var browser = '<?php echo $this->_tpl_vars['T_BROWSER']; ?>
';
    var active_id = '<?php echo $this->_tpl_vars['T_ACTIVE_ID']; ?>
'; // What is the id of the menu item that should be set as activated (gray background)
    var activeMenu = '<?php echo $this->_tpl_vars['T_ACTIVE_MENU']; ?>
'; // What is the active menu? (active_id exists within that menu)
    var setActiveMenu = 0; // Has the active menu been explicitly set by the mainFrame - behave differently in fixUpperMenu

    // Facebook related
    <?php if ($this->_tpl_vars['T_OPEN_FACEBOOK_SESSION']): ?>
    var facebook_api_key = "<?php echo $this->_tpl_vars['T_FACEBOOK_API_KEY']; ?>
";
    var facebook_should_update_status = "<?php echo $this->_tpl_vars['T_SHOULD_UPDATE_STATUS']; ?>
";
    <?php else: ?>
    var facebook_api_key = 0;
    var facebook_should_update_status = 0;
    <?php endif; ?>
    var __shouldTriggerNextNotifications = false;

    var arrow_status = "down"; // Initialize toggle arrows

    <?php if ($this->_tpl_vars['T_BROWSER'] == 'IE6' || $this->_tpl_vars['T_BROWSER'] == 'IE7'): ?>
     var table_style_size = "90%";
    <?php else: ?>
     var table_style_size = "100%";
    <?php endif; ?>

</script>

<body class = "sidebar" >
    <span id = "nobookmarks" style = "display:none"><?php echo @_YOUHAVENOBOOKMARKS; ?>
</span>

    <?php echo smarty_function_math(array('assign' => 'T_SB_WIDTH_MINUS_ONE','equation' => "x-1",'x' => $this->_tpl_vars['T_SIDEBARWIDTH']), $this);?>

    <div id="loading_sidebar" class="loading" style="opacity: 0.9; height: 100%; width: <?php echo $this->_tpl_vars['T_SB_WIDTH_MINUS_ONE']; ?>
px; display: block;" ><div style="top: 50%; left:12%; position: absolute;" ><img src="images/others/progress1.gif" style="vertical-align: middle;"/><span style="vertical-align: middle;"><?php echo @_LOADINGDATA; ?>
</span></div></div>

        <div class = "tabmenu" id = "tabmenu" align="center" style="visibility:hidden">
                <table><tr height="10px"><td></td></tr></table>

                <div class = "topPhoto" id = "topPhoto" style="height:<?php echo $this->_tpl_vars['T_NEWHEIGHT']; ?>
px">
            <a href = "<?php echo $_SESSION['s_type']; ?>
.php?ctg=personal&user=<?php echo $_SESSION['s_login']; ?>
" target = "mainframe">
                        <?php if (isset ( $this->_tpl_vars['T_AVATAR'] )): ?>
                <img src = "<?php if (isset ( $this->_tpl_vars['T_ABSOLUTE_AVATAR_PATH'] )): ?><?php echo $this->_tpl_vars['T_AVATAR']; ?>
<?php else: ?>view_file.php?file=<?php echo $this->_tpl_vars['T_AVATAR']; ?>
<?php endif; ?>" border = "0" title="<?php echo @_GOTODASHBOARD; ?>
" alt="<?php echo @_GOTODASHBOARD; ?>
"
                <?php if (isset ( $this->_tpl_vars['T_NEWWIDTH'] )): ?> width = "<?php echo $this->_tpl_vars['T_NEWWIDTH']; ?>
" height = "<?php echo $this->_tpl_vars['T_NEWHEIGHT']; ?>
"<?php endif; ?> />
            <?php else: ?>
                <img src = "<?php echo @G_SYSTEMAVATARSURL; ?>
unknown_small.png" border = "0" title="<?php echo @_EFRONTNAME; ?>
" alt="<?php echo @_EFRONTNAME; ?>
" />
            <?php endif; ?>
            </a>
        </div>

        <div id = "personIdentity">
            <table>
                <tr><td>
                        <a href = "<?php echo $_SESSION['s_type']; ?>
.php?ctg=personal&user=<?php echo $_SESSION['s_login']; ?>
" target = "mainframe" class = "info nonEmptyLesson" id="nameSurname" onmouseover="if($('tooltipImg'))$('tooltipImg').style.visibility = 'visible';" onmouseout="if($('tooltipImg')) $('tooltipImg').style.visibility = 'hidden';">
                            #filter:login-<?php echo $_SESSION['s_login']; ?>
#<br />
                            <span class = 'tooltipSpan' id='userInfo'><?php echo $this->_tpl_vars['T_TYPE']; ?>
</span>
                        </a>
                    </td></tr>
                <tr><td>
                    <?php if (! $this->_tpl_vars['T_NO_PERSONAL_MESSAGES']): ?>
                    <div id="unread_img" style="display:inline"><?php if ($this->_tpl_vars['T_UNREAD_MESSAGES'] != 0): ?><img src = "images/16x16/mail.<?php echo $this->_tpl_vars['globalImageExtension']; ?>
" style="vertical-align:middle; border:0; 'float': left;" title="<?php echo @_MESSAGES; ?>
" alt="<?php echo @_MESSAGES; ?>
" /><?php endif; ?></div>
                    <div id="recent_unread_left" style="display:inline"><?php if ($this->_tpl_vars['T_UNREAD_MESSAGES'] != 0): ?>(<a href = "<?php echo $_SESSION['s_type']; ?>
.php?ctg=messages" target="mainframe"><?php echo $this->_tpl_vars['T_UNREAD_MESSAGES']; ?>
</a>)<?php endif; ?></div>
                    <?php endif; ?>
                    </td>
                 </tr>
            </table>
        </div>
                <div>
            <?php if ($_SESSION['s_type'] == 'administrator'): ?>
                <form style="display: inline;" action = "<?php echo @G_SERVERNAME; ?>
<?php echo $_SESSION['s_type']; ?>
.php?ctg=control_panel&op=search" method = "post" target="mainframe">
            <?php else: ?>
                <form style="display: inline;" action = "<?php echo @G_SERVERNAME; ?>
<?php echo $_SESSION['s_type']; ?>
.php?ctg=lessons&op=search" method = "post" target="mainframe">
            <?php endif; ?>
            <div>
                    <div id="search_suggest"></div>
                    <input class = "searchBox" type="text" name="search_text"
                        value = "<?php if (isset ( $_POST['search_text'] )): ?><?php echo $_POST['search_text']; ?>
<?php else: ?><?php echo @_SEARCH; ?>
...<?php endif; ?>"
                        onclick="if(this.value=='<?php echo @_SEARCH; ?>
...')this.value='';" onblur="if(this.value=='')this.value='<?php echo @_SEARCH; ?>
...';"
                        style = "background-image:url('images/16x16/search.png');"/> <!-- width:134px;-->
                    <input type = "hidden" name = "current_location" id = "current_location" value = ""/>
            </div>
                </form>
        </div>
    </div>
        <div class = "menu" id = "menu" style="visibility:hidden">
                                <?php $_from = $this->_tpl_vars['T_MENU']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['outer_menu'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['outer_menu']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menu_key'] => $this->_tpl_vars['menu']):
        $this->_foreach['outer_menu']['iteration']++;
?>
        <div class = "verticalTab" id = "menu<?php echo $this->_tpl_vars['menu_key']; ?>
">
            <div class = "tabHeader" onclick = "move($('menu<?php echo $this->_tpl_vars['menu_key']; ?>
'));" id="tabmenu<?php echo $this->_tpl_vars['menu_key']; ?>
" title = "<?php echo $this->_tpl_vars['menu']['title']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['menu']['title'])) ? $this->_run_mod_handler('eF_truncate', true, $_tmp, 30) : smarty_modifier_eF_truncate($_tmp, 30)); ?>
</div>
            <div class = "menuList" id="listmenu<?php echo $this->_tpl_vars['menu_key']; ?>
">
                <?php $_from = $this->_tpl_vars['menu']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['options_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['options_list']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['option_id'] => $this->_tpl_vars['option']):
        $this->_foreach['options_list']['iteration']++;
?>
                    <?php if (isset ( $this->_tpl_vars['option']['html'] )): ?>
                        <div class = "menuOption" <?php if ($this->_tpl_vars['menu_key'] == 1 && $_SESSION['s_type'] != 'administrator'): ?>name="lessonSpecific"<?php endif; ?>><?php echo $this->_tpl_vars['option']['html']; ?>
</div>
                    <?php else: ?>
                                                <div class = "menuOption"
                         <?php if ($this->_tpl_vars['menu_key'] == 1 && $_SESSION['s_type'] != 'administrator'): ?>
                          <?php if (! strpos ( $this->_tpl_vars['option']['id'] , 'lessons_' ) && strpos ( $this->_tpl_vars['option']['id'] , 'lessons_' ) !== 0 && $this->_tpl_vars['option']['id'] != 'skillgap_tests_a'): ?>
                           name="lessonSpecific"
                          <?php else: ?>
                           name="lessonGeneral"
                           <?php if ($this->_tpl_vars['T_SPECIFIC_LESSON']): ?>style="display:none"<?php endif; ?>
                          <?php endif; ?>
                         <?php endif; ?> id="<?php echo $this->_tpl_vars['option']['id']; ?>
" >
                         <table>
                          <tr>
                          <?php if ($this->_tpl_vars['T_SHOW_SIDEBAR_IMAGES']): ?>
                          <td><a href = "<?php echo $this->_tpl_vars['option']['link']; ?>
" target="<?php echo $this->_tpl_vars['option']['target']; ?>
">
                              <?php if (isset ( $this->_tpl_vars['option']['moduleLink'] )): ?>
                                  <?php if (isset ( $this->_tpl_vars['option']['eFrontExtensions'] )): ?>
                                      <img src="<?php echo $this->_tpl_vars['option']['image']; ?>
.png" class = "handle">
                                  <?php else: ?>
                                      <img src="<?php echo $this->_tpl_vars['option']['image']; ?>
" class = "handle">
                                  <?php endif; ?>
                              <?php else: ?>
                               <img src="images/16x16/<?php echo $this->_tpl_vars['option']['image']; ?>
.png" class = "handle">
                              <?php endif; ?>
                              </a>
                          </td>
                          <?php endif; ?>
                          <td class = "menuListOption" >
                           <a href = "<?php echo $this->_tpl_vars['option']['link']; ?>
" title="<?php echo $this->_tpl_vars['option']['title']; ?>
" target="<?php echo $this->_tpl_vars['option']['target']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['option']['title'])) ? $this->_run_mod_handler('eF_truncate', true, $_tmp, 25) : smarty_modifier_eF_truncate($_tmp, 25)); ?>
</a>
                          </td>
                        </tr>
                    </table>
                </div>
                    <?php endif; ?>
                <?php endforeach; endif; unset($_from); ?>
            </div>
        </div>
        <?php endforeach; endif; unset($_from); ?>
                <?php if (isset ( $this->_tpl_vars['T_ONLINE_USERS_LIST'] ) && ! $this->_tpl_vars['T_CONFIGURATION']['disable_online_users']): ?>
        <div class = "verticalTab" id = "menu<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
" >
            <div class = "tabHeader" onclick = "move($('menu<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
'));" id="tabmenu<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
"><?php echo @_ONLINEUSERS; ?>
&nbsp;&nbsp;(<?php echo $this->_tpl_vars['T_ONLINE_USERS_COUNT']; ?>
)</div>
            <div class = "menuList" id="listmenu<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
">
            <script>menuCount = '<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
';</script>
                <table width = "100%">
                    <tr><td id = "users_online"></td></tr>
                </table>
            </div>
        </div>
    <?php if ($this->_tpl_vars['menuCount']): ?><?php echo smarty_function_math(array('assign' => 'menuCount','equation' => "x+1",'x' => $this->_tpl_vars['menuCount']), $this);?>
<?php else: ?><?php echo smarty_function_math(array('assign' => 'menuCount','equation' => "x+1",'x' => 0), $this);?>
<?php endif; ?>
    <?php endif; ?>
                                <div class = "verticalTab" id = "logout">
            <div class = "tabHeader">
                <table>
                    <tr>
                        <td class="smallIconCell">
       <img src = "images/16x16/logout.png" onclick = "top.location='index.php?logout=true'" title = "<?php echo @_LOGOUT; ?>
" alt = "<?php echo @_LOGOUT; ?>
" class = "menuTool"/>
                        </td>
                        <td onclick = "top.location= '<?php echo @G_SERVERNAME; ?>
index.php?logout=true'">
                            <a href = "<?php echo @G_SERVERNAME; ?>
index.php?logout=true" target = "_top" style="white-space:nowrap;"><?php echo @_LOGOUT; ?>
</a>
                        </td>
                        <?php if ($this->_tpl_vars['T_PROMPT_FB_CONNECTION']): ?>
                        <td class="smallIconCell">
                        <img src ='images/16x16/facebook.png' onclick = "<?php echo 'FB.Connect.requireSession(function() { top.location=\'professorpage.php?fb_authenticated=1\'; }); return false;'; ?>
" title = "<?php echo @_FACEBOOKCONNECT; ?>
" alt = "<?php echo @_FACEBOOKCONNECT; ?>
" class = "menuTool"/>
                        <script type="text/javascript">FB.init("<?php echo $this->_tpl_vars['T_FACEBOOK_API_KEY']; ?>
", "facebook/xd_receiver.htm");</script>
                        </td>
                        <?php endif; ?>
                        <?php $_from = $this->_tpl_vars['T_BAR_ADDITIONAL_ACCOUNTS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['additional_accounts'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['additional_accounts']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['additional_accounts']['iteration']++;
?>
                        <td class="smallIconCell">
                            <?php if ($this->_tpl_vars['item']['user_type'] == 'administrator'): ?>
                                <?php $this->assign('image', "images/16x16/goto_admin.png"); ?>
                            <?php elseif ($this->_tpl_vars['item']['user_type'] == 'professor'): ?>
                                <?php $this->assign('image', "images/16x16/goto_student.png"); ?>
                            <?php else: ?>
                                <?php $this->assign('image', "images/16x16/goto_professor.png"); ?>
                            <?php endif; ?>
                            <img src ='<?php echo $this->_tpl_vars['image']; ?>
' onclick = "changeAccount('<?php echo $this->_tpl_vars['item']['login']; ?>
')" title = "<?php echo @_SWITCHTO; ?>
 #filter:login-<?php echo $this->_tpl_vars['item']['login']; ?>
#" alt = "<?php echo @_SWITCHTO; ?>
 <?php echo $this->_tpl_vars['item']['login']; ?>
" class = "menuTool"/>
                        </td>
                        <?php endforeach; endif; unset($_from); ?>
                        <td width="1px"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <input type ="hidden" id = "online_users_text" value="<?php echo @_ONLINEUSERS; ?>
&nbsp;&nbsp;" class ="tabmenu<?php echo $this->_tpl_vars['T_MENUCOUNT']; ?>
" />
    <div id="utility_images" style="visibility:visible">
        <img id = "toggleSidebarImage" src = "images/others/blank.gif" onClick = "toggleSidebar('<?php echo $_SESSION['s_login']; ?>
');checkSidebarMode('<?php echo $_SESSION['s_login']; ?>
');" style = "position: absolute; top:4px; right: -1px; cursor: pointer; " align = "right" alt = "<?php echo @_SHOWHIDE; ?>
" title = "<?php echo @_SHOWHIDE; ?>
"/>
    </div>
<script type = "text/javascript" src = "js/scripts.php?load=<?php echo $this->_tpl_vars['T_HEADER_LOAD_SCRIPTS']; ?>
"> </script>
    <!--<script type = "text/javascript" src = "jsslashfiles/menu.js"></script> There is no that file any more....Why?-->
    <div id="dimmer" class = "dimmerDiv" style="display:none;"></div>
    <script>
    if (parent.frames[0] && parent.frames[0].document.getElementById('dimmer')) parent.frames[0].document.getElementById('dimmer').style.display = 'none'
    </script>
    <input type="hidden" value="myhidden" id="hasLoaded" />
<?php echo '
    <script type = "text/javascript">
        initSidebar('; ?>
'<?php echo $_SESSION['s_login']; ?>
'<?php echo '); //initialization of sidebar according to cookie value
  setMenuPositions();
        $(\'userInfo\').setStyle({left: -($(\'nameSurname\').positionedOffset().left) + "px"});
        var maximumFramewidth = $(\'tabmenu\').getWidth()-30;
        $(\'userInfo\').setStyle({width: (maximumFramewidth < 0 ? 0 : maximumFramewidth) + "px"});
  if (top.mainframe && top.mainframe.category) {
         arr = top.mainframe.category.split("&");
         setActiveId(arr[0], arr[1], arr[2], arr[3], arr[4], arr[5], "'; ?>
<?php echo $_SESSION['s_type']; ?>
<?php echo '");
     }
    </script>
'; ?>

</body>
</html>