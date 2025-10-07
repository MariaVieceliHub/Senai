<?php
session_start();
include 'conexao.php';

if (!isset($_SESSION['colecao'])) {
    $_SESSION['colecao'] = [];
}

// Abrir pacote (5 figurinhas aleatórias)
if (isset($_POST['abrir'])) {
    $sql = "SELECT * FROM figurinhas ORDER BY RAND() LIMIT 5";
    $resultado = mysqli_query($conexao, $sql);
    while ($f = mysqli_fetch_assoc($resultado)) {
        $_SESSION['colecao'][$f['id']] = $f; // adiciona figurinha à coleção
    }
}

// Calcula progresso
$total = mysqli_num_rows(mysqli_query($conexao, "SELECT * FROM figurinhas"));
$obtidas = count($_SESSION['colecao']);
$progresso = $total > 0 ? ($obtidas / $total) * 100 : 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Minha Coleção</title>
    <style>
        .body{ 
            font-family: Arial; 
            background: #f4f4f9; 
        }

        .h1{ 
            text-align: center; 
        }

        .barra{
            width: 80%; 
            height: 20px; 
            background: #ddd;
            border-radius: 10px; 
            margin: 20px auto; 
            overflow: hidden;
        }

        .progresso {
            height: 100%; 
            background: #27ae60;
            width: <?php echo $progresso; ?>%;
        }

        .grid{ 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); 
            gap: 15px; 
            padding: 20px; 
        }

        .card{ 
            background: white; 
            padding: 10px; 
            border-radius: 8px; 
            text-align: center; 
        }

        .img{ 
            width: 100%; 
            border-radius: 8px; 
        }

    </style>
    
</head>
<body>
    <h1>Minha Coleção</h1>
    <form method="POST" style="text-align:center;">
        <button type="submit" name="abrir">🎁 Abrir Pacote (5 figurinhas)</button>
    </form>

    <div class="barra"><div class="progresso"></div></div>
    <p style="text-align:center;"><?php echo round($progresso, 1); ?>% do álbum completo!</p>

    <div class="grid">
        <?php foreach ($_SESSION['colecao'] as $f) : ?>
            <div class="card">
                <img src="<?php echo $f['imagem']; ?>">
                <h4><?php echo $f['numero'] . " - " . $f['nome']; ?></h4>
                <small><?php echo ucfirst($f['raridade']); ?></small>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
