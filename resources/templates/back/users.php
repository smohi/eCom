
<div class="col-lg-12">
  

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            
            <h1 class="page-header breadcrumb">
                <small><i class="fa fa-wrench"></i></small> Users
            </h1>
        </div>
    </div>


      <p class="bg-success">
        <?php echo display_message(); ?>
    </p>

    <a href="../../public/admin/index.php?add_user" class="btn btn-primary">Add User</a>


    <div class="col-md-12">

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Full Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
            <tbody>

                <?php get_users_admin(); ?>
                

            </tbody>
        </table> <!--End of Table-->
    

    </div>










    
</div>

