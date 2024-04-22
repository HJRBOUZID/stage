<?php

session_start();

include('includes/config.php');
// Ensure this file contains your DB connection info




?>

<!DOCTYPE
html>

<html
xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta
charset="utf-8"
/>

    <meta
name="viewport"
content="width=device-width, initial-scale=1, maximum-scale=1"
/>

    <title>Chart - Your Books</title>

    <!-- Include style and other assets -->

    <link
href="assets/css/bootstrap.css"
rel="stylesheet"
/>

    <link
href="assets/css/font-awesome.css"
rel="stylesheet"
/>

    <link
href="assets/js/dataTables/dataTables.bootstrap.css"
rel="stylesheet"
/>

    <link
href="assets/css/style.css"
rel="stylesheet"
/>

    <link
href="http://fonts.googleapis.com/css?family=Open+Sans"
rel="stylesheet"
type="text/css"
/>

</head>

<body>

    <!-- Include the header -->

    <?php
include('includes/header.php');
?>




    <div
class="content-wrapper">

        <div
class="container">

            <h3>Your Chart</h3>




            <?php

            if (isset($_SESSION['cart'])
 && count($_SESSION['cart'])
 > 0) {

                $cart_items =
implode(',',
array_unique($_SESSION['cart']));
// Unique book IDs




                // Query to get book details based on the book IDs in the chart

                $sql =
"SELECT
*
FROM tblbooks
WHERE id
IN ($cart_items)";

                $query =
$dbh->prepare($sql);

                $query->execute();

                $results =
$query->fetchAll(PDO::FETCH_OBJ);




                if ($query->rowCount()
 > 0) {
                    echo
"<table class='table table-striped table-bordered'>";
                    echo
"<thead>
                            <tr>
                                <th>Book Image</th>
                                <th>Book Name</th>
                                <th>Author</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>";




                    // Loop through the book results to display in the table

                    foreach ($results as $book) {echo"<tr><td><img src='admin/bookimg/" .htmlentities($book->bookImage). "' width='50' /></td> 
                        <td>" .htmlentities($book->BookName) . "</td>
                        <td>" .htmlentities($book->AuthorId). "</td>
                        <td>" .htmlentities($book->BookPrice) . "</td>
                        <td> <form action='remove-from-chart.php' method='post'>
                             <input type='hidden' name='book_id' value='" .htmlentities($book->id). "'>
                             <button type='submit' class='btn btn-danger'>Remove from Chart</button>
                             </form> </td></tr>";
 }
           echo"</tbody> </table>

                          <!-- Button to proceed to payment -->

                          <a href='payment.php' class='btn btn-success'>Proceed to Payment</a>";
                } else {
                    echo"Your chart is empty.";}
            } 
            else { echo"Your chart is empty."; }
 ?>
        </div>

    </div>




    <!-- Include the footer -->

    <?php
include('includes/footer.php');
?>




    <!-- Include scripts -->

    <script
src="assets/js/jquery-1.10.2.js"></script>

    <script
src="assets/js/bootstrap.js"></script>

    <script
src="assets/js/custom.js"></script>

</body>

</html>
