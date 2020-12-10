<?php
require_once('../lib/database.php');
$db2=new Database();

$date=date("Y-m-d \t g.i a", time()+14500);

if(isset($_POST['action'])){
    if($_POST['action']=="Get_data"){
        
        $ip=$_POST['ip'];
        $os=$_POST['os'];
        $browser=$_POST['browser'];
        $device=$_POST['device'];
        
        $sel="SELECT * FROM get_ipaddress WHERE ip='$ip' AND browser='$browser' AND device='$device'";
        $query=$db2->select($sel);
        if($query){
              
           
                $upd="UPDATE get_ipaddress SET cpu_type='$os',browser='$browser',device='$device',date='$date',status='1' WHERE ip='$ip' AND browser='$browser' AND device='$device'";
            
                $insquery=$db2->update($upd);
           
            
        }else{
         
                
               $ins="INSERT INTO get_ipaddress(ip,cpu_type,browser,device,date,status)VALUES('$ip','$os','$browser','$device','$date','0')";
            
               $insquery=$db2->insert($ins);
           
        }
        
    }if($_POST['action']=="update_status"){
        
        
        
    }
}

?>