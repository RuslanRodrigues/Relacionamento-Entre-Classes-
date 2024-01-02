
<?php

require_once'classes.php';
$lutador = array();
$lutador[0] = new Lutador("Pretty Boy","França", 30, 1.75, 68.9, 11 , 2, 1);
$lutador[0]->apresentar();
$lutador[0]->status();
$lutador[0]->ganharLuta();
$lutador[1] = new Lutador("Putscrit","Brasil", 29, 1.68, 57.8, 11 , 2, 3);
$lutador[1]->apresentar();
$lutador[1]->status();
$lutador[1]->ganharLuta();
