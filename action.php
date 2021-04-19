<?php
ob_start();
require_once 'ra/init.php';
$response = array("success" => false, "errors" => array(), "successes" => array());
$ppploan_request = new Ra\Dbt_ppploan_requests();
$loan_request = filter_var_array($_POST["loan_request"], FILTER_SANITIZE_STRING);

$ppploan_owners = new Ra\Dbt_ppploan_owners();
$business_owners = filter_var_array($_POST["owners"], FILTER_SANITIZE_STRING);

$ppploan_files = new Ra\Dbt_ppploan_files();

fppr($_FILES, __FILE__.' $_FILES');
foreach ($_FILES as $files) {

}

$files = $_FILES["photos-test"];
//fppr($files, __FILE__.' $files');

foreach ($files["error"] as $key => $error) {
    if ($error === 0) {
        $tmp_name = $files["tmp_name"][$key];
//        $name = sha1_file($tmp_name);
        $name = basename($files["name"][$key]);
        $res = move_uploaded_file($tmp_name, ROOT_PATH . $ppploan_files::$uploads_dir . "/" . $name);
    }
}


//$result = $ppploan->insert($loan_request);
//if($result["success"]){
//    $response["successes"][] = "New PPP Loan request (id:" . $result["id"] . ") successfully created!";
//    foreach ($business_owners as &$owner) {
//        $owner["request_id"] = $result["id"];
//        $res = $ppploan_owners->insert($owner);
//        if($res["success"]){
//            $response["successes"][] = "New bussiness owner (id:" . $res["id"] . ") for PPP Loan request (id:" . $result["id"] . ") successfully created!";
//        }else{
//            $response["errors"][] = $res["errors"];
//        }
//    }
//}else{
//    $response["errors"][] = $result["errors"];
//}


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

//var_dump($_POST);die();
$my_email = "esl753@gmail.com";

/*
Optional.  Enter a From: email address.  By default, the email you get from the script will show the visitor's email address as the From: address.  In most cases this is desirable.  On the majority of setups this won't be a problem but a minority of hosts insist that the From: address must be from a domain on the server.  
*/
$from_email = "leads@getppphope.com";

/* Subject line */
$subject = "PPP Loan Application";

/* Site URL */
$site_url = "http://www.getppphope.com";

/* Site Name */
$site_name = "GETPPPHOPE.COM";

/* 
Optional.  Enter the continue link to offer the user after the form is sent.  If you do not change this, your visitor will be given a continue link to your homepage.
If you do change it, remove the "/" symbol below and replace with the name of the page to link to, eg: "mypage.htm" or "http://www.elsewhere.com/page.htm"
*/
$continue = "/";

/*
Step 3: Save this file (/thankyou/index.php) and upload it together with your webpage containing the form to your webspace.  IMPORTANT - The file name is case sensitive!  You must save it exactly as it is named above!
*/

$errors = array();

// Remove $_COOKIE elements from $_REQUEST.
if (count($_COOKIE)) {
    foreach (array_keys($_COOKIE) as $value) {
        unset($_REQUEST[$value]);
    }
}

// Validate email field.
if (isset($_REQUEST['email']) && !empty($_REQUEST['email'])) {

    $_REQUEST['email'] = trim($_REQUEST['email']);

    if (substr_count($_REQUEST['email'], "@") != 1 || stristr($_REQUEST['email'], " ")) {
        $errors[] = "Email address is invalid";
    } else {
        $exploded_email = explode("@", $_REQUEST['email']);
        if (empty($exploded_email[0]) || strlen($exploded_email[0]) > 64 || empty($exploded_email[1])) {
            $errors[] = "Email address is invalid";
        } else {
            if (substr_count($exploded_email[1], ".") == 0) {
                $errors[] = "Email address is invalid";
            } else {
                $exploded_domain = explode(".", $exploded_email[1]);
                if (in_array("", $exploded_domain)) {
                    $errors[] = "Email address is invalid";
                } else {
                    foreach ($exploded_domain as $value) {
                        if (strlen($value) > 63 || !preg_match('/^[a-z0-9-]+$/i', $value)) {
                            $errors[] = "Email address is invalid";
                            break;
                        }
                    }
                }
            }
        }
    }
}

// Check referrer is from same site.

if (!(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']) && stristr($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST']))) {
    $errors[] = "You must enable referrer logging to use the form";
}

// Check for a blank form.

function recursive_array_check_blank($element_value)
{
    global $set;
    if (!is_array($element_value)) {
        if (!empty($element_value)) {
            $set = 1;
        }
    } else {
        foreach ($element_value as $value) {
            if ($set) {
                break;
            }
            recursive_array_check_blank($value);
        }
    }
}

recursive_array_check_blank($_REQUEST);

if (!$set) {
    $errors[] = "You cannot send a blank form";
}
unset($set);

// Display any errors and exit if errors exist.
$response["errors"][] = $errors;
if (count($errors)) {
    foreach ($errors as $value) {
        print "$value<br>";
    }
}else{

    if (!defined("PHP_EOL")) {
        define("PHP_EOL", strtoupper(substr(PHP_OS, 0, 3) == "WIN") ? "\r\n" : "\n");
    }

    // Build message.
    function build_message($request_input)
    {
        if (!isset($message_output)) {
            $message_output = "";
        }
        if (!is_array($request_input)) {
            $message_output = $request_input;
        } else {
            foreach ($request_input as $key => $value) {
                if (!empty($value)) {
                    if (!is_numeric($key)) {
                        $message_output .= str_replace("_", " ", ucfirst($key)) . ": " . build_message($value) . PHP_EOL . PHP_EOL;
                    } else {
                        $message_output .= build_message($value) . ", ";
                    }
                }
            }
        }
        return rtrim($message_output, ", ");
    }

    $message = build_message($_REQUEST);
    $message = $message . PHP_EOL . PHP_EOL . "-- " . PHP_EOL . "This information is confidential.";
    $message = stripslashes($message);
    $subject = stripslashes($subject);
    if ($from_email) {
        $headers = "From: " . $from_email;
        $headers .= PHP_EOL;
        $headers .= "Reply-To: " . $_REQUEST['email'];
    } else {
        $from_name = "";
        if (isset($_REQUEST['name']) && !empty($_REQUEST['name'])) {
            $from_name = stripslashes($_REQUEST['name']);
        }
        $headers = "From: {$from_name} <{$_REQUEST['email']}>";
    }
//    echo $message;

    try{
        // we now send email by php mailer not php mail function.
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'getppphope.com ';                     //Set the SMTP server to send through
        $mail->Username = 'no-reply@getppphope.com';                     //SMTP username
        $mail->Password = 'Myhiphop420!';                               //SMTP password
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom($from_email);
        $mail->addAddress($my_email);     //Add a recipient

        //Attachments
        foreach ($_FILES["photos"]["name"] as $k => $v) {
            if(!empty($_FILES["photos"]["tmp_name"][$k])) {
                @$mail->AddAttachment($_FILES["photos"]["tmp_name"][$k], $_FILES["photos"]["name"][$k]);
            }
        }

        //Content
        $mail->isHTML(false); //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body = $message;
        $mail->send();

    }catch (Exception $e) {
        $response["errors"][] = $e->getMessage();
    }
}


/*
<b>Thank you <?php if(isset($_REQUEST['name'])){print stripslashes($_REQUEST['name']);} ?></b>
*/

$response["html"] = ob_get_contents();
ob_end_clean();

$response["success"] = count($response["errors"]) ? false : true;

header('Content-type: application/json');
echo json_encode( $response );

?>