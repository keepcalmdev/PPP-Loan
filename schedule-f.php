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
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white p-4 rounded mt-5">
                   <div class="header-main"> <h2 class="header-text">See if you pre-qualify in less than 5 minutes
</h2><p class="sub-text">Get your business back on track without impacting your credit score!</p></div>
                     <div class="test-center text-dark bg-danger mb-2 p-2 rounded lead" id="response">
                        error
                    </div>
                    <div class="test-center text-dark well mb-2 p-2 rounded lead" id="submitme"><center><img src="send.gif" class="img-responsive"><h3>Submitting Your Application, Do Not Close This Window...</h3><p>This should only take a minute.</p></center></div>
                    <div class="test-center text-dark well mb-2 p-2 rounded lead" id="final">
                        Success! Your Application Has Been Submitted.
                        <p><h3>What To Expect Next?</h3></p>
                        <p> Please have the following documents ready during a follow up phone call.</p>
                        <ul><li>Tax Documents</li></ul>
                        <ul><li>Copy of the filled out PDF attached below. <br><a href="/files/f4506c_accessible.pdf" target="_blank" >https://getppphope.com/apply/f4506c_accessible.pdf (click to open)</a></li></ul>
                    </div>
                    <div class="progress mb-3" style="height: 28px;">
                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 10%;" id="progressBar">
                            <b class="lead" id="progressText"> </b>
                        </div>
                    </div>
                    <form id="form-data">
                        
                        
                        <div id="flow-1">
                             <h4 class="test-center  p-2 rounded text-dark">Company Information</h4>
 


                             
                              
                             
                            <div id="In_Business1-field_wrapper" class=" select-field_wrapper">
      <label id="In_BusinessLabel" for="Entity" class="hope_label"><b>Were you in business as of 2/15/2020?  
</b></label>
      <select id="In_Business1" name="In_Business" class="form-control">
         
        <option value="" selected="" disabled="">* Required field</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
    </div>
    
<div id="4800-1"  style="display:none;">
    
    
   <label id="4800-label">Do you have income greater than $4800 on line 9 of your 2019 or 2020 schedule F of your personal tax return?




           
        </label>
        <select id="4800" name="4800" class="form-control">
         
        <option value="" selected="" disabled="">* Required field</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>

    
</div>    
    
    
<div id="ppp-1">
    
    
    <p>
        <label id="ppp-1-label">Did you receive a PPP previously?  (note the disaster loan is different than the PPP and does not impact your ability to get a PPP).  

           
        </label>
        <select id="Receive_ppp" name="Receive_ppp" class="form-control">
         
        <option value="" selected="" disabled="">* Required field</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
    </div>
    </p>
    
    <div id="required-files-yes"  style="display:none">The SBA loan number from your first PPP.  It will be in this format  80254773-03 
    <input type="text" class="form-control" name="ppp_loan_number"  placeholder="Enter PPP Loan Number" id="ppp_loan_number">
    
  

</div>
    <div id="required-files-no"  style="display:none">
        
</div>
    


             
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-primary col" id="flow-next">Continue</a>
                            </div> 
                        </div>

                        <div id="first">

                           



                            
                            <div class="form-group">
                                <div class="row">
    <div class="col">
                                <label for="first_name"><b>First Name</b></label>
                                <input type="text" class="form-control" name="first_name"  placeholder="Enter First Name" id="name"><span style="font-size:12px; color:#646464; ">* Required Field</span>
                                <b class="form-text text-danger" id="usernameError"></b>
                                </div>  <div class="col">
                                 <label for="last_name"><b>Last Name</b></label>
                                <input type="text" class="form-control" name="last_name"  placeholder="Enter Last Name" id="lastname"><span style="font-size:12px; color:#646464; ">* Required Field</span>
                                <b class="form-text text-danger" id="usernameError"></b>

                                </div></div>

                                <div class="row"><div class="col"><label id="Email1Label" for="Email" class="email"><b>Email</b></label>
        <input id="email" class="Email form-control womplyTextField womplyRequired" name="email" maxlength="255" type="email" required><span style="font-size:12px; color:#646464; ">* Required Field</span> </div>


        <div class="col"><label id="Email1Label" for="phone" class="womplyLabel"><b>Company Phone</b></label> <input id="phone" class="phone form-control womplyTextField womplyRequired" name="phone" maxlength="255" type="phone" onfocus="" onblur="" onchange=""><span style="font-size:12px; color:#646464; ">* Required Field</span></div>

        </div>



