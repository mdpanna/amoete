<?php


if(isset($_POST['action'])){
    
    if($_POST['action']=='mail'){

	
        $name=$_POST['name'];
        $email=$_POST['email'];
        $messages=$_POST['message'];
        $device=$_POST['device'];
        $city=$_POST['city'];
        $region=$_POST['region'];
        $country=$_POST['country'];





             
                

$message="<!doctype html>
<html class='no-js' lang=''>

<head>

    <meta charset='utf-8'>
    <title>New Project</title>

    <meta name='description' content=''>
    <meta name='viewport' content='width=device-width, initial-scale=1'>


    <meta name='theme-color' content='#fafafa'>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            padding: 0;
            margin: 0;
            font-family: Arial;

        }

        .main-box {
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
        }

        .main-box .box {
            width: 100%;
            color: gray;
        }


        .main-box .box img {
            width: 200px;
            padding-bottom: 10px;
        }

        .main-box .box .content-box {
            background: white;
            padding: 20px;
            border-radius: 5px;
            border: 1px solid lightgray;
        }

        .main-box .box .content-box p {
            color: #847e7e;
            padding: 5px 0;
            font-size:15px;
        }

        .main-box .box .content-box span {
            display: block;
            font-size: 30px
        }


        .mini-box {
            margin-top: 20px;
        }

        .main-box .box .content-box table {
            margin: 10px 0;
        }

        .main-box .box .footer-box {
            padding: 50px 0;
            text-align: center;
        }

        .main-box .box .footer-box h5 {
            color: gray;
            font-size: 15px;
            padding-bottom: 10px;
            width: 80%;
            margin: 0 auto;
        }


        table tr td {
            color: gray;

        }

        .table-bordered {
            border-collapse: collapse;
        }

        .table-bordered th {
            padding: 10px;
            border-right: 1px solid lightgray;

        }



        .table-bordered tr {
            border: 1px solid lightgray;
        }

        .table-bordered tr td {
            padding: 10px !important;
            border-right: 1px solid lightgray;
            width: 20%;
        }

        .footer-box .social-media {
            display: flex;
            align-content: center;
            justify-content: center;

        }

        .footer-box .social-media img {
            width: 40px;
            margin: 5px 10px;
        }



        @media (max-width:566px) {
            .main-box {
                padding: 50px 20px;
                font-size: 13px;
            }


            .navbar-brand {
                font-size: 25px;
                
            }

            .main-box .box .content-box p {
                font-size:13px;;
            }

            .main-box .box .footer-box h5 {
                font-size: 14px;
                width: 90%;
            }

            .main-box .box img {
                width: 130px;
                padding-bottom: 10px;
            }
        }

    </style>
</head>

<body>
    <div class='main-box'>
        <div class='box'>
            <div class='navbar-brand'>
                <img src='http://work.freelancerpanna.com/appdesign/img/logo.png' alt='none'>
            </div>
            <div class='content-box'>

                <p>".$messages."</p>
                <div class='mini-box'>
                    <label>User Info:</label>
                    <table class='table table-bordered'>
                        <tr>
                            <td>Name</td>
                            <td>$name</td>

                        </tr>
                        
                        <tr>
                            <td>Email</td>
                            <td>$email</td>

                        </tr>
                        <tr>
                            <td>Operating System: </td>
                            <td>$device</td>

                        </tr>
                        <tr>
                            <td>Approximate Location: </td>
                            <td>$city, $region, $country</td>


                        </tr>
                    </table>
                </div>
            </div>

           
        </div>
    </div>

</body>


</html>
 ";
         



$subject='Mail from '.$email;

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$to="mdpannasunny@gmail.com";

$headers.='From: mdpanna600@gmail.com';

        
if(mail($to,$subject,$message,$headers)){
        $error_message = "Mailer Error: " . $mail->ErrorInfo;
}else{
    echo "Successfully sent!";
}



        
        
        
        
        
        
        
        
        
   
        
      
    } 
    

}
?>
