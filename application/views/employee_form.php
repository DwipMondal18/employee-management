<!DOCTYPE html>
<html>
<head>
  <title>Employees</title>
</head>
<body>

  <h2>Employee List</h2>
  <a href="<?php echo base_url('employee/create'); ?>">Add New Employee</a><br><br>

  <table border="1" cellpadding="8">
    <tr>
      <th>Name</th>
      <th>Address</th>
      <th>Designation</th>
      <th>Salary</th>
      <th>Picture</th>
      <th>Actions</th>
    </tr>
    <?php foreach($employees as $emp): ?>
    <tr>
      <td><?php echo $emp->name; ?></td>
      <td><?php echo $emp->address; ?></td>
      <td><?php echo $emp->designation; ?></td>
      <td><?php echo $emp->salary; ?></td>
      <td>
        <?php if ($emp->picture): ?>
          <img src="<?php echo base_url('uploads/pictures/' . $emp->picture); ?>" width="80">
        <?php endif; ?>
      </td>
      <td>
        <a href="<?php echo base_url('employee/edit/' . $emp->id); ?>">Edit</a> |
        <a href="<?php echo base_url('employee/delete/' . $emp->id); ?>" onclick="return confirm('Delete this employee?');">Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>
