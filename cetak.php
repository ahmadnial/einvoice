
<?php
session_start();
// include 'header.php';
include 'Invoice.php';
require_once('vendor/autoload.php');
$templateProcessor = new \PhpOffice\PhpWord\templateProcessor('Template_cetak.docx');
$invoice = new Invoice();
$invoice->checkLoggedIn();
if (!empty($_GET['invoice_id']) && $_GET['invoice_id']) {
    echo $_GET['invoice_id'];
    $invoiceValues = $invoice->getInvoice($_GET['invoice_id']);
    $invoiceItems = $invoice->getInvoiceItems($_GET['invoice_id']);
}
$invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceValues['order_date']));
// $invoiceValues['order_receiver_name'];
// $invoiceValues['order_receiver_address'];
// $invoiceValues['order_id'];
// $invoiceDate;
// $count = 0;
// foreach ($invoiceItems as $invoiceItem) {
// $count++;
// $invoiceItem["item_code"];
// $invoiceItem["item_name"];
// $invoiceItem["order_item_quantity"];
// $invoiceItem["order_item_price"];
// $invoiceItem["order_item_final_amount"];
// $invoiceValues['order_total_before_tax'];
// $invoiceValues['order_tax_per'];
// $invoiceValues['order_total_tax'];
// $invoiceValues['order_total_after_tax'];
// $invoiceFileName = $invoiceValues['order_id'];

// var_dump($invoiceItem);
// die();
// };
$templateProcessor->setValues(
    [
        'NAMACUST' => 'TESSSS',
        'ALAMAT_CUST' => $invoiceValues['order_receiver_address'],
    ]
);

$pathSave = 'Invoicexxx.docx';
$templateProcessor->saveAs($pathSave);

// header('content-Description: File Transfer');
// header('content-Disposition: attchment; Inv_xx.docx');
// header('content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
// readfile($pathSave);

// header('content-Description: File Transfer');
// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=Invoice.docx");
// header("Content-length: " . strlen($document));
// echo $document;


// memanggil dan membaca template
// isi dokumen dinyatakan dalam bentuk string
// $document = file_get_contents("Template_cetak.rtf");
// $document3 = str_replace("#NAMA_CUST", $invoiceValues['order_receiver_name'], $document);
// $document = str_replace("#ALAMAT_CUST", $invoiceValues['order_receiver_address'], $document);
// $document = str_replace("#INVOICE_DATE", $invoiceDate, $document);


// var_dump($templateProcessor);
// die();
// header untuk membuka file output RTF dengan MS. Word
// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=Invoice.doc");
// header("Content-length: " . strlen($document));
// echo $document;
// print_r($document);
// var_dump($invoiceItem);
// die();
