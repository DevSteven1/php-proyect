<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container bg-dark">
        <div class="d-flex justify-content-center">
            <form action="" method="post" id="formularioRoles" class="needs-validation" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control mb-2" id="idRol" name="idRol" placeholder="ID" required>
                    <div class="valid-feedback">
                        ¡Bien!
                    </div>
                    <div class="invalid-feedback">
                        ¡Se requiere un ID!
                    </div>
                    <input type="text" class="form-control" id="nombreRol" name="nombreRol" placeholder="Nombre Rol" required>
                    <div class="valid-feedback">
                        ¡Bien!
                    </div>
                    <div class="invalid-feedback">
                        ¡Se requiere un nombre!
                    </div>
                </div>
                <button class="btn btn-primary mt-2" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>
</html>
