<?php


    if (isset($_POST['submit'])){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $service = $_POST["service"];
        $subject = $_POST["subject"];
        $mailTo = "ykj6865@naver.com";
        $headers = "From: ". $email;
        $txt = "you have received mail from " .$name.".\n\n" .$subject;
        mail($mailTo, $service, $txt, $headers);
        header("Location: index.php?mailSend");
    }

?>
