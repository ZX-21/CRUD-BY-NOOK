<center>
    <a href = "select_p.php">ไปยังหน้า Participants</a>  &nbsp;&nbsp;&nbsp;&nbsp;  <a href = "select_mp.php">ไปยังหน้า Meeting_Participants</a><br>
    <a href = "form_add.php">เพิ่มข้อมูล</a>
    <table border="1" >
    <th>Id</th>
    <th>Meeting_title </th>
    <th>Agenda</th>
    <th>Date</th>
    <th>Time</th>
    <th>delete</th>
    <th>update</th>

    <?php

include('config/config.php');
// ไฟล์นี้ใช้สำหรับเลือกข้อมูลที่จะแสดงผล
 $sql = "SELECT * FROM meetings ";
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
         echo $res->meeting_title ."<br>";
         echo "</td>";
         echo "<td>";
         echo $res->agenda . "<br>";
         echo "</td>";
         echo "<td>";
         echo $res->date . "<br>";
         echo "</td>";
         echo "<td>";
         echo $res->time . "<br>";
         echo "</td>";
         echo "<td>";
         echo "<a href ='delete.php?id=$res->id'> ลบ</a>";
         echo "</td>";
         echo "<td>";
         echo "<a href ='form_update.php?update_id=$res->id'> แก้ไข</a>";
         echo "</td>";
         echo "</tr>";
     }
 }

?>
</table>