<?php 
require('actions/users/securityAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php'; ?>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2, h3 {
            color: #343a40;
            margin-bottom: 20px;
        }
        p {
            color: #343a40;
            font-size: 1.1em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #f1f1f1;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        ul li a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        ul li:hover {
            background-color: #e2e6ea;
        }
        .recommended-channels {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .channel-card {
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 100%;
            max-width: 250px;
        }
        .channel-card img {
            width: 100%;
            height: auto;
        }
        .channel-card h4 {
            padding: 15px;
            font-size: 1.2em;
            color: #343a40;
            margin: 0;
        }
        .channel-card p {
            padding: 0 15px 15px;
            font-size: 0.9em;
            color: #343a40;
        }
        .channel-card a {
            display: block;
            padding: 10px 15px;
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-weight: bold;
            border-radius: 0 0 8px 8px;
        }
        .channel-card a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <br><br>
    <div class="container">
        <h2>Bricolons ensemble</h2>
        <p>Bienvenue dans la section "Bricolons ensemble" ! Ici, vous trouverez les meilleurs liens pour apprendre le bricolage de A à Z et des projets inspirants pour les experts.</p>
        
        <h3>Liens utiles</h3>
        <ul>
            <li><a href="https://archive.org/details/nouveaumanuelcom0000unse" target="_blank">Guide complet de bricolage</a></li>
            <li><a href="https://www.mr-bricolage.be/blog/les-bases-du-bricolage-c7" target="_blank">Techniques de base pour les débutants</a></li>
            <li><a href="https://www.hornbach.lu/projets/renover-et-reparer-les-murs/" target="_blank">Réparations courantes à domicile</a></li>
        </ul>
        
        <h3>Projets pour les experts</h3>
        <p>Trouvez des inspirations pour vos prochains projets.</p>
        <ul>
            <li><a href="https://youtu.be/jHjIuNgnYRs?si=b7e6bpWiiI9IByiA" target="_blank">Projets de bricolage de meubles et de décoration pour votre salon</a></li>
            <li><a href="https://www.youtube.com/watch?v=xUbVutxW9oo" target="_blank">Construction d'une étagère murale</a></li>
            <li><a href="https://www.youtube.com/watch?v=_abVpEUSeg4" target="_blank">Rénovation d'une vieille chaise</a></li>
        </ul>

        <h3>Chaînes recommandées</h3>
        <div class="recommended-channels">
            <div class="channel-card">
                 <h4>BRICOSYMPA </h4>
                <p>Découvrez des tutoriels de bricolage pour tous les niveaux.</p>
                <a href="https://www.youtube.com/@BRICOSYMPA" target="_blank">Voir la chaîne</a>
            </div>
            <div class="channel-card">
                <h4>Brico Système D</h4>
                <p>Toutes les astuces et conseils pour réussir vos projets de bricolage.</p>
                <a href="https://www.youtube.com/@SystemedTV" target="_blank">Voir la chaîne</a>
            </div>
            <div class="channel-card">
                <h4>Bricolage Facile</h4>
                <p>Des tutoriels pas à pas pour apprendre le bricolage facilement.</p>
                <a href="https://www.youtube.com/c/bricolagefacile" target="_blank">Voir la chaîne</a>
            </div>
        </div>
    </div>
</body>
</html>
