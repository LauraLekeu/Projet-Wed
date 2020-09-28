<?php
/*

    ./www/noyau/init.php

*/
session_start();

require_once '../noyau/constantes.php';
require_once '../noyau/protect.php'; // pour vérifier la variable de session
require_once '../app/config/params.php';
require_once '../noyau/connexion.php';
require_once '../noyau/fonctions.php';
