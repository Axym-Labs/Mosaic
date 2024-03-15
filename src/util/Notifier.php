<?php
class Notifier {

    private $sessionManager;
    private $logger;

    public function __construct($sessionManager)
    {
        $this->sessionManager = $sessionManager;
        $this->logger = new FileLogger("Logs/notifier.txt");
    }

    public function Post($message, $messageType = "error") {
        $this->sessionManager->AddToMessageContainer(array("message" => $message, "messageType" => $messageType));
        if ($messageType != "info") {
            $date = date("Y-m-d H:i:s");
            $this->logger->Log("[$date] [$messageType]: " . $message);
        }
    }

    public function GetMessages($MarkMessagesAsRead = true) {
        return $this->sessionManager->GetMessages($MarkMessagesAsRead);
    }

    public function MarkMessagesAsRead() {
        $this->sessionManager->MarkMessagesAsRead();
    }

}
?>