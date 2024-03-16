<?php
class ImageHandler {

    public static function ValidateImageInput($image) {

        if ($image["size"] > 1024 * 1024 && !(BusinessConstants::$HOSTMODE == "dev")) {
            return array(false, "Sorry, your file is too large.");
        }

        $exploded = explode('.',$image["name"]);
        $ext = strtolower($exploded[count($exploded) - 1]);

        if ($ext != "jpg" && $ext != "png" && $ext != "jpeg" && $ext != "webp") {
            return array(false, "Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        }
        return array(true, "");
    }

    public static function ConvertImageToJPGBase64($image) {
        // convert to jpg
        $exploded = explode('.',$image["name"]);
        $ext = strtolower($exploded[count($exploded) - 1]); 

        if (preg_match('/jpg|jpeg/i',$ext)) {
            $imageTmp=imagecreatefromjpeg($image);
        } else if (preg_match('/png/i',$ext)) {
            $imageTmp=imagecreatefrompng($image);
        } else if (preg_match('/webp/i',$ext)) {
            $imageTmp=imagecreatefromwebp($image);
        }

        ob_start(); 

        imagejpeg($imageTmp);
        $image_data = ob_get_contents(); 
        ob_end_clean(); 

        $imageStr = base64_encode($image_data);
        imagedestroy($imageTmp);

        return base64_encode($imageStr);
    }
}
?>