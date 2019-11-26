<?
$view;
$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    case '/' :
        $view = "/views/home.php";
        break;
    case '' :
        $view = "/views/home.php";
        break;
    case '/contacts' :
        $view = "/views/contacts.php";
        break;
    case '/mobile-terminal' :
        $view = "/views/mobile-terminal.php";
        break;
    default:
        http_response_code(404);
        $view = "/views/err.php";
        break;
}
?>