<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=KoHo:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos/css/style.css">
    <link rel="stylesheet" href="recursos/css/exercicio.css">
    <title> Exercicios</title>
</head>
<body class="exercicio">
    <header class="cabecalho">
        <h1>Atualizacao PHP</h1>
        <h2>Visualização do Exercicio</h2>        
    </header>
    
    <nav class="navegacao">
        <a href=<?="/{$_GET['dir']}/{$_GET['file']}.php"?> class="verde"> Sem Formatação </a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>

    <main class="principal">
        <div class="conteudo">
        <?php
                include("{$_GET['dir']}/{$_GET['file']}.php");
                //include(__DIR__"/{$_GET['dir']}/{$_GET['file']}.php");
            ?>
        </div>
    </main>
    <footer class="rodape">
        COD3R & Alunos <?= date('Y'); ?>
    </footer>    
</body>
</html>