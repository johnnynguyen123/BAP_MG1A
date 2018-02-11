<?php
//POST-ARRAY UITLEZEN
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$emailadres = $_POST['mailadres'];

//DATA IN DATABASE STOPPEN

// CONNECTIE DATABASE
$host ='localhost';
$username ='23349_username';
$password ='12345';
$dbname = '23349_db2';
$dbc = mysqli_connect ($host,$username,$password,$dbname) or die ('Error connecting.');

//2. QUERY SCHRIJVEN (OPDRACHT SCHRIJVEN VOOR DE DATABASE
$query = "INSERT INTO Nieuwsbrief_opdracht7 VALUES (0,'$voornaam','$tussenvoegsel','$achternaam','$mailadres')";

//3. QUERY UITVOERNE
$result = mysqli_query($dbc,$query)or die('Error querying.');

//4. VERBINDING VERBREKEN
mysqli_close($dbc);



//BEVESTIGEN DAT DATA IN DATABASE STAAT
if ($result)  {
    echo 'De volgende gegevens zijn toegevoegd aan de database';
    echo'<br>';
    echo $voornaam . '<br>';
    echo $tussenvoegsel.'<br>';
    echo $achternaam.'<br>';
    echo $emailadres.'<br>';
}
else{
    echo'Sorry, er is iets misgegaan. Probeer het opnieuw.';
}

