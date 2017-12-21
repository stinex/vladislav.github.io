<?php

$recepient = "stinex.27@yandex.ru";
$sitename = "Сайт об всем";

$text = trim($_POST["subject"]);
$email = trim($_POST["email"]);
$name = trim($_POST["name"]);
$message = trim($_POST["message"]);
$message = "Имя: $name \nПочта: $email \nТекст: $massage\nТема сообщения: $text ";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");