<?php
class ImageHandler {

    public static function ValidateImageInput($image) {

        if ($image["size"] > 1024 * 1024 * 4) {
            return array(false, "Images must be less than 4MB in size.");
        }

        $exploded = explode('.',$image["name"]);
        $ext = strtolower($exploded[count($exploded) - 1]);

        if ($ext != "jpg" && $ext != "jpeg") { // && $ext != "png" && $ext != "webp"
            return array(false, "Only JPG images are allowed. Please convert your image to JPG and try again.");
        }
        return array(true, "");
    }

    public static function ConvertImageToJPGBase64($image) {
        // convert to jpg

        // return file_get_contents($image["tmp_name"]);
        
        return "0x" . bin2hex(file_get_contents($image["tmp_name"]));

        // $image_data = file_get_contents($image["tmp_name"]);
        // return $image_data;

        // $exploded = explode('.',$image["name"]);
        // $ext = strtolower($exploded[count($exploded) - 1]); 


        // if (preg_match('/jpg|jpeg/i',$ext)) {
        //     $imageTmp=imagecreatefromjpeg($image);
        // } else if (preg_match('/png/i',$ext)) {
        //     $imageTmp=imagecreatefrompng($image);
        // } else if (preg_match('/webp/i',$ext)) {
        //     $imageTmp=imagecreatefromwebp($image);
        // }

        // ob_start(); 

        // imagejpeg($imageTmp);
        // $image_data = ob_get_contents(); 
        // ob_end_clean(); 

        // $imageStr = base64_encode($image_data);
        // imagedestroy($imageTmp);

        // return base64_encode($imageStr);
    }
}
?>
