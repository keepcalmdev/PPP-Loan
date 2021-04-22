<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PPP Loan</title>
</head>

<body>

<?php
require 'nav_top.php';
$db_fields = $ppploan->get_db_fields();
$db_fields_owners = $ppploan_owners->get_db_fields();
?>

<style type="text/css" media="screen">
    /*#first, #second, #second-b, #third{*/
        /*display: block !important;*/
    /*}*/
    /*#second-b{*/
        /*display: block !important;*/
    /*}*/
</style>

<div id="page-container">
    <div id="content-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white p-4 rounded mt-5">
                    <div class="header-main">
                        <h2 class="header-text">See if you pre-qualify in less than 5 minutes
                        </h2>
                        <p class="sub-text">Get your business back on track without impacting your credit score!</p>
                    </div>
                    <div id="response"></div>
                    <div class="test-center text-dark well mb-2 p-2 rounded lead" id="submitme">
                        <center><img src="send.gif" class="img-responsive">
                            <h3>Submitting Your Application, Do Not Close This Window...</h3>
                            <p>This should only take a minute.</p>
                        </center>
                    </div>
                    <div class="test-center text-dark well mb-2 p-2 rounded lead" id="final">
                        Success! Your Application Has Been Submitted.
                        <p>
                        <h3>What To Expect Next?</h3>
                        </p>
                        <p> Please have the following documents ready during a follow up phone call.</p>
                        <ul>
                            <li>Tax Documents</li>
                        </ul>
                        <ul>
                            <li>Copy of the filled out PDF attached below. <br><a href="/files/f4506c_accessible.pdf" target="_blank">https://getppphope.com/apply/f4506c_accessible.pdf (click to open)</a></li>
                        </ul>
                    </div>
                    <div class="progress mb-3" style="height: 28px;">
                        <div class="progress-bar bg-success rounded" role="progressbar" style="width: 10%;" id="progressBar">
                            <b class="lead" id="progressText"> </b>
                        </div>
                    </div>
                    <form id="form-data" method="post">
                        <div id="flow-1">
                            <h4 class="test-center  p-2 rounded text-dark">Company Information</h4>
                            <div id="Entity1-field_wrapper" class="womplyFormRow select-field_wrapper">
                                <label class="Label"><b>Did you receive a PPP loan in 2020 or 2021?</b> (note the disaster loan is different than the PPP and does not impact your ability to get a PPP).
                                </label>
                                <br>
                                <input type="radio" id="in_business" name="loan_request[<?php echo $db_fields['is_received_in_2020_2021']['code']; ?>]" value="1">
                                <label for="in_business"> Yes </label>
                                <input type="radio" id="in_business" name="loan_request[<?php echo $db_fields['is_received_in_2020_2021']['code']; ?>]"" value="0">
                                <label for="in_business"> No</label><br>
                                <span style="font-size:12px; color:#646464; ">* Required Field</span>
                            </div>
                            <div id="Entity1-field_wrapper" class="womplyFormRow select-field_wrapper">
                                <label id="Entity1Label" for="Entity" class="hope_label"><b>Business Legal Entity Type</b></label>
                                <select id="Entity1" name="loan_request[<?php echo $db_fields['business_legal_entity_type']['code']; ?>]" class="form-control">
                                    <option value="" selected="" disabled="">* Required field</option>
                                    <option value="Sole proprietor">Sole proprietor</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="C-Corp">C-Corp</option>
                                    <option value="S-Corp">S-Corp</option>
                                    <option value="LLC">LLC</option>
                                    <option value="Independent contractor">Independent contractor</option>
                                    <option value="Eligible self-employed individual">Eligible self-employed individual</option>
                                    <option value="501(c)(3) nonprofit">501(c)(3) nonprofit</option>
                                    <option value="501(c)(19) veterans organization">501(c)(19) veterans organization</option>
                                    <option value="Tribal business (sec. 31(b)(2)(C) of Small Business Act)">Tribal business (sec. 31(b)(2)(C) of Small Business Act)</option>
                                    <option value="Self-employed Farmer">Self-employed Farmer</option>
                                    <option value="Self-employed Farmer">Other</option>
                                </select>
                            </div>
                            <div id="schedule-f">
                                <p>
                                    <label id="schedule-f-label">Please Specify what line 9 on Schedule F is:
                                        <input name="loan_request[<?php echo $db_fields['schedule_f']['code']; ?>]" type="text" class="form-control" placeholder="Schedule F" size="50" />
                                    </label>
                                </p>
                            </div>
                            <div id="schedule-c">
                                <p>
                                    <label id="schedule-c-label">Please Specify what line 9 on Schedule C is:
                                        <input name="loan_request[<?php echo $db_fields['schedule_c']['code']; ?>]" type="text" class="form-control" placeholder="Schedule C" size="50" />
                                    </label>
                                </p>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-primary col" id="flow-next">Continue</a>
                            </div>
                        </div>
                        <div id="first">
                            <div class="form-group">
                                <label for="name"><b>Company Name</b></label>
                                <input type="text" class="form-control" name="loan_request[<?php echo $db_fields['company_name']['code']; ?>]" placeholder="Enter Company Name" id="name"><span style="font-size:12px; color:#646464; ">* Required Field</span>
                                <b class="form-text text-danger" id="nameError"></b>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col">
                                        <label for="first_name"><b>First Name</b></label>
                                        <input type="text" class="form-control" name="loan_request[<?php echo $db_fields['first_name']['code']; ?>]" placeholder="Enter First Name" id="firstname"><span style="font-size:12px; color:#646464; ">* Required Field</span>
                                        <b class="form-text text-danger" id="usernameError"></b>
                                    </div>
                                    <div class="col">
                                        <label for="last_name"><b>Last Name</b></label>
                                        <input type="text" class="form-control" name="loan_request[<?php echo $db_fields['last_name']['code']; ?>]" placeholder="Enter Last Name" id="lastname"><span style="font-size:12px; color:#646464; ">* Required Field</span>
                                        <b class="form-text text-danger" id="userLastnameError"></b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col"><label id="Email1Label" for="Email" class="email"><b>Email</b></label>
                                        <input id="email" class="Email form-control womplyTextField womplyRequired" name="loan_request[<?php echo $db_fields['email']['code']; ?>]" maxlength="255" type="email" required><span style="font-size:12px; color:#646464; ">* Required Field</span>
                                    </div>
                                    <div class="col"><label id="Email1Label" for="phone" class="womplyLabel"><b>Company Phone</b></label> <input id="phone" class="phone form-control womplyTextField womplyRequired" name="loan_request[<?php echo $db_fields['company_phone']['code']; ?>]" maxlength="255" type="number" onfocus="" onblur="" onchange=""><span style="font-size:12px; color:#646464; ">* Required Field</span></div>
                                </div>
                                <div><label id="Email1Label" for="phone" class="womplyLabel"><b>Mobile Phone</b></label> <input id="phone" class="phone form-control womplyTextField womplyRequired" name="loan_request[<?php echo $db_fields['mobile_phone']['code']; ?>]" maxlength="255" type="number" onfocus="" onblur="" onchange=""><span style="font-size:12px; color:#646464; "><a href="#">Send Verification Code</a>* Required Field</span></div>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-lg btn-primary col" id="next-1">Continue</a>
                            </div>
                        </div>
                        <div id="second">
                            <h4 class="test-center  p-2 rounded text-dark">Company Information Cont.</h4>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col"> <label for="payroll"><b>Average Monthly Payroll?</b></label>
                                        <input type="number" class="form-control" name="loan_request[<?php echo $db_fields['average_monthly_payroll']['code']; ?>]" placeholder="$" id="payroll">
                                        <b></b>
                                    </div>
                                    <div class="col">
                                        <label for="num_employees"><b>Number Of Employees?</b></label>
                                        <input type="number" class="form-control" name="loan_request[<?php echo $db_fields['number_employees']['code']; ?>]" placeholder="#" id="num_employees">
                                        <b></b>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="loan_amount"><b>Loan Amount</b></label>
                                    <input type="number" readonly class="form-control loan_amount" name="loan_request[<?php echo $db_fields['loan_amount']['code']; ?>]" placeholder="$" id="loan_amount">
                                    <b class="form-text text-danger" id="loanAmountError"></b>
                                    <p style="font-size:14px;">Note: This is only an estimated loan amount to get your application started. It does not impact your loan approval. We can help you calculate your exact loan amount later in the application process!</p>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="phone"><b>What Is Your Business Industry?</b></label>
                                <p>If you don’t see an option that is perfect for your company, please select the closest option – you will provide the exact industry in the final application step.</p>
                                <select data-model="business" data-model-id="1154034" id="business_type_id" class="form-control" name="loan_request[<?php echo $db_fields['business_industry']['code']; ?>]">
                                    <option disabled="" value="" class="grayColor">Select an option</option>
                                    <option value="Administrative and Business Services" class="">Administrative and Business Services</option>
                                    <option value="Agriculture, Forestry, Fishing and Hunting" class="">Agriculture, Forestry, Fishing and Hunting</option>
                                    <option value="Construction" class="">Construction</option>
                                    <option value="Education" class="">Education</option>
                                    <option value="Financial Services" class="">Financial Services</option>
                                    <option value="Healthcare and Social Services" class="">Healthcare and Social Services</option>
                                    <option value="Holding Companies" class="">Holding Companies</option>
                                    <option value="Hospitality and Food Services" class="">Hospitality and Food Services</option>
                                    <option value="Manufacturing" class="">Manufacturing</option>
                                    <option value="Mining, Quarrying, and Oil &amp; Gas Extraction" class="">Mining, Quarrying, and Oil &amp; Gas Extraction</option>
                                    <option value="Other Services (Repair, Personal Care, and Religious &amp; Social Organizations)" class="">Other Services (Repair, Personal Care, and Religious &amp; Social Organizations)</option>
                                    <option value="Professional Services" class="">Professional Services</option>
                                    <option value="Public Administration" class="">Public Administration</option>
                                    <option value="Real Estate" class="">Real Estate</option>
                                    <option value="Recreation, Entertainment, and Arts" class="">Recreation, Entertainment, and Arts</option>
                                    <option value="Retail Trade" class="">Retail Trade</option>
                                    <option value="Technology, Publishing, and Telecom" class="">Technology, Publishing, and Telecom</option>
                                    <option value="Transportation and Warehousing" class="">Transportation and Warehousing</option>
                                    <option value="Utilities" class="">Utilities</option>
                                    <option value="Wholesale Trade" class="">Wholesale Trade</option>
                                </select>
                            </div>
                            <hr>
                            <h4> Choose which document you would like to use in order to determine your loan amount.</h4>
                            <label><b>Tax Documents</b><br>
                                Use your business tax return you most recently filed. This includes one of the following: 1040 Schedule C, 1120-S, 1065, 1120, and 990 for non-profits. In addition, you may also need form 941/940.</label>
                            <div class="file-upload-wrapper" id="tax-documents">
                                <label class="file-field" data-max-files="6">
                                    <br>
                                    <h4 class="drag-zone">Drop files to upload or</h4>
                                    <div class="btn col btn-success">Browse<input type="file" class="hide_files" multiple autocomplete="off"></div>
                                    <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
                                </label>
                                <div class="uploaded-files row"></div>
                            </div>
                            <label><b>Articles of Incorporation</b><br>
                                Please upload your articles of incorporation</label>
                            <div class="file-upload-wrapper" id="articles-incorporations">
                                <label class="file-field-2" data-max-files="6">
                                    <br>
                                    <h4 class="drag-zone">Drop files to upload or</h4>
                                    <div class="btn col btn-success">Browse<input type="file" class="hide_files" multiple autocomplete="off"></div>
                                    <p style="font-size:14px;"><b>Allowed File Formats: </b>.jpg, .png and .pdf</p>
                                </label>
                                <div class="uploaded-files-2 row"></div>
                            </div>
                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-2">Previous</a>
                                <a href="#" class="btn btn-primary" id="next-2-b">Continue</a>
                            </div>
                        </div>

                        <div id="second-b" class="business-ownership">
                            <h4 class="test-center  p-2 rounded text-dark">Business Ownership</h4>
                            <div class="form-group">
                                <label for="business_owner"><b>Who Owns Your Business?</b></label>
                                <input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['title']['code']; ?>]" placeholder="Owner Full Name" id="business_owner">
                                <b></b>
                            </div>
                            <div class="form-group business-owner-fields" data-owner_counter="0">
                                <div class="row">
                                    <div class="col"> <input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['title']['code']; ?>]" placeholder="Title">
                                    </div>
                                    <div class="col"><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['percent']['code']; ?>]" placeholder="Owner %"></div>
                                </div>
                                <br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['ssn']['code']; ?>]" placeholder="Owner SSN">
                                <p>Please enter owner SSN unless owner is a business then enter TIN</p>
                                <input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['address']['code']; ?>]" placeholder="Address">
                                <br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['address_2']['code']; ?>]" placeholder="Address 2">
                                <br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['city']['code']; ?>]" placeholder="City">

                                <div class="row">
                                    <div class="col"><br><input type="text" class="form-control" name="owners[0][<?php echo $db_fields_owners['state']['code']; ?>]" placeholder="State"></div>
                                    <div class="col"><br><input type="number" class="form-control" name="owners[0][<?php echo $db_fields_owners['zip']['code']; ?>]" placeholder="Zip"></div>
                                </div>
                            </div>
                            <div class="appending_div"></div>
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
                                <select id="LoanNum2" name="loan_request[<?php echo $db_fields['question_1']['code']; ?>]" class="form-control">
                                    <option value="" selected="" disabled="true">* Required Field</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Has the Applicant, any owner of the Applicant, or any business owned or controlled by any of them, ever obtained a direct orguaranteed loan from SBA or any other Federal agency (other than a Federal student loan made or guaranteed through a programadministered by the Department of Education) that is (a) currently delinquent, or (b) has defaulted in the last 7 years and caused a loss to the government?</label>
                                <select id="LoanNum3" name="loan_request[<?php echo $db_fields['question_2']['code']; ?>]" class="form-control">
                                    <option value="" selected="" disabled="true">* Required Field</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?</label>
                                <select id="LoanNum4" name="loan_request[<?php echo $db_fields['question_3']['code']; ?>]" class="form-control">
                                    <option value="" selected="" disabled="true">* Required Field</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="email">Within the last 5 years, for any felony involving fraud, bribery, embezzlement, or a false statement in a loan application or anapplication for federal financial assistance, has the Applicant (if an individual) or any owner of the Applicant 1) been convicted; 2)pleaded guilty; 3) pleaded nolo contendere; or 4) commenced any form of parole or probation (including probation before judgment)?</label>
                                <select id="LoanNum5" name="loan_request[<?php echo $db_fields['question_4']['code']; ?>]" class="form-control">
                                    <option value="" selected="" disabled="true">* Required Field</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <a href="#" class="btn btn-default" id="prev-3">Previous</a>
                                <button type="submit" id="submit" name="submit" class="btn btn-primary" disabled>Continue</button>
                            </div>
                        </div>
                    </form>
                    <center><img src="secure.png" style="max-width:130px; margin-top:30px;"></center>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<script>
