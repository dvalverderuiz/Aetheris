<?php 
 // Aqui va el codigo php :D
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Aetheris Drive</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
        }

        header {
            background: #1e293b;
            color: white;
            padding: 15px 30px;
            font-size: 20px;
        }

        .container {
            padding: 30px;
        }

        .files {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
            gap: 20px;
        }

        .file {
            background: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .file:hover {
            transform: translateY(-4px);
        }

        .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .name {
            font-weight: bold;
        }
    </style>
</head>
<body>

<header>
    📂 Aetheris Drive
</header>

<div class="container">
    <h2>Mis archivos</h2>

    <div class="files">
        <div class="file">
            <div class="icon">📄</div>
            <div class="name">documento.txt</div>
        </div>

        <div class="file">
            <div class="icon">🖼️</div>
            <div class="name">imagen.png</div>
        </div>

        <div class="file">
            <div class="icon">📁</div>
            <div class="name">proyectos</div>
        </div>
    </div>
</div>

</body>
</html>

