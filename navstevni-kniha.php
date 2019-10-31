<!DOCTYPE html>
<html lang="en">
<head>
    <title>Úkol 2</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
<br>
<div class="container">
    <form method="POST" action="vlozit.php">
    Jméno:<br>
    <input type="text"name="Jméno:"><br>
    Vzkaz:<br>
        <input type="text"name="Vzkaz:">
        <br>
        <button type="submit" class="btn btn-primary">Pridať vzkaz</button></br>
    </form>
    <br>
    <br>
    <?php
    function otvor($subor) {
if (!file_exists($subor)){
    return false;
    }

$data = @file_get_contents($subor);
if (!$data) {
return false}
return $data
    }





    ?>
</div>
</body>
</html>
