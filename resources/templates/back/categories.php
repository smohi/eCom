<?php add_category_admin(); ?>

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        
        <h1 class="page-header breadcrumb">
            <small><i class="fa fa-list"></i></small> Categories
        </h1>
    </div>
</div>


<div class="col-md-4">

    <h4 class="text-center bg-success"><?php display_message(); ?></h4>
    
    <form action="" method="post">
    
        <div class="form-group">
            <label for="category-title">Title</label>
            <input type="text" name="cat_title" class="form-control" required>
        </div>

        <div class="form-group">
            
            <input type="submit" name="add_category" class="btn btn-primary" value="Add Category">
        </div>      


    </form>


</div>


<div class="col-md-8">

    <table class="table">
            <thead>

        <tr>
            <th>id</th>
            <th>Title</th>
        </tr>
            </thead>


    <tbody>
        
            <?php get_category_admin(); ?>
    </tbody>

        </table>

</div>



