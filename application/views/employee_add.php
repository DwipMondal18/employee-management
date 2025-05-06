<!DOCTYPE html>
<html>
<head>
  <title>Add Employee</title>
</head>
<body>
  <h2>Add New Employee</h2>
  <form method="post" action="<?php echo base_url('employee/store'); ?>" enctype="multipart/form-data">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" required></textarea><br><br>

    <label>Designation:</label><br>
    <input type="text" name="designation" required><br><br>

    <label>Salary:</label><br>
    <input type="number" name="salary" step="0.01" required><br><br>

    <label>Picture:</label><br>
    <input type="file" name="picture"><br><br>

    <input type="submit" value="Save Employee">
  </form>

  <br>
  <a href="<?php echo base_url('employee'); ?>">Back to Employee List</a>
</body>
</html>
