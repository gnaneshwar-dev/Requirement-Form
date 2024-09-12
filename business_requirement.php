<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCUBE Requirement Form </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-color: #f8f9fa; 
    }

    .card {
        border-radius: 15px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
    }

    .card-header {
        background-color: #007bff;
        color: #fff; 
    }

    .form-control {
        border-color: #ced4da; 
    }

    .btn-primary {
        background-color: #007bff; 
        border-color: #007bff; 
    }

    .btn-primary:hover {
        background-color: #0056b3; 
        border-color: #0056b3; 
    }

    .comments-radio {
        margin-bottom: 2rem; 
    }
    #mcube_questions .form-check {
        margin-bottom: 1rem; 
    }
    #crm_questions .form-check {
        margin-bottom: 1rem; 
    }

    .comments-radio label {
        font-weight: bold; 
    }

    textarea.form-control {
        resize: vertical; 
    }
    .form-check-input[type="checkbox"],
    .form-check-input[type="radio"] {
        margin-right: 0.5rem; 
    }
    .form-floating textarea {
        height:30 px; 
    }
    .form-control {
        border-radius: 5px; 
    }
    .card-body {
        padding: 1.5rem; 
    }
    #submitForm {
        margin-top: 1rem; 
    }
    h6 {
        font-weight: bold;
    }
    </style>

</head>

<body>

