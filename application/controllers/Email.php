<?php defined('BASEPATH') OR exit('No direct script access allowed');  

     class Email extends CI_Controller {

          public function send()  {  
                 $config = Array(  
                  'protocol' => 'smtp',  
                  'smtp_host' => 'ssl://smtp.googlemail.com',  
                  'smtp_port' => 465,  
                  'smtp_user' => 'eventhimakomsi@gmail.com',   
                  'smtp_pass' => '@himakomsi',   
                  'mailtype' => 'html',   
                  'charset' => 'iso-8859-1'  
                  );  
                   $this->load->library('email', $config);  
                   $this->email->set_newline("\r\n");  
                   $this->email->from('eventhimakomsi@gmail.com', 'Events Himakomsi');   
                   $this->email->to('naqiyazorahima@gmail.com');   
                   $this->email->subject('Undangan Kegiatan');   
                   $this->email->message('Hai -nama user-  kamu diundang dalam -nama kegiatan- -tanggal- -pukul- , silahkan check undangan pada aplikasi ini.  ');  
                   if (!$this->email->send()) {  
                    show_error($this->email->print_debugger());   
                  }else{  
                    echo 'Success to send email';   
                  }  
                }  
}  



