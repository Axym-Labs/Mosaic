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

    public static function InsertValueAttribute($maybeArrray, $key) {
        if (!isset($maybeArrray)) {
            return "";
        } else {
            return " value=\"" . $maybeArrray[$key] . "\" ";
        }
    }

    public static function InsertValuePlainly($maybeArrray, $key, $type = "text") {
        if (!isset($maybeArrray)) {
            return "";
        } else {
            if ($type == "img") {
                return base64_encode($maybeArrray[$key]);
            } 
            return $maybeArrray[$key];
        }
    }

    public static function HexToRGB($hex, $opacity) {
        $hex = str_replace("#", "", $hex);
        if (strlen($hex) == 3) {
            $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
            $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
            $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
        } else {
            $r = hexdec(substr($hex, 0, 2));
            $g = hexdec(substr($hex, 2, 2));
            $b = hexdec(substr($hex, 4, 2));
        }
        if ($opacity == "" || $opacity == "NULL") {
            return "rgb($r, $g, $b)";
        }
        return "rgba($r, $g, $b, $opacity)";
    }
}
?>