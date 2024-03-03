<?php
class cvSet {
    public $column;
    public $value;
    public $type;

    public function __construct($column, $value, $type) {
        $this->column = $column;
        $this->value = $value;
        $this->type = $type;
    }

    public function ToUpdateFragment() {
        
        return $this->GetColumnPart() . " = " . $this->GetValuePart();
    }

    public function GetColumnPart() {
        return $this->column;
    }

    public function GetValuePart() {
        if ($this->TypeIsString()) {
            return "\"" + $this->value +"\"";
        }
        return $this->value;
    }

    public function TypeIsString() {
        return str_starts_with($this->type, "varchar") || str_starts_with($this->type, "text") || str_starts_with($this->type, "date") || str_starts_with($this->type, "time") || str_starts_with($this->type, "char") || str_starts_with($this->type, "enum") || str_starts_with($this->type, "set") || str_starts_with($this->type, "longtext") || str_starts_with($this->type, "mediumtext") || str_starts_with($this->type, "tinytext") || str_starts_with($this->type, "longblob") || str_starts_with($this->type, "mediumblob") || str_starts_with($this->type, "tinyblob") || str_starts_with($this->type, "blob") || str_starts_with($this->type, "binary") || str_starts_with($this->type, "varbinary") || str_starts_with($this->type, "bit") || str_starts_with($this->type, "json") || str_starts_with($this->type, "enum") || str_starts_with($this->type, "set");
    }
}
?>