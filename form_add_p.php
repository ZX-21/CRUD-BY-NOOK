<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="insert_p.php">

   <div class="mb-3 mt-3">
    <label for="item_id" class="form-label">Participant_name</label>
    <input type="text" class="form-control" id="pname" placeholder="Enter Name" name="pname">
  </div>

  <div class="mb-3 mt-3">
    <label for="item_name" class="form-label">Email</label>
    <input type="text" class="form-control" id="email" placeholder="Enter item email " name="email">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Phone</label>
    <input type="number" class="form-control" id="phone" placeholder="Enter phone" name="phone">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</body>
</html>