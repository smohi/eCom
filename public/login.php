<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login</h1>
            <h3 class="text-center bg-warning"><?php display_message(); ?></h3>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                    
                    <?php login_user(); ?>

                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control" required></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control" required></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  


       <!--  <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post" enctype="multipart/form-data">
                    
                    <?php //login_user(); ?>

                <div class="form-group"><label for="">
                    username<input type="text" name="username" class="form-control" required></label>
                </div>
                <div class="form-group"><label for="">
                    username<input type="email" name="name" class="form-control" required></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" name="password" class="form-control" required></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  -->



    </header>


        </div>

   <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>



   <!-- INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_email`) VALUES (NULL, 'user2', '1234', 'user2@gmail.com'); -->