var photos1;
var data;

$(document).ready(function() {
    photos1 = [];
    //Documnet Upload Script//
    function fileUpload(obj) {
        var dropZone = obj.find('.file-field');
        var fileInput1 = dropZone.find('input[type="file"]');
        var filesBeen = obj.find('.uploaded-files');
        var maxFiles = Number(dropZone.attr('data-max-files'));

    function highlightDropZone(e) {
        if (e.type == 'dragover') dropZone.addClass('highlighted');
        else dropZone.removeClass('highlighted');
        e.preventDefault();
        return false;
    }

    function filesDropped(e) {
        highlightDropZone(e);
        var files = e.target.files || e.dataTransfer.files;
        for (var i = 0, file; file = files[i]; i++) {
            if (file.size <= 3000000 && (file.type == "application/pdf" || file.type == "image/jpg" || file.type == "image/jpeg" || file.type == "image/png")) {
                photos1.push(file);
                if (file.type == "application/pdf") {
                    var uploaded = filesBeen.prepend('<div><div><img src="pdf.png" style="max-height:80px;"></div><span></span></div>');
                    uploaded.find('span').click(function() {
                        $(this).closest('div').animate({
                            width: 0,
                            height: 0
                        }, 200, function() {
                            $(this).remove()
                        });
                    });
                } else {
                    var fReader = new FileReader();
                    fReader.onloadend = (function(f) {
                        return function() {
                            if (maxFiles > Number(filesBeen.children('div').length)) {
                                var uploaded = filesBeen.prepend('<div><div><img src="' + this.result + '"></div><p><span></span></p><span></span></div>');
                                uploaded.find('span').click(function() {
                                    var me = $(this);
                                    $(this).closest('div').animate({
                                        width: 0,
                                        height: 0
                                    }, 200, function() {
                                        $(this).remove();
                                        me.unbind('click');
                                    });
                                });
                            }
                        }
                    })(file);
                    fReader.readAsDataURL(file);
                }
            } else {
                window.alert("The size of the file is more than 3Mb or format is not supported.");
            }
        }
//        console.log('filesDropped photos1', photos1);
    }

    dropZone.get(0).addEventListener('dragover', highlightDropZone);
    dropZone.get(0).addEventListener('dragleave', highlightDropZone);
    dropZone.get(0).addEventListener('drop', filesDropped);
    fileInput1.get(0).addEventListener('change', filesDropped);
}

$('.file-upload-wrapper#tax-documents').each(function() {
    new fileUpload($(this));
});
});
</script>

