<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h2>Login</h2>

  <?php if($this->session->flashdata('error')): ?>
    <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
  <?php endif; ?>

  <form method="post" action="<?php echo base_url('auth/login'); ?>">

    <label>Username:</label><br>
    <input type="text" name="username" required><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br>

    <label>Name:</label><br>
    <input type="text" name="name" required><br>

    <!-- CSRF Token -->
    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" 
           value="<?php echo $this->security->get_csrf_hash(); ?>">

    <br><br>
    <input type="submit" value="Login">
  </form> 
</body>
</html>