<div><label id="Email1Label" for="phone" class="womplyLabel"><b>Mobile Phone</b></label> <input id="phone" class="phone form-control womplyTextField womplyRequired" name="phone" maxlength="255" type="phone" onfocus="" onblur="" onchange=""><span style="font-size:12px; color:#646464; "><a href="#">Send Verification Code</a>* Required Field</span></div>


         






                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-primary col" id="next-1">Continue</a>
                            </div>
                        </div>


                           <div id="second">
                            <h4 class="test-center  p-2 rounded text-dark">Company Information Cont.</h4>
                            

                            <div class="form-group">
                          <div class="row">
                              
                              <div class="col">      <label for="payroll"><b>Line 9 of your 2019 or 2020 schedule F of your personal tax return </b></label>
                                <input type="text" class="form-control" name="line-9"  placeholder="$" id="payroll">
                                <b></b>

                              </div>
                              
                              <div class="col"  style="display:none">
                                <label for="num_employees"><b>Number Of Employees?</b></label>
                                <input type="text" class="form-control" name="num_employees"  placeholder="#" id="num_employees">
                                <b></b></div>
                          </div>
<div class="form-group">
                                <label for="loan_amount"><b>Loan Amount</b></label>
                                
                               
                                 <input type="text" disabled class="form-control loan_amount" name="loan_amount"  placeholder="$" id="loan_amount" max="20833">
                                
                                <b class="form-text text-danger" id="loanAmountError"></b>
                                <p  style="font-size:14px;">Note: This is only an estimated loan amount to get your application started. It does not impact your loan approval. We can help you calculate your exact loan amount later in the application process!</p>
                            </div>
                                </div>

                            <div class="form-group">
                                <label for="phone"><b>What Is Your Business Industry?</b></label><p>If you don’t see an option that is perfect for your company, please select the closest option – you will provide the exact industry in the final application step.</p>
                                <select data-model="business" data-model-id="1154034" id="business_type_id" class="form-control "><option disabled="" value="" class="grayColor">Select an option</option><option value="18" class="">Administrative and Business Services</option><option value="1" class="">Agriculture, Forestry, Fishing and Hunting</option><option value="4" class="">Construction</option><option value="19" class="">Education</option><option value="14" class="">Financial Services</option><option value="20" class="">Healthcare and Social Services</option><option value="17" class="">Holding Companies</option><option value="22" class="">Hospitality and Food Services</option><option value="5" class="">Manufacturing</option><option value="2" class="">Mining, Quarrying, and Oil &amp; Gas Extraction</option><option value="23" class="">Other Services (Repair, Personal Care, and Religious &amp; Social Organizations)</option><option value="16" class="">Professional Services</option><option value="24" class="">Public Administration</option><option value="15" class="">Real Estate</option><option value="21" class="">Recreation, Entertainment, and Arts</option><option value="10" class="">Retail Trade</option><option value="13" class="">Technology, Publishing, and Telecom</option><option value="11" class="">Transportation and Warehousing</option><option value="3" class="">Utilities</option><option value="8" class="">Wholesale Trade</option></select>
                            </div>
                            
                            <hr>
                            
                                                          <h4> Choose which document you would like to use in order to determine your loan amount.</h4>
                               
                               
 
                               <label><b>Required Documents</b><br>Please upload the following:
1) Copy of your filed 2019 or 2020 personal tax return
2) Pictures of driver's licenenses (front and back) - cannot be expired (passport is ok)
</label>
                            <div class="file-upload-wrapper">
                              
    <label class="file-field" data-max-files="6">

           <br> <h4 class="drag-zone">Drop files to upload or</h4>
            <div class="btn col btn-success">Browse<input type="file" name="photos[]" class="hide_files" multiple></div>
            <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
    </label>
    <div class="uploaded-files row"></div>
</div>


                    <div id="monthly-gross"  style="display:none"><label>Monthly gross sales/revenue for each quarter in 2019 and 2020.  To qualify for a 2nd PPP, you must have experienced a decline of 25% or more in revenue in at least one quarter in 2020 compared to the same quarter in 2019.  
                    </label>
                     <input type="text" class="form-control" name="revenue"  placeholder="$" id="revenue">
                     
                     <p> Provide backup to substantiate - (quickbooks p&l, bank statements, square/clover statements etc)</p>
                     
                     </div>
                    
                    
                   
<h3>File Upload</h3>
                            <div class="file-upload-wrapper-2">
                              
    <label class="file-field-2" data-max-files="6">

           <br> <h4 class="drag-zone">Drop files to upload or</h4>
            <div class="btn col btn-success">Browse<input type="file" name="photos-2[]" class="hide_files" multiple></div>
            <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
    </label>
    <div class="uploaded-files-2 row"></div>
