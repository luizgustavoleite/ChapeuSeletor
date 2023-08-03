<?php

if (
    isset($_GET['casa']) && $_GET['casa'] != ''
) {
    $casa = $_GET['casa'];
    if ($casa == 'Sonserina') {
        $casa = "SONSERINA";
        $frase_final = 'Parabéns, você foi escolhido para entrar na Sonserina!
        <br><br> 
        Sonserina é uma das casas mais ambiciosas e inteligentes da escola de Hogwarts, e está sempre à 
        procura de alunos que possuem as mesmas qualidades. 
        <br><br> 
        Sua dedicação à estratégia e sua habilidade de pensar de forma criativa e inovadora foram notadas e admiradas pelos 
        professores. Nós acreditamos que você será um excelente representante da Sonserina e não podemos 
        esperar para ver o que você irá realizar durante sua estadia conosco. 
        <br><br> 
        Essa casa irá te desafiar a se superar e a alcançar seus objetivos. 
        <br><br> 
        <br><br> 
        Bem-vindo à Sonserina!';
        $image = 'images/sonserina.png';
    } else if ($casa == 'Grifinória') {
        $casa = "GRIFINÓRIA";
        $frase_final = 'Caro aluno,
        <br><br>
        É com grande honra que anunciamos que você foi selecionado para fazer parte da casa Grifinória. 
        Aqui, valorizamos a coragem, a lealdade e a inteligência, valores que identificamos em você.
        <br><br>
        
        Na Grifinória, você terá a oportunidade de se cercar de pessoas com mentalidades semelhantes e 
        trabalhar em conjunto para alcançar metas ambiciosas. Nossa casa é conhecida por formar líderes e 
        campeões em todas as áreas, e acreditamos que você tem o potencial de se tornar um deles.
        <br><br>
        
        Além disso, a Grifinória é famosa pela dedicação e esforço dos seus representantes, o que significa 
        que você terá a portunidade de se desenvolver e se superar continuamente.
        <br><br>
        
        Estamos ansiosos para recebê-lo e ajudá-lo a crescer e se desenvolver como um Grifinório.';
        $image = 'images/grifinoria.png';
    } else if ($casa == 'Lufa Lufa') {
        $casa = "LUFA LUFA";
        $frase_final = 'Caro aluno,
        <br><br>

        É com imenso orgulho que anunciamos sua seleção para a casa de Lufa-Lufa na Escola de Magia e 
        Bruxaria de Hogwarts. A casa Lufa-Lufa é conhecida por seus alunos dedicados, corajosos e leais, 
        valores que você demonstrou até aqui.
        <br><br>
        
        Como membro da casa Lufa-Lufa, você terá a oportunidade de se desenvolver em suas habilidades de 
        liderança, coragem e determinação. Nós acreditamos que você terá um papel importante na construção 
        de uma comunidade forte e unida na casa Lufa-Lufa.
        <br><br>
        
        Parabéns mais uma vez pela sua seleção e damos as boas-vindas a você à casa Lufa-Lufa.
        <br><br>
        
        Atenciosamente,
        
        Chapéu Seletor.';
        $image = 'images/lufa lufa.png';
    } else {
        $casa = "CORVINAL";
        $frase_final = 'Caro aluno,
        <br>
        <br>
        É com grande honra que informamos que você foi escolhido para fazer parte da nossa 
        prestigiada casa de magia e bruxaria, a Corvinal. Sua dedicação, talento e habilidades foram 
        notados e reconhecidos por nossa equipe de professores e diretores, e você foi escolhido entre 
        muitos outros talentosos candidatos.
        <br>
        <br>

        A Corvinal é conhecida por formar alunos excepcionais em áreas como Adivinhação, 
        Feitiços e Defesa Contra as Artes das Trevas. Temos certeza de que você fará jus a essa 
        tradição e contribuirá significativamente para a comunidade escolar.
        <br>
        <br>
        
        Aproveite esta oportunidade para se desenvolver e alcançar seus objetivos mágicos. Estamos ansiosos 
        para ver o que você é capaz de fazer e para acompanhar sua jornada em nossa escola.
        <br>
        <br>
        
        Parabéns mais uma vez e bem-vindo à Corvinal!';
        $image = 'images/corvinal.png';
    }
} else {
    header('location: index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style/style_resultado.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <title>resultado</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Explora&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600&display=swap" rel="stylesheet">
</head>

<body>
    <label>
        <H1>Parabéns, sua casa é a <span class="underline"><?= $casa ?>!</H1>
    </label>
    <label>
        <div class="pergaminho">
            <h2 class="resultado"><?= $frase_final ?></h2>
        </div>
        <div class="img_braso">
        <img src="<?php echo $image; ?>" alt="brasao">
        </div>
    </label>
</body>

</html>