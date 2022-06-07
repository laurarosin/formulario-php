<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/produto/save" method="post">
        <fieldset>
            <legend>Cadastro de Produto</legend>

            <input type="hidden" value="<?= $model->id ?>" name="id" />

            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="descricao">DESCRICAO:</label>
            <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            <label for="preco">PRECO:</label>
            <input id="preco" name="preco" value="<?= $model->preco ?>" type="number" />

            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>