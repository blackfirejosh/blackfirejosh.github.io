<?php

class VideoDetailsFormProvider {

private $con;   

public function __construct($con) 
{
  $this->con = $con;
}  


// creating a function to create the form  


  public function createUploadForm() 
  {
      $fileInput = $this->createFileInput();
      $titleInput = $this->createTitleInput();
      $descriptionInput = $this->createDescriptionInput();
      $privacyInput = $this->createPrivacyInput();
      $categoriesInput = $this->createCategoriesInput();
      $uploadButton = $this->createUploadButton();
      return "
      <form action='processing.php' method='POST'enctype='multipart/form-data'>

      $fileInput
      $titleInput
      $descriptionInput
      $privacyInput
      $categoriesInput
      $uploadButton
        
      </form>
      ";
     }

     private function createFileInput() {
        return '
        <div class="form-group">
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fileInput" required>
        </div>
        ';
       }

    private function createTitleInput() {
        return '
        <div class="form-group">
          <input class="form-control" type="text" placeholder="Title" name="titleInput" required>
        </div>
        ';
       }

       private function createDescriptionInput() {
        return '
        <div class="form-group">
           <textarea class="form-control"  placeholder="Description" rows="3" name="descriptionInput"  required></textarea>
        </div>
        ';
        }

        private function createPrivacyInput() {
            return '
            <div class="form-group">
                <select class="form-control" name="privacyInput">
                  <option value="0">Private</option>
                  <option value="1">Public</option>
                </select>
            </div>
            ';
            }

            private function createCategoriesInput() 
            {
               //display the categories 
                
                $query = $this->con->prepare("SELECT * FROM categories");
                
                //execute the query
                
                $query->execute();

                $html = '

                <div class= "form-group">
                <select class="form-control" name="categoryInput">
                
                ';
                
                while($row = $query->fetch(PDO::FETCH_ASSOC))
                {
                    $name = $row["name"];
                    $id = $row["id"];
                    $html .= "<option value='$id'>$name</option>";
                }
                
                $html.= '</select>
                </div>
                ';

                return $html;
               }

            
    private function createUploadButton() 
    {
      $html="<button type='submit' class='btn btn-primary' name='uploadButton'>Upload</button>";
      
      return $html;
    }
}

        
        
 
?>