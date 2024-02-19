<?php
include ("connexion/connexion.php");
try {
  $statut_mail = $_POST['statut_mail'];
  $SQL = $cnx_bdd->prepare("INSERT INTO mails(emails, code_confirmation, statut_mail) VALUES (?, ?, ?)");
  $SQL->execute(array(
    $_POST['email'],
    $_POST['code_confirmation'],
    $statut_mail,
  ));
  echo "Adresse Email envoyée Final";
} catch (PDOException $e) {
  // Gérer l'erreur, par exemple en affichant le message d'erreur
  echo "Erreur lors de l'insertion : " . $e->getMessage();
}

?>
