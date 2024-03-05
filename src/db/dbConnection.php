
<?php
class dbConnection {
    private $con;

    public function __construct($servername, $username, $password) {
        $this->con = new mysqli($servername, $username, $password);
    }

    public function Execute($query) {
        return $this->con->query($query);
    }

}
?>
