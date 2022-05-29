

<div class="col-md-12">
<div class="row">
<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        
        <h1 class="page-header breadcrumb">
            <small><i class="fa fa-desktop"></i></small> All Orders
        </h1>
    </div>
</div>



<h4 class="text-center bg-success"><?php display_message(); ?></h4>
</div>

<div class="row">
<table class="table table-hover">
    <thead>

      <tr>
           <th>ID</th>
           <th>AMOUNT</th>
           <th>TRANSACTION</th>
           <th>CURRENCY</th>
           <th>PAYMENT STATUS</th>
      </tr>
    </thead>
    <tbody>
     
      <?php display_orders(); ?>

    </tbody>
</table>
</div>
</div>