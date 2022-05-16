var btnComprar = document.getElementById("formResumen")
btnComprar.addEventListener("click", function(event) {
    event.preventDefault();
    console.log("Compre boton")
    var entrada = 200;
    var descuento = 0;
    var clienteCategoria = document.getElementById("clienteOpcion").value
    console.log(clienteCategoria)
    var ClienteEntradas = document.getElementById("clienteCantidad").value
    console.log(ClienteEntradas)
    if (clienteCategoria == "estudiante") {
        DescuentoAplicar = 0.8

    }
    if (clienteCategoria == "trainee") {
        DescuentoAplicar = 0.5

    }
    if (clienteCategoria == "junior") {
        DescuentoAplicar = 0.15

    }
    totalEntradas = entrada * ClienteEntradas
    descuentoTotal = totalEntradas - (totalEntradas * DescuentoAplicar)
    mostrarResumen(descuentoTotal)
})

function mostrarResumen(total) {
    document.getElementById("mostrarTotal").textContent = ("Total a pagar: $" + total)
    document.getElementById("total").classList.remove("ocultado")
    document.getElementById("total").classList.add("mostrarResumen")
}