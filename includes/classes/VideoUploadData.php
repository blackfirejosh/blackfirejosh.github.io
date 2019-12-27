<?php
class VideoUploadData {

    public $videoDataArray, $title, $description, $privacy, $category, $uploadedBy;

    public function __construct($videoDataArray, $title, $description, $privacy, $category, $uploadedBy) 
    {
        $this->videoDataArray = $videoDataArray;
        $this->title = $title;
        $this->description = $description;
        $this->privacy = $privacy;
        $this->category = $category;
        $this->uploadedBy = $uploadedBy;
    }


    public function getVideoArray()

    {
      return $videoDataArray;  
    }
    
    public function getTitle()
    
    {
      return $title;  
    }
    
    public function getDescription()
    
    {
      return $description;  
    }
    
    public function getPrivacy()
    {
      return $privacy;  
    }
    
    public function getCategory()
    {
      return $category;  
    }
    
    public function getUploadedBy()
    {
      return $uploadedBy;  
    }
    


}
?>


