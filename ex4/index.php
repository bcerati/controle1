<?php

function humeur(DateTime $date): string
{
    return '';
}

echo humeur(new DateTime('2020-11-09')); // devrait afficher "Nous sommes lundi, encore 4 jours de cours avant le week-end !”

echo '<br />';

echo humeur(new DateTime('2020-12-27')); // devrait afficher "C’est le week-end !"
