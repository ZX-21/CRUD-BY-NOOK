<?php

require_once('config/config.php');

$meet = $_GET['meet']; 
$agenda = $_GET['agenda']; 
$date = $_GET['date']; 
$time = $_GET['time'];

// ใช้เพิ่มข้อมูล
 $sql = "INSERT INTO meetings (meeting_title, agenda , date , time) VALUES (:m, :a, :d, :t)";
 $query = $dbcon->prepare($sql);
 $query->bindParam(':m', $meet, PDO::PARAM_STR);
 $query->bindParam(':a', $agenda, PDO::PARAM_STR);
 $query->bindParam(':d', $date, PDO::PARAM_STR);
 $query->bindParam(':t', $time, PDO::PARAM_STR);

 $result = $query->execute();

 if ($result){
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
    window.location='select.php'
    </script>";
 } else {
    echo "<script>alert('มีบางอย่างผิดพลาด');
    window.location='select.php'
    </script>";
 }
?>