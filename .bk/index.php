<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PPP Loan</title>
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="https://getppphope.com/5fc7f90bcbe9ef3457d0eaa1_Hope-logo-hicon-cropped-p-500.jpeg" class="img-responsive"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Start Here <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Company Information</a>
      </li>
 
      <li class="nav-item">
        <a class="nav-link disabled" href="#">My Documents</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Verification Number" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Lookup</button>
    </form>
  </div>
</nav>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white p-4 rounded mt-5">
                    <h1>Small business financing when you need it most</h1>
<p>Let Hope Financial help you apply for a first or second Paycheck Protection Program (PPP) loan so you can protect and build your small busines</p>
                   
                   
                   
                   <hr>
                    <h3> Did your company receive a Paycheck Protection Program loan last year?</h3>
                    
                    
                   <div> <input type="radio" id="huey" name="drone" value="no"
         checked>  <label for="No">No, this is my first PPP loan
  </label>

</div>

<div><label for="yes"><input type="radio" id="dewey" name="drone" value="yes"> <label> Yes, I received a PPP loan last year</label>
  
  
 
</div>
                     <p class="forms-service-agreement-acceptance">By clicking “Start my application”, I understand and agree that this program is subject to the <a href="#" target="_blank"><b>PPP Loan Assistance Terms</b></a> and the <a href="#" target="_blank"><b>Terms of Service</b></a>.</p><p>
      
    </p><p class="forms-service-agreement-acceptan
        
                            </div>
                            <div class="form-group">
                                <a href="start.php" class="btn btn-info" id="go">Start My Application</a>
                            </div>
                </div>
            </div>
        </div></div>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                
                // alert('Hello');
                $('#next-1').click(function(e) {
                    e.preventDefault();
                    if ($('#name').val() == '') {
                        $('#nameError').html('* Name is required.');
                        return false;
                    }else if($('#name').val().length <3){
                        $('#nameError').html('* Name is mini 3 characters');
                        return false;
                    }else if(!isNaN($('#name').val())){
                        $('#nameError').html('Number are not allowed');
                        return false;
                    }else if($('#username').val() == ''){
                        $('#usernameError').html('* Username is required.');
                        return false;
                    }else if($('#username').val().length <3){
                        $('#usernameError').html('* Username is mini 3 characters');
                        return false;
                    }else if(!isNaN($('#username').val())){
                        $('#usernameError').html('Number are not allowed');
                        return false;
                    }else{
                        $('#second').show();
                        $('#first').hide();
                        $('#progressBar').css('width', '60%');
                        $('#progressText').html('Step - 2');
                    }
                    
                });
                $('#submit').click(function(e) {
                    e.preventDefault();
                    $.ajax({
                        url:"action.php",
                        method: "post",
                        data:$('#form-data').serialize(),
                        success:function (response) {
                            $("#result").show();
                            $("#result").html(response);
                        }
                    });
                });
                $('#next-2').click(function(e) {
                    e.preventDefault();
                    $('#third').show();
                    $('#second').hide();
                    $('#progressBar').css('width', '100%');
                    $('#progressText').html('Step - 3');
                });
                $('#prev-2').click(function() {
                    $('#second').hide();
                    $('#first').show();
                    $('#progressBar').css('width', '20%');
                    $('#progressText').html('Step - 1');
                });
                $('#prev-3').click(function() {
                    $('#second').show();
                    $('#third').hide();
                    $('#progressBar').css('width', '60%');
                    $('#progressText').html('Step - 2');
                });
            });
        </script>
    </body>
</html>

  