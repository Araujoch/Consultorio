<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">



</head>
	<body>
	<div class = "container">
		<div class="row">
			<div class="col-md-3 overflow-auto" style="max-height: 400px;">
				<h3>Medicamentos</h3>
				<h3>Insumos</h3>
				<h3>Suturas</h3>
			</div>
			
			<div class = "col-md-10 bg-secondary-subtle" >  
				<form class="row g-3">
					<div class="col-md-5">
						<label for="name_paciente" class="form-label">Nombre del Paciente</label>
						<input type="text" class="form-control" id="name_paciente">
					</div>
					<div class="col-md-4">
						<label for="rut" class="form-label">Rut</label>
						<input type="password" class="form-control" id="rut">
					</div>
					<div class="col-md-3">
						<label for="fecha" class="form-label">Fecha</label>
						<input type="date" class="form-control" id="fecha">
					</div>
					<div class="col-md-5">
						<label for="cirujano" class="form-label">Cirujano</label>
						<input type="text" class="form-control" id="cirujano">
					</div>
					<div class="col-md-4">
						<label for="diagnostico" class="form-label">Diagnostico/Cirugia</label>
						<input type="text" class="form-control" id="diagnostico">
					</div>
					<div class="col-md-3">
						<label for="pabellonero" class="form-label">Pabellonera/o</label>
						<input type="text" class="form-control" id="pabellonero">
					</div>
					<div class="container border border-secondary mt-2">
						<div class="row">
							<h3>Medicamentos</h3>
						</div>	
						<div class="row ">
						<div class="col-6 form-check">
								<input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label text-break" for="flexRadioDefault1">
									Paracetamol
								</label>
							</div>
							<div class="col-6 form-check">
								<input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label text-break" for="flexRadioDefault1">
									Geniolito
								</label>
							</div>
							
						</div>
						<div class="row">
							<div class="col-6 form-check">
								<input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label text-break" for="flexRadioDefault1">
									Dipirona
								</label>
							</div>
							<div class="col-6 form-check">
								<input class="form-check-input" type="checkbox" name="flexRadioDefault" id="flexRadioDefault1">
								<label class="form-check-label text-break" for="flexRadioDefault1">
									kitadol
								</label>
							</div>
							
						</div>
					</div>
					<div class="col-12">
						<button type="submit" class="btn btn-primary">Sign in</button>
					</div>
				</form>
			</div>
		</div>
	</div>	


	</body>
	
</html>
