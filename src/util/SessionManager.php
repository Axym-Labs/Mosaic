<?php
class SessionManager {

    public function __construct() {
        if (!isset($_SESSION) || session_status() == PHP_SESSION_NONE) {
            $this->StartSession();
        }
        if (!isset($_SESSION['messages'])) {
            $_SESSION['messages'] = array();
        } else {
            // remove read messages
            $_SESSION['messages'] = array_filter($_SESSION['messages'], function($message) {
                return !$message['read'];
            });
        }
    }

    public function IsUserLoggedIn() {
        return isset($_SESSION['userId']) && $_SESSION['userId'] != null;
    }
    
    public function StartSession() {
        session_start();
    }
    
    public function GetUserId() {
        if (!$this->IsUserLoggedIn()) {
            return null;
        }
        return $_SESSION['userId'];
    }

    public function SetUserId($userId) {
        $_SESSION['userId'] = $userId;
    }

    public function AddToMessageContainer($message) {
        $message['read'] = false;
        array_push($_SESSION['messages'], $message);
    }

    public function GetMessages($markAsRead=true) {
        $messages = array_filter($_SESSION['messages'], function($message) {
            return !$message['read'];
        });
        if ($markAsRead) {
            $this->MarkMessagesAsRead();
        }
        return $messages;
    }

    public function MarkMessagesAsRead() {
        $logger = new FileLogger("Logs/log.txt");
        $messages = array_filter($_SESSION['messages'], function($message) {
            return !$message['read'];
        });
        $logger->Log("Marking " . count($messages) . " messages as read");

        foreach ($_SESSION['messages'] as $message) {
            $message['read'] = true;
        }
        
        $messages = array_filter($_SESSION['messages'], function($message) {
            return !$message['read'];
        });
        $logger->Log("222 Marking " . count($messages) . " messages as read");

        // for ($i = 0; $i < count($_SESSION['messages']); $i++){
        //     $_SESSION['messages'][$i]["read"] = true;
        // }
    }

}
?>