<?php 

$upload_directory = "uploads/";

// helper functions============


function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}


function redirect($location){

return header("Location: $location ");


}

function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}


function confirm($result){

global $connection;

if(!$result) {

die("QUERY FAILED " . mysqli_error($connection));


	}


}


function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);


}


function last_id(){

global $connection;

return mysqli_insert_id($connection);

}



// get products ==============


function get_products() {


$query = query(" SELECT * FROM products");
confirm($query);



while ($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);


$product = <<<DELIMETER

<div class="col-sm-4 col-lg-4 col-md-4">
	    <div class="thumbnail">
	        <a href="item.php?id={$row['product_id']}"><img src="../resources/{$product_image}" alt=""></a>
	        <div class="caption">
	            <h4 class="pull-right">৳ {$row['product_price']}</h4>
	            <h4><a href="item.php?id={$row['product_id']}">{$row['product_title']}</a>
	            </h4>
	            <p>{$row['product_short_description']}</p>
	            <a class="btn btn-success"  href="../resources/cart.php?add={$row['product_id']}" style="margin-top:10px;">Add To Cart!</a>
	        </div>

	    </div>
	</div>

DELIMETER;

	echo $product;


}


}


function get_categories(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_links = <<<DELIMETER

<a href='category.php?id={$row['cat_id']}' class='list-group-item'>{$row['cat_title']}</a>


DELIMETER;

echo $categories_links;

     }



}
	

function get_products_in_cat_page() {


$query = query(" SELECT * FROM products WHERE product_category_id = " . escape_string($_GET['id']) . " ");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="../resources/{$product_image}" alt="">
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p style="padding-right:8px;padding-left:8px;">{$row['product_short_description']}</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-success">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-primary">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


		}


}



function get_products_in_shop_page() {


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER


            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <a href="item.php?id={$row['product_id']}"><img src="../resources/{$product_image}" alt="{$row['product_title']}"></a>
                    <div class="caption">
                        <h3>{$row['product_title']}</h3>
                        <p>{$row['product_short_description']}</p>
                        <p>
                            <a href="../resources/cart.php?add={$row['product_id']}" class="btn btn-success">Buy Now!</a> <a href="item.php?id={$row['product_id']}" class="btn btn-primary">More Info</a>
                        </p>
                    </div>
                </div>
            </div>

DELIMETER;

echo $product;


        }


}



function login_user(){

if(isset($_POST['submit'])){

$username = escape_string($_POST['username']);
$password = escape_string($_POST['password']);

$query = query("SELECT * FROM users WHERE username = '{$username}' AND user_password = '{$password }' ");
confirm($query);

if(mysqli_num_rows($query) == 0) {

set_message("Incorrect Username or Password!");
redirect("login.php");


} else {

$_SESSION['username'] = $username;
redirect("admin");

         }



    }



}



function send_message() {

    if(isset($_POST['submit'])){ 

        $to          = "w82.smohi@gmail.com";
        $from_name   =   $_POST['name'];
        $subject     =   $_POST['subject'];
        $email       =   $_POST['email'];
        $message     =   $_POST['message'];


        $headers = "From: {$from_name} {$email}";


        $result = mail($to, $subject, $message,$headers);

        if(!$result) {

            set_message("Sorry we could not send your message");
            redirect("contact.php");
        } else {

            set_message("Your Message has been sent");
            redirect("contact.php");
        }




    }




}


// back end==========


function display_orders(){



$query = query("SELECT * FROM orders");
confirm($query);


while($row = fetch_array($query)) {


$orders = <<<DELIMETER

<tr>
    <td>{$row['order_id']}</td>
    <td>{$row['order_amount']}</td>
    <td>{$row['order_transaction']}</td>
    <td>{$row['order_currency']}</td>
    <td>{$row['order_status']}</td>
    <td><a class="btn btn-danger" href="../../resources/templates/back/delete_order.php?id={$row['order_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
</tr>




DELIMETER;

echo $orders;



    }



}


// admin_ products ===========================


function display_image($picture) {

global $upload_directory;

return $upload_directory . $picture;



}



function get_products_in_admin(){


$query = query(" SELECT * FROM products");
confirm($query);

while($row = fetch_array($query)) {

$category = show_product_category_title($row['product_category_id']);

$product_image = display_image($row['product_image']);

$product = <<<DELIMETER

        <tr>
            <td>{$row['product_id']}</td>

            <td>

            {$row['product_title']} <br>

            <a href="index.php?edit_product&id={$row['product_id']}"><img width='100' src="../../resources/{$product_image}" alt="product img"></a>


            </td>


            <td>{$category}</td>

            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_product.php?id={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $product;


        }


}


function show_product_category_title($product_category_id){


$category_query = query("SELECT * FROM categories WHERE cat_id = '{$product_category_id}' ");
confirm($category_query);

while($category_row = fetch_array($category_query)) {

return $category_row['cat_title'];

}



}

// add products in admin ============================

function add_product(){

if (isset($_POST['publish'])) {

$product_title             = escape_string($_POST['product_title']);
$product_category_id       = escape_string($_POST['product_category_id']);
$product_price             = escape_string($_POST['product_price']);
$product_description       = escape_string($_POST['product_description']);
$product_short_description = escape_string($_POST['product_short_description']);
$product_quantity          = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);

// $move_test = false;
$move_test = move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);

$query = query("INSERT INTO products(product_title, product_category_id, product_price, product_description, product_short_description, product_quantity, product_image) VALUES('{$product_title}', '{$product_category_id}', '{$product_price}', '{$product_description}', '{$product_short_description}', '{$product_quantity}', '{$product_image}')");
$last_id = last_id();
confirm($query);
set_message("New Product with id {$last_id} is Added");
redirect("index.php?products");


}



}


