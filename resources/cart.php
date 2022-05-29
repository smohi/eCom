<?php require_once("config.php"); ?>

<?php 


if (isset($_GET['add'])) {

// $_SESSION['product_'.$_GET['add']] +=1;
// redirect("index.php");
	$query = query("SELECT * FROM products WHERE product_id=".escape_string($_GET['add'])."");
	confirm($query);
	while ($row = fetch_array($query)) {
		# code...
		if ($row['product_quantity'] != $_SESSION['product_'.$_GET['add']] ){
			# code...
			$_SESSION['product_'.$_GET['add']]+=1;
			redirect("../public/checkout.php");
		}else{

			set_message("We only have ".$row['product_quantity']." "."{$row['product_title']}"." available!");
			redirect("../public/checkout.php");
		}
	}

}


if (isset($_GET['remove'])) {

	$_SESSION['product_'.$_GET['remove']]--;

	if ($_SESSION['product_'.$_GET['remove']]<1) {
		
		unset($_SESSION['item_total']);
		unset($_SESSION['item_quantity']);

		redirect("../public/checkout.php");
	}else{
		redirect("../public/checkout.php");

	}
}


if (isset($_GET['delete'])) {

	$_SESSION['product_'.$_GET['delete']]='0';

	unset($_SESSION['item_total']);
	unset($_SESSION['item_quantity']);
	
	redirect("../public/checkout.php");
	
}


function cart() {

	$total = 0;
	$item_quantity = 0;
	$item_name = 1;
	$item_number = 1;
	$amount = 1;
	$quantity = 1;

	foreach ($_SESSION as $name => $value) {

		if ($value > 0) {

			if (substr($name, 0,8)=="product_") {

			$temp_length = strlen($name);
			$length = ($temp_length - 8);
			$id = substr($name, 8, $length);

			$query = query("SELECT * FROM products WHERE product_id = ".escape_string($id)." ");
	confirm($query);

while ($row = fetch_array($query)) {

$sub = $row['product_price']*$value;
$item_quantity+=$value;

$product_image = display_image($row['product_image']);



$product = <<<DELIMETER

<tr>
	<th><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a></th>
	<th>
		<img src="../resources/{$product_image}" alt="Product Image" width="100px">
	</th>
	<th>৳ {$row['product_price']}</th>
	<th>{$value}</th>
	<th>৳ {$sub}</th>
	<td><a href="../resources/cart.php?remove={$row['product_id']}" class="btn btn-warning"><span class="glyphicon glyphicon-minus"></span></a>		<a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span></a> 		<a href="../resources/cart.php?delete={$row['product_id']}" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>

<input type="hidden" name="item_name_{$item_name}" value="{$row['product_title']}">
<input type="hidden" name="item_number_{$item_number}" value="{$row['product_id']}">
<input type="hidden" name="amount_{$amount}" value="{$row['product_price']}">
<input type="hidden" name="quantity_{$quantity}" value="{$value}">

DELIMETER;

echo $product;

$item_name++;
$item_number++;
$amount++;
$quantity++;

}

$_SESSION['item_total'] = $total += $sub;
$_SESSION['item_quantity'] = $item_quantity;


		}

		}
		
		

	}


	

}

function process_transaction() {


	if (isset($_GET['tx'])) {

    $amount = $_GET['amt'];
    $currency = $_GET['cc'];
    $transaction = $_GET['tx'];
    $status = $_GET['st'];
	$total = 0;
	$item_quantity = 0;


	foreach ($_SESSION as $name => $value) {

		if ($value > 0) {

			if (substr($name, 0,8)=="product_") {

			$length = strlen($name - 8);
			$id = substr($name, 8, $length);


// insert data into orders table=============
			$send_order = query("INSERT INTO orders (order_amount, order_transaction, order_status,order_currency) VALUES ('{$amount}','{$transaction}','{$status}','{$currency}')");
    $last_id = last_id() ;
    confirm($send_order);


// get  product id from db=============
			$query = query("SELECT * FROM products WHERE product_id = ".escape_string($id)." ");
	confirm($query);

while ($row = fetch_array($query)) {

$product_price = $row['product_price'];
$product_title = $row['product_title'];
$sub = $row['product_price']*$value;
$item_quantity+=$value;

// insert data into reports table=============

$insert_report = query("INSERT INTO reports (product_id, order_id,product_title, product_price, product_quantity) VALUES ('{$id}','{$last_id}','{$product_title}','{$product_price}','{$value}')");
    confirm($insert_report);


}

$total += $sub;


		}

		}
		
	}
    session_destroy();

	}else{
    redirect("index.php");
}


	

}


function show_paypal() {

if (isset($_SESSION['item_quantity']) && ($_SESSION['item_quantity'])>0 ) {
	

$paypal_button = <<<DELIMETER


<input type="image" name="upload" border="0" src="img/buy-now_s.png" alt="Buy Now" >

DELIMETER;

return $paypal_button;
}



}




 ?>