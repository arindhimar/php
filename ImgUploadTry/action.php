<?php
// Where to store the image after upload
$target_dir = 'images/';

$upload_check = 1; // must be 1 until the end

// basename() returns the file name
$target_file = $target_dir . basename($_FILES['imgfile']['name']);

if (!file_exists($target_file)) {
    $tmp_file = $_FILES['imgfile']['tmp_name']; // temporary file is a location

    // pathinfo - returns the full path
    $image_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if ($image_type == 'jpg' || $image_type == 'jpeg' || $image_type == 'png') {
        $filesize = filesize($tmp_file);
        if ($filesize <= 512000) { // 5 MB limit (in bytes)
            if (move_uploaded_file($tmp_file, $target_file)) { // move the uploaded file to the target directory
                if(rename($target_file, $target_dir.'temp.'.$image_type)){//1st para is image source and the second one is location for image with the new name
                    echo "doneee";
                }
                else{
                    $upload_check = 5; // something went wrong, file not renamed
                }
            } else {
                $upload_check = 4; // something went wrong, file not moved
            }
        } else {
            $upload_check = 3; // file size is greater than 5 MB
        }
    } else {
        $upload_check = 2; // file type is not PNG, JPG, or JPEG
    }
} 
else {
    $upload_check = 0; // file exist
}
echo $upload_check;
?>
