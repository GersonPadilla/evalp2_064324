document.getElementById("formTriangulo").addEventListener("submit", function(e){
    e.preventDefault();

    let a = parseFloat(document.getElementById("lado1").value);
    let b = parseFloat(document.getElementById("lado2").value);
    let c = parseFloat(document.getElementById("lado3").value);
    let salida = document.getElementById("resultado");

    // Validación básica
    if (a <= 0 || b <= 0 || c <= 0) {
        salida.textContent = "Los lados deben ser números positivos.";
        return;
    }

    // Validar si forma un triángulo
    if (a + b <= c || a + c <= b || b + c <= a) {
        salida.textContent = "Estos valores NO forman un triángulo.";
        return;
    }

    // Clasificación
    if (a === b && b === c) {
        salida.textContent = "Triángulo EQUILÁTERO";
    } 
    else if (a === b || a === c || b === c) {
        salida.textContent = "Triángulo ISÓSCELES";
    } 
    else {
        salida.textContent = "Triángulo ESCALENO";
    }
});
