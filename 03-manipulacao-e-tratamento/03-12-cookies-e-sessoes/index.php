<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.12 - Cookies e sessões");

/*
 * [ cookies ] http://php.net/manual/pt_BR/features.cookies.php
 */
fullStackPHPClassSession("cookies", __LINE__);


setcookie('fsphp', 'Esse é o meu cookie', time() + 60 );
//setcookie('fsphp', null, time() - 60 );

$cookie = filter_input_array(INPUT_COOKIE, FILTER_UNSAFE_RAW, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH);
var_dump($_COOKIE, $cookie);

$time = time() + 60 * 60 * 24 * 7;
$user = [
    "user" => "root",
    "passwd" => "12345",
    "expire" => $time
];

setcookie("fslogin", http_build_query($user), $time, "/", "www.localhost", true);

$login = filter_input(INPUT_COOKIE, 'fslogin', FILTER_UNSAFE_RAW);
if($login) {
    var_dump($login);
    parse_str($login, $user);
    var_dump($user);
}

/*
 * [ sessões ] http://php.net/manual/pt_BR/ref.session.php
 */
fullStackPHPClassSession("sessões", __LINE__);

session_save_path(__DIR__ . "/ses");
session_start([
    "cookie_lifetime" => 60 * 60 * 24
]);

var_dump($_SESSION,
[
    "id" => session_id(),
    "name" => session_name(),
    "status" => session_status(),
    "save_path" => session_save_path(),
    "cookie" => session_get_cookie_params()
]);