<!doctype html>
<html>
        <title>FORM</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
    
      <form method="post">
     <ul>
      <li>
        <label for="Matricule">matricule:</label>
        <input type="text" name="matricule" autocomplete="off">
      </li>
      <li>
        <label for="nom">Nom:</label>
        <input type="nom"  name="user_name" autocomplete="off">
      </li>
      <li>
        <label for="Prenom">prenom:</label>
        <input type="prenom"  name="prenom" autocomplete="off">
      </li>
      <li>
        <label for="sexe">sexe:</label>
        <label>sexe</label>
		   
        <input type="checkbox">
        <label>Masculin</label>
        <input type="checkbox">
        <label>Feminin</label>
      </li>
      <li>
        <label for="addresse">addresse:</label>
        <textarea  name="addresse"></textarea>
      </li>
      <li>
        <label> service</label>
        <select> 
            <option>choisir</option>
            <option>location voiture</option>
            <option>vente voiture</option>
            <option>Tuning</option>
        </select><br>
        <label> Fonction</label>
        <select> 
            <option>choisir</option>
            <option>president</option>
            <option>secretaire</option>
            <option>DG</option
        </select>
      </li>
       
       <li><button type="submit" name="valider">Envoyer</button></li>
     </ul>


    </body>
    </html>