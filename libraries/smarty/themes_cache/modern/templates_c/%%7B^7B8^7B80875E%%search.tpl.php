<?php /* Smarty version 2.6.26, created on 2013-03-23 23:18:01
         compiled from includes/blocks/search.tpl */ ?>
    <form action = "<?php echo $_SERVER['PHP_SELF']; ?>
?fct=searchResults" method = "post">
    	<input class = "inputSearchText" type = "text" name = "name" />
    	<input name = "cms_page" type = "image" src = "images/16x16/keys.png" value = "<?php echo @_SEARCH; ?>
" />
    </form>