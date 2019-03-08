<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require './vendor/autoload.php';
    // use \Mailjet\Resources;

    function sendEmail($body, $mailTo) {

        try {
            $mail = new PHPMailer();
            $mail->IsSMTP();
            //$mail->SMTPDebug = 1;
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Host = 'in-v3.mailjet.com';
            $mail->Port = 587;
            // $mail->IsHTML(true);
            $mail->Username = '08eb7469f023a25ee34c36ed82f38962'; 
            $mail->Password = '68dfb664c9f3bc75dd3fcb60b1bb32b3';
            $mail->CharSet = 'utf-8';
            $mail->SetFrom("no-reply@asepxia.com", "Asepxia");

            $mail->AddAddress($mailTo);
            $mail->Subject = "Tu Asepxia Ideal";
            $mail->MsgHTML($body);

            if ($mail->Send()) {
                return 'enviado';
            } else {
                return $mail->ErrorInfo;
            }
        } catch (phpmailerException $e) {
            echo $e->errorMessage(); //Pretty error messages from PHPMailer
        } catch (Exception $e) {
            echo $e->getMessage(); //Boring error messages from anything else!
        }
    }

    if (!function_exists('mailer')) {
        function mailer($view = null, $data = []) {
            $body = $GLOBALS['blade']->view()->make($view)->with($data)->render();
            $email = $data["mail"];
            return sendEmail($body, $email);
        }
    }