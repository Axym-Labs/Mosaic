
<?php
class dbConnection {
    private $con;

    public function __construct($servername, $username, $password) {
        $this->con = new mysqli($servername, $username, $password);
    }

    public function Execute($query) {
        $query = str_replace("`", "", $query);
        $logger = new FileLogger("log.txt");
        $logger->Log($query);
        return $this->con->query($query);
    }
}
?>
