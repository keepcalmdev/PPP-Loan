
<html> 
<head> 
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script> 
    <script src="http://malsup.github.com/jquery.form.js"></script> 
 
    <script> 
        // wait for the DOM to be loaded 
        $(document).ready(function() { 
            // bind 'myForm' and provide a simple callback function 
            $('#myForm').ajaxForm(function() { 
                alert("Thank you for your comment!"); 
            }); 
        }); 
    </script> 
</head> 
<body>

<form id="myForm" action="comment.php" method="post"> 
    Name: <input type="text" name="name" />
    Comment: <textarea name="comment"></textarea>
    <input type="submit" value="Submit Comment" />
</form>



<h4> Choose which document you would like to use in order to determine your loan amount.</h4>
<label><b>Tax Documents</b><br>
    Use your business tax return you most recently filed. This includes one of the following: 1040 Schedule C, 1120-S, 1065, 1120, and 990 for non-profits. In addition, you may also need form 941/940.</label>
<div class="file-upload-wrapper">
    <label class="file-field" data-max-files="6">
        <br>
        <h4 class="drag-zone">Drop files to upload or</h4>
        <div class="btn col btn-success">Browse<input type="file" name="photos[]" class="hide_files" multiple></div>
        <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
    </label>
    <div class="uploaded-files row"></div>
</div>



<label><b>Articles of Incorporation</b><br>
    Please upload your articles of incorporation</label>
<div class="file-upload-wrapper-2">
    <label class="file-field-2" data-max-files="6">
        <br>
        <h4 class="drag-zone">Drop files to upload or</h4>
        <div class="btn col btn-success">Browse<input type="file" name="photos-2[]" class="hide_files" multiple></div>
        <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
    </label>
    <div class="uploaded-files-2 row"></div>
</div>



</body>

</html>