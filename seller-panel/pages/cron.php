<?php  
$id = $user['id'];
$product_id = $_GET['id'];
$crud = new Crud;
$today = date('Y-m-d 00:00:00');
$sql = "select * from users where user_type = 2 and (gstin = '' or gstin IS NULL) and created_date <= '$today'";
$users = $crud->getData($sql);
if(!empty($users)){
	foreach($users as $user){
		$created_date = $user['created_date'];
		$nextDay = strtotime("+1 day",strtotime($created_date));
		$nextthirtyDay = strtotime("+90 day",strtotime($created_date));
		if(date('Y-m-d') == date('Y-m-d',$nextDay)){
			//send email
			$url = SITE_URL.'/login';
			$metadata=array(
				'username'=>$user['name'],
				'login_url'=>$url,
				'logo_url'=>ASSET_URL.'/images/logo.jpg',
				'site_url'=>SITE_URL,
				'site_name'=>SITE_NAME,
				'site_mail_id'=>ADMIN_EMAIL,
				'THANK_YOU_IMG'=>ASSET_URL.'images/thankyou.png',
				'LOGIN_URL'=>SITE_URL,
				'LOGO_URL'=>ASSET_URL.'images/logo.png'
			);
			$body=file_get_contents(DIR_SYSTEM.'/mails/notification_gst.html');

			$emaillib = new Email;

			$body=$emaillib->parseData($metadata,$body);
			$subject = 'GST Notification';
			$emaillib->sendemail($body,$subject,$user['email']);
		}
		if(date('Y-m-d') == date('Y-m-d',$nextthirtyDay)){
			$crud->execute('update users set status = 2 where id= "'.$user['id'].'"');
		}
	}
}
?>