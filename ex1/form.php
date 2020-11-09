<?php
if (!empty($_POST)) {
    $age = $_POST['age'];

    if ($age < 18) {
        echo 'Vous êtes mineur';
    } elseif ($age === 18) {
        echo 'Vous êtes tout juste majeur';
    } else {
        echo 'Vous avez au moins 19 ans !';
    }
} else {
    header('Location: index.html');
}
