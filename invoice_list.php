<?php
session_start();
include('header.php');
include 'Invoice.php';
$invoice = new Invoice();
$invoice->checkLoggedIn();
?>
<title>Invoice System</title>
<script src="js/invoice.js"></script>
<link href="css/style.css" rel="stylesheet">
<?php include('container.php'); ?>
<div class="container">
  <h2 class="title mt-5">Invoice Sys</h2>
  <?php include('menu.php'); ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>

  <body>
    <div class="card mb-4">
      <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Data List Invoice
      </div>
      <div class="card-body">
        <table id="datatablesSimple">
          <thead>
            <tr>
              <th>Order ID</th>
              <th>Reciver</th>
              <th>Inv. Date</th>
              <th>Total</th>
              <th>Cetak (TAX)</th>
              <th>Cetak Non TAX</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $invoiceList = $invoice->getInvoiceList();
            foreach ($invoiceList as $invoiceDetails) {
              $invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetails["order_date"]));
              echo '
              <tr>
                <td>' . $invoiceDetails["order_id"] . '</td>
                <td>' . $invoiceDetails["order_receiver_name"] . '</td>
                <td>' . $invoiceDate . '</td>
                <td>Rp.' . $invoiceDetails["order_total_after_tax"] . '</td>
                <td><a href="cetak.php?invoice_id=' . $invoiceDetails["order_id"] . '" title="Print Invoice"><button class="btn btn-primary btn-sm"><i class="fa fa-print"></i></button></a></td>
                <td><a href="cetak-non-tax.php?invoice_id=' . $invoiceDetails["order_id"] . '" title="Print Invoice"><button class="btn btn-warning btn-sm"><i class="fa fa-print"></i></button></a></td>
                <td><a href="edit_invoice.php?update_id=' . $invoiceDetails["order_id"] . '"  title="Edit Invoice"><button class="btn btn-success btn-sm"><i class="fa fa-edit"></i></button></a></td>
                <td><a href="delete-invoice.php?order_id=' . $invoiceDetails['order_id'] . '" title="Delete Invoice"><button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a></td>
              </tr>
            ';
            ?>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>

</html>