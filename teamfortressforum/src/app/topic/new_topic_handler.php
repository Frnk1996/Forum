<?php
include ('../helpers/helper_functions.php');
include ('../database/database.php');



// controleren of dit script is opgestart vanuit ons formulier
if($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: '. url('new_topic.php'));
    exit(0);
}



// data uit het formulier binnenhalen in php variablen

$topic_title = $_POST['topic_title'];

$topic_content = $_POST['topic_content'];


// Connectie met de database maken
dbConnect();


// Controle op juistheid van ingevulde gegevens en of username/password voorkomen in database
if (isset($_POST['topic_title']) && isset($_POST['topic_content'])){
    if (!empty($_POST['topic_title']) && !empty($_POST['topic_content'])){
    }
    else{
        echo 'Vul alle velden in alstublieft';
        die;
    }
};


// formulierdata opslaan in database
dbQuery('INSERT INTO topics(title, description) 
             VALUES (:title, :description  )',
    [
        ':title' => $topic_title,
        ':description' => $topic_content,
    ]);


// doorlinken naar de homepage
header('Location: ' . url('teamfortressforum/src/index.php'));
exit(0);

?>