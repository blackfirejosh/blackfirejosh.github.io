<?php 
class NavigationMenuProvider {

 private $con, $userLoggedInObj;
 
 public function __construct($con, $userLoggedInObj) {
   $this->con = $con;
   $this->userLoggedInObj = $userLoggedInObj;
 }

 public function create() {
   $menuHtml = $this->createNavItem("Home", "assets/images/icons/homepage.png", "index.php");
   $menuHtml = $this->createNavItem("Browse", "assets/images/icons/browse.png", "browse.php");
   $menuHtml = $this->createNavItem("Listen To Your Music Here", "assets/images/icons/music.png", "yourmusic.php");
   $menuHtml .= $this->createNavItem("Trending Fire", "assets/images/icons/trendingfire.png", "trending.php");
   $menuHtml .= $this->createNavItem("Subscriptions", "assets/images/icons/subscription.png", "subscription.php");
   $menuHtml .= $this->createNavItem("Liked Videos", "assets/images/icons/thumbsup.png", "likedVideos.php");

   if(User::isLoggedIn()) {
    $menuHtml .= $this->createNavItem("Settings", "assets/images/icons/settings.png", "settings.php");
    $menuHtml .= $this->createNavItem("Log Out", "assets/images/icons/logout.png", "logout.php");
   }

   // Create subscriptions section

   return "<div class='navigationItems'>
              $menuHtml
          </div>";
 }

 private function createNavItem($text, $icon, $link) {
     return "<div class='navigationItem'>
              <a href='$link'>
                <img src='$icon'>
                <span>$text</span>
              </a>
          </div";
 }

}
?>