<?php

function upMail(sendRequest $sendMail){

    $mail = "mxm.tournier@gmail.com";
    $message = "Line 1\r\nLine 2\r\nLine 3";
    $message = wordwrap($message, 70, "\r\n");

    mail($mail, '[Tyrolium] Nouveau Contact ', $message);


}