<!-- <div id="messagePopup" style="display: none;">
        <p id="messageText"></p>
    </div> -->

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">BUSINESS REQUIREMENT FORM </div>
                    <div class="card-body">
                        <form id="businessForm" method="post" action="#">
                            <div class="form-group">
                                <label for="business_name"><b>Business Name:</b></label>
                                <input type="input" class="form-control" id="business_name" name="business_name" required>
                            </div>

                            <div class="form-group">
                                <label for="sales_person"><b>Salesperson:</b></label>
                                <input type="input" class="form-control" id="sales_person" name="sales_person" required>
                            </div>

                            <div class="comments-radio" onchange="mcubeversion()">
                            <div>
                                <label>MCUBE Version :</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="version" id="version1" value="MCUBE 2.0">
                                <label class="form-check-label" for="version1">MCUBE 2.0</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="version" id="version2" value="CLASSIC">
                                <label class="form-check-label" for="version2">CLASSIC</label>
                            </div>
                            </div>
                                
                            
                            <div class="comments-radio" id="call_acceptance_section" style="display: none;"  >
                                <div>
                                    <label> Call acceptance process based on</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="call_acceptance" id="call_acceptance1" value="With Login">
                                    <label class="form-check-label" for="call_acceptance1">With Login</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="call_acceptance" id="call_acceptance2" value="Without Login">
                                    <label class="form-check-label" for="call_acceptance2">Without Login</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="crm_partner"><b>CRM Partner :</b></label>
                                <input type="input" class="form-control" id="crm_partner" name="crm_partner" required>
                            </div>
                           

                            <div><b>Service Details:</b></div>
                            <div class="card-body">

                            <div class="comments-radio">

                                <div>
                                    <label>Do they need inbound services?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inbound_service" id="service_id1" value="Yes">
                                    <label class="form-check-label" for="service_id1">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inbound_service" id="service_id2" value="No">
                                    <label class="form-check-label" for="service_id2">No</label>
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Remarks" name="comment1" id="floatingTextarea"></textarea>
                                </div>
                            </div>

                            <div class="comments-radio">

                                <div>
                                    <label> Do they need outbound services?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="outbound_service" id="service_id3" value="Yes">
                                    <label class="form-check-label" for="service_id3">Yes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="outbound_service" id="service_id3" value="No">
                                    <label class="form-check-label" for="service_id4">No</label>
                                </div>

                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Remarks" name="comment2" id="floatingTextarea1"></textarea>
                                </div>
                                  </div>


                                 <div class="comments-radio">
                                <div>
                                    <label>Do they require integration?</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="integration" id="service_id5" value="Yes">
                                    <label class="form-check-label" for="service_id5">Yes</label>

                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="integration" id="service_id6" value="No">
                                    <label class="form-check-label" for="service_id6">No</label>


                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Remarks" name="comment3" id="floatingTextarea2"></textarea>
                                </div>
                            </div>


                                <div class="form-group">
                                    <label for="call_flow_type"><b>Select Call Flow Type:</b></label>
                                    <select class="form-control" id="call_flow_type" name="call_flow_type" onchange="toggleQuestions()">
                                        <option>Select Call Flow Type</option>
                                        <option value="MCUBE">MCUBE Call Flow</option>
                                        <option value="CRM">CRM Call Flow</option>
                                    </select>
                                </div>

                                <div id="mcube_questions" style="display: none;">
                                    <h6>MCUBE Call Flow</h6>
                                    <label>Is Sticky Agent feature to be activated? </label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" name="mcube_questions" id="mcube_questions" value="Yes">
                                    <label class="form-check-label" for="mcube_questions">Yes</label>

                                </div>

                                <h6>1. What should happen if the sticky agent does not answer the call?</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question1" id="mcubeoption1" value ="Call should disconnect">
                                    <label class="form-check-label" for="mcubeoption1" >
                                        Call should disconnect </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question1" id="mcubeoption2" value = "Call should route to other users as per MCUBE algorithm in round robin">
                                    <label class="form-check-label" for="mcubeoption2" >
                                        Call should route to other users as per MCUBE algorithm in round robin </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question1" id="mcubeoption3" value = "Call should route to Team Lead/Reporting User (Customization)">
                                    <label class="form-check-label" for="mcubeoption3" >
                                        Call should route to Team Lead/Reporting User (Customization) </label>
                                </div>

                                <h6>2. How do you want to use Outbound call functionality?</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="mcubeoption4" value ="Common CLI for all the users">
                                    <label class="form-check-label" for="mcubeoption4" >
                                        Common CLI for all the users </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="mcubeoption5" value ="Dedicated CLI for each user">
                                    <label class="form-check-label" for="mcubeoption5" >
                                        Dedicated CLI for each user </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question2" id="mcubeoption6"value ="Dedicated CLI based on the group" >
                                    <label class="form-check-label" for="mcubeoption6" >
                                        Dedicated CLI based on the group </label>
                                </div>

                                <h6>3. How outbound callback call should be routed?</h6>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question3" id="mcubeoption8" value ="Callback call should route to group like regular inbound call ">
                                    <label class="form-check-label" for="mcubeoption8">
                                        Callback call should route to group like regular inbound call </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question3" id="mcubeoption9" value ="Callback should route to last connected user">
                                    <label class="form-check-label" for="mcubeoption9">
                                        Callback should route to last connected user </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="question3" id="mcubeoption10" value ="Callback should not connect" >
                                    <label class="form-check-label" for="mcubeoption10" >
                                        Callback should not connect</label>
                                </div>
                            </div>

                                <div id="crm_questions" style="display: none;">
                                    <h6>CRM Call Flow (if they are interested)</h6>
                                
                                    <h6>1. What should happen if lead owner does not answer the call or not available?</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question1" id="crmcallflow_option1" value ="Call should disconnect">
                                        <label class="form-check-label" for="crmcallflow_option1">
                                            Call should disconnect </label>
                                    </div>
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question1" id="crmcallflow_option3" value ="Call should route to other users as per MCUBE algorithm ">
                                        <label class="form-check-label" for="crmcallflow_option3">
                                            Call should route to other users as per MCUBE algorithm </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question1" id="crmcallflow_option4"  value ="Call should route to Team Lead/Reporting User (Customization)">
                                        <label class="form-check-label" for="crmcallflow_option4">
                                        Call should route to Team Lead/Reporting User (Customization) </label>
                                    </div>

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question1" id="crmcallflow_option2" value ="Call should route to next user provided by CRM (Customization)">
                                        <label class="form-check-label" for="crmcallflow_option2">
                                            Call should route to next user provided by CRM (Customization) </label>
                                    </div>


                                    <h6>2.How do you want to use Outbound call functionality?</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question2" id="crmcallflow_option5" value ="Common CLI for all the users">
                                        <label class="form-check-label" for="crmcallflow_option5">
                                            Common CLI for all the users </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question2" id="crmcallflow_option6" value ="Dedicated CLI for each user">
                                        <label class="form-check-label" for="crmcallflow_option6">
                                            Dedicated CLI for each user </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question2" id="crmcallflow_option7" value ="Dedicated CLI based on the group">
                                        <label class="form-check-label" for="crmcallflow_option7">
                                            Dedicated CLI based on the group </label>
                                    </div>

                                    <h6>3.How callback call should be routed?</h6>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question3" id="crmcallflow_option9" value =" Callback call should route to group like regular inbound call(leadowner)">
                                        <label class="form-check-label" for="crmcallflow_option9">
                                            Callback call should route to group like regular inbound call(leadowner) </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question3" id="crmcallflow_option10" value ="Callback should route to last connected user">
                                        <label class="form-check-label" for="crmcallflow_option10">
                                            Callback should route to last connected user </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="crm_question3" id="crmcallflow_option11" value =" Callback should not connect">
                                        <label class="form-check-label" for="crmcallflow_option11">
                                        Callback should not connect</label>
                                    </div>

                                </div>

                                <div class="form-floating">
                                <label for="addtional_comments"><b>Additional Comments:</b></label>
                                    <textarea class="form-control" placeholder="Remarks" name="addtional_comments" id="floatingTextarea"></textarea>
                                </div>

                                <button type="submit" id="submitForm" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleQuestions() {
            var selectedOption = document.getElementById("call_flow_type").value;
            var mcubeQuestions = document.getElementById("mcube_questions");
            var crmQuestions = document.getElementById("crm_questions");
            var mcubeVersion = document.querySelector('input[name="version"]:checked');


            if (selectedOption === "MCUBE") {
                mcubeQuestions.style.display = "block";
                crmQuestions.style.display = "none";

            } else if (selectedOption === "CRM") {
                mcubeQuestions.style.display = "none";
                crmQuestions.style.display = "block";
            } else {
                mcubeQuestions.style.display = "none";
                crmQuestions.style.display = "none";
            }
        }
        function mcubeversion(){
        var mcubeVersion = document.querySelector('input[name="version"]:checked');
        if (mcubeVersion && mcubeVersion.value == "MCUBE 2.0") {
            document.getElementById("call_acceptance_section").style.display = "block";
        } else {
            document.getElementById("call_acceptance_section").style.display = "none";
        }

        }

        function showSuccessMessage() {
            var messagePopup = document.getElementById("messagePopup");
            var messageText = document.getElementById("messageText");
            messagePopup.style.display = "block";
            messagePopup.style.backgroundColor = "#28a745"; // Green color for success
            messageText.innerHTML = "Details have been sent to email. Please check.";
        }

        // Function to show error message popup
        function showErrorMessage() {
            var messagePopup = document.getElementById("messagePopup");
            var messageText = document.getElementById("messageText");
            messagePopup.style.display = "block";
            messagePopup.style.backgroundColor = "#dc3545"; // Red color for error
            messageText.innerHTML = "Something went wrong. Please try again later.";
        }
       
       
    </script>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 require 'vendor/autoload.php';
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //print_r($_POST);exit;
    
    $businessName = (isset($_POST['business_name'])) ? $_POST['business_name'] : '';
    $sales_person = (isset($_POST['sales_person'])) ? $_POST['sales_person'] : '';
    $crmpatner = (isset($_POST['crm_partner'])) ? $_POST['crm_partner'] : '';
    $version =(isset($_POST['version'])) ? $_POST['version'] : '';
    $logincheck =(isset($_POST['call_acceptance'])) ? $_POST['call_acceptance'] : '';
    $inbound_service=(isset($_POST['inbound_service'])) ? $_POST['inbound_service'] : '';
    $comment1 =(isset($_POST['comment1'])) ? $_POST['comment1'] : '';
    $outbound_service=(isset($_POST['outbound_service'])) ? $_POST['outbound_service'] : '';
    $comment2 =(isset($_POST['comment2'])) ? $_POST['comment2'] : '';
    $integration =(isset($_POST['integration'])) ? $_POST['integration'] : '';
    $comment3 =(isset($_POST['comment3'])) ? $_POST['comment3'] : '';
    $call_flow_type =(isset($_POST['call_flow_type'])) ? $_POST['call_flow_type'] : '';
    $sticky_agent=(isset($_POST['mcube_questions'])) ? $_POST['mcube_questions'] : '';
    $question1 =(isset($_POST['question1'])) ? $_POST['question1'] : '';
    $question2 =(isset($_POST['question2'])) ? $_POST['question2'] : '';
    $question3 =(isset($_POST['question3'])) ? $_POST['question3'] : '';
    $crm_question1=(isset($_POST['crm_question1'])) ? $_POST['crm_question1'] : '';
    $crm_question2=(isset($_POST['crm_question2'])) ? $_POST['crm_question2'] : '';
    $crm_question3=(isset($_POST['crm_question3'])) ? $_POST['crm_question3'] : '';
    $addtional_comments = (isset($_POST['addtional_comments'])) ? $_POST['addtional_comments'] : '';




    try {
        // Create a PHPMailer instance
        $mail = new PHPMailer(true);

        // Server settings
        $mail->isSMTP();
        $mail->Host = 'ssl://email-smtp.ap-south-1.amazonaws.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'AKIAUJVLLICOHPMCMR6O'; // Replace with your SMTP username
        $mail->Password = 'BIwJCh2w9rrB/k2C/gYun6rLNZLC0b48yFpbubyafWUl'; // Replace with your SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to

        $mail->setFrom('sai.harish@mcube.com', 'Mailer');
        $mail->addAddress('sai.harish@mcube.com', 'Recipient'); // Add a recipient


        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New Business Creation';
       
        $mail->Body = '<table border="2" cellpadding="10">
                <tr>
                    <td><b>Business Name:</b></td>
                    <td>' . $businessName . '</td>
                </tr>
                <tr>
                    <td><b>Salesperson:</b></td>
                    <td>' . $sales_person . '</td>
                </tr>
                <tr>
                    <td><b>Crm Partner:</b></td>
                    <td>' . $crmpatner . '</td>
                </tr>
                <tr>
                    <td><b>Version:</b></td>
                    <td>' . $version . '</td>
                </tr>
                <tr>
                    <td><b>Call acceptance process based on:</b></td>
                    <td>' . $logincheck . '</td>
                </tr>
                <tr>
                    <td><b>Do they need inbound services ?:</b></td>
                    <td>' . $inbound_service . '</td>
                </tr>
                <tr>
                    <td><b>Comments:</b></td>
                    <td>' . $comment1 . '</td>
                </tr>
                <tr>
                    <td><b>Do they need outbound services ?:</b></td>
                    <td>' . $outbound_service . '</td>
                </tr>
                <tr>
                    <td><b>Comments:</b></td>
                    <td>' . $comment2 . '</td>
                </tr>
                <tr>
                    <td><b>Do they require integration ?:</b></td>
                    <td>' . $integration . '</td>
                </tr>
                <tr>
                    <td><b>Comments:</b></td>
                    <td>' . $comment3 . '</td>
                </tr>
                <tr>
                    <td><b>Call Flow Type:</b></td>
                    <td>' . $call_flow_type . '</td>
                </tr>
                <tr>
                    <td><b>Is Sticky Agent feature to be activated ?:</b></td>
                    <td>' . $sticky_agent . '</td>
                </tr>
                <tr>
                    <td><b>What should happen if the sticky agent did not answer the call ? :</b></td>
                    <td>' . $question1 . '</td>
                </tr>
                <tr>
                    <td><b>How do you want to use Outbound call functionality ? :</b></td>
                    <td>' . $question2 . '</td>
                </tr>
                <tr>
                    <td><b>How outbound callback call should be routed ? :</b></td>
                    <td>' . $question3 . '</td>
                </tr>
                <tr>
                    <td><b>What should happen if lead owner did not answer the call or not available ? :</b></td>
                    <td>' . $crm_question1 . '</td>
                </tr>
                <tr>
                    <td><b>How do you want to use Outbound call functionality ? :</b></td>
                    <td>' . $crm_question2 . '</td>
                </tr>
                <tr>
                    <td><b>How callback call should be routed ? :</b></td>
                    <td>' . $crm_question3 . '</td>
                </tr>
                <tr>
                    <td><b>Addtional Comments:</b></td>
                    <td>' . $addtional_comments . '</td>
                </tr>
            </table>';
         print_r($mail->Body);exit;

        $mail->send();
        echo 'Message has been sent';
        echo '<script>showSuccessMessage();</script>';
    } catch (Exception $e) {
        echo '<script>showErrorMessage();</script>';
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>

</body>

</html>