<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title> - Sign Up Page</title>
      <link rel="stylesheet" type="text/css" href="site.css">
   </head>
   <div class="container">
      <nav>
         <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="MainPage.php">Home</a></li>
            <li role="presentation"><a href="GamesPage.php">Game</a></li>
            <li role="presentation"><a href="ConsolePage.php">Console</a></li>
            <li role="presentation"><a href="MyWebsite.php">Recommendation</a></li>
            <li role="presentation"><a href="LogIn.php">Log-In</a></li>
         </ul>
      </nav>
      <h2>Sign Up</h2>
      <form>

      <!-- User Details: email: useremail@mywork.com   password: Userpassword123  -->
         <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter Email">
         </div>
         <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class=form-control " id="pwd " placeholder="Enter Password ">
         </div>

         <div>
            <label><input type="checkbox"> Remember Me</label>
         </div>
         <div class="form-group ">
            <div class="col-xs-offset-3 col-xs-9 ">
               <a class="btn btn-primary" href="SignUpSubmitted.php" role="button">Log In</a>
            </div>
         </div>
      </form>
   </div>
   </head>
</html>



<?php
// ----INCLUDE APIS------------------------------------
// Include our Website API
include ("api/api.inc.php");

// ----PAGE GENERATION LOGIC---------------------------
function createPage()
{
    $tcontent = <<<PAGE


PAGE;
    return $tcontent;
}

// ----BUSINESS LOGIC---------------------------------
$tpagecontent = createPage();
$taction = htmlspecialchars($_SERVER['PHP_SELF']);
$tmethod = "POST";
$tpagecontent = createPage();

// ----BUILD OUR HTML PAGE----------------------------
// Create an instance of our Page class
$tindexpage = new MasterPage("Home Page");
$tindexpage->setDynamic2($tpagecontent);
$tindexpage->renderPage();

?>















