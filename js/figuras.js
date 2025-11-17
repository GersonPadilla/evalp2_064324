// ==========================
//   CÁLCULO RECTÁNGULO
// ==========================

document.getElementById("formRect").addEventListener("submit", function(e){
    e.preventDefault();

    let base = parseFloat(document.getElementById("base").value);
    let altura = parseFloat(document.getElementById("altura").value);
    let salida = document.getElementById("rectRes");

    if (base <= 0 || altura <= 0) {
        salida.textContent = "Los valores deben ser positivos.";
        return;
    }

    let area = base * altura;
    let perimetro = 2 * (base + altura);

    salida.innerHTML = `
        <strong>Área:</strong> ${area}<br>
        <strong>Perímetro:</strong> ${perimetro}
    `;
});


// ==========================
//       CÁLCULO CILINDRO
// ==========================

document.getElementById("formCil").addEventListener("submit", function(e){
    e.preventDefault();

    let radio = parseFloat(document.getElementById("radio").value);
    let h = parseFloat(document.getElementById("hCil").value);
    let salida = document.getElementById("cilRes");

    if (radio <= 0 || h <= 0) {
        salida.textContent = "Los valores deben ser positivos.";
        return;
    }

    let areaLateral = 2 * Math.PI * radio * h;
    let areaTotal = 2 * Math.PI * radio * (radio + h);
    let volumen = Math.PI * radio * radio * h;

    salida.innerHTML = `
        <strong>Área Lateral:</strong> ${areaLateral.toFixed(2)}<br>
        <strong>Área Total:</strong> ${areaTotal.toFixed(2)}<br>
        <strong>Volumen:</strong> ${volumen.toFixed(2)}
    `;
});
