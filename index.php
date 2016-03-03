<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Biblioteca</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="css/main.css">
	<!-- IE required polyfills, in this exact order -->
    <script src="node_modules/es6-shim/es6-shim.min.js"></script>
    <script src="node_modules/systemjs/dist/system-polyfills.js"></script>
    <script src="node_modules/angular2/es6/dev/src/testing/shims_for_IE.js"></script>   

    <script src="node_modules/angular2/bundles/angular2-polyfills.js"></script>
    <script src="node_modules/systemjs/dist/system.src.js"></script>
    <script src="node_modules/rxjs/bundles/Rx.js"></script>
    <script src="node_modules/angular2/bundles/angular2.dev.js"></script>

    <!-- 2. Configure SystemJS -->
    <script>
      System.config({
        packages: {        
          app: {
            format: 'register',
            defaultExtension: 'js'
          }
        }
      });
      System.import('app/main')
            .then(null, console.error.bind(console));
    </script>
</head>
<body>
	<my-app>Cargando...</my-app>
	<section>
		<form action="index.php" method="POST">
			<label for="titulo">Título</label>
			<input type="text" name="titulo" id="titulo" maxlength="100">
			<label for="autor">Autor</label>
			<input type="text" name="autor" id="autor" maxlength="100">
		</form>
	</section>
</body>
</html>