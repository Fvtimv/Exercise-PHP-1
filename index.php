<h1>Exercice 1</h1>

<p>Soit la phrase «Notre formation DL commence aujourd'hui».
Ecrire un algorithme permettant de compter le nombre de caractères 
contenus dans cette phrase (espaces inclus).
</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$nbCaracteres = strlen($phrase);
echo "La phrase $phrase contient ".strlen($phrase)." caractères.<br>";
echo "La phrase $phrase contient $nbCaracteres caractères.<br>";

?>

<h1>Exercice 2</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots
contenus dans celle-ci.
</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

$nbMots = str_word_count($phrase);
echo "La phrase $phrase contient $nbMots mots.<br>";
echo "La phrase $phrase contient ".str_word_count($phrase)." mots.<br>";

?>

<h1>Exercice 3</h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.
</p>

<?php

$phrase = "Notre formation DL commence aujourd'hui";

echo str_replace("aujourd'hui", "demain", $phrase); //str_replace(find, replace, string)

?>

<h1>Exercice 4</h1>

<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.
</p>

<?php

$phrase = "Engage le jeu que je le gagne";
$inverse = strrev($phrase);

if ($phrase == $inverse) {
    echo "La phrase $phrase est palindrome.<br>";
} else {
    echo "La phrase $phrase n'est pas palindrome.<br>";
}

?>

<h1>Exercice 5</h1>

<p>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros.
Attention, la valeur générée devra être arrondie à 2 décimales.
</p>

<?php

$valeurFrancs = 100;
$tauxConversion = 6.5596;

$valeurEuros = round($valeurFrancs/$tauxConversion, 2);

echo "Montant en francs : $valeurFrancs<br>";
echo "100 francs = $valeurEuros €<br>";

?>

<h1>Exercice 6</h1>

<p>Ecrire un algorithme permettant de calculer un montant de facture à régler à partir de la quantité
d’articles, son prix hors taxe et un taux de TVA (exprimé en décimal. Ex : 20 % -> 0.2)
</p>

<?php

$quantiteArt = 5;
$prixHT = 9.99;
$tauxTVA = 0.2;

$montantFacture = $quantiteArt * $prixHT * (1 + $tauxTVA);
echo "Prix unitaire de l'article : $prixHT €<br>";
echo "Quantité : $quantiteArt €<br>";
echo "Taux de TVA : $tauxTVA<br>";
echo "Le montant de la facture à régler est de : $montantFacture €<br>";

?>

<h1>Exercice 7</h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser.</p>

<?php

$age = 10;

if ($age >= 6 & $age <= 7) {
    $resultat = "Poussin";
} elseif ($age >= 8 & $age <= 9) {
    $resultat = "Pupille";
} elseif ($age >= 10 & $age <= 11) {
    $resultat = "Minime";
} elseif ($age >= 12) {
    $resultat = "Cadet";
} else {
    $resultat = "Merci de préciser";
}

echo "L'enfant qui a $age ans appartient à la catégorie $resultat <br>";

?>

<h1>Exercice 8</h1>

<p>Ecrire un algorithme qui renvoie la table de multiplication 
    d’un nombre passé en paramètre sous la forme :</p>

<?php

$table = 8;

echo "Table de 8 :<br>";

for ($i=1; $i <= 10; $i++) { 
    echo $table. " x ".$i. " = ". $table*$i. "<br>";
}
echo "<br>";

$table = 8;
$i = 1;
echo "Table de 8 :<br>";

while ($i <= 10) {
    echo $table. " x ". $i. " = ". $table*$i. "<br>";
    $i++;
}

?>

<h1>Exercice 9</h1>

<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme 
de plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).</p>

<?php

$age = 32;
$sexe = "F";

if($age >= 18 && $age <= 35  && $sexe === "F") {
    $resultat = "imposable";
} else if  ($age >= 20 && $sexe ==="H"){
    $resultat = "imposable";
} else {
    $resultat = "non imposable";
}
    echo "Age : ".$age. "<br>";
    echo " Sexe : ".$sexe."<br>";
    echo "La personne est ".$resultat. "<br>";

?>

<h1>Exercice 10</h1>

<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme 
    qui affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, 
    de pièces de 2 € et 1 €.</p>

<?php
$montantPayer = 152;
$montantVerse = 200;
$billet10 = 0;
$billet5 = 0;
$piece2 = 0;
$piece1 = 0;

