<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="contenedor_login">
    <img src="ruta/a/tu/imagen.jpg" alt="Imagen de fondo" class="imagen_fondo">
    <label class="texto_login" for="">Login</label>
    <div>
        <label class="label_correo" for="">Correo Electronico</label>
        <input class="input_correo" type="email">
    </div>
    <div>
        <label class="label_contraseña" for="">Contraseña</label>
        <input class="input_contraseña" type="password">
    </div>
    <div>
        <label class="label_forget_password" for="">Olvidaste tu contraseña</label>
    </div>
    <div>
        <button class="submit_login" type="submit">Login</button>
    </div>
</div>
</body>
</html>

<style>
    body {
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0;
        font-family: Arial, Helvetica, sans-serif;
    }


    .contenedor_login {
        width: 300px;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .contenedor_login label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .contenedor_login input[type="email"],
    .contenedor_login input[type="password"],
    .contenedor_login button {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .contenedor_login button {
        margin-top: 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        cursor: pointer;
        padding: 10px 20px;
        text-transform: uppercase;
        font-weight: bold;
        border-radius: 4px;
        transition: background-color 0.3s;
    }

    .contenedor_login button:hover {
        background-color: #45a049;
    }
</style>
