<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Login</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Email</th>
            <th>Senha</th>
            
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/login/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/login/form?id=<?= $item->id ?>"><?= $item->email ?></a>
            </td>

            
            <td><?= $item->senha ?></td>

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>