<script>
var photos2;
var data;

$(document).ready(function() {
    photos2 = [];
    //Documnet Upload Script//
    function fileUpload2(obj) {
        var dropZone = obj.find('.file-field-2');
        var fileInput2 = dropZone.find('input[type="file"]');
        var filesBeen = obj.find('.uploaded-files-2');
        var maxFiles = Number(dropZone.attr('data-max-files'));

    function highlightDropZone(e) {
        if (e.type == 'dragover') dropZone.addClass('highlighted');
        else dropZone.removeClass('highlighted');
        e.preventDefault();
        return false;
    }

    function filesDropped(e) {
        highlightDropZone(e);
        var files2 = e.target.files || e.dataTransfer.files;
        for (var i = 0, file; file = files2[i]; i++) {
            if (file.size <= 3000000 && (file.type == "application/pdf" || file.type == "image/jpg" || file.type == "image/jpeg" || file.type == "image/png")) {
                photos2.push(file);
                if (file.type == "application/pdf") {
                    var uploaded = filesBeen.prepend('<div><div><img src="pdf.png" style="max-height:80px;"></div><span></span></div>');
                    uploaded.find('span').click(function() {
                        $(this).closest('div').animate({
                            width: 0,
                            height: 0
                        }, 200, function() {
                            $(this).remove()
                        });
                    });
                } else {
                    var fReader = new FileReader();
                    fReader.onloadend = (function(f) {
                        return function() {
                            if (maxFiles > Number(filesBeen.children('div').length)) {
                                var uploaded = filesBeen.prepend('<div><div><img src="' + this.result + '"></div><p><span></span></p><span></span></div>');
                                uploaded.find('span').click(function() {
                                    var me = $(this);
                                    $(this).closest('div').animate({
                                        width: 0,
                                        height: 0
                                    }, 200, function() {
                                        $(this).remove();
                                        me.unbind('click');
                                    });
                                });
                            }
                        }
                    })(file);
                    fReader.readAsDataURL(file);
                }
            } else {
                window.alert("The size of the file is more than 3Mb or format is not supported.");
            }
        }
//        console.log('filesDropped2 photos2', photos2);
    }
    dropZone.get(0).addEventListener('dragover', highlightDropZone);
    dropZone.get(0).addEventListener('dragleave', highlightDropZone);
    dropZone.get(0).addEventListener('drop', filesDropped);
    fileInput2.get(0).addEventListener('change', filesDropped);
}

    $('.file-upload-wrapper#articles-incorporations').each(function() {
        new fileUpload2($(this));
    });
});
    </script>

    <script type="text/javascript">
        //<input type="text" class="form-control" name="ein"  placeholder="Business TIN (EIN, SSN, ITIN)" id="ein[]"> &nbsp; <input type="text" class="form-control" name="address"  placeholder="Address" id="address_own[]"></div>

