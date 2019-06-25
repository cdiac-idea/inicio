window.onload = function() {
setInterval(cambiarFondo, 9000);// 10 segundos
}
fondoActual = 0;
imagenes = ["fondo1.png","fondo2.png","fondo3.png"];
function cambiarFondo() {

    document.body.style.background = "url('imagenes/" + imagenes[++fondoActual % imagenes.length] + "') no-repeat center ";
    document.body.style.backgroundSize= "100%";
//document.body.style.background = "transition:all 0.3s ease";


}