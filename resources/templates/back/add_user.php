<?php add_user(); ?>

  <div class="row">
        <div class="col-lg-12">
            
            <h1 class="page-header breadcrumb">
                <small><i class="fa fa-wrench"></i></small> Add User
            </h1>
        </div>
    </div>





<form action="" method="post" enctype="multipart/form-data">




  <div class="col-md-6">

     
     <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" class="form-control" required>
         
     </div>
     <div class="form-group">
      <label for="user_fullname">Full Name</label>
      <input type="text" name="user_fullname" class="form-control" required>
         
     </div>


      <div class="form-group">
          <label for="email">Email</label>
      <input type="email" name="user_email" class="form-control" required >
         
     </div>

<!-- 
      <div class="form-group">
          <label for="first name">First Name</label>
      <input type="text" name="first_name" class="form-control"   >
         
     </div> -->
<!-- 
      <div class="form-group">
          <label for="last name">Last Name</label>
      <input type="text" name="last_name" class="form-control"   >
         
     </div> -->


      <div class="form-group">
          <label for="password">Password</label>
      <input type="password" name="user_password" class="form-control" required >
         
     </div>

      <div class="form-group">

      <!-- <a id="user-id" class="btn btn-danger" href="">Delete</a> -->

      <input type="submit" name="add_user" class="btn btn-primary pull-right" value="Add User" >
         
     </div>


      

  </div>



</form>





    