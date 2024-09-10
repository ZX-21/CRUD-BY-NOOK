<?php

require_once('config/config.php');

$pname = $_GET['pname']; 
$email = $_GET['email']; 
$phone = $_GET['phone']; 

// ใช้เพิ่มข้อมูล
 $sql = "INSERT INTO participants (participant_name, email , phone) VALUES (:pn, :e, :ph)";
 $query = $dbcon->prepare($sql);
 $query->bindParam(':pn', $pname, PDO::PARAM_STR);
 $query->bindParam(':e', $email, PDO::PARAM_STR);
 $query->bindParam(':ph', $phone, PDO::PARAM_STR);


 $result = $query->execute();

 if ($result){
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
    window.location='select_p.php'
    </script>";
 } else {
    echo "<script>alert('มีบางอย่างผิดพลาด');
    window.location='select_p.php'
    </script>";
 }
?>