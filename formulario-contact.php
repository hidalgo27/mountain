<?php
      error_reporting(E_ALL ^ E_NOTICE);
      //Librerías para el envío de mail
      include_once('class.phpmailer.php');
      include_once('class.smtp.php');

      if ($_POST["last_txt"] == '' && $_POST["numphone_txt"] == '' && $_POST["first_txt"] == '' && $_POST["email2"] == '' && !empty($_POST['kaozastita']) && ($_POST['kaozastita']=='Iam')) {

            $name = utf8_decode($_POST["name_txt"]);
            $email = utf8_decode($_POST["email_txt"]);
            $phone = $_POST["phone_txt"];
            $travel_date = $_POST["travel_date_txt"];
            $comment = $_POST["comment_txt"];

            //Recibir todos los parámetros del formulario
            $para = 'info@mountaincuscotours.com';
            $asunto = "Travel inquire";
            $mensaje = '
            <div style="font-family:Lato,sans-serif;font-size:15px;color:#666666" marginheight="0" marginwidth="0">
                  <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="100%" color="#666666">
                        <tbody>
                              <tr>
                                    <td bgcolor="#ffffff" width="100%" valign="top">
                                          <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="570">
                                                <tbody>
                                                      <tr bgcolor="#ffffff">
                                                            <td valign="top" style="padding:10px 35px 0 35px;color:#ffffff">
                                                                  <img class="CToWUd" width="250" alt="go to Latin America" src="http://www.gotolatinamerica.com/img/logos/logo-latinamerica.png" style="vertical-align:top;max-width:220px">
                                                            </td>
                                                      </tr>
                                                      <tr>
                                                            <td style="padding:0px 50px 0px 50px">
                                                                  <p style="font-size:18px">'.$name.'</p>
                                                                  <p>Este usuario envio un mensaje de GotoLatinAmerica del formulario contactenos.</p>
                                                                  <center style="background:#f6f6f6; padding:10px;">
                                                                        <table>
                                                                              <tbody>
                                                                                    <tr>
                                                                                          <td style="text-align:left">
                                                                                                <p><strong>Email: '.$email.'</strong></p>
                                                                                                <p><strong>Telefono: '.$phone.'</strong></p>
                                                                                                <p><strong>Fecha de viaje: '.$travel_date.'</strong></p>
                                                                                                <p><strong>Comment: '.$comment.'</strong></p>
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
                                                General Inquires: info@gotolatinamerica.com
                                                <br>
                                                <br>
                                                <b>THE GREATEST SOUTH AMERICA TRAVEL PACKAGES MADE BY THE MOST EXPERIENCED TRAVEL AGENTS</b>          
                                                <br>
                                                <a target="_blank" href="http://www.gotolatinamerica.com/south-america-tours" style="color:#4d4d4d">View South America Travel</a>
                                                .
                                          </p>
                                          <img class="CToWUd" width="100" alt="logo GotoLatinAmerica" src="http://www.gotolatinamerica.com/img/logos/logo-latinamerica.png">
                                          <br>
                                          <br>
                                    </td>
                              </tr>
                        </tbody>
                  </table>
            </div>
            ';
            

            //Este bloque es importante

            $mail = new PHPMailer();
            $mail->IsSMTP(true); 
            $mail->Host = "mail.mountaincuscotours.com";  // Servidor de Salida.
            $mail->Port = 25;
            $mail->SMTPAuth = true; 
            $mail->Username = "info@mountaincuscotours.com";  // Correo Electrónico
            $mail->Password = "cusco2015"; // Contraseña
            $mail->FromName = "mountaincuscotours";

            //Agregar destinatario
            $mail->AddAddress($para);
            $mail->Subject = $asunto;
            $mail->Body = $mensaje;
            //Para adjuntar archivo
            $mail->MsgHTML($mensaje);

            //Avisar si fue enviado o no y dirigir al index
            if($mail->Send()){
                  $para = $email;
                  $asunto = "Travel inquire";
                  $mensaje = '
                  <div style="font-family:Lato,sans-serif;font-size:15px;color:#666666" marginheight="0" marginwidth="0">
                        <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="100%" color="#666666">
                              <tbody>
                                    <tr>
                                          <td bgcolor="#ffffff" width="100%" valign="top">
                                                <table cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff" align="center" width="570">
                                                      <tbody>
                                                            <tr bgcolor="#ffffff">
                                                                  <td valign="top" style="padding:10px 35px 0 35px;color:#ffffff">
                                                                        <img class="CToWUd" width="250" alt="go to Latin America" src="http://www.gotolatinamerica.com/img/logos/logo-latinamerica.png" style="vertical-align:top;max-width:220px">
                                                                  </td>
                                                            </tr>
                                                            <tr>
                                                                  <td style="padding:0px 50px 0px 50px">
                                                                        <p style="font-size:18px">'.$name.'</p>
                                                                        <p>THANK YOU! We have received your important travel inquire. An expert Local Travel Advisor will contact you in less than 24 hours...see you soon in south America!!   </p>
                                                                        <center style="padding:10px;">
                                                                              <a target="_blank" href="http://www.gotolatinamerica.com/" style="color:#ffffff;background:#96c841;font-size:18px;font-weight:bold;padding:16px 45px;text-align:center;border-radius:8px;text-decoration:none;display:inline-block">Go To Latin America</a>
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
                                                      General Inquires: info@gotolatinamerica.com
                                                      <br>
                                                      <br>
                                                      <b>THE GREATEST SOUTH AMERICA TRAVEL PACKAGES MADE BY THE MOST EXPERIENCED TRAVEL AGENTS</b>          
                                                      <br>
                                                      <a target="_blank" href="http://www.gotolatinamerica.com/south-america-tours/" style="color:#4d4d4d">View South America Travel</a>
                                                </p>
                                                <img class="CToWUd" width="100" alt="logo gotolatinamerica" src="http://www.gotolatinamerica.com/img/logos/logo-latinamerica.png">
                                                <br>
                                                <br>
                                          </td>
                                    </tr>
                              </tbody>
                        </table>
                  </div>
                  ';
                  

                  //Este bloque es importante
                  $mail = new PHPMailer();
                  $mail->IsSMTP(true); 
                  $mail->Host = "mail.mountaincuscotours.com";  // Servidor de Salida.
                  $mail->Port = 25;
                  $mail->SMTPAuth = true; 
                  $mail->Username = "info@mountaincuscotours.com";  // Correo Electrónico
                  $mail->Password = "cusco2015"; // Contraseña
                  $mail->FromName = "mountaincuscotours";

                  //Agregar destinatario
                  $mail->AddAddress($para);
                  $mail->Subject = $asunto;
                  $mail->Body = $mensaje;
                  //Para adjuntar archivo
                  $mail->MsgHTML($mensaje);

                  if ($mail->Send()) {
                        echo'<script type="text/javascript">
                              alert("THANK YOU FOR CONTACT US, YOU WILL RECEIVE A REPLY IN LESS THAN 24 HOURS, GURANTEED. :)");
                         </script>';
                  }else{
                        echo'<script type="text/javascript">
                                    alert("ERROR");
                               </script>';
                  }
            }
            else{
                  echo'<script type="text/javascript">
                              alert("ERROR");
                         </script>';
            }

      }
      else {
            echo "<script language='javascript'>window.alert('ERROR. :(');</script>";
      }

?>