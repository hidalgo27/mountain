<?php
	if ($_POST["last_txt"] == '' && $_POST["numphone_txt"] == '' && $_POST["first_txt"] == '' && $_POST["email2"] == '' && !empty($_POST['kaozastita']) && ($_POST['kaozastita']=='Iam')) {

		error_reporting(E_ALL ^ E_NOTICE);
		//Librerías para el envío de mail
		require_once('class.phpmailer.php');
		require_once('class.smtp.php');

		$name = utf8_decode($_POST["name_txt"]);
		$email = $_POST["email_txt"];
		$phone = $_POST["phone_txt"];
		$country = $_POST["country_txt"];
		$comment = $_POST["message_txt"];

		$mensaje= '
		<div style="font-family:Lato,sans-serif;font-size:15px;color:#666666" marginheight="0" marginwidth="0">
                  <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="100%" color="#666666">
                        <tbody>
                              <tr>
                                    <td bgcolor="#ffffff" width="100%" valign="top">
                                          <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="570">
                                                <tbody>
                                                      <tr bgcolor="#ffffff">
                                                            <td valign="top" style="padding:10px 35px 0 35px;color:#ffffff">
                                                                  <img class="CToWUd" width="250" alt="mountain cusco tours" src="http://www.mountaincuscotours.com/img/logo-mountain.png" style="vertical-align:top;max-width:220px">
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td style="padding:0px 50px 0px 50px">
                                                                  <p style="font-size:18px">'.$name.'</p>
                                                                  <p>Este usuario envio un mensaje de la pagina de Mountain Cusco Tours del formulario contactenos (de la pagina en español).</p>
                                                                  <center style="background:#f6f6f6; padding:10px;">
                                                                        <table>
                                                                              <tbody>
                                                                                    <tr>
                                                                                          <td style="text-align:left">
                                                                                                <p><strong>Email: '.$email.'</strong></p>
                                                                                                <p><strong>Telefono: '.$phone.'</strong></p>
                                                                                                <p><strong>Ciudad: '.$country.'</strong></p>
                                                                                                <p><strong>Comentario: '.$comment.'</strong></p>
                                                                                          </td>
                                                                                    </tr>
                                                                              </tbody>
                                                                        </table>
                                                                  </center>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                          </table>
                                    </td>
                              </tr>
                        </tbody>
                  </table>
                  <br>
                  <table cellspacing="0" cellpadding="0" border="0" bgcolor="#f6f6f6" align="center" width="100%" height="50">
                        <tbody>
                              <tr>
                                    <td style="text-align:center;font-size:12px;padding:5px 15px;color:#999999">
                                          <p>
                                                General Inquires: info@mountaincuscotours.com
                                                <br>
                                                <br>
                                                <b>THE GREATEST SOUTH AMERICA TRAVEL PACKAGES MADE BY THE MOST EXPERIENCED TRAVEL AGENTS</b>          
                                                <br>
                                                <a target="_blank" href="http://www.mountaincuscotours.com/" style="color:#4d4d4d">View Mountain Cusco Tours</a>
                                          </p>
                                          <img class="CToWUd" width="100" alt="logo Mountain Cusco Tours" src="http://www.mountaincuscotours.com/img/logo-mountain.png">
                                          <br>
                                          <br>
                                    </td>
                              </tr>
                        </tbody>
                  </table>
            </div>';

		//Create a new PHPMailer instance
		$mail = new PHPMailer;
		// Set PHPMailer to use the sendmail transport
		$mail->isSendmail();
		//Set who the message is to be sent from
		$mail->setFrom('info@mountaincuscotours.com', 'Mountain Cusco Tours Español');
		
		//Set who the message is to be sent to
		$mail->addAddress('info@mountaincuscotours.com', 'Mountain Cusco Tours Español');
		//Set the subject line
		$mail->Subject = 'Mountain Cusco Tours Mail';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->msgHTML($mensaje);

		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    $mensaje= '
				<div style="font-family:Lato,sans-serif;font-size:15px;color:#666666" marginheight="0" marginwidth="0">
					<table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="100%" color="#666666">
						<tbody>
							<tr>
								<td bgcolor="#ffffff" width="100%" valign="top">
									<table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="570">
										<tbody>
											<tr bgcolor="#ffffff">
												<td valign="top" style="padding:10px 35px 0 35px;color:#ffffff">
													<img class="CToWUd" width="250" alt="logo Mountain Cusco Tours" src="http://www.mountaincuscotours.com/img/logo-mountain.png" style="vertical-align:top;max-width:220px">
												</td>
											</tr>
											<tr>
												<td style="padding:0px 50px 0px 50px">
													<br><br>
													<p style="font-size:18px">'.$name.'</p>
													<p>THANK YOU! We have received your important travel inquire. An expert Local Travel Advisor will contact you in less than 24 hours...see you soon in Peru!!   </p>
													<center style="padding:10px;">
														<a target="_blank" href="http://www.mountaincuscotours.com" style="color:#ffffff;background:#f27242;font-size:18px;font-weight:bold;padding:16px 45px;text-align:center;border-radius:8px;text-decoration:none;display:inline-block">Mountain Cusco Tours</a>
													</center>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
					<br>
					<table cellspacing="0" cellpadding="0" border="0" bgcolor="#f6f6f6" align="center" width="100%" height="50">
						<tbody>
							<tr>
								<td style="text-align:center;font-size:12px;padding:5px 15px;color:#999999">
									<p>
										General Inquires: info@mountaincuscotours.com
										<br>
										<br>
										<b>THE BEST PERU VACATIONS FROM THE BEST PERUVIAN OPERATOR</b>		
										<br>
										<a target="_blank" href="http://www.mountaincuscotours.com/peru-tours/" style="color:#4d4d4d">View all programs</a>
										.
									</p>
									<img class="CToWUd" width="100" alt="logo Mountain Cusco Tours" src="http://www.mountaincuscotours.com/img/logo-mountain.png">
									<br>
									<br>
								</td>
							</tr>
						</tbody>
					</table>
				</div>';

				//Create a new PHPMailer instance
				$mail2 = new PHPMailer;
				// Set PHPMailer to use the sendmail transport
				$mail2->isSendmail();
				//Set who the message is to be sent from
				$mail2->setFrom('info@mountaincuscotours.com', 'Mountain Cusco Tours');
				
				//Set who the message is to be sent to
				$mail2->addAddress($email, $name);
				//Set the subject line
				$mail2->Subject = 'Mountain Cusco Tours Mail';
				//Read an HTML message body from an external file, convert referenced images to embedded,
				//convert HTML into a basic plain-text alternative body
				$mail2->msgHTML($mensaje);

				if ($mail2->send()) {
					echo'<script type="text/javascript">
					alert("THANK YOU FOR CONTACTING US, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GUARANTEED. :)");
				 </script>';
				}else{
					echo "Mailer Error: " . $mail->ErrorInfo;
				}

			
		}

	}

?>