<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmación de cita en Verónica Aguilar Beauty Studio</title>
    </head>

    <body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; padding: 20px; background-color: #fcf5f5;">
        <div style="max-width: 600px; margin: 20px auto; background-color: #fff; border-radius: 10px; padding: 40px; box-shadow: 0 0 20px rgba(0,0,0,0.1);">
            <div style="text-align: center; margin-bottom: 30px;">
                <img src="{{ asset('assets/images/logo/logoNegro.svg') }}" alt="Logo de Verónica Aguilar Beauty Studio">
            </div>
            <h1 style="color: #333; text-align: center; margin-bottom: 20px;">
                Nuevo correo recibido por la página web:
            </h1>
            <p style="color: #555; line-height: 1.6; margin-bottom: 20px;">
                 A continuación, los detalles del correo:
            </p>
            <ul>
                <li><strong>Nombre:</strong> {{ $name }}</li>
                <li><strong>Email:</strong> {{ $email }}</li>
                <li><strong>Teléfono:</strong> {{ $phone }}</li>
            </ul>
            <p><strong>Mensaje:</strong><br/> {{ $mesage }}</p>
        </div>
    </body>
</html>


