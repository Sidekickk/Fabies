<?php

class Constants
{
    public static $galleryImagesDirectory = "../Resources/Gallery/";

    public static $galleryImagesPerPage = 6;

    public static function Get_ImagesFromFolder($directory){
        $ImagesArray = [];
        $file_display = [ 'jpg', 'jpeg', 'png'];

        if (file_exists($directory) == false) {
            return ["Directory '\\' ', $directory, '\\' not found!"];

        }
        else {
            $dir_contents = scandir($directory);
            foreach ($dir_contents as $file) {
                $file_type = pathinfo($file, PATHINFO_EXTENSION);
                if (in_array($file_type, $file_display) == true) {
                    $ImagesArray[] = $file;
                }
            }
            return $ImagesArray;
        }
    }
}