echo "Montant à payer : $montantPayer €<br>";
echo "Montant versé : $montantVerse €<br>";

$reste = $montantVerse - $montantPayer;

echo "Reste à payer : $reste €<br>";

while ($reste >= 10) {
    $reste = $reste - 10;
    $billet10 = $billet10 + 1;
}

if ($reste >= 5) {
    $reste = $reste - 5;
    $billet5 =$billet5 + 1;
}

while ($reste >= 2) {
    $reste = $reste - 2;
    $piece2 = $piece2 + 1;
} 

if ($reste >= 1) {
    $reste = $reste -1;
    $piece1 = $piece1 +1;
}

echo "Rendu de monnaie : $billet10 billets de 10 € - $billet5 billets de 5 € - $piece2 pièce de 2€ -
$piece1 pièce de 1 €<br>";

?>

<h1>Exercice 11</h1>

<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir 
    ce tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également
    demandé d’afficher le nombre de marques de voitures présentes dans le tableau.</p>

<?php

$voitures = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbVoitures = count($voitures);

echo "Il y a $nbVoitures marques de voitures dans le tableau :<br>";

//Parcourir le tableau
foreach ($voitures as $voitures){
    echo "<li>".$voitures."</li>". "<br>"; //<li> pour une liste à puces
}

?>

<h1>Exercice 12</h1>

<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
    (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
    respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)</p>

<?php

$personnes = [
    "Mickael" => "FRA",
    "Virgile" => "ESP",
    "Marie-Claire" => "ENG"
];

function afficherMessage(){
    foreach($personnes as $prenom =>$langue){

    }
}
       
?>

<h1>Exercice 13</h1>

<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de coefficient). 
    Elle devra être affichée avec 2 décimales.</p>

<?php

$notes = [10, 12, 8, 19, 3, 16, 11, 13, 9];

// foreach($notes as $notes);   comment show les elements d'un tableau??
// echo "Les notes obtenues par l'élève sont : $notes<br>";

$nbNotes = count($notes);
$sommeNote = array_sum($notes);
$moyenne = round($sommeNote / $nbNotes, 2);

echo "Sa moyenne générale est donc de : $moyenne<br>";

?>

<h1>Exercice 14</h1>

<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<?php

$dateNaissance = new DateTime('1985-01-17');
$dateCourante = new DateTime();
$diff = $dateNaissance->diff($dateCourante);

echo "Age de la personne : $diff->y ans $diff->m mois $diff->d jours<br>";

?>


<h1>Exercice 15</h1>

<p>Créer une classe Personne (nom, prénom et date de naissance).
Instancier 2 personnes et afficher leurs informations : nom, prénom et âge.
$p1 = new Personne("DUPONT", "Michel", "1980-02-19") ;
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17") ;</p>

<?php

class Personne {
    private $_nom;
    private $_prenom;
    private $_dateNaissance;

    public function __construct($nom, $prenom, $dateNaissance){
        $this -> _nom = $nom;
        $this -> _prenom = $prenom;
        $this -> _dateNaissance = $dateNaissance;
    }
    
    public function getNom() //voici ce que l'on appele un "gettere
    {
        return $this -> _nom ;
    }
    public function getPrenom()
    {
        return $this -> _prenom ;
    }
    // public function getDateNaissance()
    // {
    //     return $this -> _dateNaissance ;
    // }
    public function calcAge(){
        $dateNaissance = new DateTime($this -> _dateNaissance);
        $dateCourante = new DateTime();
        $diff = $dateNaissance -> diff($dateCourante);
        return $diff -> y;
    }

    public function displayInformation()
    {
        // $this -> _prenom ;
        // $this -> _nom ;
        // $this -> calcAge ;
        // echo "$this -> prenom." ".$this -> nom. " ".a" ".$this -> calcAge()." ".ans" ; faux demande
        echo "{$this -> getPrenom()} {$this -> getNom()} a {$this -> calcAge()} ans <br>";
    }
    public function getDisplayInformation(){
        return $this -> displayInformation();
    }
}

$p1 = new Personne("DUPONT", "Michel", "1980-02-19");
$p2 = new Personne("DUCHEMIN", "Alice", "1985-01-17");
    
echo $p1 -> getDisplayInformation();
echo $p2 -> getDisplayInformation();
