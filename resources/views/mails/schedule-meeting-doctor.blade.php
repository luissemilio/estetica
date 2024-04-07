<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmación de cita en Verónica Aguilar Beauty Studio</title>
        <style>
        
            .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            }
            h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
            }
            p {
            color: #555;
            line-height: 1.6;
            margin-bottom: 20px;
            }
            .logo {
            text-align: center;
            margin-bottom: 30px;
            }
            .logo img {
            max-width: 200px;
            }
            .btn-container {
            text-align: center;
            margin-top: 20px;
            }
            .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #000;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s;
            }
            .btn:hover {
            background-color: #333;
            }
            .footer {
            margin-top: 30px;
            text-align: center;
            color: #888;
            font-size: 12px;
            }
        </style>
    </head>
    <body style="body {font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 0; background-color: #fcf5f5;}">

        <div class="container">
            <div class="logo">
            <img src="{{ asset('images/logo/logoNegro.svg')}}" alt="Logo de Verónica Aguilar Beauty Studio">
            </div>
            <h1>Nuevo correo recibido por la página web:</h1>
            <p>A continuación, los detalles del correo:</p>
            <ul>
                <li><strong>Nombre:</strong> {{ $name }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
                <li><strong>Teléfono:</strong> {{ $phone }}</li>
            </ul>
            <p><strong>Mensaje:</strong><br/> {{ $mesage }}</p>
        </div>
        </div>


    </body>
</html>


