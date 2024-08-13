<?php 
//create Invoice - My First Invoice.txt
/**
My First Invoice
Item 1 - 100
Item 2 - 200
-----------------
Total = 300
 */
class InvoiceBuilder{
    function addTitle($tile){}
    function addItem($item, $price){}

    function addTotal(){}
    function createInvoice(){}
}

$inv = new InvoiceBuilder();
$inv->addTitle("My First Invoice");
$inv->addItem("Item 1", 100);
$inv->addItem("Item 2", 200);
$inv->addTotal();
$inv->createInvoice();