</div>


                            
                            
                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-2">Previous</a>
                                <a href="#" class="btn btn-primary" id="submit">Continue</a>
                            </div>
                        </div>


                          <div id="second-b">
                            <h4 class="test-center  p-2 rounded text-dark">Business Ownership</h4>
                            
                           

                            <div class="form-group">
                                <label for="email"><b>Who Owns Your Business?</b></label>
                                <input type="text" class="form-control" name="owner[]"  placeholder="Owner Full Name" id="owner[]">
                                <b></b>
                            </div>

                            <div class="form-group">

                               <div class="row"><div class="col"> <input type="text" class="form-control" name="title[]"  placeholder="Title" id="title[]">
                               </div><div class="col"><input type="text" class="form-control" name="owner_percentage[]"  placeholder="Owner %" id="owner_percentage[]"></div></div>
                               <br><input type="text" class="form-control" name="ein[]"  placeholder="Owner SSN" id="ein[]">
                               <p>Please enter owner SSN unless owner is a business then enter TIN</p>
                               <input type="text" class="form-control" name="address[]"  placeholder="Address" id="address_own[]">
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
                                <label for="email">Is the Applicant or any owner of the Applicant presently suspended, debarred, proposed for debarment, declared ineligible,voluntarily excluded from participation in this transaction by any Federal department or agency, or presently involved in any bankruptcy?</label>
                                <select id="LoanNum2" name="q1" class="form-control">
        <option value="" selected="" disabled="true">* Required Field</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>


                                  <div class="form-group">
                                <label for="email">Has the Applicant, any owner of the Applicant, or any business owned or controlled by any of them, ever obtained a direct orguaranteed loan from SBA or any other Federal agency (other than a Federal student loan made or guaranteed through a programadministered by the Department of Education) that is (a) currently delinquent, or (b) has defaulted in the last 7 years and caused a loss to the government?</label>
                                <select id="LoanNum3" name="q2" class="form-control">
       <option value="" selected="" disabled="true">* Required Field</option>
      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>


                                  <div class="form-group">
                                <label for="email">Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?</label>
                                <select id="LoanNum4" name="q3" class="form-control">
<option value="" selected="" disabled="true">* Required Field</option>      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>


                                  <div class="form-group">
                                <label for="email">Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?</label>
                                <select id="LoanNum5" name="q4" class="form-control">
<option value="" selected="" disabled="true">* Required Field</option>      <option value="Yes">Yes</option><option value="No">No</option></select>
                                </div>




                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-3">Previous</a>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Continue</button>
                            </div>
                        </div>
                    </form>
                   
                </div>
                
            </div>
        </div>

 <body>


   </div>
  
 </div>
 <?php include 'footer.php'; ?>
 
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

                        >



 <script>var photos2 = [];
