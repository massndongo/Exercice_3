<?php
// FONCTION POUR DEFINIR LA LONGUEUR D'UN TABLEAU OU D'UNE CHAINE
function taille($tab){
    $i=0;
    while (isset($tab[$i])) {
        $i++;
    }
    return $i;
}
//  FONCTION POUR VERIFIER UN CARACTERE NUMERIQUE
function is_car_numeric($car){
    if ($car>='0' && $car<='9') {
        return true;
    }else {
        return false;
    }
}
//  FONCTION POUR VERIFIER UNE CHAINE NUMERIQUE
function is_chaine_numeric($chaine){
    for ($i=0; $i <taille($chaine) ; $i++) { 
        if (!is_car_numeric($chaine[$i])) {
            return false;
        }
    }
    return true;
}  
//  FONCTION POUR VERIFIER UN CARACTERE ALPHABET
function is_car_alpha($car){
    while ((($car>='a' && $car<='z') || ($car>='A' && $car<='Z')) && (taille($car)==1)) {
        return true;
    }
    return false;
}
//  FONCTION POUR VERIFIER UNE CHAINE ALPHABET
function is_chaine_alpha($chaine){
    for ($i=0; $i <taille($chaine) ; $i++) { 
        if (!is_car_alpha($chaine[$i])) {
            return false;
        }
    }
    return true;
}
//  FONCTION POUR VERIFIER SI CARACTERE EST PRESENT DANS UNE CHAINE
function is_car_present_in_chaine($car,$chaine){
    if (is_chaine_alpha($chaine)) {
        if (is_car_alpha($car)) {
            for ($i=0; $i < taille($chaine) ; $i++) { 
                if ($chaine[$i]==$car) {
                    return true;
                }
            }
        }
    }
    return false;
}
//  FONCTION POUR VERIFIER SI UNE CHAINE EST VIDE
function is_empty($chaine){
    if (taille($chaine)==0) {
        return true;
    }else {
        return false;
    }
}
//  FONCTION POUR INVERSER LA CASSE D'UN CARACTERE
function inver_car_case($car){
    if (is_car_alpha($car)) {
        $m='a'; $M='A';
        for ($i=0; $i < 26 ; $i++) { 
            if ($m==$car) {
                $result=car_en_majuscule($car);
            }elseif ($M==$car) {
                $result=car_en_minuscule($car);
            }
            $m++; $M++;
        }
    }else {
        $result=$car;
    }
    return $result;
}
//  FONCTION POUR SUPPRIMER LES ESPACES AVANT ET APRES D'UNE CHAINE
function delete_spc_before_after($chaine){
    $debut=0;
    $fin=taille($chaine)-1;
    $newChaine="";
    if (!isset($chaine[$debut])) {
        return "";
    }
    while ($chaine[$debut]==' ') {
        $debut++;
        if (!isset($chaine[$debut])) {
            return "";
        }
    }
    while ($chaine[$fin]==' ') {
        $fin--;
    }
    for ($i=$debut; $i <= $fin ; $i++) { 
        $newChaine.=$chaine[$i];
    }
    return $newChaine;
}
//  FONCTION POUR AFFICHER LES VALEURS D'UN TABLEAU
function print_error($tab){
    $chaine="";
    foreach ($tab as $t) {
        $chaine .= $t." - ";
    }
    return $chaine;
}
?>
