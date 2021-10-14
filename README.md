# was-grp11
Groupe 11 (Youssra IBRAHIMI, Io ALFANO, Assia HAFID)
  
## DOM Based XSS  
Prérequis :<br/>
Télécharger les fichiers du github, et lancer un serveur localhost sur le port de votre choix dans le dossier was-grp11/<br/>
On peut créer un bouton de la manière suivante http://localhost:port/dom_xss_1/atk_dom_xss_1.html?button=My%20custom%20button <br/>
Attaque : <br/>
Aller sur la page http://localhost:port/dom_xss_1/atk_dom_xss_1.html?button=<script>alert(document.cookie)</script> <br/>
Cela va générer une alerte avec le cookie. Le serveur va générer un objet DOM sans vérifier si le code contient un script malveillant. <br/>
  
Defense : <br/>
Pour contrer ce type d’attaque il faut utiliser un outil pour nettoyer le code avant de l’ajouter au DOM. Nous avons utilisé DOMPurify. <br/>
Quand du code JavaScript est repéré, il est supprimé avant d'être ajouté dans le DOM.  
  
## Password Salting  
Prérequis :<br/>
Télécharger les fichiers du github, et lancer un serveur localhost sur le port de votre choix dans le dossier was-grp11/<br/>
Initilisaliser la base de données en faisant `<sudo mysql < init_db_password.sql>`.<br/>
La page HTML permet de s’authentifier sur le compte de l’administrateur.  
