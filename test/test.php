<?php
require_once('../smarty/Smarty.class.php');
$smarty = new Smarty();
$smarty->left_delimiter = "{";
$smarty->right_delimiter = "}";
$smarty->template_dir = "tpl";
$smarty->compile_dir = "template_c";
$smarty->cache_dir = "cache";
$smarty->caching = true;
$smarty->cache_lifetime = 120;

$smarty->assign('articletitle', 'Title');
$smarty->display('test.tpl');