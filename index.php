<!DOCTPYE html>
<html>
<head>
	<meta charset="UTF-8">
	<title> Categorías </title>
</head>
<body>
	<div>
		<h1> Categorias </h1>
		<div id="categorias">
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">

		var categorias = [
			{nombre: 'Deportes', url: '#deportes', sub: [
				{nombre: 'Fútbol', url: '#futbol', sub: [
					{nombre: 'Lionel Messi', url: '#messi', sub: []},
					{nombre: 'Cristiano Ronaldo', url: '#cristiano_ronaldo', sub: []},
					{nombre: 'Neymar', url: '#neymar', sub: []},
					{nombre: 'James Rodríguez', url: '#james_rodriguez', sub: []},
					{nombre: 'Alexis Sánchez', url: '#alexis_sanchez', sub: []},
					{nombre: 'Paolo Guerrero', url: '#paolo_guerrero', sub: []},
					{nombre: 'Luis Suárez', url: '#luis_suarez', sub: []}
				]},
				{nombre: 'Tenis', url: 'tenis', sub: [
					{nombre: 'Roger Federer', url: '#roger_federer', sub: []},
					{nombre: 'Rafael Nadal', url: '#rafael_nadal', sub: []}
				]}
			]},
			{nombre: 'Economía', url: '#economia', sub: [
				{nombre: 'Peso', url: '#peso', sub: []},
				{nombre: 'Dólar', url: '#dolar', sub: []},
				{nombre: 'Euro', url: '#euro', sub: []}
			]},
			{nombre: 'Política', url: '#politica', sub: [
				{nombre: 'Argentina', url: '#argentina', sub: [
					{nombre: 'Cristina Kirchner', url: '#cfk', sub: []},
					{nombre: 'Mauricio Macri', url: '#macri', sub: []}
				]}
			]}
		];

		function dibujarCategorias(p_categorias){

			var ul = $('<ul></ul>');

			for(var i = 0; i < p_categorias.length; i++){
				var li = $('<li></li>');
				var span = $('<span> ' + p_categorias[i].nombre + ' </span>');
				li.append(span);
				if(p_categorias[i].sub.length > 0){
					li.append(dibujarCategorias(p_categorias[i].sub));
				}
				ul.append(li);
			}

			return ul;
			
		}

		$("#categorias").html(dibujarCategorias(categorias));

	</script>
</body>
</html>