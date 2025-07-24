document.getElementById("buscarBtn").addEventListener("click", function() {
    let destino = document.getElementById("destino").value;
    let fechaIda = document.getElementById("fechaIda").value;
    let fechaVuelta = document.getElementById("fechaVuelta").value;
    let resultado = document.getElementById("resultado");

    if (destino && fechaIda && fechaVuelta) {
        resultado.innerHTML = `<p>Buscando viajes a <strong>${destino}</strong> del ${fechaIda} al ${fechaVuelta}</p>`;
    } else {
        resultado.innerHTML = "<p style='color:red;'>Completa todos los campos.</p>";
    }
});


