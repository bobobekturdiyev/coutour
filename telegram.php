<?php 

		$name = trim(htmlspecialchars($_POST['name']));
		$email = trim($_POST['email']);
		$phone = trim(htmlspecialchars($_POST['phone']));
		$message = trim(htmlspecialchars($_POST['message']));
		$token = "";//TELEGRAM BOT TOKEN
		$chat_id = ""; //ID
	    
	    $arr = array(
        'Ism: ' => $name,
        'Telefon: ' => $phone,
        'Email' => $email,
        'Xabar' => $message
        );
 
        foreach($arr as $key => $value) {
            if ($key == 'Xabar')
                $txt .= "<b>".$key."</b> %0A".$value."%0A";
            else
                $txt .= "<b>".$key."</b> ".$value."%0A";
            
        };
 
		$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
		
		if($sendToTelegram){
			echo "Xabar yuborildi";
		}
		else
			echo "Xabarda xatolik";
	
?>
