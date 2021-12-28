<?php
    if(isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']) && isset($_POST['from']) && isset($_POST['auth'])){
        if($_POST['auth']=="safvgbfgbssdfhgadfgsgfdvsadf"){
            $to=$_POST['email'];
            $subject=$_POST['subject'];
            $message=$_POST['message'];
            $headers=array(
                'From'=>$_POST['from'],
                'Reply-To'=>$_POST['from'],
                'X-Mailer'=>'PHP/'.phpversion()
            );
            
            if(mail($to, $subject, $message, $headers)){
                echo '{"status":"0"}';
            }else{
                echo '{"status":"1"}';
            }
        }else{
            echo '{"status":"2"}';
        }
    }
?>