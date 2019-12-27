<?php require_once("includes/config.php") ?>
<?php require_once("includes/classes/NavigationMenuProvider.php") ?>
<!DOCTYPE html>
<html>
<head>
   <title>BLACKFIREJOSHTUBE</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/css/style.css">

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
   <!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<script src="assets/js/commonActions.js"></script>
</head>
<body>
<div id="pageContainer">

 <div id="MHeadContainer">
 <button class="navShowHide">
   <img src="assets/images/icons/fire2.png">
    </button>   

    <a class="logoContainer" href="index.php">
   <img src="assets/images/icons/blackfirejosh2.png" title="blackfirejosh Logo" alt="blackfirejosh Logo">
  </a>

  <div class="searchBarContainer">
    <form action="search.php" method="GET">
         <input type="text" class="searchBar" name="term" placeholder="Search...">
         <button class="searchButton">
           <img src="assets/images/icons/search.png" title="Search" alt="Search">
         </button>
    </form>
  </div>

  <div class="rightIcons">
      <a href="upload.php">
      <img class="upload" src="assets/images/icons/upload.png"> 
      </a>
      <a href="#">
      <img class="upload" src="assets/images/profilePictures/default2.png"> 
      </a>
  </div>
</div>

 
<div id="sideNavContainer" style="display: none;">
    <?php
      $navigationProvider = new NavigationMenuProvider($con, $userLoggedInObj);
      echo $navigationProvider->create();
    ?>

</div>
</div>
</div>

<div id="mainSectionContainer">
    <div id="mainContentContainer">