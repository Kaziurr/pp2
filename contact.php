<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mail = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "bolek2753@gmail.com";
        $headers = "Od: ".$mail;
        $txt = "Otrzymałeś wiadomość ".$name".\n\n" .$message;

        mail($mailTo, "Wiadomość ze strony LUK-NET", $txt, $headers);

        header("Location: index.html?MessageSent");
        exit();

    }


?>