<?php
class Notifier {

    public function Post($message, $messageType) {
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>