<!DOCTYPE html>
<!-- Contact-->
<html lang="Fr">
    <head>
        <title>Présentation : Portfolio </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/contact.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
    </head>
    <body>
        <!-- En tête de la page-->
        <header>
             <section> 
                 <article class="cont_menu_lat">
                     <ul class="barrelat">
                       <li><a href="../public_html/index.php">Présentation</a></li> 
                       <li><a href="../pages/Profil.php">Profil</a></li> 
                       <li><a href="../pages/projets.php">Projets</a></li> 
                      <li><a href="#">Veilles </a> <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i>
                     <!-- Barre de navigation de "Veilles" -->
                     <ul class="sous_barre">
                       <li><a href="../pages/veilletec.php">Veilles Technologiques</a></li>
                       <li><a href="../pages/veillejur.php">Veilles Juridiques</a></li>
                    </ul>
                </li>
                 <!-- Fin de la barre de navigation "Veilles" -->
                <li><a href="../pages/contact.php">Contact</a></li>  
                     </ul>
                    <article class="croix"><i class="fa-solid fa-x fa-xl" style="color: #ffffff;"></i></article>  
                 </article>
                 <article><span class="btn_menu_lat"><i class="fa-solid fa-bars fa-xl" style="color: white;"></i></span></article>
                
                 <article>
                      
                 <p><span class="nom">SAIFIDINE Dayar</span> |Portfolio</p></article> 
             </section>
            <nav>
                <ul class="menu_deroulant">
                <li><a href="../public_html/index.php">Présentation</a></li> 
                <li><a href="../pages/Profil.php">Profil</a></li> 
                <li><a href="../pages/projets.php">Projets</a></li> 
                <li><a href="#">Veilles </a> <i class="fa-solid fa-caret-down" style="color: #ffffff;"></i>
                   <!-- Barre de navigation de "Veilles" -->
                   <ul class="sous_barre">
                       <li><a href="veilletec.php">Veilles Technologiques</a></li>
                       <li><a href="veillejur.php">Veilles Juridiques</a></li>
                    </ul>
                </li>
                 <!-- Fin de la barre de navigation "Veilles" -->
                <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </header>
        <!--Fin de l'en tête-->
           <center>
              <section class="ens"> 
        <section class='titre'>
            <article>
                <h2>Contact </h2>
                <p style='font-size:18px; font-family:cursive;'>Remplissez le formulaire ci-dessous :</p>
           </article>
       </section>
       <section class='formulaire'>
           <article>
               
               <h1 style='font-size:25px; font-family:sans-serif; text-align:center;'> Contactez - moi </h1> 
               
               <aside class=" adressecd">
                   <p style="font-family:sans-serif; font-size:20px;"> Lieu de formation : 13 Rue de la Fontaine au Roi, 75013 Paris France</p>
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.4551448109205!2d2.3670110763752175!3d48.86859937133342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66de25e831d9f%3A0xeb3ad0badbf8929!2s13%20Rue%20de%20la%20Fontaine%20au%20Roi%2C%2075011%20Paris!5e0!3m2!1sfr!2sfr!4v1684543447128!5m2!1sfr!2sfr" width="660" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </aside>
               <aside>
                   <article class="coordonne">
                   <p style=" font-family:sans-serif; font-size:20px;"> Mail : <a href="mailto:sdayar318@gmail.com" style=" font-family:sans-serif; font-size:20px; color:darkred; text-decoration:none;"> Sdayar@gmail.com</a><br />
                      Tel : <a href="callto:+33 6 38 01 23 36" style=" font-family:sans-serif; font-size:20px; color:darkred; text-decoration:none;">+33 6 38 01 23 36</a>
                      
                   </p>
                   </article>
                  
                   <p style="font-family:sans-serif; font-size:20px; border-bottom: 2px solid darkred; width:50%; margin-top:50px;"><i class="fa-solid fa-paper-plane fa-beat"></i> Via </p>
                    <article class="liens_form" >
                        <a href=" https://github.com/SDayar" target="_blank"><i class="fa-brands fa-github fa-xl" style="color: #6c509f;"></i></a>
                        <a href="https://www.linkedin.com/in/dayar-sa%C3%AFfidine-37244426b" target="_blank"><i class="fa-brands fa-linkedin-in fa-xl" style="color: #3c10b7;"></i></a>
                        <a href="mailto:saifidinedayar@gmail.com" target="_blank"><i class="fa-solid fa-envelope fa-xl" style="color: #b6b4cf;"></i></a>
                    </article>
               </aside>
               
           </article>
           <article>
               
               <form action = "../php/insertion.php" method= "POST">
                   
                   <label for="nom" >* Nom :</label>
                   <input type="text" name=" nom" id="nom" pattern="[A-Z]{3-10}" title=" Le nom doit être en majuscule et composé de 3 à 10 caractères"/>
                   <label for="prenom" >* Prénom :</label>
                   <input type="text" name="prenom" id="prenom"  />
                   <label for="mail">* Mail :</label>
                   <input type="email" name="mail" id="mail" />
                   <label for="message">* Message : </label>
                   <textarea maxlength="600" minlength="10" placeholder="Votre message doit contenir entre 10 et 600 caractères." id="message" name="message"></textarea><br /><br />
                    <input type="submit" value="Envoyer" id="btn_envoyer" />
                    </form>
               <input type="checkbox" id="accord" name="accord" /><label style=" font-family:sans-serif;"> * J'accepte que mes données soient enrégistrées et traitées</label><br /><br />
              
               <div id="reponse"></div>
              <i class="fa-solid fa-check fa-bounce" style="color: #17ed07;" id="fleche"></i><div id="envoie"></div>
               
             </article> 
           
       </section>
                  </section>
       </center>

            <?php 
        include('../php/footer.php');
        ?>
    
   
           
       <script src ="../JS/Tout.js"> </script> 
    </body>
</html>
