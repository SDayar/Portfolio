<!DOCTYPE html>
<!--veille technologique-->
<html lang="Fr">
    <head>
        <title>Présentation : Portfolio </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/veilletec.css"/>
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
              <section class='titre'>
            <article>
                <h2>Veille technologique</h2>
                     <p style='font-size:18px; font-family:cursive;'>Cette rubrique présente mes engagements vis à vis à l'actualité du digital</p>
           </article>
        </section>
       <!--Boite de présentation-->
       <section class='boite'>
           <article>
               <h2> Qu'est ce qu'une veille technologique ?</h2>
               <p style='font-family:sans-serif; font-size:18px; margin-left:0px; text-align:left;'>La veille technologique est une activité qui consiste à se tenir au courant de l'actualité du monde technologiques selon des buts intellectuels voire économiques. Elle permet de suivre les évolutions techniques afin de s'adapter à celles-ci.<br>
                   Ma veille technologique se repartit en divers domaines à savoir : <strong> Les langages de programmation inédits tels que Angular js, les nouveaux appareils électroniques, les software de gestion de données, les intelligences artificielles, les innovations spatiales (le collisionneur de hadron),...etc.</strong> </p>
               <p style='font-family:sans-serif; font-size:18px; margin-left:0px; text-align:left;'><br>A part le visonnage quotidien des sources télévisées spécialisées ou non sur les actualités de l'informatique, je suis notamment des personnalitées publiques qui, à travers les réseaux sociaux dont YouTube notamment les chaines <strong> Marques Brownlee, Underscore_</strong>, partagent les nouvelles découvertes du monde du tech.<br><br> Je me tiens également des nouvelles inventions à partir d'autres sources moins communes, les revus/articles scientifques, la publication des brevets distribués par l'<strong>OEB</strong> et annoncés au public.</p>
           </article>
           <article>
              <object data='../images/veilletec.jpg' width='710' height='490'></object>
         </article>
       </section>
         <!--Boite des actualité-->
             <section class="actu">
                 <article>
             <p style='font-family:sans-serif; font-size:18px;'><a href= "https://www.ouest-france.fr/high-tech/tiktok/tiktok-quelles-sont-les-institutions-qui-ont-interdit-lapplication-75e66f04-b77f-11ed-a4b0-37ddc7a8a1c1" target="_blank" style ='text-decoration:none;font-family:sans-serif; font-size:18px; margin-left:0px; color:darkred;'>Actualité récente : Montana, est le premier Etat à banir le réseau social Tik-Tok sur le sol américain</a> </p>
                 </article>
             </section>
         </center>
     <?php 
        include('../php/footer.php');
        ?>
      
      <script src ="../JS/Tout.js"> </script>  
    </body>
</html>
