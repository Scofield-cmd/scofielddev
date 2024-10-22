<?php  
    require 'php/models/ClassLocateurs.php';
    $db = new database();
    include 'includes/entete.php';
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href=" https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.bootstrap5.css">
<div class="table-responsive text-center p-3 my-4 bg-light border border-primary" id="orderTable">

</div>

<script src="js/process.js"></script>