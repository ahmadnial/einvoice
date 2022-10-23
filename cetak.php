<?php

use Sabberworm\CSS\Value\Value;

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
$invoiceFileName = $invoiceValues['order_id'];


//     $invoiceItem["item_code"];
//     $invoiceItem["item_name"];
//     $invoiceItem["order_item_quantity"];
//     $invoiceItem["order_item_price"];
//     $invoiceItem["order_item_final_amount"];
//     $invoiceValues['order_total_before_tax'];
//     $invoiceValues['order_tax_per'];
//     $invoiceValues['order_total_tax'];
//     $invoiceValues['order_total_after_tax'];
?>

-
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div>
        <table cellpadding="0" cellspacing="0" style="width:806.1pt; border-collapse:collapse;">
            <tbody>
                <tr style="height:11.8pt;">
                    <td colspan="2" style="width:37.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        <table cellpadding="0" cellspacing="0">
                            <tbody>
                                <tr style="height:11.8pt;">
                                    <td style="width:36.3pt; vertical-align:bottom;">
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><a name="RANGE_A1_M32"></a>&nbsp;</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><br></p>
                    </td>
                    <td style="width:45.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:11.8pt;">
                    <td colspan="2" style="width:37.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <div style="width:100%; height:11.8pt; display:inline-block; overflow:visible;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="height:0pt; display:block; position:absolute; z-index:0;"><img src="https://myfiles.space/user_files/133799_63784b959ed2238e/1666538560_templatecetak3/1666538560_templatecetak3-1.png" width="167" height="52" alt="" style="margin: 0 auto 0 0; display: block; "></span>&nbsp;</p>
                        </div>
                    </td>
                    <td style="width:45.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:11.8pt;">
                    <td colspan="2" style="width:37.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:45.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:12.5pt;">
                    <td colspan="5" style="width:184.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:44.55pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><em>&nbsp;</em></strong></p>
                    </td>
                    <td colspan="2" style="width:135.65pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><strong><em>Customer</em></strong></p>
                    </td>
                    <td colspan="2" style="width:133.4pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><em>Invoice Date</em></strong></p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><em>&nbsp;</em></strong></p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><strong><em>71220048</em></strong></p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:12.5pt;">
                    <td colspan="5" style="width:184.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <table cellpadding="0" cellspacing="0" style="width:157.8pt; border-collapse:collapse;">
                            <tbody>
                                <tr style="height:13.5pt;">
                                    <td style="width:147pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">Karangasem, Ponjong, Gunungkidul</p>
                                    </td>
                                </tr>
                                <tr style="height:13.5pt;">
                                    <td style="width:147pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">Daerah Istimewa Yogyakarta 55892</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><br></p>
                    </td>
                    <td colspan="3" style="width:191pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:11pt;"><strong><?= $invoiceValues['order_receiver_name'] ?></strong></p>
                    </td>
                    <td colspan="2" style="width:133.4pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong><span style="font-size:10pt;">&nbsp;</span></strong><strong><?= $invoiceDate ?></strong><span style="font-size:10pt;">&nbsp;</span></p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:20pt;"><span style="font-family:Algerian;">7E+07</span></p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:11.8pt;">
                    <td style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;Mobile</p>
                    </td>
                    <td colspan="4" style="width:141.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">(0815)6789-8910</p>
                    </td>
                    <td colspan="3" style="width:191pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:11pt;"><strong><?= $invoiceValues['order_receiver_address'] ?></strong></p>
                    </td>
                    <td colspan="2" style="width:133.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><em>&nbsp;</em></p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><em>&nbsp;</em></p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="font-family:Algerian;">&nbsp;</span></p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:13.9pt;">
                    <td style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp; Web</p>
                    </td>
                    <td colspan="4" style="width:141.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><a href="http://www.memayu.co.id/" style="text-decoration:none;"><u><span style="font-size:10pt; color:#0563c1;">www.memayu.co.id</span></u></a></p>
                    </td>
                    <td colspan="3" style="width:191pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><strong>&nbsp;</strong></p>
                    </td>
                    <td colspan="2" style="width:133.4pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><em>P.O Number</em></strong></p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><em>&nbsp;</em></strong></p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="3" style="width:109.2pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:top;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong><em>Terms Of Payment</em></strong></p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:13.9pt;">
                    <td style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp; Email</p>
                    </td>
                    <td colspan="4" style="width:141.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><a href="mailto:idn@memayu.co.id" style="text-decoration:none;"><u><span style="font-size:10pt; color:#0563c1;">idn@memayu.co.id</span></u></a></p>
                    </td>
                    <td colspan="3" style="width:191pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:10pt;"><strong>&nbsp;</strong></p>
                    </td>
                    <td colspan="2" style="width:133.4pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><em>-</em></p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><em>&nbsp;</em></p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="3" style="width:109.2pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>NET 7</strong></p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:11.8pt;">
                    <td style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp; NPWP</p>
                    </td>
                    <td colspan="4" style="width:141.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><u><span style="color:#0563c1;">92.249.021.4-545.000</span></u></p>
                    </td>
                    <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><em>&nbsp;</em></p>
                    </td>
                    <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><em>&nbsp;</em></p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><em>&nbsp;</em></p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-left:19.45pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:11.8pt;">
                    <td style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:51.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                    </td>
                </tr>
                <tr style="height:13.9pt;">
                    <td style="width:31.75pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>NO</strong></p>
                    </td>
                    <th colspan="3" style="width:100pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Item</strong><strong>&nbsp;</strong></p>
                    </th>
                    <td colspan="4" style="width:232.75pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Description</strong></p>
                    </td>
                    <td style="width:84.3pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Unit Price</strong></p>
                    </td>
                    <td colspan="3" style="width:85.5pt; border-top-style:solid; border-top-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Quantity</strong></p>
                    </td>
                    <td colspan="4" style="width:123.35pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;"><strong>Amount</strong></p>
                    </td>
                    <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>&nbsp;</strong></p>
                    </td>
                    <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                        <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><strong>&nbsp;</strong></p>
                    </td>
                </tr>
                <?php foreach ($invoiceItems as $invoiceItem) { ?>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:justify; font-size:11pt;"><strong><?= $invoiceItem["item_code"] ?></strong></p>
                        </td>
                        <td colspan="3" style="width:100pt; border-top-style:solid; border-top-width:0; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= $invoiceItem["item_name"] ?></strong></p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-top-style:solid; border-top-width:0; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= $invoiceItem["description"] ?></strong></p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= 'Rp.' . $invoiceItem['order_item_price'] ?></strong></p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-top-style:solid; border-top-width:0; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= $invoiceItem['order_item_quantity']  . $invoiceItem['satuan']  ?></strong></p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-top-style:solid; border-top-width:0; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;<strong><?= 'Rp.' . $invoiceItem['order_item_final_amount'] ?></strong></p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    <?php } ?>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:middle;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-right-style:solid; border-right-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:100pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:232.75pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="4" style="width:123.35pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-top-style:solid; border-top-width:0.75pt; border-left-style:solid; border-left-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td colspan="2" style="width:51.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td style="width:84.3pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td colspan="2" style="width:50.05pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>Sub Total</strong></p>
                        </td>
                        <td style="width:24.65pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td style="width:3.35pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td colspan="2" style="width:95.9pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= 'Rp.' . $invoiceValues['order_total_before_tax'] ?></strong></p>
                        </td>
                        <td style="width:2.5pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:top;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><em>&nbsp;</em></strong></p>
                        </td>
                        <td colspan="2" style="width:51.6pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:37.6pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:50.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>Tax 11%</strong></p>
                        </td>
                        <td style="width:24.65pt; border-top-style:solid; border-top-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td style="width:3.35pt; border-left-style:solid; border-left-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td colspan="2" style="width:95.9pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= $invoiceValues['order_total_tax'] ?></strong></p>
                        </td>
                        <td style="width:2.5pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td style="width:31.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:51.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:190.15pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:11pt;">Delivered by</p>
                        </td>
                        <td colspan="3" style="width:85.5pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>Total</strong></p>
                        </td>
                        <td style="width:3.35pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td colspan="2" style="width:95.9pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong><?= 'Rp.' . $invoiceValues['order_total_after_tax'] ?></strong></p>
                        </td>
                        <td style="width:2.5pt; border-right-style:solid; border-right-width:0.75pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;"><strong>&nbsp;</strong></p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:13.9pt;">
                        <td colspan="3" style="width:94.15pt; border-bottom-style:solid; border-bottom-width:0.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:11pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:3.35pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:95.9pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="3" style="width:94.15pt; border-top-style:solid; border-top-width:0.75pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%;"><strong>Pembayaran via&nbsp;</strong></p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="5" rowspan="4" style="width:157.25pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:10pt;"><img src="https://myfiles.space/user_files/133799_63784b959ed2238e/1666538560_templatecetak3/1666538560_templatecetak3-2.png" width="96" height="96" alt="C:\Users\Server 3\Downloads\qr-code.png"></p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="3" style="width:94.15pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%;"><strong>transfer bank BNI</strong></p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="3" style="width:94.15pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%;"><strong>Yogyakarta</strong></p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="3" style="width:94.15pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%;"><strong>a/c 0844347534</strong></p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="3" style="width:94.15pt; border-right-style:solid; border-right-width:0.75pt; padding-right:5.03pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; line-height:115%;"><strong>a/n MEMAYU</strong></p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:22.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:76.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="2" style="width:37.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:45.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:22.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:76.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:11.8pt;">
                        <td colspan="2" style="width:37.75pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;"><span style="color:#8496b0;">&nbsp;</span></p>
                        </td>
                        <td style="width:45.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:37.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:30.95pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:44.55pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:29.8pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:95.05pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:84.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:38.3pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:36.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td colspan="2" style="width:22.85pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:76.4pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:2.5pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:1.6pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                        <td style="width:60.45pt; padding-right:5.4pt; padding-left:5.4pt; vertical-align:bottom;">
                            <p style="margin-top:0pt; margin-bottom:0pt; font-size:10pt;">&nbsp;</p>
                        </td>
                    </tr>
                    <tr style="height:0pt;">
                        <td style="width:42.55pt;"><br></td>
                        <td style="width:6pt;"><br></td>
                        <td style="width:56.4pt;"><br></td>
                        <td style="width:48.4pt;"><br></td>
                        <td style="width:41.75pt;"><br></td>
                        <td style="width:55.35pt;"><br></td>
                        <td style="width:40.6pt;"><br></td>
                        <td style="width:105.85pt;"><br></td>
                        <td style="width:95.1pt;"><br></td>
                        <td style="width:49.1pt;"><br></td>
                        <td style="width:11.75pt;"><br></td>
                        <td style="width:35.45pt;"><br></td>
                        <td style="width:14.15pt;"><br></td>
                        <td style="width:19.5pt;"><br></td>
                        <td style="width:87.2pt;"><br></td>
                        <td style="width:13.3pt;"><br></td>
                        <td style="width:12.4pt;"><br></td>
                        <td style="width:71.25pt;"><br></td>
                    </tr>
            </tbody>
        </table>
        <p style="margin-top:0pt; margin-bottom:10pt;">&nbsp;</p>
    </div>


</body>

</html>