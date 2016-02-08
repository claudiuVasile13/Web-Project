<?php 

require_once "../../vendor/autoload.php";

class Email {
	
	private $userEmail;
	private $adminEmail = "theblur.2015@gmail.com";
	private $userMessage;
	private $adminMessage;
	private $userSubjcet;
	private $adminSubject; 

	public function getUserInput() {

		if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
			$this->userEmail   = htmlentities($_POST['email']); 
			$this->userSubject = htmlentities($_POST['subject']);
			$this->userMessage = htmlentities ($_POST['message']);
		}
	}

	public function receiveMessage() {	
		if(!empty($this->userEmail) && !empty('$this->userSubject') && !empty('$this->userMessage')) {
			$mail 			  = new PHPMailer();
			$mail->SMTPDebug  = 3; 
			$mail->IsSMTP();                   
			$mail->SMTPAuth   = true;
			$mail->Host       = "smtp.gmail.com"; 			                   
			$mail->Username   = "theblur.2015@gmail.com"; 
			$mail->Password   = "younghermano2013";
			$mail->SMTPSecure = "tls";     
			$mail->Port       = 587; 
			$mail->From 	  = $this->userEmail;
			$mail->addAddress($this->adminEmail);
			$mail->addReplyTo($this->userEmail, "Replay");
			$mail->Subject    = $this->userSubject;
			$mail->Body       = wordwrap($this->userMessage);
			// var_dump($mail->send());
			// die();
			if(!$mail->send()) {
				echo 'Mailer Error: ' . $mail->ErrorInfo;
			} else {
				header('Location: ../../index.php');
			}
		}
	}

	public function sendMessage() {
		$this->adminSubject = htmlentities("Elisav Inc.");
		$this->adminMessage = htmlentities("Hello, thanks for message and welcome to our community. Have a nice day!");

		$mail 			  = new PHPMailer();
		$mail->SMTPDebug  = 3; 
		$mail->IsSMTP();                   
		$mail->SMTPAuth   = true;
		$mail->Host       = "smtp.gmail.com"; 			                   
		$mail->Username   = "theblur.2015@gmail.com"; 
		$mail->Password   = "younghermano2013";
		$mail->SMTPSecure = "tls";     
		$mail->Port       = 587; 
		$mail->From 	  = $this->adminEmail;
		$mail->addAddress($this->userEmail);
		$mail->addReplyTo($this->adminEmail, "Replay");
		$mail->Subject    = $this->adminSubject;
		$mail->Body       = wordwrap($this->adminMessage);
		// var_dump($mail->send());
		// die();
		if(!$mail->send()) {
			echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
			header('Location: ../../index.php');
		}
	}
}

$email = new Email();
$email->getUserInput();
$email->receiveMessage();
$email->sendMessage();
?>