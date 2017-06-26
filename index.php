<?php get_header();?>




<div class="nav">
      <nav>
        <ul>

           <li id="btn"><a  href="index.php">ACCUEIL</a></li>
          <li id="btn"><a  href="video.php">VIDEO</a></li>
          <li id="btn"><a  href="contact.php">CONTACT</a></li>
        </ul>
      </nav>
    </div>
    <br>
    <hr>
    <div class="corps">

      <div class="contenu">



          <aside class="rens">
              <img src="http://img.clubic.com/03E8000008036460-photo-01-vision-thermique.jpg"
               alt="vision thermique">
              <a href="#">Pour localiser et viser une cible, les militaires
                utilisent actuellement deux équipements distincts :
                des lunettes de vision nocturne, et un viseur thermique monté sur leur arme.
                 Le gros problème,c'est que cette combinaison ralentit la vitesse d'action du soldat.
                <br>L'Armée américaine et BAE Systems ont donc collaboré
                pour créer un système 2 en 1. Résultat :
                le système thermique est désormais monté sur l'arme du soldat,
                et les informations visuelles sont envoyées
                en Bluetooth à un écran fixé sur son casque. Un gain de temps
                et d'efficacité qui a convaincu l'armée :
                un contrat de 434 millions de dollars a été signé avec BAE pour
                développer la technologie durant les cinq
                prochaines années. </a>
            </aside>

      </div>

        <div class="contenu">



          <aside class="rens">

              <img src="<?php echo esc_url (get_template_directory_uri() );?>/img/fusil-precision.jpg"
              alt="fusil de precision">
              <a href="#">Tirer au fusil de précision demande un entraînement et une maîtrise évidents... sauf, peut-être,
                si l'on se dote d'un fusil de précision guidé TrackingPoint. Bardé de capteurs, ce fusil intelligent est
                équipé d'une boussole, d'un calculateur balistique, d'une centrale à inertie, d'un télémètre laser,
                d'un microphone et de multiples capteurs de vitesse du vent, de pression et de température.
                On trouve également sur le viseur, une caméra de 14 mégapixels, des lasers et une connectique Wi-Fi.
                <br>La partie logicielle exploite Linux : tous les calculs sont donc effectués au coeur du viseur,
                même s'il est possible de diffuser les données et le flux vidéo sur une tablette ou un smartphone.
                Une fois que le tireur a la cible dans son viseur, le TrackingPoint se charge d'effectuer tous les
                calculs pour assurer le tir parfait. Il ne faut que quelques tirs à un débutant pour parvenir à toucher
                une cible se trouvant à plus de 400 mètres. On imagine facilement le potentiel d'une telle arme entre
                de mauvaises mains. </a>
            </aside>

          </div>

      <div class="contenu">



            <aside class="rens">

              <img src="http://img.clubic.com/03E8000008036676-photo-04-balle-teleguidee.jpg" alt="munition">
              <a href="#">Récemment présenté par la DARPA, le projet EXtreme ACcuracy Tasked Ordnance, ou EXACTO
                désigne une arme dont les balles devraient être capables de suivre la cible, pour que cette dernière
                soit touchée même si elle est en mouvement.<br>
                <a href="https://youtu.be/YoOaJclkSZg"><strong>Le test publié en vidéo</strong></a>
                <a href="#"> montre bien la trajectoire de cette balle intelligente (en vert) capable de dévier de
                 sa trajectoire pour atteindre sa cible. La manière dont fonctionne cette technologie est, pour l'heure,
                  inconnue, si ce n'est que la DARPA a précisé que la balle est pilotée à distance et en temps réel via un
                  système optique.</a>
            </aside>
      </div>
      <script src="js/main.js"></script>
</body>
<?php get_footer(); ?>
