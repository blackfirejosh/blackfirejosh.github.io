<?php 
require_once("includes/header.php");
require_once("includes/classes/VideoUploadData.php");
require_once("includes/classes/VideoProcessor.php");

//check for submission of form or button is pressed

if(!isset($_POST["uploadButton"])) {
    echo "No file sent to page.";
    exit();
}

//make the file upload data

$videoUpoadData = new VideoUploadData (
    $_FILES["fileInput"], 
    $_POST["titleInput"],
    $_POST["descriptionInput"],
    $_POST["privacyInput"],
    $_POST["categoryInput"],
    "REPLACE-THIS"
    );

   
//processing the video converting to mp4
$videoProcessor = new VideoProcessor($con);
$wasSuccessful = $videoProcessor->upload($videoUpoadData);

//check for the successful upload of the video
if($wasSuccessful) {
    echo "Upload successful";
}