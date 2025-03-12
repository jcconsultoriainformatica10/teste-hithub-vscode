
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layout Centralizado</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        
        .container {
            width: 15cm;
            height: 10cm;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .banner {
            width: 15cm;
            height: 5cm;
            background-color:rgb(246, 248, 250);
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin-bottom: -60px;
        }

        .banner img {
            max-height: 100%;
            max-width: 100%;
            object-fit: contain;
        }

        .logos {
            display: flex;
            justify-content: center;
            width: 100%;
            gap: 40px;
            margin-top: 80px;
        }

        .logo {
            text-align:center ;
        }

        .logo a {
            color: blue;
            font-size: 1.1em;
            text-decoration: none;
            display: block;
            margin-top: -10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="banner">
            <!-- Aqui está a imagem dentro do banner -->
            <img src="fundo ultra lims.png" alt="">
        </div>
        <div class="logos">
            <div class="logo">
                <img src="laboratório ambiental.png" alt="Logo 1" width="70">
                <a href="https://hbsolucoes.ultralims.com.br/public/cliente/" target="_blank">LABORATÓRIO AMBIENTAL</a>
            </div>
            <div class="logo">
                <img src="laboratório industrial01.png" alt="Logo 2" width="70">
                <a href="https://habil.ultralims.com.br/public/cliente/" target="_blank">LABORATÓRIO INDUSTRIAL</a>
            </div>
        </div>
    </div>
</body>
</html>
