<?php
class FileLogger {
    private $logFile;

    public function __construct($logFile) {
        $this->logFile = $logFile;
    }

    public function Log($message) {
        file_put_contents($this->logFile, $message . "\n", FILE_APPEND);
    }
}
?>