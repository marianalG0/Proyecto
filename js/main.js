//var api = 'AIzaSyCeSzprwFmUOSsAIf36sT9hONLvf3ReD_4';

//function initMap() {
//  var latLng = {
//    lat: 20.6772885,
//    Ing:-103.3856328
//  };

//  var map = new google.maps.Map(document.getElementById('mapa'), {
//    'center': latLng,
//    'zoom': 14,
//    'mapTypeId': google.maps.MapTypeId.ROADMAP
//  });

//  var contenido = '<h2>GDLWEBCAMP</h2>'+
//                  '<p>Del 10 al 12 de Diciembre</p>'+
//                  '<p>Visitanos!</p>';
  
//  var informacion = new google.maps.InfoWindow({
//    content: contenido
//  });
//  var marker = new google.maps.Marker({
//  position:lating,
//  map: map,
//  title: 'GDLWEBCA
// });

//  marker.addListener('click', function(){
//    informacion.open(map, marker);
//  });
//}

(function () {
  "use strict";

  var regalo = document.getElementById('regalo');
  document.addEventListener('DOMContentLoaded', function () {

    //var map = L.map('mapa').setView([19.575965, -448.03791], 17);

    //L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    //  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    //}).addTo(map);

    //L.marker([19.575965, -448.03791]).addTo(map)
    //  .bindPopup('GDLWebCamp <br> Boletos ya Disponibles')
    //  .openPopup();

    //Campos Datos de Uusuario
    var nombre = document.getElementById('nombre');
    var apellido = document.getElementById('apellido');
    var email = document.getElementById('email');

    //Campos pases
    var pase_dia = document.getElementById('pase_dia');
    var pase_dosdias = document.getElementById('pase_dosdias');
    var pase_completo = document.getElementById('pase_completo');

    //Botones y divs
    var calcular = document.getElementById('calcular');
    var errorDiv = document.getElementById('error');
    var botonRegistro = document.getElementById('btnRegistro');
    var lista_productos = document.getElementById('lista-productos');
    var suma = document.getElementById('suma-total');

    //Extras
    var camisas = document.getElementById('camisa_evento');
    var etiquetas = document.getElementById('etiquetas');

    calcular.addEventListener('click', calcularMontos);
    pase_dia.addEventListener('blur', mostrarDias);
    pase_dosdias.addEventListener('blur', mostrarDias);
    pase_completo.addEventListener('blur', mostrarDias);

    nombre.addEventListener('blur', validarCampos);
    apellido.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarCampos);
    email.addEventListener('blur', validarMail);

    function validarCampos() {
      if (this.value == '') {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "Este campo es obligatorio";
        this.style.border = '1px solid red';
        errorDiv.style.border = '1px solid red';
      } else {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      }
    }

    function validarMail() {
      if (this.value.indexOf("@") > -1) {
        errorDiv.style.display = 'none';
        this.style.border = '1px solid #cccccc';
      } else {
        errorDiv.style.display = 'block';
        errorDiv.innerHTML = "Este campo debe tener al menos un @";
        this.style.border = '1px solid red';
        errorDiv.style.border = '1px solid red';
      }
    }

    function calcularMontos(event) {
      event.preventDefault();

      if (regalo.value === '') {
        alert("Debes elegir un regalo");
        regalo.focus();
      } else {
        var boletosDia = parseInt(pase_dia.value, 10) || 0,
          boletos2Dia = parseInt(pase_dosdias.value, 10) || 0,
          boletoCompleto = parseInt(pase_completo.value, 10) || 0,
          cantCamisas = parseInt(camisas.value, 10) || 0,
          cantEtiquetas = parseInt(etiquetas.value, 10) || 0;

        var totalPagar = (boletosDia * 30) + (boletos2Dia * 45) + (boletoCompleto * 50) + ((cantCamisas * 10) * .93) + (cantEtiquetas * 2);

        var listadoProductos = [];

        if (boletosDia >= 1) {
          listadoProductos.push(boletosDia + ' Pases por dia');
        }

        if (boletos2Dia >= 1) {
          listadoProductos.push(boletos2Dia + 'Pases por 2 dias');
        }

        if (boletoCompleto >= 1) {
          listadoProductos.push(boletoCompleto + ' Pases Completos');
        }

        if (cantCamisas >= 1) {
          listadoProductos.push(cantCamisas + ' Camisas');
        }

        if (cantEtiquetas >= 1) {
          listadoProductos.push(cantEtiquetas + ' Etiquetas');
        }

        lista_productos.style.display = "block";
        lista_productos.innerHTML = '';
        for (var i = 0; i < listadoProductos.length; i++) {
          lista_productos.innerHTML += listadoProductos[i] + '<br/>';
        }

        //Mostrar el total
        suma.innerHTML = "$ " + totalPagar.toFixed(2); //Con toFixed recortamos y mostramos solo 2 decimales

      }
    }

    function mostrarDias() {
      var boletosDia = parseInt(pase_dia.value, 10) || 0,
        boletos2Dia = parseInt(pase_dosdias.value, 10) || 0,
        boletoCompleto = parseInt(pase_completo.value, 10) || 0;

      var diasElegidos = [];
      if (boletosDia > 0) {
        diasElegidos.push('viernes');
        console.log(diasElegidos);
      }

      if (boletos2Dia > 0) {
        diasElegidos.push('viernes', 'sabado');
        console.log(diasElegidos);
      }

      if (boletoCompleto > 0) {
        diasElegidos.push('viernes', 'sabado', 'domingo');
        console.log(diasElegidos);
      }

      for (var i = 0; i < diasElegidos.length; i++) {
        document.getElementById(diasElegidos[i]).style.display = 'block';
      }

    }

  }); //DOM CONTENT LOADED
})();


// PARTE EDITADA POR MELANIE
$(function() {

  // Programa de Conferencias
  $('.programa-evento .info-curso:first').show();
  $('.menu-programa a:first').addClass('activo');

  $('.menu-programa a').on('click', function() {
    $('.menu-programa a').removeClass('activo');
    $(this).addClass('activo');
    $('.ocultar').hide();
    var enlace = $(this).attr('href');
    $(enlace).fadeIn(1000);
    return false;
  });
});
// PARTE EDITADA POR MELANIE