function show_categories_AP(){


$query = query("SELECT * FROM categories");
confirm($query);

while($row = fetch_array($query)) {


$categories_options = <<<DELIMETER

 <option value="{$row['cat_id']}">{$row['cat_title']}</option>


DELIMETER;

echo $categories_options;

     }



}

// Update products in Admin========================


function update_product(){

if (isset($_POST['update'])) {

$product_title             = escape_string($_POST['product_title']);
$product_category_id       = escape_string($_POST['product_category_id']);
$product_price             = escape_string($_POST['product_price']);
$product_description       = escape_string($_POST['product_description']);
$product_short_description = escape_string($_POST['product_short_description']);
$product_quantity          = escape_string($_POST['product_quantity']);
$product_image          = escape_string($_FILES['file']['name']);
$image_temp_location    = escape_string($_FILES['file']['tmp_name']);



if (empty($product_image)) {

$get_pic = query("SELECT product_image FROM products WHERE product_id =".escape_string($_GET['id'])." ");
confirm($get_pic);

while ($pic = fetch_array($get_pic)) {
    $product_image = $pic['product_image'];
}

}



$move_test = move_uploaded_file($image_temp_location  , UPLOAD_DIRECTORY . DS . $product_image);

$query = "UPDATE products SET ";
$query .="product_title             = '{$product_title}'            , ";
$query .="product_category_id       = '{$product_category_id}'      , ";
$query .="product_price             = '{$product_price}'            , ";
$query .="product_description       = '{$product_description}'      , ";
$query .="product_short_description = '{$product_short_description}', ";
$query .="product_quantity          = '{$product_quantity}'         , ";
$query .="product_image             = '{$product_image}'           ";
$query .="WHERE product_id=".escape_string($_GET['id']);



$send_update_query = query($query);
confirm($send_update_query);
set_message("Product has been Updated");
redirect("index.php?products");


}



}




// category page admin==================

function get_category_admin(){
$get_category_query = query("SELECT * FROM categories");
confirm($get_category_query);

while ($row = fetch_array($get_category_query)) {

$category = <<<DELIMETER
    <tr>
        <td>{$row['cat_id']}</td>
        <td>{$row['cat_title']}</td>
        <td><a class="btn btn-danger" href="../../resources/templates/back/delete_category.php?id={$row['cat_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
DELIMETER;

echo $category;

}




}

function add_category_admin(){

if (isset($_POST['add_category'])) {

$cat_title = escape_string($_POST['cat_title']);


if (empty($cat_title) || $cat_title==" ") {
    
    echo "<p class='bg-danger'>Please, insert a valid category name.</p>";

}else{

$query = query("INSERT INTO categories(cat_title) VALUES('{$cat_title}')");

confirm($query);


set_message("New Category is Added");
// redirect("../../public/admin/index.php?categories");

}
}



}


// Users in admin===================================

function get_users_admin(){
$get_users_query = query("SELECT * FROM users");
confirm($get_users_query);

while ($row = fetch_array($get_users_query)) {

$users = <<<DELIMETER
    <tr>
        <td>{$row['user_id']}</td>
        <td>{$row['user_fullname']}</td>
        <td>{$row['username']}</td>        
        <td>{$row['user_email']}</td>
        <td><a class="btn btn-danger" href="../../resources/templates/back/delete_user.php?id={$row['user_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
    </tr>
DELIMETER;

echo $users;

    }

}




function add_user() {


if(isset($_POST['add_user'])) {


$username        = escape_string($_POST['username']);
$user_fullname   = escape_string($_POST['user_fullname']);
$user_email      = escape_string($_POST['user_email']);
$user_password   = escape_string($_POST['user_password']);
// $user_photo = escape_string($_FILES['file']['name']);
// $photo_temp = escape_string($_FILES['file']['tmp_name']);


// move_uploaded_file($photo_temp, UPLOAD_DIRECTORY . DS . $user_photo);


$valid_test_query = query("SELECT * FROM users WHERE username = '{$username}' OR user_email = '{$user_email}' ");
confirm($valid_test_query);

if(mysqli_num_rows($valid_test_query) == 0) {


$query = query("INSERT INTO users(username,user_fullname,user_email,user_password) VALUES('{$username}','{$user_fullname}','{$user_email}','{$user_password}')");
confirm($query);

set_message("USER CREATED");

redirect("index.php?users");



}else{


set_message("username or email is already taken!");

redirect("index.php?users");

}




}



}


// reports admin=====================

function get_reports(){


$query = query(" SELECT * FROM reports");
confirm($query);

while($row = fetch_array($query)) {


$report = <<<DELIMETER

        <tr>
             <td>{$row['report_id']}</td>
            <td>{$row['product_id']}</td>
            <td>{$row['order_id']}</td>
            <td><a href="../item.php?id={$row['product_id']}" target="_blank">{$row['product_title']}</a>
            </td>
            <td>{$row['product_price']}</td>
            <td>{$row['product_quantity']}</td>
            <td><a class="btn btn-danger" href="../../resources/templates/back/delete_report.php?id={$row['report_id']}"><span class="glyphicon glyphicon-remove"></span></a></td>
        </tr>

DELIMETER;

echo $report;


        }





}











 ?>