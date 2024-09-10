<?php
include('config/config.php');
$id = $_GET['id']; 
$sql = "DELETE FROM participants WHERE id = :id";
$query = $dbcon->prepare($sql);
$query->bindParam(':id', $id, PDO::PARAM_INT);

$query->execute();
if ($query->rowCount()>0){
     echo"<script>alert('ลบข้อมูลเรียบร้อย');
     window.location='select_p.php';
     </script>";
    } else {
        echo"<script>alert('มีบางอย่างผิดพลาด');
         window.location='select_p.php';</script>";
    }
?>