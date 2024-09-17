<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
</head>
<body>
    
<!--navegacao-->
<?= $this->include('nav')?>

<!--conteudo é variável -->
<?= $this->renderSection('content')?>

<!--footer-->
<?= $this->include('footer')?>

