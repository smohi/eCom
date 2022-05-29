<div class="row">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        
        <h1 class="page-header breadcrumb">
            <small><i class="fa fa-tree"></i></small> All Products
        </h1>
    </div>
</div>

<h4 class="text-center bg-success"><?php display_message(); ?></h4>

<table class="table table-hover">


    <thead>

      <tr>
           <th>Id</th>
           <th>Title</th>
           <th>Category</th>
           <th>Price</th>
           <th>Quantity</th>
      </tr>
    </thead>
    <tbody>

    <?php get_products_in_admin(); ?>      


  </tbody>
</table>

</div>