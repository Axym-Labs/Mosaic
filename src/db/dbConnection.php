
<?php
class dbConnection {
    private $con;
    private $logger;

    public function __construct($servername, $username, $password) {
        $this->con = new mysqli($servername, $username, $password);
        $this->logger = new FileLogger("Logs/queries.txt");
    }

    public function Execute($query) {
        $query = str_replace("`", "", $query);
        $this->logger->Log($query);
        return $this->con->query($query);
    }

    public function GetLastInsertId() {
        return $this->con->insert_id;
    }
}
?>
