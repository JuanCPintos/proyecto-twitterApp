<html>
    <head>
        <title>Primera pagina</title>
    </head>
    <body>
        <h1>Esta es mi primera prueba</h1>
        <?php
        for ($i=0; $i < 10; $i++) {
            echo '<h2>Hola Mundo </h2>' . $i ;
        }

        echo '<script>window.alert("hola desde JS")</script>';

        ?>
    </body>
</html>