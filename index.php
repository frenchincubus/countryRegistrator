<!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Page Title</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 </head>
 <body>
     <div class="container">
     <h2>Formulaire d inscription</h2>
        <h4>Bienvenue visiteur, veuillez remplir ce formulaire pour être inscrit dans notre registre.</h4>
        <form action="server/form.php" method="post">
        <div class="form-group">
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" class="form-control" placeholder="entrez votre nom" required>
        </div>
        <div class="form-group">
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" class="form-control" placeholder="entrez votre prénom"required>
        </div>
        <div class="form-group">
            <label for="birthdate">Date de naissance</label>
            <input type="date" id="birthdate" name="birthdate" class="form-control" placeholder="entrez votre date de naissance" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="entrez votre adresse mail" required>
        </div>
        <div class="form-group">
            <label for="sex">Sexe</label>
            <div class="form-check">           
                <input type="radio" name="sex" id="man" value="M" class="form-check-input" required>
                <label for="man" class="form-check-label">homme</label>           
            </div>
            <div class="form-check">            
                <input type="radio" name="sex" id="woman" value="W" class="form-check-input" required>
                <label for="woman" class="form-check-label">femme</label>      
            </div>
        </div>
       
        <div class="form-group">
            <label for="country">Pays</label>
            <select name="country" id="country" class="form-control" required>
                <option id="pays" selected></option>
                <div class="dropdown-divider"></div>
            </select>
        </div>
        <div class="form-group">
            <input type="text" name="region" id="region" readonly hidden>
        </div>
        <div class="form-group">
            <label for="job">Profession</label>
                <select name="job" id="job" class="form-control" required>
                    <option selected>--</option>
                    <option value="agrixp">Exploitant agricole</option>
                    <option value="agrisl">Salarié de l'agriculture</option>
                    <option value="boss">Patrons de l'industrie et du commerce</option>
                    <option value="liber">Professions libérales</option>
                    <option value="cadresup">Cadre supérieurs</option>
                    <option value="cadremoy">Cadres moyens</option>
                    <option value="emplpublic">Employés du secteur public</option>
                    <option value="emplpriv">Employés du secteur privé </option>
                    <option value="ouvrier">Ouvriers</option>
                    <option value="service">Personnel de service</option>
                    <option value="chomeur">Sans emploi</option>
                    <option value="etudiant">Etudiant</option>
                    <option value="retraite">Retraité</option>
                    <option value="autre">Autre</option>
                </select>
        </div>
        <div class="form-group">
            <input type="submit" value="send" class="btn btn-default">
        </div>
        </form>
     </div>
     <script src="js/main.js"></script>
 </body>
 </html>
