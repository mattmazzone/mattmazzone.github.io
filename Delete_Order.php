<?php 
session_start();
$ordernumber = $_GET['ordernumber'];

$orders = simplexml_load_file('files/Orders.xml');

$index = 0;
$i = 0;

foreach($orders->order as $order) {
    if($order->ordernumber == $ordernumber) {
        $index = $i;
        break;
    }
    $i++;
}

unset($orders->order[$index]);
file_put_contents('files/Orders.xml', $orders->asXML());

$_SESSION['message'] = 'Order deleted successfuly';
header('location: Order_List.php')

?>