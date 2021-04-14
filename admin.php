<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PPP Loan  - Admin</title>
<?php 
require 'nav_top.php';
?>
    <div id="page-container">
   <div id="content-wrap">
        <div class="container">
   <h1>Admin Panel</h1>
        <div class="sub-nav"><?php 
require 'admin_nav_top.php';
?></div>
                           
                           <div class="content">
                               <div class="row">
                                   <div class="col">
                                       <div class="boxed">
                                           <h4>Loans</h4>
                                          <div class="main">
                                              <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Business Name</th>
      <th scope="col">Business Type</th>
      <th scope="col">Loan Number</th>
      <th scope="col">Loan Amount</th>
      <th scope="col">Funding Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark & Things</td>
      <td>Sole Proprietor</td>
     <td>19098355</td>
       <td>$35,000</td>
             <td>5/2/21</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Acme</td>
      <td>LLC</td>
      <td>19098301</td>
       <td>$35,000</td>
             <td>5/2/21</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Web Stones</td>
      <td>LLC</td>
          <td>19098301</td>
       <td>$35,000</td>
             <td>5/2/21</td>
    </tr>
  </tbody>
</table>
                                              
                                          </div>
                                           
                                       </div></div>
                                  
                                   
                                   
                               </div>
                               
</div>
                          
                             <br>
                </div>
    </div>
        </div>
     <?php include 'footer.php'; ?>
    </body>
</html>

  