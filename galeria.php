<?php
session_start();
include 'conexao.php';

$sql = "SELECT * FROM figurinhas";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Galeria de Figurinhas</title>
    <style>
        .body{ 
            font-family: Arial; 
            background: #f4f4f9; 
        }

        .h1{ 
            text-align: center; 
            color: #333; 
        }

        .grid{ 
            display: grid; 
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); 
            gap: 15px; 
            padding: 20px; 
        }

        .card {
            background: white;
            border-radius: 10px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }
        .rara{ 
            border: 3px solid gold; 
            box-shadow: 0 0 10px gold; 
        }
        
        .lendaria{ 
            border: 3px solid purple; 
            box-shadow: 0 0 10px violet; 
        }

        .img{ 
            width: 100%; 
            border-radius: 8px; 
        }

    </style>

</head>
<body>
    <h1>Galeria de Figurinhas</h1>
    <div class="grid">
        <?php while ($f = mysqli_fetch_assoc($resultado)) : ?>
            <div class="card">
                <h2>Pikachu</h2>
                    <img src='https://i.pinimg.com/736x/bb/8d/4f/bb8d4f05506d83b9f825dc1f47e835ac.jpg'width="200"><br>
                <h2>Messi</h2>
                    <img src='https://i.pinimg.com/564x/53/56/dc/5356dc7d6816917124e59312b1671d40.jpg'width="200">
                <h2>Neymar</h2>
                    <img src='https://img.cdndsgni.com/preview/10001860.jpg'width="200">
                <h2>Goku</h2>
                    <img src='https://e1.pngegg.com/pngimages/889/193/png-clipart-goku-son-goku-thumbnail.png'width="200"> 
                <h2>Harry</h2>
                    <img src='https://i.pinimg.com/474x/d5/7d/16/d57d16e2396789e57443c550b7196aad.jpg'width="200">
                <h2>Sonic</h2>
                    <img src='https://i.pinimg.com/736x/31/65/f3/3165f3d062c8d43cfdd0c836e1811075.jpg'width="200">
                <h2>Spiderman</h2>
                    <img src='https://i.pinimg.com/736x/d8/be/12/d8be123ba4942990469aeea1528a0122.jpg'width="200">
                <h2>Batman</h2>
                    <img src='https://i.pinimg.com/736x/d5/87/77/d5877773508cef948af997e040a99870.jpg'width="200">
                <h2>CR7</h2>  
                    <img src='https://v.etsystatic.com/video/upload/q_auto/Black_Hoodie_1_vqlh3q.jpg'width="200">
                <h2>Luffy</h2>
                    <img src='https://i.pinimg.com/736x/6b/6c/6c/6b6c6c03f772d82fe1cdd5a0cdc9cf51.jpg'width="200">
                <h2>Naruto</h2>
                    <img src='https://i.pinimg.com/736x/31/90/21/31902191bb8d2bad5db452c1cbc7d726.jpg'width="200">
                <h2>Mario</h2>
                    <img src='https://i.pinimg.com/736x/43/1a/f2/431af2721eaa86459963659ac01e9007.jpg'width="200">
                <h2>Yoda</h2>
                    <img src='https://img.cdndsgni.com/preview/11085456.jpg'width="200">
                <h2>Ironman</h2>
                    <img src='https://i.pinimg.com/736x/48/b0/cb/48b0cbc8995d8a1f945c8762e7943e7a.jpg'width="200">

              
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
