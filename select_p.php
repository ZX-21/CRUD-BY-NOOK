<center>
    <a href = "select.php">ไปยังหน้า Meeting</a>  &nbsp;&nbsp;&nbsp;&nbsp;  <a href = "select_mp.php">ไปยังหน้า Meeting_Participants</a><br>
    <a href = "form_add_p.php">เพิ่มข้อมูล</a>
    <table border="1" >
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>delete</th>
    <th>update</th>

    <?php

include('config/config.php');
// ไฟล์นี้ใช้สำหรับเลือกข้อมูลที่จะแสดงผล
 $sql = "SELECT * FROM participants ";
 $query = $dbcon->prepare($sql);
 $query->execute();
 $result = $query->fetchAll(PDO::FETCH_OBJ);
 if ($query->rowCount()>0) {
     foreach($result as $res) {
         echo "<tr>";
         echo "<td>";
         echo $res->id . "<br>";
         echo "</td>";
         echo "<td>";
         echo $res->participant_name ."<br>";
         echo "</td>";
         echo "<td>";
         echo $res->email . "<br>";
         echo "</td>";
         echo "<td>";
         echo $res->phone . "<br>";
         echo "</td>";
         echo "<td>";
         echo "<a href ='delete_p.php?id=$res->id'> ลบ</a>";
         echo "</td>";
         echo "<td>";
         echo "<a href ='form_update_p.php?update_id=$res->id'> แก้ไข</a>";
         echo "</td>";
         echo "</tr>";
     }
 }

?>
</table>