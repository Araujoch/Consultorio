<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
	<script>
    function generarMedicamentos() {
      var medicamentos = ["Medicamento 1", "Medicamento 2", "Medicamento 3", "Medicamento 4", "Medicamento 5", "Medicamento 6", "Medicamento 7", "Medicamento 8", "Medicamento 9", "Medicamento 10"];
      var cantidad = 10;
      var medicamentosAleatorios = [];

      // Generar 10 medicamentos aleatorios
      while (medicamentosAleatorios.length < cantidad) {
        var randomIndex = Math.floor(Math.random() * medicamentos.length);
        var medicamento = medicamentos[randomIndex];

        // Evitar duplicados
        if (!medicamentosAleatorios.includes(medicamento)) {
          medicamentosAleatorios.push(medicamento);
        }
      }

      // Mostrar los medicamentos en la página
      var medicamentosDiv = document.getElementById("medicamentos");
      medicamentosDiv.innerHTML = "";

      for (var i = 0; i < medicamentosAleatorios.length; i++) {
        var medicamentoCheckbox = document.createElement("input");
        medicamentoCheckbox.type = "checkbox";
        medicamentoCheckbox.name = "medicamento" + (i + 1);
        medicamentosDiv.appendChild(medicamentoCheckbox);

        var medicamentoLabel = document.createElement("label");
        medicamentoLabel.htmlFor = medicamentoCheckbox.name;
        medicamentoLabel.appendChild(document.createTextNode(medicamentosAleatorios[i]));
        medicamentosDiv.appendChild(medicamentoLabel);

        medicamentosDiv.appendChild(document.createElement("br"));
      }
    }
  </script>
</head>
	<body>
			<div class = "container">

				<div>
					<h1>Cargo de Insumos Pabellon</h1>
				</div>
				<div class = "container-row1">
					<label for="">Nombre del paciente</label>
					<input type="text" readonly>
					<label for="">Rut</label>
					<input type="text" readonly>
					<label for="">Fecha</label>
					<input type="text" readonly>
				</div>
				<div class = "container-row2">
					<label for="">Cirujano</label>
					<input type="text"readonly>
					<label for="">Diagnostico/Cirugia</label>
					<input type="text">
					<label for="">Pabellonera/o</label>
					<input type="text">
				</div class = "container-check">

					<div class = "container-check-medicamentos">
						<h1> Medicamentos</h1>
						<input type="checkbox" name="medicamneto1" id="">
						<input type="checkbox" name="medicamneto2" id="">
						<input type="checkbox" name="medicamneto3" id="">
						<input type="checkbox" name="medicamneto4" id="">
						<input type="checkbox" name="medicamneto5" id="">
						<input type="checkbox" name="medicamneto6" id="">
						<input type="checkbox" name="medicamneto7" id="">
						<input type="checkbox" name="medicamneto8" id="">
						<input type="checkbox" name="medicamneto" id="">
						<input type="checkbox" name="medicamneto" id="">
						<input type="checkbox" name="medicamneto" id="">
						<input type="checkbox" name="medicamneto" id="">
					</div>

				<!-- <div class = "container-check">
					<div class = "container-check-medicamentos">
						<h1>Generador de Medicamentos Aleatorios</h1>
						<button onclick="generarMedicamentos()">Generar Medicamentos</button>
						<div id="medicamentos"></div>
					</div>

				</div> -->
			</div>

	</body>
</html>
