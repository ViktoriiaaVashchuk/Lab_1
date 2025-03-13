<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to =  "viktoriia.vashchuk.2005@gmail.com";
   
        $subject = "Нове повідомлення з вашого веб-сайту";
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $headers = "From: $email";
    
        if (mail($to, $subject, $message, $headers)) {
            echo "Повідомлення відправлено успішно!";
        } else {
            echo "Помилка відправлення повідомлення.";
        }
    }
    ?>
    