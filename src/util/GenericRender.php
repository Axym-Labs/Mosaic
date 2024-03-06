<?php
class GenericRender {

    public static function RenderDict($dict) {
        foreach ($dict as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
    }

    public static function RenderArray($array) {
        foreach ($array as $value) {
            echo $value . "<br>";
        }
    }
}
?>