<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <form action="insert.php">
   <div class="mb-3 mt-3">
    <label for="item_id" class="form-label">Meeting_title</label>
    <input type="text" class="form-control" id="meet" placeholder="Enter title" name="meet">
  </div>

  <div class="mb-3 mt-3">
    <label for="item_name" class="form-label">Agenda</label>
    <input type="text" class="form-control" id="agenda" placeholder="Enter item agenda " name="agenda">
  </div>

  <div class="mb-3">
    <label for="description" class="form-label">Date</label>
    <input type="date" class="form-control" id="date" placeholder="Enter date" name="date">
  </div>

  <div class="mb-3">
    <label for="price" class="form-label">Time</label>
    <input type="time" class="form-control" id="time" placeholder="Enter time" name="time">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</body>
</html>