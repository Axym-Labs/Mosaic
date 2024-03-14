<?php
class Notifier {

    private $messages;
    private $logger;

    public function __construct()
    {
        $this->messages = array();
        $this->logger = new FileLogger("notifier.txt");
    }

    public function Post($message, $messageType) {
        array_push($this->messages, array("message" => $message, "messageType" => $messageType));
        if ($messageType != "info") {
            $this->logger->Log("Posted message [$messageType]: " . $message);
        }
    }

    public function GetMessages() {
        return $this->messages;
    }


}
?>