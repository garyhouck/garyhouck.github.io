<?php
if($_POST["message"]) {
    mail("gary_houck@yahoo.com", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>