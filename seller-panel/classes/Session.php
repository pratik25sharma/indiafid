<?php 
class Session{
	public function __construct()
        {

        }
	public function createsession($variable,$value){
            $_SESSION[$variable] = $value;
        }
	public function getSession($variable){
                return isset($_SESSION[$variable]) && !empty($_SESSION[$variable]) ? $_SESSION[$variable] : "";
	}
	public function checkPage($page,$variable){
                $withoutLoginPage = array('login','register','home','patient_register','patient_login','forgot','reset','password','health-professional','health_insurance_login','health-insurance','logout','cancelappointment','terms');
				$doctorePage = array('dashboard','patient_profile','summary','profile','consultation','clinical_exam','view','ordonnace','vaccines','renew','update_vaccine','medical-history','followup','care_financing','billing','paymentcallback','payment_history','drug_management','upload_report');
				$patientPage = array('dashboard','patient_profile','summary','profile','medical-history','followup','view','care_financing','manage-child-accounts','create_child_account');
                $pharmacistPage = array('dashboard','summary','profile','drug_management','billing','paymentcallback','payment_history');
                $laboratoryPage = array('dashboard','summary','profile','clinical_exam','upload_report','vaccines','update_vaccine','billing','paymentcallback','payment_history');
                $insurancePage = array('dashboard','summary','profile','medical_insurance');
                $imagingPage = array('dashboard','summary','profile','clinical_exam','upload_report','billing','paymentcallback','payment_history');
                $pharmacyPage = array('dashboard','summary','profile','drug_management','billing','paymentcallback','payment_history');
				$hospitalPage = array('dashboard','patient_profile','proforma','profile','new_patient','care_financing','manage_appointments','billing','paymentcallback','payment_history');
                if (in_array($page, $withoutLoginPage)){
                    return true;
                }else{
                    if(isset($_SESSION[$variable]) && !empty($_SESSION[$variable]) ){
                        $user= json_decode($_SESSION[$variable]);
                        $type = $user->type;
			if($type == '0'){
				if (in_array($page, $doctorePage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '1'){
				if (in_array($page, $patientPage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '2'){
				if (in_array($page, $pharmacistPage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '3'){
				if (in_array($page, $laboratoryPage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '4'){
				if (in_array($page, $insurancePage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '5'){
				if (in_array($page, $imagingPage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '6'){
				if (in_array($page, $pharmacyPage)){
					return true;
				}else{
					return false;
				}
			}else if($type == '7'){
				if (in_array($page, $hospitalPage)){
					return true;
				}else{
					return false;
				}
			}
		}else{
			return false;
		}
            }
	}
}