$(document).ready(function() {
    $("#add-owner").on("click", function() {
        var form_groups = $(this).closest(".business-ownership").find(".business-owner-fields");
        var last_form_group = form_groups[ form_groups.length - 1 ];
        var counter = parseInt($(last_form_group).data("owner_counter")) + 1;
        var html = $(last_form_group).html();

        var new_html = html.replace(/owners\[\d+\]/g, "owners[" + counter + "]");
        var data_owner_counter = ' data-owner_counter="' + counter;

        $(".appending_div").append(
        '<div><div class="appending_div2"><hr><h4>Co-Owner</h4><div class="form-group business-owner-fields"' + data_owner_counter + '">' + new_html + '</div><br><a href="#" class="delete btn btn-danger">Remove</a></div></div>'
        );
    });
    $(document).on("click", ".delete", function() {
        $(this).parent().parent().remove();
    });
});

$(document).ready(function() {


    $('#next-1').click(function(e) {
        e.preventDefault();
        if ($('#name').val() == '') {
            $('#nameError').html('* Name is required.');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if ($('#name').val().length < 3) {
            $('#nameError').html('* Name is mini 3 characters');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if (!isNaN($('#name').val())) {
            $('#nameError').html('Number are not allowed');
            return false;
        } else if ($('#firstname').val() == '') {
            $('#usernameError').html('* First name is required.');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if ($('#firstname').val().length < 2) {
            $('#usernameError').html('* First Name is mini 2 characters');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if (!isNaN($('#firstname').val())) {
            $('#usernameError').html('Number are not allowed');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if ($('#lastname').val() == '') {
            $('#userLastnameError').html('* Last name is required.');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if ($('#lastname').val().length < 2) {
            $('#userLastnameError').html('* Last Name is mini 2 characters');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if (!isNaN($('#lastname').val())) {
            $('#userLastnameError').html('Number are not allowed');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else {
            $('#second').show();
            $('#second-b').hide();
            $('#first').hide();
            $('#progressBar').css('width', '30%');
            $('#progressText').html(' ');
        }
        $('html, body').animate({
            scrollTop: 0
        }, 200);
    });

    $('#LoanNum5').change(function () {
        if ($(this).val() !== '') {
            $('#submit').prop('disabled', false)
        }
    });

    $('#submit').click(function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 200);
        $('#progressBar').hide();
        $(".header-main").hide();
        $('#third').hide();
        $("#submitme").hide().fadeIn(2000);
        $("#response").empty();

        var form_el = $('#form-data')[0];
        var form_data = new FormData(form_el);

        $.each(photos1, function(i, file) {
            form_data.append('tax_documents[]', file);
        });
        $.each(photos2, function(i, file) {
            form_data.append('articles_incorporations[]', file);
        });

        $.ajax({
            url: "action.php",
            method: "POST",
            data: form_data,
            enctype: 'multipart/form-data',
            processData: false, // Important!
            contentType: false,
            cache: false,
            dataType: 'json',
            success: function(responce) {
//                console.log(responce);
                if(responce.successes.length){
                    $("#response").append('<div class="bg-success text-light mb-2 p-2 rounded lead">' + responce.successes.join("<br>") + '</div>');
                }
                if(responce.errors.length){
                    $("#response").append('<div class="bg-danger text-light bg-danger mb-2 p-2 rounded lead">' + responce.errors.join("<br>") + '</div>');
                }
//                $("#response").append('<div class="bg-secondary text-light mb-2 p-2 rounded lead"><small>' + responce.html + '</small></div>');

                $("#submitme").hide();
                $("#final").fadeIn(1000);

                $("#response").fadeIn(1000);

                $('html, body').animate({
                    scrollTop: 0
                }, 200);
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
        $('html, body').animate({
            scrollTop: 0
        }, 200);

    });
    $('#next-2').click(function(e) {
        e.preventDefault();
        alert(loan_amount.val());

        $('#second-b').hide();
        $('#third').hide();
        $('#second').show();
        $('#progressBar').css('width', '90%');
        $('#progressText').html(' ');
        $('html, body').animate({
            scrollTop: 0
        }, 200);

    });
    $('#next-2-b').click(function(e) {
        e.preventDefault();
        if ($('#loan_amount').val() == '') {
            $('#loanAmountError').html('* Loan amount is required.');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else if (isNaN($('#loan_amount').val())) {
            $('#loanAmountError').html('* Loan amount should be a number.');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
            return false;
        } else {
            $('#second-b').show();
            $('#third').hide();
            $('#second').hide();
            $('#progressBar').css('width', '60%');
            $('#progressText').html(' ');
            $('html, body').animate({
                scrollTop: 0
            }, 200);
        }
    });
    $('#next-3').click(function(e) {
        e.preventDefault();
        $('#third').show();
        $('#second').hide();
        $('#second-b').hide();
        $('#progressBar').css('width', '90%');
        $('#progressText').html(' ');
        $('html, body').animate({
            scrollTop: 0
        }, 200);
    });
    $('#prev-2').click(function() {
        $('#second').hide();
        $('#second-b').hide();

        $('#first').show();
        $('#progressBar').css('width', '30%');
        $('#progressText').html(' ');
        $('html, body').animate({
            scrollTop: 0
        }, 200);

    });
    $('#prev-2-b').click(function() {
        $('#second').show();
        $('#second-b').hide();

        $('#first').hide();
        $('#progressBar').css('width', '60%');
        $('#progressText').html(' ');
        $('html, body').animate({
            scrollTop: 0
        }, 200);
    });
    $('#prev-3').click(function() {
        $('#second').hide();
        $('#second-b').show();

        $('#third').hide();
        $('#progressBar').css('width', '47%');
        $('#progressText').html(' ');
        $('html, body').animate({
            scrollTop: 0
        }, 200);
    });
});

$('form input').on('keypress', function(e) {
    return e.which !== 13;
});

$('select[name=Entity]').change(function() {
    if ($(this).val() == 'Sole proprietor' || $(this).val() == 'Independent contractor') {
        $('#schedule-c').show();
    } else {
        $('#schedule-c').hide();
    }
});

$('select[name=Entity]').change(function() {
    if ($(this).val() == 'Self-employed Farmer') {
        $('#schedule-f').show();
    } else {
        $('#schedule-f').hide();
    }
});

//calculator

$('#payroll, #num_employees').on("keyup change", function() {
    var payroll = parseFloat($('#payroll').val());
    var employees = parseFloat($('#num_employees').val());
    var sum = payroll * 2.5;

    $('#loan_amount').val(sum);
});

    </script>

</body>
</html>