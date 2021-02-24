<!DOCTYPE html>
<html lang="en">
<head>
  <title>Create User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="navbar navbar-dark bg-dark" >
    <div class="container" >
        <a href="#" class="navbar-brand text-uppercase">Codeigniter : CRUD Application Demo</a>
    </div>
</div>

<div class="container">
  <h2 class="text-primary mt-3 mb-3 text-uppercase" >Create New User</h2><hr>

  <form method="POST" name="create_user" action="<?php echo base_url().'user/create'; ?>">


  <div class="form-group">
      <label for="pwd">Enter Full Name:</label>
      <input type="text" class="form-control" id="user_name" value="<?php echo set_value('user_name'); ?>"  name="user_name">
      <label class="text-danger" ><?php echo form_error('user_name'); ?></label>
    </div>  


    <div class="form-group">
      <label for="email">Enter Email:</label>
      <input type="email" class="form-control" id="user_email" value="<?php echo set_value('user_email'); ?>"   name="user_email">
      <label class="text-danger" ><?php echo form_error('user_email'); ?></label>
    </div>
  

    <button type="submit" class="btn btn-success">Create User</button>
    <a href="<?php echo base_url().'user/'; ?>" class="btn btn-warning"> Cancel</a>

  </form>

</div>

</body>
</html>