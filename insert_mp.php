<?php

require_once('config/config.php');

$mid = $_GET['mid']; 
$pid = $_GET['pid']; 


// ใช้เพิ่มข้อมูล
 $sql = "INSERT INTO meeting_participants (meeting_id, participant_id) VALUES (:mid, :pid)";
 $query = $dbcon->prepare($sql);
 $query->bindParam(':mid', $mid, PDO::PARAM_STR);
 $query->bindParam(':pid', $pid, PDO::PARAM_STR);



 $result = $query->execute();

 if ($result){
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
    window.location='select_mp.php'
    </script>";
 } else {
    echo "<script>alert('มีบางอย่างผิดพลาด');
    window.location='select_mp.php'
    </script>";
 }
?>