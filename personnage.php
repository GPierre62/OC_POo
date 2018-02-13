<?php

class Personnage // Présence du mot-clé class suivi du nom de la classe.

{

  // Déclaration des attributs et méthodes ici.
  //attributs privés
  /*private $_force;        // La force du personnage
  private $_localisation; // Sa localisation
  private $_experience;   // Son expérience
  private $_degats;  */     // Ses dégâts
  private $_degats = 0; // Les dégâts du personnage.
  private $_experience = 0; // L'expérience du personnage.
  private $_force = 20; // La force du personnage (plus elle est grande, plus l'attaque est puissante).
  /* on peut initialiser nos variables avec des parametre direct ( pas d'opération, ni de récup de base)
  private $_force = 50;            // La force du personnage, par défaut à 50.
  private $_localisation = 'Lyon'; // Sa localisation, par défaut à Lyon.
  private $_experience = 1;        // Son expérience, par défaut à 1.
  private $_degats = 0;     */       // Ses dégâts, par défaut à 0.
  public function deplacer() // Une méthode qui déplacera le personnage (modifiera sa localisation).
  {


  }

  public function frapper($persoAFrapper) // Une méthode qui frappera un personnage (suivant la force qu'il a).
  {
    $persoAFrapper->_degats += $this->_force;

  }

  public function gagnerExperience() // Une méthode augmentant l'attribut $experience du personnage.
  {
    // On ajoute 1 à notre attribut $_experience.
    $this->_experience = $this->_experience + 1;

  }
  // Nous déclarons une méthode dont le seul but est d'afficher un texte.
  public function parler()
  {
    echo 'Je suis un personnage !';
  }

  public function afficherExperience(){

    echo $this->_experience;

  }
}
?>

<?php
/*$perso = new Personnage;//Ainsi,$perso sera un objet de type Personnage.
//On dit que l'on instancie la classe Personnage, que l'on crée une instance de la classe Personnage.
//$perso->parler(); va chercher l'objet " $perso " et invoque la méthode " parler() ".
$perso->gagnerExperience();
$perso->afficherExperience();*/
/*
$perso->_experience = $perso->_experience + 1; // Une erreur fatale est levée suite à cette instruction.
//"Fatal error: Uncaught Error: Cannot access private property Personnage"
*/

// On crée deux personnages
$perso1 = new Personnage;
$perso2 = new Personnage;

// Ensuite, on veut que le personnage n°1 frappe le personnage n°2.

$perso1->frapper($perso2);
$perso1->gagnerExperience();
$perso1->afficherExperience();

$perso2->frapper($perso1);
$perso2->gagnerExperience();
$perso2->afficherExperience();

?>
