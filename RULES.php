<?php

$profile = $_GET["profile"];


$connect = mysqli_connect('localhost', 'root', '', 'sim') or die(mysqli_error($connect)); //conecta a base de dados sim

$query_registo_dia = 'SELECT * FROM comida_dia WHERE U_ID = '.$profile.' AND C_ID = 16';

$get_registo_dia = mysqli_query($connect, $query_registo_dia) or die(mysqli_error($connect));
$alimentos = mysqli_fetch_array($get_registo_dia);

$LEITE = $alimentos['Leite'];
$PAO = $alimentos['Pao'];
$OVO = $alimentos['Ovos'];
$PEIXE = $alimentos['Peixe'];
$CARNE_VACA = $alimentos['Vaca'];
$FRANGO = $alimentos['Frango'];
$VEGETAIS = $alimentos['Vegetais'];
$BATATA = $alimentos['Batata'];
$ARROZ = $alimentos['Arroz'];
$FRUTA = $alimentos['Fruta'];
$TEMPO = $alimentos['T'];
$VELOCIDADE = $alimentos['V'];


//vai buscar ao user os dados necessários para o SAD
$query_user = 'SELECT Gen, Peso, Altura FROM utente WHERE U_ID = "'.$profile.'"';
$result_user = mysqli_query($connect, $query_user) or die (mysqli_error($connect));
$info_user = mysqli_fetch_array($result_user);

$PESO = $info_user['Peso'];
$ALTURA = $info_user['Altura'];
$SEXO = $info_user['Gen'];
  
if(strcmp($SEXO,'Masculino')==0) {
  $SEXO=0;
}
else {
  $SEXO=1;
}


$ACTI_FISICA = $TEMPO*$VELOCIDADE*$PESO;

$ACTI_FISICA = 1.8*$ACTI_FISICA/1400;

if($ACTI_FISICA > 1.8) {
  $ACTI_FISICA = 1.8;
}
if($ACTI_FISICA <1.2) {
  $ACTI_FISICA = 1.2;  
}


//Calcula e devolve idade na variável $age
$query_age = "SELECT TIMESTAMPDIFF(year, (SELECT DataDeNascimento FROM utente WHERE U_ID = '".$profile."'), CURDATE())";
$result_age = mysqli_query($connect, $query_age) or die (mysqli_error($connect));
$rows = mysqli_fetch_row($result_age);
$IDADE = $rows[0];


// Árvore com 80% de accuracy
/*Terminal Node 1*/
if
(
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 159 ||
       $ALTURA == 163 ||
       $ALTURA == 164 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 173 ||
       $ALTURA == 176 ||
       $ALTURA == 177 ||
       $ALTURA == 178 ||
       $ALTURA == 179 ||
       $ALTURA == 182 ||
       $ALTURA == 184 ||
       $ALTURA == 188 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 47 ||
       $PESO == 49 ||
       $PESO == 52 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 61 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 78 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 49 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 66 ||
       $IDADE == 69 
  ) &&
  (
       $CARNE_VACA == 0 ||
       $CARNE_VACA == 1 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 1;
    $class = 2;
}

