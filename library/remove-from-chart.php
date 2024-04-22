<?php

session_start();

include('includes/config.php');




if(isset($_POST['book_id'])
 && isset($_SESSION['cart']))
 {

    $book_id =
$_POST['book_id'];

    $index =
array_search($book_id,
$_SESSION['cart']);
// Find book in cart

    

    if($index !==
false) {

        unset($_SESSION['cart'][$index]);
// Remove book from cart

    }




    // Redirect back to the cart page or listing

    header('Location: cart.php');
// Update with your desired redirection

    exit;

} else {

    // Handle invalid scenarios

    header('Location: cart.php');
// Redirecting back to the cart page if nothing is provided

    exit;

}

?>