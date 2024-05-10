<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pagina Principal</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <?php
        error_reporting(0);
        session_start();
        include 'capturaDatos.php';
        $producto = getProducto();
        include 'SProducto';
        ?>

        <form name="frmSeleccion" method="POST" action='index.php'>
            <table border="1" width="550" cellspacing="10" cellpadding="1">
                <tr>
                    <td width="200">Seleccione un Arreglo</td>
                    <td width="300">
                        <select name="selProducto" onchange="this.form.submit()">
                            <option value="p001" <?php if ($producto == 'p001') echo 'selected'; ?>>EA SPORT FC 24</option>
                            <option value="p002" <?php if ($producto == 'p002') echo 'selected'; ?>>WWW 2K24</option>
                            <option value="p003" <?php if ($producto == 'p003') echo 'selected'; ?>>HOGWARTS LEGACY</option>
                            <option value="p004" <?php if ($producto == 'p004') echo 'selected'; ?>>FORZA HORIZON 5</option>
                            <option value="p005" <?php if ($producto == 'p005') echo 'selected'; ?>>GRAND THEFT AUTO V</option>
                            <option value="p006" <?php if ($producto == 'p006') echo 'selected'; ?>>MARIO KART 8 DELUXE</option>
                            <option value="p007" <?php if ($producto == 'p007') echo 'selected'; ?>>MINECRAFT</option>
                            <option value="p008" <?php if ($producto == 'p008') echo 'selected'; ?>>NARUTO SHIPPUDEN ULTIMATE NINJA STORM 4</option>
                            <option value="p009" <?php if ($producto == 'p009') echo 'selected'; ?>>STAR WARS OUTLAWS GOLDEN EDITION</option>
                            <option value="p010" <?php if ($producto == 'p010') echo 'selected'; ?>>RED DEAD REDEMPTION II</option>
                        </select>
                    </td>
                    <td rowspan="3">
                        <?php
                        if ($producto) { ?>
                            <img src="fotosProductos/<?php echo $producto; ?>.png" width="120" height="120" />
                        <?php } ?>
                    </td>
                </tr>
                <tr>
                    <td>Cantidad</td>
                    <td><input type="text" name="txtCantidad" value="" /></td>
                    <td></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Comprar" onclick="this.form.action = 'canasta.php'" name='btnComprar'/></td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include ('pie.php'); ?>
    </footer>
</body>

</html>
