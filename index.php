<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 <h1>Bonjour je suis le projet de TP </h1>
 <h4> bonjour <?= getMessages() ?></h4>

 <?php
    $messages = "Visiteurs";
    $messageVisiteur = null;
    if(isset($_GET['name'])) && !empty($_GET['name'])) {
    $messageVisiteur = htmlspecialchars($_GET['name']);
    if($messageVisiteur){
        $messages = $messageVisiteur;
    }
 }

    function getMessages($messages)
    {
        return $messages;
    }
?>
</body>
</html>