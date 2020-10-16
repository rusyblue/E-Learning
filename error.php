<?php
switch($_GET['code'])
{
case '404':header('Location: index.php');
break;
default:header('Location: index.php');
}
?>