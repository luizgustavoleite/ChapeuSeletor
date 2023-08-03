<!-- Duvidas-> Como manter valor da função "select"
     É possível chamar uma variável array em uma função?
     -->

<?php

require_once 'funcao.php';

$ponto = array();
$total = 0;

if (isset($_POST['btnCalcular'])) {
    $nome = ltrim(trim($_POST['nome']));
    $idade = $_POST['idade'];
    $filme_fav = $_POST['FilmeFavorito'];
    $casa_fav = $_POST['CasaFavorita'];
    $animal_est = $_POST['AnimalFavorito'];
    $materia_fav = $_POST['MateriaFavorita'];
    $professor_fav = $_POST['ProfessorFavorito'];

    if (
        $nome == '' || $idade == '' || $filme_fav == '' || $casa_fav == ''
        || $animal_est == '' || $materia_fav == '' || $professor_fav == ''
    ) {
        echo 'Preencha todos os campos!';
    } else {

        $ponto[0] = ContarCaracteres($nome);

        if ($idade % 2 == 0) {
            $ponto[1] = 0;
        } else {
            $ponto[1] = 1;
        }

        $ponto[2] = $filme_fav;
        $ponto[3] = $casa_fav;
        $ponto[4] = $animal_est;
        $ponto[5] = $materia_fav;
        $ponto[6] = $professor_fav;

        for ($i = 0; $i < 7; $i++) {
            $total = $total + $ponto[$i];
        }
        echo "$total";


        // $total = $ponto[0] + $ponto[1] + $ponto[2] + $ponto[3] + $ponto[4] + $ponto[5] + $ponto[6];



        if ($total == 1 || $total == 5) {
            $casa = 'Grifinória';
        } else if ($total == 0 || $total == 4) {
            $casa = 'Sonserina';
        } else if ($total == 2 || $total == 6) {
            $casa = 'Lufa Lufa';
        } else if ($total == 3 || $total == 7) {
            $casa = 'Corvinal';
        }

        echo "$casa";

        header("location: resultado.php?casa=$casa");
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chapeu-seletor</title>
    <link href="style/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
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
    <br>
    <div class="titulo">
        <h1>Chapéu Seletor</h1>
        <h2>Preencha os campos e descubra sua casa em Hogwarts!</h2>
    </div>
    <div class="formulario">
        <form action='index.php' method='POST'>
            <label>SEU NOME</label>
            <br>
            <input name='nome' type='text' value='<?= isset($nome) ? $nome : '' ?>'>
            <br>
            <br>
            <label>SUA IDADE</label>
            <br>
            <input name='idade' type='number' value='<?= isset($idade) ? $idade : '' ?>'>
            <br>
            <br>
            <label>FILME FAVORITO</label>
            <br>
            <select name="FilmeFavorito">
                <option value="">selecione</option>
                <option value='0'>Pedra Filosofal</option>
                <option value='1'>Câmara Secreta</option>
                <option value='0'>Prisioneiro de Azkaban</option>
                <option value='1'>Cálice de Fogo</option>
                <option value='0'>Ordem da Fênix</option>
                <option value='1'>Enigma do Príncipe</option>
                <option value='0'>Relíquias da morte: Parte 1</option>
                <option value='1'>Relíquias da morte: Parte 2</option>
            </select>
            <br>
            <br>
            <label>CASA DE HOGWARTS FAVORITA</label>
            <br>
            <select name="CasaFavorita">
                <option value="">selecione</option>
                <option value='0'>Grifinória</option>
                <option value='1'>Sonserina</option>
                <option value='0'>Corvinal</option>
                <option value='1'>Lufa-lufa</option>
            </select>
            <br>
            <br>
            <label>ANIMAL DE ESTIMAÇÃO</label>
            <br>
            <select name="AnimalFavorito">
                <option value="">selecione</option>
                <option value='0'>Sapo</option>
                <option value='1'>Rato</option>
                <option value='0'>Gato</option>
                <option value='1'>Coruja</option>
            </select>
            <br>
            <br>
            <label>MATÉRIA FAVORITA</label>
            <br>
            <select name="MateriaFavorita">
                <option value="">selecione</option>
                <option value='0'>Feitiços</option>
                <option value='1'>Poções</option>
                <option value='0'>Transformações</option>
                <option value='1'>História da Magia</option>
                <option value='0'>Astronomia</option>
                <option value='1'>Herbologia</option>
                <option value='0'>Vôo com Vassouras</option>
                <option value='1'>Defesa Contra as Artes das Trevas</option>
            </select>
            <br>
            <br>
            <label>PROFESSOR FAVORITO</label>
            <br>
            <select name="ProfessorFavorito">
                <option value="">selecione</option>
                <option value='0'>Severo Snape</option>
                <option value='1'>Roland Hooch</option>
                <option value='0'>Fílio Flitwick</option>
                <option value='1'>Minerva McGonagall</option>
                <option value='0'>Alvo Dumbledore</option>
                <option value='1'>Aurora Sinistra</option>
            </select>
            <br>
            <br>
            <button name='btnCalcular'>SALVAR</button>

        </form>
    </div>
</body>

</html>