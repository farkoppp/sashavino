<?php
//$f = scandir('../views/');
//foreach ($f as $file){
//
//        echo $file.'<br/>';
//
//}
////echo var_dump($_SERVER);
////header('Location: ../admin/');
//$parts = explode("/", $_SERVER['REQUEST_URI']);
//foreach ($parts as $part ) echo $part.'<br/>';
////var_dump(substr($_SERVER['REQUEST_URI'], 1));
//if ($_SERVER['REQUEST_URI'] == "/") $page = 'home';
//
//else $page = substr($_SERVER['REQUEST_URI'], 1);
//if (!preg_match('/^[A-z0-9]{3,15}$/', $page)) exit ('error url');
//print_r(dirname(__FILE__));
//echo '<br/>';
//print_r( $_SERVER );


// initialization Core
if (!class_exists('Core')) {
    require_once 'core/Core.php';
}
$Core = new Core();

$req = !empty($_REQUEST['url_param'])
    ? trim($_REQUEST['url_param'])
    : '';
$Core->handleRequest($req);

?>

