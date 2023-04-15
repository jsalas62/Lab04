function validarEdad() {
  var edad = document.getElementById("edad").value;
  if (edad < 18) {
    alert("Solo se admiten usuarios mayores de edad");
    return false;
  }
  return true;
}