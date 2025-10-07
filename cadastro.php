<?php
session_start();
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    $nome = $_POST['nome'];
    $raridade = $_POST['raridade'];

    $imagem = $_FILES['imagens.html']['name'];
    $caminho = "imagens/" . basename($imagem);

    move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho);

    $sql = "INSERT INTO figurinhas (numero, nome, raridade, imagem)
            VALUES ('$numero', '$nome', '$raridade', '$caminho')";
    mysqli_query($conexao, $sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Figurinhas</title>
    <style>
        .body{ 
            font-family: 'Arial' sans-serif; 
            background-color: #696969; 
            padding: 20px; 
        }
        

        .contact-form button {
            background-color: #005CA9;
            color: #FFFFFF;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 10px;
        }

        .input, select{ 
            width: 100%; 
            margin-bottom: 10px; 
            padding: 8px; 

        }
     

        .button{ 
            background: #3498db; 
            color: white; 
            border: none; 
            padding: 10px; 
            width: 100%; 
            border-radius: 5px; 
        }
    </style>

</head>
<body>
    <h2>Cadastro de Figurinhas</h2>
    <form method="POST" enctype="multipart/form-data">
        <input type="number" name="numero" placeholder="Número da figurinha" required>
        <input type="text" name="nome" placeholder="Nome" required>
        <select name="raridade">
            <option value="comum">Comum</option>
            <option value="rara">Rara</option>
            <option value="lendaria">Lendária</option>
        </select>
        <input type="file" name="imagem" required>
        <button type="submit">Cadastrar Figurinha</button>
    </form>
</body>
</html>
