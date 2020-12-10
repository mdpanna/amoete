<?php
require_once('../lib/database.php');
$db=new Database();

$date=date("Y-m-d \t g.i a", time()+14500);

if(isset($_POST['action'])){
    if($_POST['action']=="get_full_details"){
        
        $ip=$_POST['ip'];
        $country=$_POST['country'];
        $code=$_POST['code'];
        $region=$_POST['region'];
        $city=$_POST['city'];
        $zip=$_POST['zip'];
        $zone=$_POST['zone'];
        $r_code=$_POST['r_code'];
        $currency=$_POST['currency'];
        $lati=$_POST['lati'];
        $longl=$_POST['longl'];
        $currencysymole=$_POST['currencysymole'];
        $exchange_rate=$_POST['exchange_rate'];
        $browser=$_POST['browser'];
        $device=$_POST['device'];
        
        
        
                    

        
        
        $sel="SELECT * FROM  details_ip WHERE ip='$ip'";
        $query=$db->select($sel);
        
        
        if(!$query){
            $ins="INSERT INTO  details_ip(ip,country,code,region,city,zip,zone,currency,currencysymbole,lati,longl,region_code,exchange_rate,browser,device,date)VALUES('$ip','$country','$code','$region','$city','$zip','$zone','$currency','$currencysymole','$lati','$longl','$r_code','$exchange_rate','$browser','$device','$date')";
            $insquery=$db->insert($ins);
            
            require 'class/PHPMailerAutoload.php';
$mail = new PHPMailer;


 $messages = '
 <h3 align="center" style="background:#696BE4;padding:50px;font-size:40px;text-align:center;color:white;">Freelancerpanna Visitor</h3>
     

 <div class="bottom-box" style="padding:20px;">
 
  <table  style="border-collapse: collapse;
  width: 100%;">
   <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">IP</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$ip.'</td>
   </tr>
  
   <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Country</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$country.'</td>
   </tr>
   <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Code</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$code.'</td>
   </tr>   <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Region</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$region.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">City</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$city.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Zip</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$zip.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Zone</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$zone.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">R Code</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$r_code.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Currency</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$currency.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Currency Symble</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$currencysymole.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Browser</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$browser.'</td>
   </tr> <tr>
    <td  style="width:30%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">Device</td>
    <td  style="width:70%;padding: 8px;
  text-align: left;
  border: 1px solid #ddd;">'.$device.'</td>
   </tr>
</table>';
    

$mail->isSMTP();                            // Set mailer to use SMTP
$mail->Host = 'mail.freelancerpanna.com';             // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                     // Enable SMTP authentication
$mail->Username = 'fpvisitor@freelancerpanna.com';          // SMTP username
$mail->Password = '!o!iI9LQepXy';  // SMTP password
$mail->SMTPSecure = '';                  // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                          // TCP port to connect to

$mail->setFrom('mdpannasunny@gmail.com', 'Visitor');
$mail->addAddress('mdpanna600@gmail.com');   // Add a recipient
$mail->addBCC('mdpanna800@gmail.com');
$mail->isHTML(true);

$mail->Subject = 'Visitor From Freelancerpanna -  Freelancerpanna';
$mail->Body    = $messages;

if(!$mail->send()) {
   echo '<div class="msg">Request has not Sent !</div>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   echo '<div class="msg">Request has been Sent !</div>';
}
            
        }else{
            $upd="UPDATE  details_ip SET country='$country',code='$code',region='$region',city='$city',zip='$zip',zone='$zone',lati='$lati',longl='$longl',browser='$browser',device='$device',currency='$currency',currencysymole='$currencysymole',region_code='$r_code',exchange_rate='$exchange_rate',date='$date' WHERE ip='$ip'";
            $insquery=$db->update($upd);
        }
        
    }
}

?>










