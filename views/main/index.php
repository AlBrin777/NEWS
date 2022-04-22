<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS</title>
</head>
<body>

    <header>
        <h1>BIENVENIDO A MI PÁGINA DE NOTICIAS</h1>
    </header>

    <div>
        <form action="<?php echo constant('URL'); ?>main/insert">
            "Publicar una noticia"
            <input type="submit" value="Publicar">
        </form>
        <article>Noticia</article>
    </div>

    <footer>
        copyright, 2022.
    </footer>
</body>
</html>