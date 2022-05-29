<div class="row">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        
        <h1 class="page-header breadcrumb">
            <small><i class="fa fa-bar-chart-o"></i></small> Reports
        </h1>
    </div>
</div>

<h4 class="text-center bg-success"><?php display_message(); ?></h4>

<table class="table table-hover">


    <thead>

      <tr>
           <th>Report Id</th>
           <th>Product Id</th>
           <th>Order Id</th>
           <th>Product Title</th>
           <th>Product Price</th>
           <th>Product Quantity</th>
      </tr>
    </thead>
    <tbody>

    <?php get_reports(); ?>      


  </tbody>
</table>

</div>