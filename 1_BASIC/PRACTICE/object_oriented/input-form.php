<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Course info</h2>
  <form action="show-details.php" >
    <div class="form-group">
      <label for="name">Course Name:</label>
      <input type="text" class="form-control"  placeholder="Enter course name" name="name">
    </div>
    <div class="form-group">
      <label for="fee">Course fee:</label>
      <input type="number" class="form-control"  placeholder="Enter fee amount" name="fee">
    </div>
    <div class="form-group">
      <label for="outline">Course Outline:</label>
      <input type="text" class="form-control"  placeholder="Enter course outline" name="outline">
    </div>
    <div class="form-group">
      <label for="duration">Course Duration:</label>
      <input type="text" class="form-control"  placeholder="Enter duration" name="duration">
    </div>

    <button name="submit_course" type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
