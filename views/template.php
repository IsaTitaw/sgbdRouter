<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

    <script src="public/script.js"></script>
</head>
<body>
    <button type="button" id="btn">CLICK ME</button>

    <form method="get" id="search-form">
        <label for="pk-search">Rechercher</label>
        <input type="number" name="pk" id="pk-search" min="0">
        <input type="submit" value="Rechercher">
    </form>

    <?php include $this->template_name . '/common.php' ?>
</body>
</html>