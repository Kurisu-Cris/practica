<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <div class="contenedor_login" id="formContainer">
            <label class="texto_login" id="formTitle">Bienvenido</label>
            <div id="loginForm">
                <img src="{{ asset('images/sapalogo.png') }}" alt="tag" width="200px" height="200px">
                <div>
                    <label class="label_correo" for="email">Usuario</label>
                    <input class="input_correo" id="email" type="email">
                </div>
                <div>
                    <label class="label_contraseña" for="password">Contraseña</label>
                    <input class="input_contraseña" id="password" type="password">
                </div>

                <div>
                    <button class="submit_login" type="submit">Inicio</button>
                </div>
            </div>
            <div id="registerForm" style="display: none;">
                <label class="texto_login" id="formTitle">Resgistarse</label>
                <img src="{{ asset('images/sapalogo.png') }}" alt="tag" width="200px" height="200px">
                <div>
                    <label class="label_nombre" for="name">Nombre</label>
                    <input class="input_nombre" id="name" type="text">
                </div>
                <div>
                    <label class="label_correo" for="regEmail">Correo</label>
                    <input class="input_correo" id="regEmail" type="email">
                </div>
                <div>
                    <label class="label_contraseña" for="regPassword">Contraseña</label>
                    <input class="input_contraseña" id="regPassword" type="password">
                </div>
                <div>
                    <label class="label_confirmar_contraseña" for="confirmPassword">Confirmar Contraseña</label>
                    <input class="input_confirmar_contraseña" id="confirmPassword" type="password">
                </div>
                <div>
                    <button class="submit_login" type="submit">Registrarse</button>
                </div>
            </div>
            <div>
                <button class="toggle_form" type="button" id="toggleFormBtn">Registrarse</button>
            </div>
        </div>
    </body>
</body>
</html>

<style>
   body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            position: relative;
            overflow: hidden;
            overflow-y: auto;
        }
        .label_correo, .label_contraseña, .label_forget_password, .label_nombre, .label_confirmar_contraseña {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: left;
        }

        .imagen_de_fondo {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }

        .contenedor_login {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            z-index: 1;
            width: 300px;
        }


        .contenedor_login input {
            width: 100%; /* Ajusta el ancho del input al 100% del contenedor */
            max-width: 300px; /* Establece un ancho máximo para el input */
            padding: 10px;
            margin-left: -10px; /* Agrega un pequeño margen a la izquierda para separar el label */
        }

        .contenedor_login img {
            margin: 20px 0;
        }

        .contenedor_login div {
            margin: 10px 0;
        }

        .texto_login {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .label_correo,
        .label_contraseña,
        .label_forget_password,
        .label_nombre,
        .label_confirmar_contraseña {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input_correo,
        .input_contraseña,
        .input_nombre,
        .input_confirmar_contraseña {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .submit_login,
        .toggle_form {
            width: 100%;
            padding: 10px;
            background-color: #417b64;
            border: none;
            color: white;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit_login:hover,
        .toggle_form:hover {
            background-color: #417b64;
        }
</style>
<script>
    document.getElementById('toggleFormBtn').addEventListener('click', function () {
        var loginForm = document.getElementById('loginForm');
        var registerForm = document.getElementById('registerForm');
        var formTitle = document.getElementById('formTitle');
        var toggleFormBtn = document.getElementById('toggleFormBtn');

        if (loginForm.style.display === 'none') {
            loginForm.style.display = 'block';
            registerForm.style.display = 'none';
            formTitle.textContent = 'Login';
            toggleFormBtn.textContent = 'Registrarse';
        } else {
            loginForm.style.display = 'none';
            registerForm.style.display = 'block';
            formTitle.textContent = 'Register';
            toggleFormBtn.textContent = 'Inicio de sesion';
        }
    });
</script>
