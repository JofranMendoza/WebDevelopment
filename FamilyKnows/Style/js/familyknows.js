function validacion() { // Form validation.
   event.preventDefault();
   if (document.frm.txtNombre.value.length === 0){ 
       alert("We need your firstname");
       document.frm.txtNombre.focus();
       return false; 
    } 
    if (document.frm.txtApellido.value.length === 0){ 
       alert("We need your lastname");
       document.frm.txtApellido.focus();
       return false; 
    }
    if (document.frm.txtUsuario.value.length === 0){ 
       alert("You need a username");
       document.frm.txtUsuario.focus();
       return false; 
    }

    if (document.frm.txtPass.value.length === 0){ 
       alert("You need a password");
       document.frm.txtPass.focus();
       return false; 
    }

    alert("Thanks for registering!"); 
    document.frm.submit(); // Submitting Form.
}
function empezar() {
   event.preventDefault();
   var element = document.formJuego["usuario[]"];
   var length = element.length;
   if (length == null) {
      if (element.value == '') {
         return false;
      }
   } else if (length > 1) {
      for (var i = 0; i < length; i++) {
         if (element[i].value == '') {
            return false;
         }
      }
   } 
   if(confirm("Ready to start?")) {
      document.formJuego.submit();
   }
}


function jugar() {
   window.location = 'Menu.php';
}
function score() {
   window.location = 'Score.php';
}

function ayuda() {
   window.location = 'Guia.php';
}
function home() {
   window.location = 'MenuPrincipal.php';
}
function salir() {
   if(confirm("Seguro de que deseas salir del juego?")) {
      window.location = 'MenuPrincipal.php';
   }
}

var noRow = 0;
var noRow2 = 3;
var cantidad = 2;

function sumarCantidad() {

   if (cantidad < 7) {
      cantidad = parseInt(document.getElementById("cantidad").value) + 1;
      document.getElementById("cantidad").value = cantidad;
      agregarArticulo();
   } 
}
function restarCantidad(id) {

   if ( cantidad > 2) {
      cantidad = parseInt(document.getElementById("cantidad").value) - 1;
      document.getElementById("cantidad").value = cantidad;
      eliminarArticulo(id);
   }
}


function agregarArticulo() {

   var table = document.getElementById('table');

   var tr = document.createElement('tr');
   var td = document.createElement('td');

   var label = document.createElement('label');
   label.setAttribute('id','label'+noRow);
   label.innerHTML = 'Insert the username of paticipant #'+cantidad;
   td.appendChild(label);

   tr.appendChild(td);

   table.appendChild(tr);



   var input = document.createElement('input');
   input.setAttribute('id', 'usuario'+noRow);
   input.setAttribute('name','usuario[]');
   input.setAttribute('required','');
   input.setAttribute('placeholder', 'Username of participant #'+cantidad);
   td.appendChild(input);

   tr.appendChild(td);

   table.appendChild(tr);

   noRow2++;



   var button = document.createElement('button');
   button.appendChild(document.createTextNode('X'));
   button.setAttribute('onclick', 'restarCantidad(this)');
   button.setAttribute('value', noRow);
   button.setAttribute('type','button');
   td.appendChild(button);
   tr.appendChild(td);
   table.appendChild(tr);



   noRow++;
}
function eliminarArticulo(id) {
   var fila = id.parentNode.parentNode;
   fila.parentNode.removeChild(fila);
   
   noRow--;
}
