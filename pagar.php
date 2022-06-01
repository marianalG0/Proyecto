<?php
//Para que no cargue informacion en otras paginas
if(!isset($_POST['submit'])){
    exit("Hubo un error");
}

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;

require 'includes/paypal.php';

if(isset($_POST['submit'])):
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $regalo = $_POST['regalo'];
    $total = $_POST['total_pedido'];
    $fecha = date('Y-m-d H:i:s');
    // Pedidos
    $boletos = $_POST['boletos'];
    $numero_boletos = $boletos;

    $pedidoExtra = $_POST['pedido_extra'];
    $camisas = $_POST['pedido_extra']['camisas']['cantidad'];
    $precioCamisa = $_POST['pedido_extra']['camisas']['precio'];
    $etiquetas = $_POST['pedido_extra']['etiquetas']['cantidad'];
    $precioEtiquetas = $_POST['pedido_extra']['etiquetas']['precio'];
    include_once 'includes/funciones/funciones.php';
    $pedido = productos_json($boletos, $camisas, $etiquetas);
    $eventos = $_POST['registro'];
    $registro = eventos_json($eventos);

    echo "<pre>";
    var_dump($pedidoExtra);
    echo "</pre>";

    try{    //video8
        require_once('includes/funciones/bd_conexion.php');
        $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
        $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
        $stmt->execute();
        $stmt->close();
        $conn->close();
        //header('Location: validar_registro.php?exitoso=1');
    } catch (Exception $e){
          $error = $e->getMessage();
    }
endif;

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

$i = 0;
foreach($numero_boletos as $key => $value) {
    if( (int) $value['cantidad'] > 0 ) {

        ${"articulo$i"} = new Item();
        ${"articulo$i"}->setName('Pase: ' . $key)
                 ->setCurrency('USD')
                 ->setQuantity( (int) $value['cantidad'])
                 ->setPrice( (int) $value['precio']);

        $i++;
    }
}

foreach($pedidoExtra as $key => $value) {
    if( (int) $value['cantidad'] > 0 ) {

        if($key == 'camisas') {
            $precio = (float) $value['precio'] * .93;
        } else {
            $precio = (int) $value['precio'];
        }

        ${"articulo$i"} = new Item();
        ${"articulo$i"}->setName('Extras: ' . $key)
                 ->setCurrency('USD')
                 ->setQuantity( (int) $value['cantidad'])
                 ->setPrice( $precio);

        $i++;
    }
}




//Instancia para la lista de articulos
$listaArticulos = new ItemList();
$listaArticulos->setItems(array($articulo));

/*
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
*/
// echo "<pre>";
// var_dump($_POST);
// echo "</pre>";