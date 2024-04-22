<?php

session_start();

include('includes/config.php');
// Adjust if needed




if (isset($_POST['book_id'])
 && $_POST['book_id'] !=
"") {

    // Get the book ID from POST request

    $book_id =
$_POST['book_id'];

    

    if (!isset($_SESSION['cart']))
 {

        $_SESSION['cart']
 = []; // Initialize cart if not set

    }

    

    // Add book to the cart

    $_SESSION['cart'][]
 = $book_id;
// Add the book ID to the cart

    

    // Redirect back to the book listing or cart page

    header('Location: book-listing.php');
// Adjust based on your application flow

    exit;

} else {

    // If book_id is not provided, handle the error appropriately

    header('Location: book-listing.php');
// Redirect back to a safe page

    exit;

}

?>
