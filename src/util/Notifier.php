<?php
class Notifier {

    private $messages;

    public function __construct()
    {
        $this->messages = array();
    }

    public function Post($message, $messageType) {
        array_push($this->messages, array("message" => $message, "messageType" => $messageType));   
    }

    public function GetMessages() {
        return $this->messages;
    }


}
?>