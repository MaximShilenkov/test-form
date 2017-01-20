<?php

$recepient = "lindzberg@gmail.com";
$sitename = "somesite.com";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"])
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $phone \nEmail: $email \nТекст: $text";

$pagetitle = "Test test \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");