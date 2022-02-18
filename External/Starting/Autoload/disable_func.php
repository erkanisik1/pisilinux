<?php 


/*
function slack_message($message){
  $message = array('payload' => json_encode(array('text' => $message)));
  $c = curl_init(SLACK_WEBHOOK);
  curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($c, CURLOPT_POST, true);
  curl_setopt($c, CURLOPT_POSTFIELDS, $message);
  curl_exec($c);
  curl_close($c);
}

function slack_invite($usermail){				
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL,"https://slack.com/api/users.admin.invite?C02NPT4MB");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,'email='.$usermail.'&token=xoxp-2771922705-2834958271-429249401667-ade5482f00f7fa2722526a1354d3b1f9');
	curl_setopt($ch ,CURLOPT_RETURNTRANSFER , True);
		$replyRaw = curl_exec($ch);
		/*
		  $reply=json_decode($replyRaw,true);
	          
	            if($reply['error']=='invalid_email') 
                        {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'E-mail Adresini yazmayı unuttun!';
	                    echo '</p>';                                                    
                        }
                        elseif($reply['error']=='already_in_team') 
                        {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Pisi Slack Kanalına Zaten Üyesin! <a class="pure-button pure-button-primary" href=https://pisi.slack.com>Pisi Slack Kanalına Git.</a>';
	                    echo '</p>';                                                    
                        }
                     elseif($reply['error']=='already_invited') 
                        {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Daha önce kayıt olmuşsunuz! Lütfen Kayıt olduğunuz e-posta ile  <a class="pure-button pure-button-primary" href=https://pisi.slack.com>Pisi Slack Kanalına Giriş yapın.</a>';
	                    echo '</p>';                                                    
                        }    
	            
	            elseif($reply['ok']==false) {
		            	echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Hata Oluştu, Tekrar Deneyin!';
	                    echo '</p>';
	                } else
	                {
	                
	                echo '<p style="font-family: \'Roboto\', sans-serif; color: #9d3d3d">';
	                    echo 'Başarıyla Üye oldunuz. <b color=white>'.$newmail.'</b> Adresinde Davet için Mail Gönderdik. Lütfen E-mailinizi kontrol ediniz.';
	                    echo '</p>';
	                
	                
	                }
	              
}
	function gitter($message){	
		$message = urlencode($message);
		$ch = curl_init('https://webhooks.gitter.im/e/fbf2cac6623ba8a4ab13');
		curl_setopt ($ch, CURLOPT_POSTFIELDS,"message=$message");
		curl_exec($ch);
		curl_close($ch);
	}

*/