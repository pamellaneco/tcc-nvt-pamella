<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requisição - Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="shortcut icon" href="/img/context.png" type="image/x-icon">
</head>

<body style="background-color:rgb(0, 39, 8); color:rgb(219, 219, 219); font-weight: bold;">
    <div>
        <a style="color:rgb(219, 219, 219); margin-top:2em; padding-left:2em;" href="/">Retornar à página inicial</a>        
    </div>
    <div style="margin-top:7%;width:100%;display:flex; align-content:center; justify-content:center;">
        <h2>Cadastre-se:</h2>
    </div>
    <div style="max-width:500px;width:100%;margin:0 auto;margin-top:5%">
        <form action="post" method="post" style="display:flex; align-content:center; flex-direction:column; justify-content:center">
            @csrf

            <div>
                <label for="tipoUsuario" class="form-label">Informe se você é agricultor ou consumidor:</label> <br>
                <div style="margin-top: 1em; margin-bottom:1em; display:flex; align-content:center; justify-content:space-around ">
                    <div>
                        <input type="radio" name="tipoUsuario" id="agricultor" value="agricultor">
                        <label for="agricultor">Agricultor</label>
                    </div>
                    <div>
                        <input type="radio" name="tipoUsuario" id="consumidor" value="consumidor">
                        <label for="consumidor">Consumidor</label>
                    </div>
                </div>
            </div>

            <div>
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" id="nome" name="nome" placeholder="Informe seu nome completo" class="form-control">
            </div>

            <div class="mt-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" id="email" name="email" placeholder="email@dominio.com" class="form-control">
            </div>

            <div class="mt-3">
                <label for="contato" class="form-label">Informe seu contato: </label>
                <input type="number" id="contato" name="contato" placeholder="(88) 91234-5678" class="form-control">
                <h7>*Não é obrigatório</h7>
            </div>

            <div class="mt-3" style="display:flex; width:100%; justify-content:center; align-content:center">
                <input type="submit" class="btn btn-primary" value="Enviar">
            </div>
        </form>
    </div>
</body>

</html>