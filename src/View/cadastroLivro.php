<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar novo livro</title>
</head>
<body>
    <form action="/cadastrar-livro" method="POST">
        <input type="text" name="nome" placeholder="Nome do livro">
        <select name="categoria" id="categoria">
            <option value="terror">Terror</option>
            <option value="ciencia">Ciencia</option>
            <option value="Infantil">Infantil</option>
        </select>


        <input type="text" name="autor" placeholder="Nome do autor">


        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>