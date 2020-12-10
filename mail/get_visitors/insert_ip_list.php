<?php
require_once('../lib/database.php');
$db=new Database();

$date=date("Y-m-d \t g.i a", time()+14500);

if(isset($_POST['action'])){
    if($_POST['action']=="insert_ip_list"){
        
        $ip=$_POST['ip'];
        $os=$_POST['os'];
        $browser=$_POST['browser'];
        $device=$_POST['device'];
        
        $sel="SELECT * FROM get_iplist WHERE ip='$ip'";
        $query=$db->select($sel);
        if(!$query){
            $ins="INSERT INTO get_iplist(ip,cpu_type,browser,device,date)VALUES('$ip','$os','$browser','$device','$date')";
            $insquery=$db->insert($ins);
            
        }else{
            $upd="UPDATE get_iplist SET cpu_type='$os',browser='$browser',device='$device',date='$date' WHERE ip='$ip'";
            $insquery=$db->update($upd);
        }
        
    }
}

?>