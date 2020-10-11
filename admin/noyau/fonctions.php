<?php
/*

    ./noyau/fonctions.php

*/


namespace Noyau\Fonctions;

// Fonction pour slugifier
function slugify(string $str) {
   return trim(preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'), array('', '-', ''), strtolower($str)), '-');
 }

// Fonction pour tronquer (raccourcir) une chaine de caractère
function strCut($string, $max = 60, $end = '...') {
  if (strlen($string) > $max) {
      $string = substr($string, 0, $max - strlen($end)).$end;
  }
  return $string;
}

// Fonction pour formater les dates (ex: Wed 02 Sep 2020)
function formater_date(string $date, string $format = "D d M Y") :string {
  return date_format(date_create($date), $format);
}
