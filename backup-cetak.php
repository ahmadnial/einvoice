
<?php
session_start();
// include 'header.php';
include 'Invoice.php';
require_once('vendor/autoload.php');
$templateProcessor = new \PhpOffice\PhpWord\templateProcessor('TemplateCetak2.docx');
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
// $count = 1;
// $count++;
// foreach ($invoiceItems as $invoiceItem) {

//     $invoiceItem["item_code"];
//     $invoiceItem["item_name"];
//     $invoiceItem["order_item_quantity"];
//     $invoiceItem["order_item_price"];
//     $invoiceItem["order_item_final_amount"];
//     $invoiceValues['order_total_before_tax'];
//     $invoiceValues['order_tax_per'];
//     $invoiceValues['order_total_tax'];
//     $invoiceValues['order_total_after_tax'];
$invoiceFileName = $invoiceValues['order_id'];
$templateProcessor->setValues(
    [
        'NAMACUST' => $invoiceValues['order_receiver_name'],
        'ALAMAT_CUST' => $invoiceValues['order_receiver_address'],
        'INVOICE_DATE' => $invoiceDate
    ]
);


foreach ($invoiceItems as $invoiceItem) {
    // foreach ($invoiceItem as $key) {
    // echo " $invoiceItem[item_name] ";
    // var_dump($invoiceItem['description']);
    // echo " $invoiceItem[description] ";


    $value = $templateProcessor->setValues(
        [
            // Item Perulangan
            'NO' => $invoiceItem['item_code'],
            'ITEM' => $invoiceItem['item_name'],
            'PRICE' => $invoiceItem['order_item_price'],
            'DES' => $invoiceItem['description'],
            'QTY' => $invoiceItem['order_item_quantity'],
            'SAT' => $invoiceItem['satuan'],
            'AMOUNT' => $invoiceItem['order_item_final_amount'],
            'SUBTOTAL' => $invoiceValues['order_total_before_tax'],
            'TAX' => $invoiceValues['order_total_tax'],
            'TOTAL' => $invoiceValues['order_total_after_tax'],

        ]
    );
    $templateProcessor->cloneRowAndSetValues('ITEM', 2);
    // var_dump($invoiceItem['order_item_price']);
    // $templateProcessor->setValues('ITEM' , $invoiceItem['item_name']);
    // $templateProcessor->cloneRowAndSetValues('userId', $values);
};
// var_dump($invoiceItem);
// };
// die();
$pathToSave = 'TesInv.docx';
$templateProcessor->saveAs($pathToSave);



// header('content-Description: File Transfer');
// header('content-Disposition: attchment; filename=TesInv.docx');
// header('content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
// readfile($pathToSave);

// header('content-Description: File Transfer');
// header("Content-type: application/msword");
// header("Content-disposition: inline; filename=Invoice.docx");
// header("Content-length: " . strlen($document));
// echo $document;

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
