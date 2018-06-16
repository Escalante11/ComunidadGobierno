
//Registro de usuario


function registrarUsuario(){

    var nombre = document.getElementById('inputNombre').value;
    var correo = document.getElementById('inputCorreo').value;
    var password = document.getElementById('inputPass').value;

    firebase.auth().createUserWithEmailAndPassword(correo, password)
    .catch(function(error) {
  // Handle Errors here.
  var errorCode = error.code;
  var errorMessage = error.message;
  // ...
});


    console.log(database);
    console.log(nombre);
    console.log(correo);
    console.log(password);
}