var data;
$(document).ready ( function() {
    //Documnet Upload Script//
    function fileUpload2(obj){
        var dropZone = obj.find('.file-field-2');
        var fileInput = dropZone.find('input[type="file"]');
        var filesBeen = obj.find('.uploaded-files-2');
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

    $('.file-upload-wrapper-2').each(function(){
        new fileUpload2($(this));
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
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }else if($('#name').val().length <3){
                        $('#nameError').html('* Name is mini 3 characters');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }else if(!isNaN($('#name').val())){
                        $('#nameError').html('Number are not allowed');
                        return false;
                    }else if($('#lastname').val() == ''){
                        $('#usernameError').html('* Last name is required.');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }else if($('#lastname').val().length <2){
                        $('#usernameError').html('* Last Name is mini 2 characters');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }else if(!isNaN($('#lastname').val())){
                        $('#usernameError').html('Number are not allowed');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }else{
                        $('#second').show();
                        $('#second-b').hide();
                        $('#first').hide();
                        $('#progressBar').css('width', '30%');
                        $('#progressText').html(' ');
                    }
 $('html, body').animate({ scrollTop: 0 }, 200);
                });

                $('#submit').click(function(e) {
e.preventDefault();
$('html, body').animate({ scrollTop: 0 }, 200);
$('#progressBar').hide();
$(".header-main").hide();
$('#second').hide();

$("#submitme").hide().fadeIn(2000);


var form_el = $('#form-data')[0];
var form_data = new FormData(form_el);
$.each(photos, function(i, file) {
form_data.append('photos[]' || 'photos2[]', file);
});
                    
                    $.ajax({
                        url: "action.php",
                        method: "POST",
                        data: form_data,
                        enctype: 'multipart/form-data',
                        processData: false,  // Important!
                        contentType: false,
                        cache: false,
                        success:function (response) {

                            $("#submitme").hide();
                             $("#final").fadeIn(1000);
                           
                            $("#response").html(response);
                            console.log(response);
                             $('html, body').animate({ scrollTop: 0 }, 200);



                        }

                    });
                });
                      $('#flow-next').click(function(e) {
                    e.preventDefault();
                   

                        $('#second-b').hide();
                        $('#third').hide();
                        $('#second').hide();
                         $('#flow-1').hide();
                        $('#first').show();
                        $('#progressBar').css('width', '20%');
                        $('#progressText').html(' ');
                         $('html, body').animate({ scrollTop: 0 }, 200);

                });
                $('#next-2').click(function(e) {
                    e.preventDefault();
                    alert(loan_amount.val());

                        $('#second-b').hide();
                        $('#third').hide();
                        $('#second').show();
                        $('#progressBar').css('width', '90%');
                        $('#progressText').html(' ');
                         $('html, body').animate({ scrollTop: 0 }, 200);

                });
                $('#next-2-b').click(function(e) {
                    e.preventDefault();
                    if ($('#loan_amount').val() == '') {
                        $('#loanAmountError').html('* Loan amount is required.');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }
                    else if (isNaN($('#loan_amount').val())) {
                        $('#loanAmountError').html('* Loan amount should be a number.');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                        return false;
                    }else {
                        $('#second-b').show();
                        $('#third').hide();
                        $('#second').hide();
                        $('#progressBar').css('width', '60%');
                        $('#progressText').html(' ');
                         $('html, body').animate({ scrollTop: 0 }, 200);
                    }
                });
                  $('#next-3').click(function(e) {
                    e.preventDefault();
                    $('#third').show();
                    $('#second').hide();
                     $('#second-b').hide();
                    $('#progressBar').css('width', '90%');
                    $('#progressText').html(' ');
                     $('html, body').animate({ scrollTop: 0 }, 200);
                });
                $('#prev-2').click(function() {
                    $('#second').hide();
                                         $('#second-b').hide();

                    $('#first').show();
                    $('#progressBar').css('width', '30%');
                    $('#progressText').html(' ');
                     $('html, body').animate({ scrollTop: 0 }, 200);
                   
                });
                $('#prev-2-b').click(function() {
                    $('#second').show();
                                         $('#second-b').hide();

                    $('#first').hide();
                    $('#progressBar').css('width', '60%');
                    $('#progressText').html(' ');
                     $('html, body').animate({ scrollTop: 0 }, 200);
                });
                $('#prev-3').click(function() {
                    $('#second').hide();
                                         $('#second-b').show();

                    $('#third').hide();
                    $('#progressBar').css('width', '47%');
                    $('#progressText').html(' ');
                     $('html, body').animate({ scrollTop: 0 }, 200);
                });
            });

$('form input').on('keypress', function(e) {
    return e.which !== 13;
});







$('select[name=In_Business]').change(function () {
    if ($(this).val() == 'Yes') {
        $('#4800-1').show();
       
    } else {
        $('#4800-1').hide();
    }
    
});

$('select[name=4800]').change(function () {
    if ($(this).val() == 'Yes') {
        $('#ppp-1').show();
        
       
    } else {
        $('#ppp-1').hide();
    }
    
});


$('select[name=Receive_ppp]').change(function () {
    if ($(this).val() == 'No') {
        $('#required-files-no').show();
        
       
    } else {
        $('#required-files-no').hide();
    }
    
});


$('select[name=Receive_ppp]').change(function () {
    if ($(this).val() == 'Yes') {
        $('#required-files-yes').show();
         $('#monthly-gross').show();
        
       
    } else {
        $('#required-files-yes').hide();
        $('#monthly-gross').hide();
    }
    
});

$('select[name=Entity]').change(function () {
    if ($(this).val() == 'Self-employed Farmer' ) {
        $('#schedule-f').show();
       
    } else {
        $('#schedule-f').hide();
    }
    
});





//calculator

$('#payroll, #num_employees').on("keyup change", function() {
    var payroll = parseFloat($('#payroll').val());
    var employees  = parseFloat($('#num_employees').val());
    var sum  = payroll /12 * 2.5;
  
    $('#loan_amount').val(sum);
    
});




   </script>


    </body>
</html>

  