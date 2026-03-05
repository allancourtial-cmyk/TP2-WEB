<?php include(__DIR__ . '/../header.php'); ?>

<main class="corps-page" style="display: block;">
    <h1>Exercice 1 : Mémento HTML5</h1>
    <p>Relevé des nouvelles balises de structure.</p>

    <table>
        <thead>
            <tr>
                <th>Balise</th>
                <th>Rôle</th>
                <th>Exemple</th>
                <th>Résultat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><strong>&lt;header&gt;</strong></td>
                <td>En-tête de page/section</td>
                <td>&lt;header&gt;Titre&lt;/header&gt;</td>
                <td class="visuel">
                    <header><strong>Haut de page</strong></header>
                </td>
            </tr>
            <tr>
                <td><strong>&lt;nav&gt;</strong></td>
                <td>Navigation (menu)</td>
                <td>&lt;nav&gt;Liens...&lt;/nav&gt;</td>
                <td class="visuel">
                    <nav><a href="#">Menu</a></nav>
                </td>
            </tr>
            <tr>
                <td><strong>&lt;section&gt;</strong></td>
                <td>Section de contenu</td>
                <td>&lt;section&gt;...&lt;/section&gt;</td>
                <td class="visuel">
                    <section>Une section</section>
                </td>
            </tr>
            <tr>
                <td><strong>&lt;article&gt;</strong></td>
                <td>Contenu indépendant</td>
                <td>&lt;article&gt;News&lt;/article&gt;</td>
                <td class="visuel">
                    <article>Un article</article>
                </td>
            </tr>
            <tr>
                <td><strong>&lt;aside&gt;</strong></td>
                <td>Contenu latéral</td>
                <td>&lt;aside&gt;Info&lt;/aside&gt;</td>
                <td class="visuel">
                    <aside>À côté</aside>
                </td>
            </tr>
            <tr>
                <td><strong>&lt;footer&gt;</strong></td>
                <td>Pied de page</td>
                <td>&lt;footer&gt;Fin&lt;/footer&gt;</td>
                <td class="visuel">
                    <footer>© 2025</footer>
                </td>
            </tr>
        </tbody>
    </table>

    <hr>

    <h1>Exercice 2 : Texte SQL</h1>

    <h2>1. Le langage SQL</h2>
    <h3>1.1. Définition</h3>
    <p>Le langage SQL (Structured Query Language ou Langage de requêtes structuré) est un langage comprenant à lui seul l'ensemble des ordres nécessaires à la création et à la gestion d'une base de données relationnelle.</p>
    <p>Il a été créé en 1986 et est en fait l'aboutissement de plusieurs langages (Sequel en 1977, System/R, ...) créés depuis l'apparition du modèle relationnel en 1970 (le modèle relationnel a été inventé par Mr Codd, un mathématicien de chez IBM).</p>
    <p>L'utilisation du langage SQL suppose obligatoirement que les données aient été définies selon le modèle relationnel au sein d'un SGBDR (Oracle, SQLServer, mySQL, PostgreSQL...).</p>

    <h3>1.2. Les différentes normes utilisées</h3>
    <p>Il existe aujourd'hui plusieurs normes relatives à l'utilisation du langage SQL. La différence entre ces deux normes se situe principalement dans l'écriture des jointures et dans l'ajout de fonctionnalités :</p>
    <ul>
        <li>La norme SQL 89 qui est encore très utilisée actuellement.</li>
        <li>La norme SQL 92.</li>
        <li>Aujourd'hui SQL 2011.</li>
    </ul>
    <p>Bien qu'il existe des normes il peut y avoir des différences entre SGBDR dans la syntaxe.</p>
    <p>Ainsi on peut lire sur le site de PostgreSQL :<br><em>"Le développement de PostgreSQL respecte le standard en vigueur, tant que celui-ci ne s'oppose pas aux fonctionnalités traditionnelles ou au bon sens..."</em></p>
    <p><em>"SQL-92 définit trois niveaux de conformité: basique (ENTRY), intermédiaire (INTERMEDIATE) et complète (FULL)..."</em></p>

    <h2>2. Le modèle de données</h2>
    <h3>2.1. Le modèle entité-association (MCD)</h3>
    <p>(Voir cours)</p>
    <h3>2.2. Le modèle relationnel (MRD)</h3>
    <p>(Voir cours)</p>
    <h3>2.3. Description des tables</h3>
    <div class="table-sql"><strong>fonction personnel</strong> (code fonction, libelle fonction)<br>PK : code fonction</div>
    <div class="table-sql"><strong>service</strong> (num service, libelle service, capacite accueil, date_ouverture)<br>PK : num service</div>

    <hr>

    <h1>Exercice 3 : Mon CV en ligne</h1>

    <div class="cv-container">

        <header class="cv-header">
            <h2>Allan Courtial</h2>
            <p><strong>ÉTUDIANT BTS SIO - RECHERCHE DE STAGE (18/05/26 au 19/06/26)</strong></p>
            <p>📍 15, Rue Olivier de Serres, 26000 Valence | 📞 07.68.10.84.92</p>
            <p>✉️ allan.courtial@gmail.com | 🚗 Permis B</p>
        </header>

        <section class="cv-section">
            <h3>Profil</h3>
            <p>Je suis actuellement un cursus de BTS Services Informatiques. Mon objectif est d'acquérir des bases solides en développement et en gestion des systèmes. Mes expériences passées, notamment en dépannage et en logistique, témoignent de ma rigueur, de mon autonomie et de ma capacité à gérer des problèmes concrets. Je suis dynamique et prêt à m'investir pleinement.</p>
        </section>

        <section class="cv-section">
            <h3>Formations</h3>

            <div class="cv-item">
                <span class="cv-date">Sept. 2025 à ce jour</span>
                <span class="cv-job-title">BTS Services Informatiques aux Organisations (Option SLAM)</span><br>
                <span class="cv-details">Lycée polyvalent Algoud-Laffemas, Valence</span>
                <p>Programmation Java, Bases de Données SQL, Gestion de réseaux, Cybersécurité.</p>
            </div>

            <div class="cv-item">
                <span class="cv-date">2025</span>
                <span class="cv-job-title">Formation Premiers Secours Citoyen (PSC1)</span><br>
                <span class="cv-details">Protection Civile, Valence</span>
            </div>

            <div class="cv-item">
                <span class="cv-date">Sept. 2023 - Juin 2025</span>
                <span class="cv-job-title">Baccalauréat Général</span><br>
                <span class="cv-details">Lycée polyvalent Algoud-Laffemas</span>
                <p>Spécialités : Mathématiques et Numérique et Sciences Informatiques (NSI).</p>
            </div>

            <div class="cv-item">
                <span class="cv-date">2024</span>
                <span class="cv-job-title">Permis B</span><br>
                <span class="cv-details">Ecole de Conduite des Deux Vallées, La Voulte-sur-Rhône</span>
            </div>
        </section>

        <section class="cv-section">
            <h3>Expériences Professionnelles</h3>

            <div class="cv-item">
                <span class="cv-date">Févr. 2025 à ce jour</span>
                <span class="cv-job-title">Livreur de pizzas</span><br>
                <span class="cv-details">Chez Christian Pino, Valence</span>
                <p>Assurer la livraison des commandes, organisation autonome des tournées, encaissement client. Développement de l'autonomie.</p>
            </div>

            <div class="cv-item">
                <span class="cv-date">Mars 2025</span>
                <span class="cv-job-title">Bénévole - Collecte Restaurants du Cœur</span><br>
                <span class="cv-details">Chabeuil</span>
                <p>Participation à la collecte, tri et gestion des dons. Travail d'équipe et engagement associatif.</p>
            </div>

            <div class="cv-item">
                <span class="cv-date">Etés 2021 à 2024</span>
                <span class="cv-job-title">Récolte de petits fruits (Saisonnier)</span><br>
                <span class="cv-details">EARL FERME DE LAPRAS, Chalencon</span>
                <p>Travail d'endurance et de rigueur. Intégration dans une équipe.</p>
            </div>

            <div class="cv-item">
                <span class="cv-date">Février 2022</span>
                <span class="cv-job-title">Stage en maintenance Informatique</span><br>
                <span class="cv-details">KIS Informatique, La Voulte-sur-Rhône</span>
                <p>Diagnostic de pannes, remplacement de composants (disques), installation d'OS (Windows), configuration du boot.</p>
            </div>

            <div class="cv-item">
                <span class="cv-job-title">Aide exploitation familiale</span>
                <p>Elevage et culture. Entretien, gestion des animaux. Polyvalence et travail en extérieur.</p>
            </div>
        </section>

        <section class="cv-section">
            <h3>Compétences</h3>
            <ul>
                <li><strong>Informatique :</strong> Gestion de bases de données SQL, Programmation Java, Cybersécurité, Maintenance / Dépannage, Réseau, Bureautique.</li>
                <li><strong>Savoir-être :</strong> Rigueur & Organisation, Polyvalence & Autonomie, Esprit d'équipe.</li>
                <li><strong>Langues :</strong> Français, Anglais, Espagnol.</li>
            </ul>
        </section>

        <section class="cv-section">
            <h3>Centres d'intérêt</h3>
            <p>Jeux vidéo, Sports d'équipe, Salle de Sport, Travaux domestiques en extérieur, Programmation.</p>
        </section>

    </div>

</main>

<?php include(__DIR__ . '/../footer.php'); ?>