/*Terminal Node 2*/
if
(
  (
       $ALTURA == 156 ||
       $ALTURA == 157 ||
       $ALTURA == 158 ||
       $ALTURA == 160 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 165 ||
       $ALTURA == 166 ||
       $ALTURA == 169 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 183 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 47 ||
       $PESO == 49 ||
       $PESO == 52 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 61 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 78 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 49 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 66 ||
       $IDADE == 69 
  ) &&
  (
       $CARNE_VACA == 0 ||
       $CARNE_VACA == 1 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 2;
    $class = 1;
}

/*Terminal Node 3*/
if
(
  (
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 48 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 60 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 66 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 49 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 66 ||
       $IDADE == 69 
  ) &&
  (
       $CARNE_VACA == 0 ||
       $CARNE_VACA == 1 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 3;
    $class = 1;
}

/*Terminal Node 4*/
if
(
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 158 ||
       $ALTURA == 160 ||
       $ALTURA == 161 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 166 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 170 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 180 ||
       $ALTURA == 182 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 51 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 66 ||
       $PESO == 68 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 18 ||
       $IDADE == 22 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 45 ||
       $IDADE == 48 ||
       $IDADE == 50 ||
       $IDADE == 57 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $CARNE_VACA == 0 ||
       $CARNE_VACA == 1 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 4;
    $class = 1;
}

/*Terminal Node 5*/
if
(
  (
       $ALTURA == 153 ||
       $ALTURA == 156 ||
       $ALTURA == 159 ||
       $ALTURA == 162 ||
       $ALTURA == 163 ||
       $ALTURA == 169 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 176 ||
       $ALTURA == 178 ||
       $ALTURA == 181 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 188 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 51 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 66 ||
       $PESO == 68 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 18 ||
       $IDADE == 22 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 45 ||
       $IDADE == 48 ||
       $IDADE == 50 ||
       $IDADE == 57 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $CARNE_VACA == 0 ||
       $CARNE_VACA == 1 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 5;
    $class = 2;
}

/*Terminal Node 6*/
if
(
  (
       $PESO == 41 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 65 ||
       $PESO == 67 ||
       $PESO == 73 ||
       $PESO == 77 ||
       $PESO == 81 ||
       $PESO == 84 ||
       $PESO == 86 ||
       $PESO == 87 
  ) &&
  (
       $IDADE == 18 ||
       $IDADE == 22 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 45 ||
       $IDADE == 48 ||
       $IDADE == 50 ||
       $IDADE == 57 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $CARNE_VACA == 0 ||
       $CARNE_VACA == 1 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 6;
    $class = 2;
}

/*Terminal Node 7*/
if
(
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 60 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 68 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 82 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 66 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $CARNE_VACA == 2 ||
       $CARNE_VACA == 3 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 7;
    $class = 2;
}

/*Terminal Node 8*/
if
(
  (
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 37 ||
       $IDADE == 41 ||
       $IDADE == 46 ||
       $IDADE == 52 ||
       $IDADE == 54 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 75 
  ) &&
  (
       $PESO == 59 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 75 ||
       $PESO == 77 ||
       $PESO == 81 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $CARNE_VACA == 2 ||
       $CARNE_VACA == 3 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 8;
    $class = 2;
}

/*Terminal Node 9*/
if
(
  (
       $IDADE == 15 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 34 ||
       $IDADE == 36 ||
       $IDADE == 42 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 51 ||
       $IDADE == 55 ||
       $IDADE == 61 ||
       $IDADE == 66 ||
       $IDADE == 69 ||
       $IDADE == 73 ||
       $IDADE == 74 
  ) &&
  (
       $PESO == 59 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 75 ||
       $PESO == 77 ||
       $PESO == 81 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $CARNE_VACA == 2 ||
       $CARNE_VACA == 3 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 9;
    $class = 1;
}

/*Terminal Node 10*/
if
(
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 87 
  ) &&
  (
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 35 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 50 ||
       $IDADE == 53 
  ) &&
  (
       $CARNE_VACA == 2 ||
       $CARNE_VACA == 3 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 10;
    $class = 1;
}

/*Terminal Node 11*/
if
(
  (
       $PESO == 41 ||
       $PESO == 45 ||
       $PESO == 50 ||
       $PESO == 56 ||
       $PESO == 59 ||
       $PESO == 60 ||
       $PESO == 61 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 68 ||
       $PESO == 69 ||
       $PESO == 73 ||
       $PESO == 79 ||
       $PESO == 81 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 35 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 50 ||
       $IDADE == 53 
  ) &&
  (
       $CARNE_VACA == 2 ||
       $CARNE_VACA == 3 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 11;
    $class = 2;
}

/*Terminal Node 12*/
if
(
  (
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 30 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 45 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 77 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 12;
    $class = 2;
}

/*Terminal Node 13*/
if
(
  (
       $IDADE == 18 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 51 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 58 ||
       $IDADE == 60 
  ) &&
  (
       $ALTURA == 151 ||
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 158 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 164 ||
       $ALTURA == 168 ||
       $ALTURA == 179 ||
       $ALTURA == 188 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 77 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 13;
    $class = 2;
}

/*Terminal Node 14*/
if
(
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 20 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 31 ||
       $IDADE == 42 ||
       $IDADE == 44 ||
       $IDADE == 48 ||
       $IDADE == 52 ||
       $IDADE == 66 
  ) &&
  (
       $ALTURA == 151 ||
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 158 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 164 ||
       $ALTURA == 168 ||
       $ALTURA == 179 ||
       $ALTURA == 188 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 77 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 14;
    $class = 1;
}

/*Terminal Node 15*/
if
(
  (
       $ALTURA == 150 ||
       $ALTURA == 152 ||
       $ALTURA == 159 ||
       $ALTURA == 166 ||
       $ALTURA == 169 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 177 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 183 ||
       $ALTURA == 184 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 18 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 42 ||
       $IDADE == 44 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 66 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 77 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 15;
    $class = 1;
}

/*Terminal Node 16*/
if
(
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 22 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 32 ||
       $IDADE == 37 ||
       $IDADE == 40 ||
       $IDADE == 42 ||
       $IDADE == 44 ||
       $IDADE == 47 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 54 ||
       $IDADE == 58 ||
       $IDADE == 60 
  ) &&
  (
       $ALTURA == 156 ||
       $ALTURA == 157 ||
       $ALTURA == 160 ||
       $ALTURA == 163 ||
       $ALTURA == 165 ||
       $ALTURA == 167 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 176 ||
       $ALTURA == 178 ||
       $ALTURA == 180 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 77 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 16;
    $class = 1;
}

/*Terminal Node 17*/
if
(
  (
       $IDADE == 18 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 23 ||
       $IDADE == 26 ||
       $IDADE == 29 ||
       $IDADE == 31 ||
       $IDADE == 33 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 46 ||
       $IDADE == 48 ||
       $IDADE == 53 ||
       $IDADE == 66 
  ) &&
  (
       $ALTURA == 156 ||
       $ALTURA == 157 ||
       $ALTURA == 160 ||
       $ALTURA == 163 ||
       $ALTURA == 165 ||
       $ALTURA == 167 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 176 ||
       $ALTURA == 178 ||
       $ALTURA == 180 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 77 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 17;
    $class = 0;
}

/*Terminal Node 18*/
if
(
  (
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 23 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 32 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 43 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 57 ||
       $IDADE == 60 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 66 ||
       $IDADE == 67 ||
       $IDADE == 70 ||
       $IDADE == 72 ||
       $IDADE == 75 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 159 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 163 ||
       $ALTURA == 166 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 169 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 173 ||
       $ALTURA == 176 ||
       $ALTURA == 178 ||
       $ALTURA == 183 ||
       $ALTURA == 188 
  ) &&
  (
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 18;
    $class = 1;
}

/*Terminal Node 19*/
if
(
  (
       $ALTURA == 151 ||
       $ALTURA == 154 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 163 ||
       $ALTURA == 166 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 173 ||
       $ALTURA == 176 ||
       $ALTURA == 178 ||
       $ALTURA == 183 
  ) &&
  (
       $IDADE == 22 ||
       $IDADE == 27 ||
       $IDADE == 35 ||
       $IDADE == 41 ||
       $IDADE == 44 ||
       $IDADE == 47 ||
       $IDADE == 51 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 71 ||
       $IDADE == 74 
  ) &&
  (
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 19;
    $class = 1;
}

/*Terminal Node 20*/
if
(
  (
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 73 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 86 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 152 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 159 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 169 ||
       $ALTURA == 188 
  ) &&
  (
       $IDADE == 22 ||
       $IDADE == 27 ||
       $IDADE == 35 ||
       $IDADE == 41 ||
       $IDADE == 44 ||
       $IDADE == 47 ||
       $IDADE == 51 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 71 ||
       $IDADE == 74 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 20;
    $class = 2;
}

/*Terminal Node 21*/
if
(
  (
       $PESO == 54 ||
       $PESO == 65 ||
       $PESO == 74 ||
       $PESO == 79 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 87 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 152 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 159 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 169 ||
       $ALTURA == 188 
  ) &&
  (
       $IDADE == 22 ||
       $IDADE == 27 ||
       $IDADE == 35 ||
       $IDADE == 41 ||
       $IDADE == 44 ||
       $IDADE == 47 ||
       $IDADE == 51 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 71 ||
       $IDADE == 74 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 21;
    $class = 0;
}

/*Terminal Node 22*/
if
(
  (
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 23 ||
       $IDADE == 30 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 43 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 51 ||
       $IDADE == 53 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 59 ||
       $IDADE == 66 ||
       $IDADE == 69 ||
       $IDADE == 72 ||
       $IDADE == 74 
  ) &&
  (
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 72 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 81 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 87 ||
       $PESO == 90 
  ) &&
  (
       $ALTURA == 153 ||
       $ALTURA == 156 ||
       $ALTURA == 158 ||
       $ALTURA == 160 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 170 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 22;
    $class = 0;
}

/*Terminal Node 23*/
if
(
  (
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 27 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 35 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 41 ||
       $IDADE == 44 ||
       $IDADE == 47 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 75 
  ) &&
  (
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 72 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 81 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 87 ||
       $PESO == 90 
  ) &&
  (
       $ALTURA == 153 ||
       $ALTURA == 156 ||
       $ALTURA == 158 ||
       $ALTURA == 160 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 170 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 23;
    $class = 1;
}

/*Terminal Node 24*/
if
(
  (
       $PESO == 56 ||
       $PESO == 64 ||
       $PESO == 71 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 82 ||
       $PESO == 84 ||
       $PESO == 86 ||
       $PESO == 88 ||
       $PESO == 89 
  ) &&
  (
       $ALTURA == 153 ||
       $ALTURA == 156 ||
       $ALTURA == 158 ||
       $ALTURA == 160 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 170 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 27 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 32 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 53 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 65 ||
       $IDADE == 66 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 24;
    $class = 0;
}

/*Terminal Node 25*/
if
(
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 18 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 28 ||
       $IDADE == 31 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 42 ||
       $IDADE == 48 ||
       $IDADE == 52 ||
       $IDADE == 73 
  ) &&
  (
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 60 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 78 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 88 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
    $ACTI_FISICA <= 1.60225 
)

{
    $terminalNode = 25;
    $class = 0;
}

/*Terminal Node 26*/
if
(
  (
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 27 ||
       $IDADE == 31 ||
       $IDADE == 33 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 46 ||
       $IDADE == 48 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 68 ||
       $IDADE == 69 
  ) &&
  (
       $PESO == 41 ||
       $PESO == 43 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 48 ||
       $PESO == 51 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 60 ||
       $PESO == 69 ||
       $PESO == 74 ||
       $PESO == 79 ||
       $PESO == 90 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 26;
    $class = 0;
}

/*Terminal Node 27*/
if
(
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 158 ||
       $ALTURA == 159 ||
       $ALTURA == 160 ||
       $ALTURA == 161 ||
       $ALTURA == 164 ||
       $ALTURA == 169 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 176 ||
       $ALTURA == 178 ||
       $ALTURA == 179 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 188 ||
       $ALTURA == 189 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 26 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 32 ||
       $IDADE == 34 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 45 ||
       $IDADE == 47 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 59 ||
       $IDADE == 62 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 71 
  ) &&
  (
       $PESO == 41 ||
       $PESO == 43 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 48 ||
       $PESO == 51 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 60 ||
       $PESO == 69 ||
       $PESO == 74 ||
       $PESO == 79 ||
       $PESO == 90 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 27;
    $class = 1;
}

/*Terminal Node 28*/
if
(
  (
       $ALTURA == 156 ||
       $ALTURA == 162 ||
       $ALTURA == 163 ||
       $ALTURA == 165 ||
       $ALTURA == 166 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 177 ||
       $ALTURA == 182 ||
       $ALTURA == 183 ||
       $ALTURA == 187 ||
       $ALTURA == 190 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 26 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 32 ||
       $IDADE == 34 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 45 ||
       $IDADE == 47 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 59 ||
       $IDADE == 62 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 71 
  ) &&
  (
       $PESO == 41 ||
       $PESO == 43 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 48 ||
       $PESO == 51 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 60 ||
       $PESO == 69 ||
       $PESO == 74 ||
       $PESO == 79 ||
       $PESO == 90 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 28;
    $class = 0;
}

/*Terminal Node 29*/
if
(
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 44 ||
       $PESO == 47 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 73 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 88 ||
       $PESO == 89 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 42 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 56 ||
       $IDADE == 57 ||
       $IDADE == 59 ||
       $IDADE == 62 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 68 ||
       $IDADE == 69 ||
       $IDADE == 71 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 29;
    $class = 0;
}

/*Terminal Node 30*/
if
(
  (
       $PESO == 43 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 53 ||
       $PESO == 55 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 72 ||
       $PESO == 77 ||
       $PESO == 79 ||
       $PESO == 90 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 152 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 166 ||
       $ALTURA == 168 ||
       $ALTURA == 171 ||
       $ALTURA == 173 ||
       $ALTURA == 175 ||
       $ALTURA == 176 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 188 
  ) &&
  (
       $IDADE == 39 ||
       $IDADE == 49 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 70 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 30;
    $class = 2;
}

/*Terminal Node 31*/
if
(
  (
       $PESO == 40 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 48 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 54 ||
       $PESO == 60 ||
       $PESO == 64 ||
       $PESO == 66 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 81 ||
       $PESO == 86 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 152 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 166 ||
       $ALTURA == 168 ||
       $ALTURA == 171 ||
       $ALTURA == 173 ||
       $ALTURA == 175 ||
       $ALTURA == 176 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 188 
  ) &&
  (
       $IDADE == 39 ||
       $IDADE == 49 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 70 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 31;
    $class = 0;
}

/*Terminal Node 32*/
if
(
  (
       $ALTURA == 151 ||
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 156 ||
       $ALTURA == 157 ||
       $ALTURA == 158 ||
       $ALTURA == 159 ||
       $ALTURA == 160 ||
       $ALTURA == 163 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 167 ||
       $ALTURA == 169 ||
       $ALTURA == 170 ||
       $ALTURA == 172 ||
       $ALTURA == 174 ||
       $ALTURA == 178 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 187 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 60 ||
       $PESO == 64 ||
       $PESO == 66 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 72 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 79 ||
       $PESO == 81 ||
       $PESO == 86 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 39 ||
       $IDADE == 49 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 70 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 32;
    $class = 1;
}

/*Terminal Node 33*/
if
(
  (
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 56 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 65 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 71 ||
       $PESO == 73 ||
       $PESO == 74 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 85 ||
       $PESO == 87 ||
       $PESO == 88 ||
       $PESO == 89 
  ) &&
  (
       $IDADE == 39 ||
       $IDADE == 49 ||
       $IDADE == 54 ||
       $IDADE == 55 ||
       $IDADE == 58 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 70 ||
       $IDADE == 72 ||
       $IDADE == 73 ||
       $IDADE == 74 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 1 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 33;
    $class = 0;
}

/*Terminal Node 34*/
if
(
  (
       $PESO == 40 ||
       $PESO == 41 ||
       $PESO == 42 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 46 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 60 ||
       $PESO == 62 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 73 ||
       $PESO == 75 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 84 ||
       $PESO == 88 
  ) &&
  (
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 42 ||
       $IDADE == 54 ||
       $IDADE == 57 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 74 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 34;
    $class = 2;
}

/*Terminal Node 35*/
if
(
  (
       $ALTURA == 153 ||
       $ALTURA == 155 ||
       $ALTURA == 156 ||
       $ALTURA == 157 ||
       $ALTURA == 160 ||
       $ALTURA == 163 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 168 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 172 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 176 ||
       $ALTURA == 177 ||
       $ALTURA == 179 ||
       $ALTURA == 180 ||
       $ALTURA == 181 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 188 ||
       $ALTURA == 189 
  ) &&
  (
       $PESO == 45 ||
       $PESO == 47 ||
       $PESO == 52 ||
       $PESO == 61 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 79 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 42 ||
       $IDADE == 54 ||
       $IDADE == 57 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 74 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 35;
    $class = 0;
}

/*Terminal Node 36*/
if
(
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 154 ||
       $ALTURA == 158 ||
       $ALTURA == 159 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 166 ||
       $ALTURA == 167 ||
       $ALTURA == 169 ||
       $ALTURA == 175 ||
       $ALTURA == 178 ||
       $ALTURA == 182 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 187 ||
       $ALTURA == 190 
  ) &&
  (
       $PESO == 45 ||
       $PESO == 47 ||
       $PESO == 52 ||
       $PESO == 61 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 68 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 79 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $IDADE == 37 ||
       $IDADE == 38 ||
       $IDADE == 39 ||
       $IDADE == 42 ||
       $IDADE == 54 ||
       $IDADE == 57 ||
       $IDADE == 62 ||
       $IDADE == 63 ||
       $IDADE == 64 ||
       $IDADE == 66 ||
       $IDADE == 68 ||
       $IDADE == 70 ||
       $IDADE == 71 ||
       $IDADE == 72 ||
       $IDADE == 74 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 36;
    $class = 1;
}

/*Terminal Node 37*/
if
(
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 158 ||
       $ALTURA == 160 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 169 ||
       $ALTURA == 170 ||
       $ALTURA == 172 ||
       $ALTURA == 175 ||
       $ALTURA == 177 ||
       $ALTURA == 178 ||
       $ALTURA == 179 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 187 ||
       $ALTURA == 190 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 69 ||
       $IDADE == 73 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 37;
    $class = 1;
}

/*Terminal Node 38*/
if
(
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 19 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 25 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 32 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 44 ||
       $IDADE == 46 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 61 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 69 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 44 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 60 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 73 ||
       $PESO == 75 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 85 ||
       $PESO == 88 
  ) &&
  (
       $ALTURA == 152 ||
       $ALTURA == 156 ||
       $ALTURA == 159 ||
       $ALTURA == 163 ||
       $ALTURA == 166 ||
       $ALTURA == 171 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 176 ||
       $ALTURA == 180 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 188 ||
       $ALTURA == 189 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 38;
    $class = 1;
}

/*Terminal Node 39*/
if
(
  (
       $IDADE == 18 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 24 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 33 ||
       $IDADE == 43 ||
       $IDADE == 45 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 73 ||
       $IDADE == 75 
  ) &&
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 44 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 52 ||
       $PESO == 53 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 58 ||
       $PESO == 60 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 70 ||
       $PESO == 73 ||
       $PESO == 75 ||
       $PESO == 78 ||
       $PESO == 80 ||
       $PESO == 85 ||
       $PESO == 88 
  ) &&
  (
       $ALTURA == 152 ||
       $ALTURA == 156 ||
       $ALTURA == 159 ||
       $ALTURA == 163 ||
       $ALTURA == 166 ||
       $ALTURA == 171 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 176 ||
       $ALTURA == 180 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 188 ||
       $ALTURA == 189 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 39;
    $class = 2;
}

/*Terminal Node 40*/
if
(
  (
       $PESO == 41 ||
       $PESO == 43 ||
       $PESO == 45 ||
       $PESO == 54 ||
       $PESO == 59 ||
       $PESO == 61 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 66 ||
       $PESO == 68 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 79 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 83 ||
       $PESO == 84 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $ALTURA == 152 ||
       $ALTURA == 156 ||
       $ALTURA == 159 ||
       $ALTURA == 163 ||
       $ALTURA == 166 ||
       $ALTURA == 171 ||
       $ALTURA == 173 ||
       $ALTURA == 174 ||
       $ALTURA == 176 ||
       $ALTURA == 180 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 185 ||
       $ALTURA == 186 ||
       $ALTURA == 188 ||
       $ALTURA == 189 
  ) &&
  (
       $PAO == 2 ||
       $PAO == 3 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 69 ||
       $IDADE == 73 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 40;
    $class = 0;
}

/*Terminal Node 41*/
if
(
  (
       $PESO == 40 ||
       $PESO == 42 ||
       $PESO == 46 ||
       $PESO == 47 ||
       $PESO == 52 ||
       $PESO == 55 ||
       $PESO == 56 ||
       $PESO == 57 ||
       $PESO == 61 ||
       $PESO == 66 ||
       $PESO == 67 ||
       $PESO == 69 ||
       $PESO == 73 ||
       $PESO == 75 ||
       $PESO == 76 ||
       $PESO == 77 ||
       $PESO == 78 ||
       $PESO == 83 ||
       $PESO == 85 ||
       $PESO == 89 ||
       $PESO == 90 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 156 ||
       $ALTURA == 158 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 166 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 169 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 176 ||
       $ALTURA == 180 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 186 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 69 ||
       $IDADE == 73 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 41;
    $class = 0;
}

/*Terminal Node 42*/
if
(
  (
       $PESO == 41 ||
       $PESO == 43 ||
       $PESO == 44 ||
       $PESO == 45 ||
       $PESO == 48 ||
       $PESO == 49 ||
       $PESO == 50 ||
       $PESO == 51 ||
       $PESO == 53 ||
       $PESO == 54 ||
       $PESO == 58 ||
       $PESO == 59 ||
       $PESO == 60 ||
       $PESO == 62 ||
       $PESO == 63 ||
       $PESO == 64 ||
       $PESO == 65 ||
       $PESO == 68 ||
       $PESO == 70 ||
       $PESO == 71 ||
       $PESO == 72 ||
       $PESO == 74 ||
       $PESO == 79 ||
       $PESO == 80 ||
       $PESO == 81 ||
       $PESO == 82 ||
       $PESO == 84 ||
       $PESO == 86 ||
       $PESO == 87 ||
       $PESO == 88 
  ) &&
  (
       $ALTURA == 150 ||
       $ALTURA == 151 ||
       $ALTURA == 152 ||
       $ALTURA == 156 ||
       $ALTURA == 158 ||
       $ALTURA == 161 ||
       $ALTURA == 162 ||
       $ALTURA == 166 ||
       $ALTURA == 167 ||
       $ALTURA == 168 ||
       $ALTURA == 169 ||
       $ALTURA == 170 ||
       $ALTURA == 171 ||
       $ALTURA == 174 ||
       $ALTURA == 175 ||
       $ALTURA == 176 ||
       $ALTURA == 180 ||
       $ALTURA == 183 ||
       $ALTURA == 184 ||
       $ALTURA == 186 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 69 ||
       $IDADE == 73 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 42;
    $class = 1;
}

/*Terminal Node 43*/
if
(
  (
       $ALTURA == 153 ||
       $ALTURA == 154 ||
       $ALTURA == 155 ||
       $ALTURA == 157 ||
       $ALTURA == 159 ||
       $ALTURA == 160 ||
       $ALTURA == 163 ||
       $ALTURA == 164 ||
       $ALTURA == 165 ||
       $ALTURA == 172 ||
       $ALTURA == 173 ||
       $ALTURA == 177 ||
       $ALTURA == 178 ||
       $ALTURA == 179 ||
       $ALTURA == 181 ||
       $ALTURA == 182 ||
       $ALTURA == 185 ||
       $ALTURA == 187 ||
       $ALTURA == 188 ||
       $ALTURA == 189 ||
       $ALTURA == 190 
  ) &&
  (
       $PAO == 0 ||
       $PAO == 1 
  ) &&
  (
       $IDADE == 15 ||
       $IDADE == 16 ||
       $IDADE == 17 ||
       $IDADE == 18 ||
       $IDADE == 19 ||
       $IDADE == 20 ||
       $IDADE == 21 ||
       $IDADE == 22 ||
       $IDADE == 23 ||
       $IDADE == 24 ||
       $IDADE == 25 ||
       $IDADE == 26 ||
       $IDADE == 27 ||
       $IDADE == 28 ||
       $IDADE == 29 ||
       $IDADE == 30 ||
       $IDADE == 31 ||
       $IDADE == 32 ||
       $IDADE == 33 ||
       $IDADE == 34 ||
       $IDADE == 35 ||
       $IDADE == 36 ||
       $IDADE == 40 ||
       $IDADE == 41 ||
       $IDADE == 43 ||
       $IDADE == 44 ||
       $IDADE == 45 ||
       $IDADE == 46 ||
       $IDADE == 47 ||
       $IDADE == 48 ||
       $IDADE == 49 ||
       $IDADE == 50 ||
       $IDADE == 51 ||
       $IDADE == 52 ||
       $IDADE == 53 ||
       $IDADE == 55 ||
       $IDADE == 56 ||
       $IDADE == 58 ||
       $IDADE == 59 ||
       $IDADE == 60 ||
       $IDADE == 61 ||
       $IDADE == 65 ||
       $IDADE == 67 ||
       $IDADE == 69 ||
       $IDADE == 73 ||
       $IDADE == 75 
  ) &&
  (
       $SEXO == 0 
  ) &&
    $ACTI_FISICA > 1.60225 
)

{
    $terminalNode = 43;
    $class = 0;
}

?>