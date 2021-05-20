<?php
$chose = $_GET['var'];

switch ($chose) {
    case 0:
        $campo = "Sistemas operativos";
		$knows = array("Entorno DOS: Conocimientos intermedios", "Entorno Windows: Instalación, administración, capacitación de usuarios, etc.", "Entorno Linux: Instalación, administración, capacitación de usuarios, etc.");
        break;
	case 1:
        $campo = "Hardware y redes";
		$knows = array("Armado y reparación de equipos", "Conocimientos en diseño, armado y administración de redes", "Conocimientos básicos de Apache (configuración de tiempos de espera, tamaño de archivos de subida, etc.)");
        break;	
    case 2:
        $campo = "Programación orientada a objetos";
		$knows = array("C++", "Java", "PHP 5");
        break;
    case 3:
		$campo = "Programación dirigida por eventos";
		$knows = array("Java", "Visual C#");
        break;
	case 4:
		$campo = "Programación web";
		$knows = array("HTML", "XML", "CSS", "Javascript", "PHP5", "Ajax");
        break;
	case 5:
		$campo = "Expresiones regulares";
		$knows = array("Validación de estructura de datos mediante expresiones regulares");
        break;
	case 6:
		$campo = "Bases de Datos";
		$knows = array("ANSI-SQL", "SQL Server", "MySQL", "Conocimientos de diseño de bases de datos, triggers, procedimientos almacenados, consultas, administración de usuarios, etc.");
        break;
	case 7:
		$campo = "Mecánica computacional";
		$knows = array("Método de diferencias finitas", "Método de elementos finitos", "Método de volúmenes finitos", "Métodos iterativos para la resolución de ecuaciones lineales: gradientes conjugados, GMRES, descomposición de dominios", "Modelado de flujo incompresible", "Turbulencia y su modelización");
        break;
	case 8:
		$campo = "Computación gráfica (OpenGL)";
		$knows = array("Renderizado y rasterización", "Modelado de la iluminación y el color", "Modelado de la terminación superficial","Geometría del espacio y transformaciones", "Interpolación", "Curvas y superficies en el espacio", "Intersecciones y ordenamiento espacial");
        break;
	case 9:
		$campo = "Procesamiento digital de señales";
		$knows = array("Transformaciones", "Sistemas", "Filtros digitales", "Diseño de filtros con respuesta infinita al impulso", "Diseño de filtros con respuesta finita al impulso", "Introducción a las técnicas de modulación y demodulación", "Identificación de sistemas", "Ecuaciones de Wiener-Hopf", "Algoritmo de Levinson-Durvin", "Estimación del orden, método adaptativo de Widrow", "Procesamiento digital de la voz: producción y percepción del habla, análisis por tramos, aplicación de predicción lineal, escala de mel, procesamiento homomórfico, detección de la frecuencia fundamental", "Análisis tiempo frecuencia: ventaneo, espectrogramas, distribuciones tiempo-frecuencia, resolución tiempo-frecuencia y el principio de incertidumbre, introducción a la transformada onditas");
        break;
	case 10:
		$campo = "Procesamiento digital de imágenes";
		$knows = array("Operaciones en el dominio espacial", "Operaciones en el dominio frecuencial", "Restauración de imágenes", "Compresión de imágenes");
        break;
	case 11:
        $campo = "Inteligencia Computacional";
		$knows = array("Redes neuronales: perceptrón simple, perceptrón multicapa, funciones de base radial, mapas auto-organizativos, redes neuronales dinámicas", "Lógica borrosa: lógica, inferencia, teoría de conjuntos borrosos, memorias asociativas borrosas" , "Inteligencia colectiva: algoritmos genéticos, programación genética, estrategias de evolución, autómatas de estados finitos y autómatas celulares, agentes inteligentes, colonias de hormigas, enjambre de partículas");
        break;
	case 12:
        $campo = "Administración de proyectos";
		$knows = array("Análisis del problema", "Ciclos de vida de los distintos proyectos", "Redacción del acta de constitución del proyecto", "Elicitación de requerimientos", "Diseño del plan para la dirección del proyecto incluyendo todos los planes subsidiarios");
        break;
	case 13:
        $campo = "Auditoría Informática";
		$knows = array("Función de la auditoria en las empresas", "Plan del auditor informático", "Auditorías especificas: auditoria del área de tecnología de la organización, auditoria del desarrollo, auditoria de la seguridad física, auditoría de la seguridad lógica, auditoria de la ofimática, auditoria del procesamiento y del equipamiento informático, auditoria de Bases de datos, auditoría de las redes, auditoría del centro de servicios, entre otras", "Delítos informáticos y legislación");
        break;
}
$campo = "Procesamiento digital de imágenes";
?>

<head>
<title>Andrés Gilli - Conocimientos</title>
<meta charset="utf-8">
<link rel="shortcut icon" href="images/favicon.png">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
</head>
<body>
<article class="col1">
<div class="box1">
	<div class="box1_bot">
    	<div class="box1_top">
        	<div class="pad">
				<h4 class="center"><?php echo $campo; ?></h4>
				<p>
                	<ul class="list2">
						<?php
							foreach($knows as $val){
								echo "<li>".$val."</li>";
							}
						?>
                    </ul>
                </p>
                <p align="center"><a href="#" style="text-align:center;" onClick="self.close()">Cerrar</a></p>
            </div>
		</div>
	</div>
</div>
</article>
</body>