<?php
set_include_path(get_include_path()
					.PATH_SEPARATOR.'loading_app/controllers/'
					.PATH_SEPARATOR.'loading_app/models/'
					.PATH_SEPARATOR.'loading_app/views/');

const USER_DEFAULT_FILE = 'loading_app/views/index.php';
/*const USER_ROLE_FILE = 'user_role.php';
const USER_LIST_FILE = 'user_list.php';
const USER_ADD_FILE = 'user_add.php';

/* Текстовая база данных пользователей 
define('USER_DB', $_SERVER["DOCUMENT_ROOT"].'/data/users.txt');*/

function __autoload($class){
  require_once($class . ".php");
}

/* Инициализация и запуск FrontController */
$front = FrontController::getInstance();
$front->route();

echo $front->getBody();
