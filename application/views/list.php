<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Users</title>
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
<div class="row">
<div class="col-12" >
<?php
$success = $this->session->userdata('success');
if(!empty($success)){
?>
<div class="alert alert-success mt-3" ><?php echo $success; ?></div>
<?php
}
?>

<?php
$failure = $this->session->userdata('failure');
if(!empty($failure)){
?>
<div class="alert alert-danger mt-3" ><?php echo $failure; ?></div>
<?php
}
?>
</div>
</div>
  
<div class="row">
  <div class="col-md-6" ><h2 class="text-primary mt-3 mb-3 text-uppercase" >List of All Users</h2></div>
  <div class="col-md-6 text-right" ><a href="<?php echo base_url().'user/create/'?>" class="btn mt-3 mb-3 btn-success"> New User</a></div>
  </div>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Email</th>
        <th width="100" >Edit</th>
        <th width="100" >Delete</th>
      </tr>
    </thead>
    <tbody>

    <?php if(!empty($users)) { foreach($users as $user) { ?>
      <tr>
        <td><?php echo $user['user_id']; ?></td>
        <td><?php echo $user['user_name']; ?></td>
        <td><?php echo $user['user_email']; ?></td>
        <td>
            <a href="<?php echo base_url().'user/edit/'.$user['user_id']; ?>" class="btn btn-block btn-primary"> Edit</a>
        </td>
        <td>
        <a href="<?php echo base_url().'user/delete/'.$user['user_id']; ?>" class="btn btn-block btn-danger"> Delete</a>
        </td>
      </tr>
      <?php } } else { ?>

        <tr>
        <td colspan="5" class="text-center text-danger" >No Records Found</td>
        </tr>

        <?php } ?>



    </tbody>
  </table>



</div>

</body>
</html>