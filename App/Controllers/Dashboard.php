<?php


   var_dump($_SESSION["user"]);


require dirname(dirname(__FILE__))."/Conf/Database.php";
require dirname(dirname(__FILE__))."/Conf/config.php";

$db = new Database($config);
$query = "SELECT * FROM tasks WHERE user_id = :user_id";

$params = [":id" => $_GET["id"] ];

$plans = $db->execute($query, $params)->fetch();

require dirname(dirname(__FILE__))."/View/dashboard-view.php";
