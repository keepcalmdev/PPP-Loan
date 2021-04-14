<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PPP Hope</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <style type="text/css" media="screen">
            #second,#second2, #third, #result{
                display: none;
            }
        </style>
    </head>
    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 bg-white p-4 rounded mt-5">  
                 <img src="5fc7f90bcbe9ef3457d0eaa1_Hope-logo-hicon-cropped-p-500.jpeg" class="img-responsive">
                 <center><h3>We Are Currently Updating Our Website. Please Check Back Soon.</h3>
                 </center>
                    
                </div>
            </div>
        </div>
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
