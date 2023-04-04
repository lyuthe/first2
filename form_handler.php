<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "lyuthell@gmail.com"; //замените на свой email
    $subject = "Сообщение с сайта";
    $body = "Имя: $name\nEmail: $email\n\n$message";

    mail($to, $subject, $body);
    echo "Сообщение отправлено!";
}
?>
