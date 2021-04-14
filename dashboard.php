<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PPP Loan</title>
<?php 
require 'nav_top.php';
?>
    <div id="page-container">
   <div id="content-wrap">
        <div class="container">
   <h1>Dashboard</h1>
        <div class="sub-nav"><?php 
require 'logged_in_nav_top.php';
?></div>
                           
                           <div class="content">
                               <div class="row">
                                   <div class="col">
                                       <div class="boxed">
                                           <h4>Your PPP Loan</h4>
                                           Amount: $35,000<br>
                                           Application Started On: <?php echo date("m-d-Y"); ?>
                                           
                                           <br>
                                           Id: <?php printf(uniqid());?>
                                           
                                       </div></div>
                                     <div class="col">
                                       <div class="boxed">
                                           <h4>Loan Application</h4>
                                           <a href="start.php" class="btn btn-success">Continue Your Application" ></a>
                                           
                                       </div></div>
                                   
                                   
                               </div>
                               
<div class="panels">
    
                                                                  <h4>Your Progress:</h4>
                               <div class="panel panel-default">
                                   
  <div class="panel-body">Step 1: <a href="start.php">Continue: Business information</a></div>
</div>
               
                                              <div class="panel panel-gray">
  <div class="panel-body"><a href="start.php">Step 2
  
  : Documents</a></div>
</div>                
                               
                           </div></div>
                          
                             <br>
                </div>
    </div>
        </div>
      <?php include 'footer.php'; ?>
    </body>
</html>

  