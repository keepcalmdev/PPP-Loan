<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>PPP Loan</title>
<?php 
require 'nav_top.php';
?>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
<body>

<form id="regForm" action="/action_page.php">
  <h1>Register:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h4 class="test-center  p-2 rounded text-dark">Company Information</h4>
 


                             
                               <div id="Entity1-field_wrapper" class="womplyFormRow select-field_wrapper">
                                   <label  class="Label"><b>Did you receive a PPP loan in 2020 or 2021?</b>  (note the disaster loan is different than the PPP and does not impact your ability to get a PPP).
</label>
<br>
<input type="radio" id="in_business" name="in_business" value="yes">
  <label for="in_business"> Yes </label>
  <input type="radio" id="in_business" name="in_business" value="no">
  <label for="in_business"> No</label><br>
  
  <span style="font-size:12px; color:#646464; ">* Required Field</span>
    </div>
                             
                             
                            <div id="Entity1-field_wrapper" class="womplyFormRow select-field_wrapper">
      <label id="Entity1Label" for="Entity" class="hope_label"><b>Business Legal Entity Type</b></label>
      <select id="Entity1" name="Entity" class="form-control">
        <option value="" selected="" disabled="">* Required field</option>
      <option value="Sole proprietor">Sole proprietor</option><option value="Partnership">Partnership</option><option value="C-Corp">C-Corp</option><option value="S-Corp">S-Corp</option><option value="LLC">LLC</option><option value="Independent contractor">Independent contractor</option><option value="Eligible self-employed individual">Eligible self-employed individual</option><option value="501(c)(3) nonprofit">501(c)(3) nonprofit</option><option value="501(c)(19) veterans organization">501(c)(19) veterans organization</option><option value="Tribal business (sec. 31(b)(2)(C) of Small Business Act)">Tribal business (sec. 31(b)(2)(C) of Small Business Act)</option><option value="Self-employed Farmer">Self-employed Farmer</option><option value="Self-employed Farmer">Other</option></select>
    </div>
<div id="schedule-f">
    <p>
        <label id="schedule-f-label">Please Specify what line 9 on Schedule F is:
            <input name="schedule-f" type="text" class="form-control" placeholder="Schedule F" size="50" />
        </label>
    </p>
</div>
<div id="schedule-c">
    <p>
        <label id="schedule-c-label">Please Specify what line 9 on Schedule C is:
            <input name="schedule-c" type="text" class="form-control" placeholder="Schedule C" size="50" />
        </label>
    </p>
</div>
      
      <div class="file-upload-wrapper">
                              
    <label class="file-field" data-max-files="6">

           <br> <h4 class="drag-zone">Drop files to upload or</h4>
            <div class="btn col btn-success">Browse<input type="file" name="photos[]" class="hide_files" multiple></div>
            <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
    </label>
    <div class="uploaded-files row"></div>
</div>
  </div>
  <div class="tab">Contact Info:
    <p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
    <p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Birthday:
    <p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
    <p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
    <p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
  </div>
  <div class="tab">Login Info:
    <p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
    <p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
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
</body>
</html>
