<?php get_header(); ?>

  <h1>Curriculum Vitae</h1>
  <h2>Faïrouz Adlane</h2>

  <img src="<?php echo get_template_directory_uri(); ?>/assets\images\totoro.jpeg" width="100px">

  <h3>Informations Personnelles</h3>
  <ul>
    <li><strong>Nom :</strong> Adlane</li>
    <li><strong>Prénom :</strong> Faïrouz</li>
    <li><strong>Date de Naissance :</strong> 02/08/04 (31 ans)</li>
    <li><address><strong>Adresse :</strong> Boulevard Léopold III</address></li>
    <li><strong>Téléphone :</strong> <a href="tel:+32 2 34 56 78">+32 2 34 56 78</a></li>
    <li><strong>Email :</strong> <a href="mailto:fairouz.adlane@isfsc.be">fairouz.adlane@isfsc.be</a></li>
  </ul>
  
  <h3>Formations</h3>
  <ul>
    <li>2010-2016 : 1ère à 6ème primaire, Athénée Royal Alfred Verwee, Les Platanes</li>
    <li>2016-2022 : 1ère à 6ème secondaire, Athénée Fernand Blum, Renan</li>
  </ul>
   
  <h3>Expériences Professionnelles</h3>
  <ul>
    <li>Avril 2016 - Présent : Développeur Front-End, Société TechVision, Bruxelles
      <ul>
        <li>Conception et développement d'interfaces utilisateur pour des applications web et mobiles en utilisant HTML, CSS et JavaScript.</li>
        <li>Collaboration étroite avec les designers pour transformer des maquettes en interfaces interactives et conviviales.</li>
        <li>Expérience dans la mise en œuvre de projets Agile, avec des sprints et des réunions de planification et de rétrospective.</li>
        <li>Utilisation de frameworks tels que React et Vue.js pour créer des expériences utilisateur dynamiques et réactives.</li>
        <li>Intégration de services RESTful et utilisation de Git pour le contrôle de version.</li>
      </ul>
    </li>
    <li>Juin 2015 - Mars 2016 : Stagiaire en Développement Web, Startup WebCraft, Liège
      <ul>
        <li>Assistance dans la création d'une application web responsive utilisant les dernières technologies front-end.</li>
        <li>Participation à l'optimisation des performances du site et à l'assurance de sa compatibilité avec différents navigateurs.</li>
        <li>Contribution à la mise en place d'une méthodologie de développement Agile au sein de l'équipe.</li>
      </ul>
    </li>
  </ul>



<?php
    $skillslist = new WP_Query([
        'post_type' => 'skills',
    ]);
  ?>
<?php if ($skillslist->have_posts()): ?>
  <h3>Compétences</h3>
  <ul>
    <?php while ($skillslist->have_posts()): $skillslist->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


<?php
    $langueslist = new WP_Query([
        'post_type' => 'langues',
    ]);
  ?>
<?php if ($langueslist->have_posts()): ?>
  <h3>Langues</h3>
  <ul>
    <?php while ($langueslist->have_posts()): $langueslist->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


<?php
    $Centres_i = new WP_Query([
        'post_type' => 'Centres_i',
    ]);
  ?>
<?php if ($Centres_i->have_posts()): ?>
  <h3>Centres d'Intérêt</h3>
  <ul>
    <?php while ($Centres_i->have_posts()): $Centres_i->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>


<?php
    $Centres_i = new WP_Query([
        'post_type' => 'XP',
    ]);
  ?>
<?php if ($XP->have_posts()): ?>
  <h3>Expériences Professionnelles</h3>
  <ul>
    <?php while ($XP->have_posts()): $XP->the_post(); ?>
      <li><?php the_title(); ?></li>
    <?php endwhile; ?>
  </ul>
<?php endif; ?>

</body>

</html> 

<?php get_footer(); ?>