<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css' ;?>">
</head>
<body>
    <div class="container">
        <?php
        $msg=$this->session->flashdata('msg');
        if($msg!=""){
            echo "<div class='alert alert-success'>'$msg'</div>";
        }
        ?>
        <div class="col-md-6">
        <div class="card">
        <div class="card-header">
    Registration Form
  </div>
  <div class="card-body">
    <p class="card-text">Fill your deatils</p>
    
    <form action="<?php echo base_url().'index.php/Auth/register';?>" name="registerform" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id= "name" value="<?php echo set_value('name'); ?>" class="form-control" placeholder="Name">
        <p class="invalid-feedback"><?php echo form_error('name'); ?></p>
    </div>
     <div class="form-group">
        <label for="name">Email</label>
        <input type="email" name="email" id= "email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="email">
       <p class="invalid-feedback"><?php echo form_error('email'); ?></p> 
    </div>
    <div class="form-group">
        <label for="name">phone</label>
        <input type="number" name="phone" id= "phone" value="<?php echo set_value('phone'); ?>" class="form-control" placeholder="Phone">
        <p class="invalid-feedback"><?php echo form_error('phone'); ?></p> 
    </div>
    <div class="form-group">
        <label for="name">Password</label>
        <input type="password" name="password" id= "password" value="<?php echo set_value('password'); ?>" class="form-control" placeholder="password">
        <p class="invalid-feedback"><?php echo form_error('password'); ?></p> 
    </div>
        <button class="btn btn-block btn-primary" type="submit" name="submit">Register Now</button>
    
    </form>
</div>
    
  </div>
</div>

        </div>
      

    </div>
    
</body>
</html>