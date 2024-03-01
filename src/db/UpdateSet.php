<?php
class UpdateSet {
    public $column;
    public $value;
    public $isString;

    public function __construct($column, $value, $isString = false) {
        $this->column = $column;
        $this->value = $value;
        $this->isString = $isString;
    }

    public function ToUpdateFragment() {
        $value = $this->value;
        if ($this->isString) {
            $value = "'$value'";
        }
        return "$this->column = $value";
    }
}
?>