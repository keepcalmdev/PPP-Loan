<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PPP Loan</title>
        
<meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</script>
        <style type="text/css" media="screen">
            #second, #second-b, #response, #third, #final, #submitme{
                display: none;
            }
            
            .btn-info{background:#0c21a3;}
            
            
            .forms-service-agreement-acceptance{font-size:12px; color:#47484d;  margin-top:40px;}
            
            .navbar-brand img {max-width:120px;}
             .navbar-light{background:#fff !important;}
             
             label{color:#246fc3 !important;}
        </style>
        <link rel="preconnect" href="https://fonts.gstatic.com">
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
    
      <input class="form-control col-sm-2" type="search" placeholder="Verification Number" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Lookup</button>
   
  </div>
</nav>

 <div id="page-container">
   <div id="content-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white p-4 rounded mt-5">
                    <h2 class="header-text">See if you pre-qualify in less than 5 minutes
</h2><p class="sub-text">Get your business back on track without impacting your credit score!</p>
                     <div class="test-center text-dark bg-danger mb-2 p-2 rounded lead" id="response">
                        error
                    </div>
                    <div class="test-center text-dark well mb-2 p-2 rounded lead" id="submitme"><center><img src="send.gif" class="img-responsive"><p>Submitting Your Application, Do Not Close This Window...</p></center></div>
                    <div class="test-center text-dark well mb-2 p-2 rounded lead" id="final">
                        Success! Your Application Has Been Submitted.
                        <p><h3>What To Expect Next?</h3></p>
                        <p> Please have the following documents ready during a follow up phone call.</p>
                        <ul><li>Tax Documents</li></ul>
                        <ul><li>Copy of the filled out PDF attached below.</li></ul>
                    </div>
                    <div class="progress mb-3" style="height: 28px;">
                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 10%;" id="progressBar">
                            <b class="lead" id="progressText"> </b>
                        </div>
                    </div>
                    <form id="form-data">
                        
                        <div id="first">
                            <div class="file-upload-wrapper"> 
    <label class="file-field" data-max-files="6">
       
           <br> <h4 class="drag-zone">Drop files to upload or</h4> 
            <div class="btn col btn-success">Browse<input type="file" name="photos[]" class="hide_files" multiple></div>
            <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
    </label>
    <div class="uploaded-files row"></div>
</div>
                            <h4 class="test-center  p-2 rounded text-dark">Company Information</h4>
                            
          

                            <div class="form-group">
                                <label for="name">Company Name</label>
                                <input type="text" class="form-control" name="company_name"  placeholder="Enter Company Name" id="name">
                                <b class="form-text text-danger" id="nameError"></b>
                            </div>
                            <div class="form-group">
                                <div class="row">
    <div class="col">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name"  placeholder="Enter First Name" id="name">
                                <b class="form-text text-danger" id="usernameError"></b>
                                </div>  <div class="col">
                                 <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name"  placeholder="Enter Last Name" id="lastname">
                                <b class="form-text text-danger" id="usernameError"></b>
                                
                                </div></div>
                                
                                <div class="row"><div class="col"><label id="Email1Label" for="Email" class="email">Email</label>
        <input id="email" class="Email form-control womplyTextField womplyRequired" name="email" maxlength="255" type="email" required></div>
        
        
        <div class="col"><label id="Email1Label" for="Email" class="womplyLabel">Company Phone</label> <input id="phone" class="Email form-control womplyTextField womplyRequired" name="phone" maxlength="255" type="phone" onfocus="" onblur="" onchange=""></div>
        
        </div>
                                
        
           
       

        
         <div id="Entity1-field_wrapper" class="womplyFormRow select-field_wrapper">
      <label id="Entity1Label" for="Entity" class="womplyLabel">Business Legal Entity Type</label>
      <select id="Entity1" name="Entity" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="Sole proprietor">Sole proprietor</option><option value="Partnership">Partnership</option><option value="C-Corp">C-Corp</option><option value="S-Corp">S-Corp</option><option value="LLC">LLC</option><option value="Independent contractor">Independent contractor</option><option value="Eligible self-employed individual">Eligible self-employed individual</option><option value="501(c)(3) nonprofit">501(c)(3) nonprofit</option><option value="501(c)(19) veterans organization">501(c)(19) veterans organization</option><option value="Tribal business (sec. 31(b)(2)(C) of Small Business Act)">Tribal business (sec. 31(b)(2)(C) of Small Business Act)</option><option value="Other">Other</option></select>
    </div>
    
               <div id="Entity1-field_wrapper" class="womplyFormRow select-field_wrapper">
      <label id="Entity1Label" for="Entity" class="womplyLabel">How Long Ago Was The Business Established?</label>
<div class="bordered-selector flex-box  fixedSize  big-style  "  style="color:#000; !important"><input id="bordered-selector-option_0" class="bordered-selector-input" type="checkbox"><label id="bordered-selector-label-option_0" for="bordered-selector-option_0" class="bordered-selector-label cursor-pointer no-icon"><div class="info-content"><span class="">Less than 2 years ago</span></div></label></div><div class="bordered-selector flex-box  fixedSize green big-style "><input id="bordered-selector-option_0" class="bordered-selector-input" type="checkbox"><label id="bordered-selector-label-option_1" for="bordered-selector-option_0" class="bordered-selector-label cursor-pointer no-icon"><div class="info-content"><span class="text-color-green font--bold">2-5 years ago</span><i class="icon-checkcircle green indent"></i></div></label></div><div class="bordered-selector flex-box  fixedSize  big-style "><input id="bordered-selector-option_0" class="bordered-selector-input" type="checkbox"><label id="bordered-selector-label-option_0" for="bordered-selector-option_0" class="bordered-selector-label cursor-pointer no-icon"><div class="info-content"><span class="">6-10 years ago</span></div></label></div><div class="bordered-selector flex-box  fixedSize  big-style "><input id="bordered-selector-option_0" class="bordered-selector-input" type="checkbox"><label id="bordered-selector-label-option_0" for="bordered-selector-option_0" class="bordered-selector-label cursor-pointer no-icon"><div class="info-content"><span class="">More than 10 years ago</span></div></label></div>
    </div>
    
        <div id="Payroll1-field_wrapper" class="womplyFormRow select-field_wrapper">
      <label id="Payroll1Label" for="Payroll" class="womplyLabel">Average Monthly Payroll Spend</label>
      <select id="Payroll1" name="Payroll" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="1">&lt; $1,200 per month</option><option value="2">$1,200 to $20,000 per month</option><option value="3">$20,001 to $140,000 per month</option><option value="4">$140,001 to $800,000 per month</option><option value="5">&gt; $800,000 per month</option></select>
    </div>

    <div id="LoanNum1-field_wrapper" class="womplyFormRow select-field_wrapper">
      <label id="LoanNum1Label" for="LoanNum" class="womplyLabel">Did you receive a PPP loan in 2020?</label>
      <select id="LoanNum0" name="LoanNum" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="1">Yes</option><option value="2">No</option></select>
    </div>
    


      
      

        
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-primary col" id="next-1">Continue</a>
                            </div>
                        </div>
                     
                     
                           <div id="second">
                            <h4 class="test-center  p-2 rounded text-dark">Company Information Cont.</h4>
                            <div class="form-group">
                                <label for="loan_amount">Loan Amount</label>
                                <input type="text" class="form-control" name="loan_amount"  placeholder="$" id="loan_amount">
                                <b></b>
                                <p>Note: This is only an estimated loan amount to get your application started. It does not impact your loan approval. We can help you calculate your exact loan amount later in the application process!</p>
                            </div>
                            
                            <div class="form-group">
                                <label for="payroll">Average Monthly Payroll?</label>
                                <input type="text" class="form-control" name="payroll"  placeholder="$" id="payroll">
                                <b></b>
                             
                                </div>
                                
                                <div class="form-group">
                                <label for="num_employees">Number Of Employees?</label>
                                <input type="text" class="form-control" name="num_employees"  placeholder="#" id="num_employees">
                                <b></b>
                             
                                </div>
                                
                            <div class="form-group">
                                <label for="phone">What Is Your Business Industry?</label><p>If you don’t see an option that is perfect for your company, please select the closest option – you will provide the exact industry in the final application step.</p>
                                <select data-model="business" data-model-id="1154034" id="business_type_id" class="form-control "><option disabled="" value="" class="grayColor">Select an option</option><option value="18" class="">Administrative and Business Services</option><option value="1" class="">Agriculture, Forestry, Fishing and Hunting</option><option value="4" class="">Construction</option><option value="19" class="">Education</option><option value="14" class="">Financial Services</option><option value="20" class="">Healthcare and Social Services</option><option value="17" class="">Holding Companies</option><option value="22" class="">Hospitality and Food Services</option><option value="5" class="">Manufacturing</option><option value="2" class="">Mining, Quarrying, and Oil &amp; Gas Extraction</option><option value="23" class="">Other Services (Repair, Personal Care, and Religious &amp; Social Organizations)</option><option value="16" class="">Professional Services</option><option value="24" class="">Public Administration</option><option value="15" class="">Real Estate</option><option value="21" class="">Recreation, Entertainment, and Arts</option><option value="10" class="">Retail Trade</option><option value="13" class="">Technology, Publishing, and Telecom</option><option value="11" class="">Transportation and Warehousing</option><option value="3" class="">Utilities</option><option value="8" class="">Wholesale Trade</option></select>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-2">Previous</a>
                                <a href="#" class="btn btn-primary" id="next-2-b">Continue</a>
                            </div>
                        </div>
                        
                        
                          <div id="second-b">
                            <h4 class="test-center  p-2 rounded text-dark">Business Ownership</h4>
                            <div class="form-group">
                                <label for="email">Who Owns Your Business?</label>
                                <input type="text" class="form-control" name="owner[]"  placeholder="Owner Full Name" id="owner[]">
                                <b></b>
                            </div>
                            
                            <div class="form-group">
                              
                               <div class="row"><div class="col"> <input type="text" class="form-control" name="title[]"  placeholder="Title" id="title[]">
                               </div><div class="col"><input type="text" class="form-control" name="owner_percentage[]"  placeholder="Owner %" id="owner_percentage[]"></div></div>
                               <br><input type="text" class="form-control" name="ein[]"  placeholder="Business TIN (EIN, SSN, ITIN)" id="ein[]">
                               <br><input type="text" class="form-control" name="address[]"  placeholder="Address" id="address_own[]">
                               <br><input type="text" class="form-control" name="address_2[]"  placeholder="Address 2" id="address_own_2[]">
                               <br><input type="text" class="form-control" name="owner_city[]"  placeholder="City" id="owner_city[]">
                               
                               <div class="row"><div class="col"><br><input type="text" class="form-control" name="owner_state[]"  placeholder="State" id="owner_state[]"></div>
                               <div class="col"><br><input type="text" class="form-control" name="owner_zip[]"  placeholder="Zip" id="owner_zip[]"></div>
                               </div>
                               </div>
                               <div class="appending_div"> </div>
                               <div class="add-owner">
                                   <br>
<a href="#" class="btn btn-success add" id="add-owner">+ Add Owner</a>
<br>
                                </div>
                                
                               
                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-2-b">Previous</a>
                                <a href="#" class="btn btn-primary" id="next-3">Continue</a>
                            </div>
                        </div>
                        
                        <div id="third">
                            <h4 class="test-center  p-2 rounded text-dark">Almost Done!</h4>
                              <div class="form-group">
                                <label for="email">Is the Applicant or any owner of the Applicant presently suspended, debarred, proposed for debarment, declared ineligible,voluntarily excluded from participation in this transaction by any Federal department or agency, or presently involved in anybankruptcy?</label>
                                <select id="LoanNum2" name="q1" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>
                                
                                
                                  <div class="form-group">
                                <label for="email">Has the Applicant, any owner of the Applicant, or any business owned or controlled by any of them, ever obtained a direct orguaranteed loan from SBA or any other Federal agency (other than a Federal student loan made or guaranteed through a programadministered by the Department of Education) that is (a) currently delinquent, or (b) has defaulted in the last 7 years and caused a loss to the government?</label>
                                <select id="LoanNum3" name="q2" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>
                                
                                
                                  <div class="form-group">
                                <label for="email">Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?</label>
                                <select id="LoanNum4" name="q3" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>
                                
                                
                                  <div class="form-group">
                                <label for="email">Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?</label>
                                <select id="LoanNum5" name="q4" class="form-control">
        <option value="" selected="" disabled="">&nbsp;</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>
                                
                                
                                
                           
                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-3">Previous</a>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </form>
                    <center><img src="secure.png" style="max-width:130px; margin-top:30px;"></center>
                </div>
            </div>
        </div>
        
 <body>


   </div>
   <footer id="footer" > <div class="container"><div class="row"><div class="col">Copyright © 2021 Hope Financial Consulting, LLC. All Rights Reserved.</div>  <div class="col"><a href="privacy.html" target="_blank">Privacy Policy</a> | <a href="terms.html" target="_blank">Terms Of Use</a></div></div></div></footer>
 </div>

        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        
        
        
        
              
  <script>var photos = [];
var data;
$(document).ready ( function() {
    //Documnet Upload Script//
    function fileUpload(obj){
        var dropZone = obj.find('.file-field');
        var fileInput = dropZone.find('input[type="file"]');
        var filesBeen = obj.find('.uploaded-files');
        var maxFiles = Number(dropZone.attr('data-max-files'));

        function highlightDropZone(e){
            if(e.type == 'dragover') dropZone.addClass('highlighted');
            else dropZone.removeClass('highlighted');
            e.preventDefault();
            return false;
        }

        function filesDropped(e){
            highlightDropZone(e);
            var files = e.target.files || e.dataTransfer.files;
            for(var i = 0, file; file = files[i]; i++) {
                if(file.size <= 3000000 && (file.type == "application/pdf" || file.type == "image/jpg" || file.type == "image/jpeg" ||file.type == "image/png")) {
                    photos.push(file);
                    if (file.type == "application/pdf") {
                        var uploaded = filesBeen.prepend('<div><div><img src="pdf.png" style="max-height:80px;"></div><span></span></div>');
                        uploaded.find('span').click(function () {
                            $(this).closest('div').animate({width: 0, height: 0}, 200, function () {
                                $(this).remove()
                            });
                        });
                    } else {
                        var fReader = new FileReader();
                        fReader.onloadend = (function(f){
                            return function() {
                                if (maxFiles > Number(filesBeen.children('div').length)) {
                                    var uploaded = filesBeen.prepend('<div><div><img src="' + this.result + '"></div><p><span></span></p><span></span></div>');
                                    uploaded.find('span').click(function () {
                                        var me = $(this);
                                        $(this).closest('div').animate({width: 0, height: 0}, 200, function () {
                                            $(this).remove();
                                            me.unbind('click');
                                        });
                                    });
                                }
                            }
                        })(file);
                        fReader.readAsDataURL(file);
                    }
                }else {
                    window.alert("The size of the file is more than 3Mb or format is not supported.");
                }
            }
            console.log(photos);
        }

        dropZone.get(0).addEventListener('dragover', highlightDropZone);
        dropZone.get(0).addEventListener('dragleave', highlightDropZone);
        dropZone.get(0).addEventListener('drop', filesDropped);
        fileInput.get(0).addEventListener('change', filesDropped);
    }

    $('.file-upload-wrapper').each(function(){
        new fileUpload($(this));
    });

    
});</script>

        <script type="text/javascript">
        
        //<input type="text" class="form-control" name="ein"  placeholder="Business TIN (EIN, SSN, ITIN)" id="ein[]"> &nbsp; <input type="text" class="form-control" name="address"  placeholder="Address" id="address_own[]"></div>
      
      $(document).ready(function(){
    $("#add-owner").on("click", function(){
        $(".appending_div").append(
            '<div ><div class="appending_div2"><hr><h4>Co-Owner</h4><div class="row" id="owners"><div class="col"><input type="text" class="form-control" name="title[]"  placeholder="Title" id="title[]"></div><div class="col"><input type="text" class="form-control" name="owner_percentage[]"  placeholder="Owner %" id="owner_percentage[]"></div></div><br><input type="text" class="form-control" name="ein[]"  placeholder="Business TIN (EIN, SSN, ITIN)" id="ein[]"> <br><input type="text" class="form-control" name="address[]"  placeholder="Address" id="address_own[]"><br><input type="text" class="form-control" name="address_2[]"  placeholder="Address 2" id="address_own_2[]"> <br><input type="text" class="form-control" name="owner_city[]"  placeholder="City" id="owner_city[]"><div class="row"><div class="col"><br><input type="text" class="form-control" name="owner_state[]"  placeholder="State" id="owner_state[]"></div><div class="col"><br><input type="text" class="form-control" name="owner_zip[]"  placeholder="Zip" id="owner_zip[]"></div></div> <br><a href="#" class="delete btn btn-danger">Remove</a></div></div>'
        );
    });
    $(document).on("click", ".delete", function(){
        $(this).parent().parent().remove();
    });
});
      
                            

        
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
                    }else if($('#lastname').val() == ''){
                        $('#usernameError').html('* Last name is required.');
                        return false;
                    }else if($('#lastname').val().length <2){
                        $('#usernameError').html('* Last Name is mini 2 characters');
                        return false;
                    }else if(!isNaN($('#lastname').val())){
                        $('#usernameError').html('Number are not allowed');
                        return false;
                    }else{
                        $('#second').show();
                        $('#second-b').hide();
                        $('#first').hide();
                        $('#progressBar').css('width', '30%');
                        $('#progressText').html(' ');
                    }
                    
                });
                
                $('#submit').click(function(e) {
                    
                    e.preventDefault();
                    $.ajax({
                        url:"action.php",
                        method: "post",
                        data:$('#form-data').serialize(),
                        success:function (response) {
                           
                            $("#submitme").delay(4000).show().fadeOut(1000);
                            $(".header-text").delay(4000).show().fadeOut(1000);
                            $(".sub-text").delay(4000).show().fadeOut(1000);
                             $("#final").delay(5000).hide().fadeIn(2000);
                            $('#progressBar').hide();
                            $('#third').hide();
                            $("#response").html(response);
                            console.log(response);
                            


                        }
                        
                    });
                });
                $('#next-2').click(function(e) {
                    e.preventDefault();
                    $('#second-b').hide();
                    $('#third').hide();
                    $('#second').show();
                    $('#progressBar').css('width', '90%');
                    $('#progressText').html(' ');
                });
                $('#next-2-b').click(function(e) {
                    e.preventDefault();
                    $('#second-b').show();
                    $('#third').hide();
                    $('#second').hide();
                    $('#progressBar').css('width', '60%');
                    $('#progressText').html(' ');
                });
                  $('#next-3').click(function(e) {
                    e.preventDefault();
                    $('#third').show();
                    $('#second').hide();
                     $('#second-b').hide();
                    $('#progressBar').css('width', '90%');
                    $('#progressText').html(' ');
                });
                $('#prev-2').click(function() {
                    $('#second').hide();
                                         $('#second-b').hide();

                    $('#first').show();
                    $('#progressBar').css('width', '30%');
                    $('#progressText').html(' ');
                });
                $('#prev-2-b').click(function() {
                    $('#second').show();
                                         $('#second-b').hide();

                    $('#first').hide();
                    $('#progressBar').css('width', '60%');
                    $('#progressText').html(' ');
                });
                $('#prev-3').click(function() {
                    $('#second').hide();
                                         $('#second-b').show();

                    $('#third').hide();
                    $('#progressBar').css('width', '47%');
                    $('#progressText').html(' ');
                });
            });
            

        </script>
        
  
    </body>
</html>

  