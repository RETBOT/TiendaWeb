<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Games Store</title>
    <link rel="stylesheet" href="..css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/icono.png">
</head>
<body>
    <header class="header">
        <a href="../index.html">
            <img class="header__logo" src="../img/logo.png" alt="Logotipo">
        </a>
    </header>

    <nav class="navegacion">
        <a class="navegacion__enlace navegacion__enlace--activo" href="../index.html">Tienda</a>
        <a class="navegacion__enlace" href="../nosotros.html">Nosotros</a>
        <a class="navegacion__enlace" href="Carrito.php">Carrito</a>
    </nav>
    <main class="contenedor">
        <h1>Productos</h1>
        <div class="grid">
        
        <?php
        $cantJuegos=0;
        $juego = ' ';
        $cantidad = ' ';
        $precio = 0;
        $imagen = ' '; 
        if($juego = $_GET['Juego']){
            $cantJuegos++;
        }
        $juego = $_GET['Juego'];
        $cantidad = $_GET['Cantidad'];
        $precio = $_GET['Precio'];
        $imagen = $_GET['Imagen'];
        $total=0;               
        $total = $precio*$cantidad;
        
        if($cantJuegos!=0){
        echo "<div class=producto>";
        echo "<img class=producto__imagen src=../img/",$imagen,".jpg alt=imagen juego>";
        echo "<div class=producto__informacion>";
        echo "<p class=producto__nombre>",$juego,"</p>";
        echo "<p class=producto__precio>$",$total,".00</p>";
        echo "</div>";
        }
        ?>
                <!--<a href="../prod/Minecraft.html">
                    <img class="producto__imagen" src="../img/1.jpg" alt="imagen juego">
                    <div class="producto__informacion">
                        <p class="producto__nombre">Minecraft</p>
                        <p class="producto__precio"></p>
                    </div>
                </a>
            </form>
            </div>  .producto-->
        </div>


    </main>

    <footer class="footer">
        <p class="footer__texto">VIDEO GAME STORE - Todos los derechos Reservados 2022.</p>
    </footer>
    
</body>
</html>