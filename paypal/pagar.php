<?php
//Para que no cargue informacion en otras paginas

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

if(!isset($_POST['producto'], $_POST['precio'] )){
    exit("Hubo un error");
}


require 'config.php';

//Almacena los datos que se fueron escribiendo en el formulario
$producto = htmlspecialchars($_POST['producto']);
$precio = htmlspecialchars($_POST['precio']);
$precio = (int) $precio;
$envio = 3;
$total = $precio + $envio;

//Una nueva instancia de la clase de payer
$compra = new Payer();
//Usa un metodo de la clase payer y se define que tipo de pago se acepta
$compra->setPaymentMethod('paypal');

//Una instancia para cada articulo
$articulo = new Item();
$articulo->setName($producto)
    ->setCurrency('MXN')
    ->setQuantity(1)
    ->setPrice($precio);

//Instancia para la lista de articulos
$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));

//Se agregan los detalles de la cantidad a pagar
$detalles = new Details();
$detalles->setShipping($envio)
         ->setSubtotal($precio);

//Cantidad que se va a pagar
$cantidad = new Amount();
$cantidad->setCurrency('MXN')
         ->setTotal($total)
         ->setDetails($detalles);

$transaccion = new Transaction();
$transaccion->setAmount($cantidad)
            ->setItemList($listaArticulos)
            ->setDescription('Pago')
            ->setInvoiceNumber(uniqid());

$redireccionar = new RedirectUrls();
$redireccionar->setReturnUrl(URL_SITIO . "/pago_finalizado.php?exito=true")
              ->setCancelUrl(URL_SITIO . "/pago_finalizado.php?exito=false");

//Crear un pago 
$pago = new Payment();
$pago->setIntent("sale")
     ->setPayer($compra)
     ->setRedirectUrls($redireccionar)
     ->setTransactions(array($transaccion));


try {
    $pago->create($apiContext);
} catch (PayPal\Exception\PayPalConnectionException $pce) {
    echo "<pre>";
    print_r(json_decode($pce->getData()));
    exit;
    echo "</pre>";
}

$aprobado = $pago->getApprovalLink();

header("Location: {$aprobado}");
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";