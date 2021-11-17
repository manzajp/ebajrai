<?php

//    $db_user = "epiz_30144641";
//    $db_pass = "gSUOOm17gPj";
//    $db_name = "epiz_30144641_useraccounts";
//
//    $db = new PDO('mysql:host=sql208.epizy.com;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
//    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $db_user = "root";
    $db_pass = "";
    $db_name = "useraccounts";

    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>