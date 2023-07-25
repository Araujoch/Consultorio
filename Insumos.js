     // Crear un array con objetos que representan diferentes medicamentos
     function agregarElementosAlForm(elementos) {

      for (let i = 0; i < elementos.length; i++) {

        const elemento = elementos[i];
        const contenedorDiv = document.getElementById(elemento.descripcion);

        const nuevoDiv = document.createElement("div");
        
        nuevoDiv.classList.add("col-6", "form-check");
        const labelElement = document.createElement("label");
        labelElement.textContent = elemento.nombre;
        labelElement.classList.add("form-check-label", "text-break");
        const inputElement = document.createElement("input");
        inputElement.type = "checkbox";
        inputElement.classList.add("form-check-input");
        inputElement.id = elemento.id
        nuevoDiv.appendChild(labelElement);
        nuevoDiv.appendChild(inputElement);
        contenedorDiv.appendChild(nuevoDiv);
      }
    
      // Paso 2: Crear un nuevo div
    }

    function obtenerInventario() {
      $.ajax({
        url: 'index.php', // Ruta del archivo PHP que obtiene los datos del inventario
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          // En este punto, "data" contiene los datos del inventario en formato JSON
          // Puedes procesar los datos y mostrarlos en la página como desees
          // mostrarDatosInventario(data);
          agregarElementosAlForm(data);
          console.log(data);
        },
        error: function(jqXHR, textStatus, errorThrown) {
          console.error('Error al obtener los datos del inventario:', textStatus, errorThrown);
        }
      });
    }

    $(document).ready(function() {
      obtenerInventario();
    });
