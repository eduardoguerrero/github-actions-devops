<?php


function sum($num1, $num2) {
    if ($num1 == 0) return "No zero values are allowed";

    if ($num2 == 0) return "No zero values are allowed";

    return ($num1 + $num2);
}

function isValidLogin($user, $password) {
    $auth = false;
    if ($user=="admin" and $password == "mYp4SSwOR") {
        $auth = true;
    }
    return $auth;
}

function getUser($id)
{
    if ($id <= 0) return "Invalid user ID";
    // Code to retrieve user from database..
    return array("id" => 1001, "username"=> "user1001", "email"=> "example@gmail.com");
}


?>