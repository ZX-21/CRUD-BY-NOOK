<?php
require_once ('config/config.php');

if (isset($_REQUEST["update_id"])) {
    try {
        $id = $_REQUEST["update_id"];
        $select_stmt = $dbcon->prepare("SELECT * FROM participants WHERE id = :aid");
        $select_stmt->bindParam(":aid", $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

if (isset($_POST["btn_update"])) {
    $pname = $_POST['pname']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone']; 

    try {
        $id_up = $_REQUEST["update_id"]; 
        $update_stmt = $dbcon->prepare("UPDATE participants SET participant_name = :pn, email = :e, phone = :ph WHERE id = :id");

        // Binding parameters
        $update_stmt->bindParam(':id', $id_up, PDO::PARAM_STR);
        $update_stmt->bindParam(':pn', $pname, PDO::PARAM_STR);
        $update_stmt->bindParam(':e', $email, PDO::PARAM_STR);
        $update_stmt->bindParam(':ph', $phone, PDO::PARAM_STR);

        if ($update_stmt->execute()) {
            echo "<script>alert('แก้ไขข้อมูลเรียบร้อย'); window.location.href='select_p.php';</script>";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Meeting</title>
</head>
<body>

<form method="POST" action="">
   <div class="mb-3 mt-3">
    <label for="meet" class="form-label">Participant Name</label>
    <input type="text" class="form-control" id="pname" name="pname" value="<?php echo htmlspecialchars($row['participant_name'] ?? ''); ?>" required>
  </div>

  <div class="mb-3 mt-3">
    <label for="agenda" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($row['email'] ?? ''); ?>" required>
  </div>

  <div class="mb-3">
    <label for="date" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($row['phone'] ?? ''); ?>" required>
  </div>

  <div class="text-center">
   <input type="submit" name="btn_update" class="btn btn-success" value="Update">
   <a href="select_p.php" class="btn btn-secondary">Cancel</a>
  </div>
</form>

</body>
</html>
