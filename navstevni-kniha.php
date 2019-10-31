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
        <div class="form-group">
            <label for="loginInput">Jméno:</label>
            <input type="text" class="form-control" id="loginInput" name="Jméno">
        </div>
        <div class="form-group">
            <label for="textarea">Vzkaz:</label>
            <textarea class="form-control" id="textarea" name="Vzkaz"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Přidat vzkaz</button>
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
return false;}
return $data;
    }


    $prispevky = otvor('prispevky.txt');
    if ($prispevky === false) {
    print 'Ziadne prispevky!.';}
    else {
        print $prispevky;
    }

            ?>
</div>
</body>
</html>
