<?php get_header();?>


<div class="corps">

<!-------------------F O M U L A I R E----------->

<form class="formu" action="index.html" method="post">

<fieldset></fieldset>
<ol>
  <li>

    <label for="nom">NOM:</label>
    <input id"nom" type="text" name="nom"
     placeholder="prenom et nom" required autofocs >

  </li>

  <li>

    <label for="email">Email:</label>
    <input id="email" type="email" name="email"
    placeholder="adressse@------.com" required>

  </li>

  <li>
  <label for="telephone">TEL:</label>
  <input id="tel: &nbsp;" type="text" name="telephone"
  placeholder="example: +3312345678" required>
  </li>

</ol>

</fieldset>



<fieldset class="message">

<legend></legend>
<ol>

  <li>
    <label for="message">Message</label>
    <textarea name="message" rows="30" cols="80"
     required></textarea>

  </li>
</ol>
<input name="submit" type="submit" value="Envoyer"
 onclick="formulaire();"/>

</fieldset>
</div>


</div>

<?php get_footer(); ?>
