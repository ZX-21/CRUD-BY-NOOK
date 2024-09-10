<center>
    <a href = "select.php">ไปยังหน้า Meeting</a>  &nbsp;&nbsp;&nbsp;&nbsp;  <a href = "select_p.php">ไปยังหน้า Participants</a><br>
    <a href = "form_add_mp.php">เพิ่มข้อมูล</a>
    <table border="1" >
    <th>Id</th>
    <th>Meeting_title</th>
    <th>Agenda</th>
    <th>Date</th>
    <th>Time</th>
    <th>Name</th>
    <th>Phone</th>
    

    <?php

include('config/config.php');
// ไฟล์นี้ใช้สำหรับเลือกข้อมูลที่จะแสดงผล
 $sql = "SELECT * FROM `meeting_participants` 
LEFT JOIN meetings ON meeting_participants.meeting_id = meetings.id
LEFT JOIN participants ON meeting_participants.participant_id = participants.id";
 $query = $dbcon->prepare($sql);
 $query->execute();
 $result = $query->fetchAll(PDO::FETCH_OBJ);
 if ($query->rowCount()>0) {
     foreach($result as $res) {
         echo "<tr>";
         echo "<td>";
         echo $res->id_mp . "<br>";
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
         echo $res->participant_name ."<br>";
         echo "</td>";
         echo "<td>";
         echo $res->phone . "<br>";
         echo "</td>";

     }
 }

?>
</table>
