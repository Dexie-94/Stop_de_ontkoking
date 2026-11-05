<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verwerk van gegevens</title>
</head>
<style>
    #fout{
        color: red;
    }
    #goed{
        color: green;
    }
</style>
<body>
<p id="fout"> <?= $resultaatfout?></p>
<p id="goed"> <?= $resultaatgoed?></p>
<a href='./detailCUD.php'>Terug</a>
</body>
</html>