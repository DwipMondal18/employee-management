<!DOCTYPE html>
<html>
<head>
  <title>Edit Employee</title>
</head>
<body>
  <h2>Edit Employee</h2>
  <form method="post" action="<?php echo base_url('employee/update/'.$employee->id); ?>" enctype="multipart/form-data">
    <label>Name:</label><br>
    <input type="text" name="name" value="<?php echo $employee->name; ?>" required><br><br>

    <label>Address:</label><br>
    <textarea name="address" required><?php echo $employee->address; ?></textarea><br><br>

    <label>Designation:</label><br>
    <input type="text" name="designation" value="<?php echo $employee->designation; ?>" required><br><br>

    <label>Salary:</label><br>
    <input type="number" name="salary" value="<?php echo $employee->salary; ?>" step="0.01" required><br><br>

    <label>Current Picture:</label><br>
    <?php if ($employee->picture): ?>
      <img src="<?php echo base_url('uploads/pictures/' . $employee->picture); ?>" width="100"><br>
    <?php else: ?>
      No picture uploaded<br>
    <?php endif; ?>
    <label>Change Picture:</label><br>
    <input type="file" name="picture"><br><br>

    <input type="submit" value="Update Employee">
  </form>

  <br>
  <a href="<?php echo base_url('employee'); ?>">Back to Employee List</a>
</body>
</html>
