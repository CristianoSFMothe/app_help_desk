function validarFormulario() {
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;

  if (email.trim() == "" || password.trim() == "") {
    exibirModal();
    return false;
  }

  return true;
}

function exibirModal() {
  var modal = document.getElementById("modal");
  modal.classList.add("fade-in");
  modal.style.display = "block";
}

function fecharModal() {
  var modal = document.getElementById("modal");
  modal.style.display = "none";
  modal.classList.remove("fade-in");
}