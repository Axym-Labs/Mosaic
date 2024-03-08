<?php
class GenericRender {

    public static function RenderDict($dict, $columnTypeData) {
        foreach ($dict as $key => $value) {
            if (str_starts_with($columnTypeData[$key], "blob")) {
                echo $key . ": " . "<img class=\"w-12 h-12 inline-block\" src=\"data:image/jpeg;base64," . base64_encode($value) . "\" alt=\"\" /><br>";
                continue;
            }
            // other option for date and time, wont be implemented
            // echo $key . " : " . date("Y-m-d", strtotime($value)) . "<br>";
            echo $key . " : " . $value . "<br>";  
        }
    }

    public static function RenderDictAsText($dict) {
        foreach ($dict as $key => $value) {
            echo $key . " : " . $value . "<br>";  
        }
    }

    public static function RenderArray($array, $columnTypeData) {
        foreach ($array as $value) {
            echo $value . "<br>";
        }
    }
}
?>