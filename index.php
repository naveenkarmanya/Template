<?php
include 'template.php';
$template = new template();
$template->assign('username', 'Terry');
$template->assign('age',10);
$template->assign('fav_food','Pizza');
$template->render('mytemplate');
?>
