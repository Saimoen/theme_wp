<?php get_header() ?>

<main class="container">
    <div class="p-4 p-md-5 mb-4 rounded" style="background-image: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8bGFuZHNjYXBlJTIwc2VhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60');
            background-size: cover;
             background-repeat: no-repeat;
             background-position: center center;">
        <div class="col-md-6 px-0">
            <h1 class="display-4 fst-italic">Organisation
                des Professionnels
                de l’Economie Numérique
                de Nouvelle-Calédonie</h1>
            <p class="lead my-3">Nos missions : créer des synergies, des projets, des vocations; structurer durablement
                la filière numérique calédonienne pour faire émerger localement un secteur en pleine croissance partout
                dans le monde.
                Envie de nous rejoindre ? Bienvenue !</p>
            <p class="lead mb-0"><a href="#" class="text-white fw-bold">Qui somme nous ?</a></p>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary">En savoir plus</strong>
                    <h3 class="mb-0">Qui sommes nous ?</h3>
                    <div class="mb-1 text-muted">Bienvenue chez nouzôtes !</div>
                    <p class="card-text mb-auto">Développement informatique, communication numérique… Quel que soit
                        votre
                        domaine d’expertise numérique, vous pouvez rejoindre le mouvement !</p>
                </div>
                <div class="col-auto d-none d-lg-block align-self-center">
                    <img src="https://www.open.nc/wp-content/themes/open/images/logo.svg" alt="">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-success">Actualités</strong>
                    <h3 class="mb-0">Restez connecté !</h3>
                    <div class="mb-1 text-muted">Ne laissez pas l'actualité vous échapper</div>
                    <p>Découvrez les histoires les plus importantes de la journée ici. Soyez au courant des dernières
                        nouvelles avec nos mises à jour régulières.</p>
                    <p class="mb-auto">
                        <?php while (have_posts()):
                            the_post(); ?>

                            <?php the_content() ?>

                            <a href=" <?= get_post_type_archive_link('post') ?>">Voir les dernières actualités</a>

                        <?php endwhile ?>
                    </p>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">Thumbnail</text>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-5">
        <div class="col-md-8">
            <h3 class="pb-4 mb-4 fst-italic border-bottom">
                Qui sommes nous ?
            </h3>

            <article class="blog-post">
                <blockquote class="blockquote">
                    <p>OPEN NC est une grappe d’entreprises calédoniennes du secteur numérique qui ont décidé de se
                        fédérer
                        pour favoriser l’émergence d’une filière, développer des synergies et répondre aux
                        problématiques et
                        enjeux numériques de leur pays.

                        Des professionnels aux métiers transversaux, attachés à leur île au coeur du pacifique, propice
                        à
                        l’expérimentation, au développement et à la création de projets numériques locaux.

                        Nous agissons ensemble, chacun avec ses compétences, pour créer un effet global.</p>
                </blockquote>
                <hr>
                <h2>Nos actions</h2>


                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Améliorer l’hygiène de vie numérique des calédoniens</h5>
                                <p class="card-text">Faciliter l’inclusion de la cybersécurité dans la transition
                                    numérique des entreprises, informer
                                    les entreprises et le grand public sur les risques informatiques
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Renforcer les compétences sur le territoire</h5>
                                <p class="card-text">Open nc parraine notamment deux formations de la CCI labellisées
                                    Grande École du Numérique
                                    (Techniciens helpdesk et Développeur logiciel, web).
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row py-2">
                    <div class="col-md-6">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Favoriser les liens</h5>
                                <p class="card-text">avec les partenaires institutionnels et les autres acteurs du
                                    numérique et de l’innovation.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Valoriser les données – Open data</h5>
                                <p class="card-text">Accentuer la collaboration entre les acteurs publics et privés. Une
                                    commission est en cours de
                                    création.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <h5 class="card-title">Accompagner l’activité et le rayonnement de nos adhérents</h5>
                                <p class="card-text">Développer la coopération entre les entreprises et encourager le
                                    rayonnement de nos adhérents au
                                    travers de rencontres, d’évènements, de délégations, de contenus, de supports de
                                    communication.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </article>

            <article class="blog-post">
                <h2 class="blog-post-title mb-1">Organisation & gouvernance</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://www.open.nc/wp-content/uploads/2019/08/Hatem_BELLAGI-1600.jpg"
                                class="img-thumbnail"></img>
                            <p class="text-center">Hatem Bellagi <br />
                                Président
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="https://www.open.nc/wp-content/uploads/2019/08/Hugues_VIENS-1600.jpg"
                                class="img-thumbnail"></img>
                            <p class="text-center">Hugues Viens <br />
                                Vice-Président
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img style="width: 200px; height: 130px"
                                src="https://www.open.nc/wp-content/uploads/2022/10/Jocelyn_Tanguy-scaled.jpg"
                                class="img-thumbnail"></img>
                            <p class="text-center">Jocelyn Tanguy <br />
                                Vice-Président
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://www.open.nc/wp-content/uploads/2019/08/Mehdi_HASSOUNI-1600.jpg"
                                class="img-thumbnail"></img>
                            <p class="text-center">Mehdi Hassouni <br />
                                Secrétaire
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="https://www.open.nc/wp-content/uploads/2019/08/Laurent_MAILLOT-1600.jpg"
                                class="img-thumbnail"></img>
                            <p class="text-center">Laurent Maillot<br />
                                Vice-Président
                            </p>
                        </div>
                        <div class="col-md-3">
                            <img src="https://www.open.nc/wp-content/uploads/2022/10/Lydia_Gracia-scaled.jpg"
                                class="img-thumbnail"></img>
                            <p class="text-center">Lydia Garcia <br />
                                Trésorière
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <article class="blog-post">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 p-0 overflow-auto border-end" id="col1">
                            <h2 class="sticky-top bg-light p-3 m-0">Nos origines & quelques dates</h2>
                            <div class="p-3">
                                <div class="row">
                                    <div class="col-auto text-center flex-column d-none d-lg-flex">
                                        <div class="row h-50">
                                            <div class="col">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <i class="bi bi-bag-fill"></i>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col py-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title text-muted">2019</h4>
                                                <p class="card-text text-muted">Volonté de se rapprocher des autres
                                                    acteurs de l’innovation et du numérique, emménagement dans le centre
                                                    de coworking Galliéni, un nouveau lieu propice aux synergies
                                                    créatives en plein coeur de Nouméa.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto text-center flex-column d-none d-lg-flex">
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <i class="bi bi-arrow-repeat"></i>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col py-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title text-muted">2018</h4>
                                                <p class="card-text text-muted">Aménagement au Centre Sud, développement
                                                    des partenariats, création des premières commissions.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto text-center flex-column d-none d-lg-flex">
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <i class="bi bi-arrow-up-circle"></i>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col py-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title text-muted">2017</h4>
                                                <p class="card-text text-muted">Changement de bureau et de président,
                                                    rapprochement avec la OPEN Polynésie et création d’OPEN
                                                    Nouvelle-Calédonie, mise en place d’un animateur du réseau.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto text-center flex-column d-none d-lg-flex">
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <i class="bi bi-arrow-repeat"></i>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col py-2">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title text-muted">2015</h4>
                                                <p class="card-text text-muted">Les travaux de l’ONNC et de l’ACTIC
                                                    (Association Calédonienne pour les Technologies de l’Information et
                                                    de la Communication) concluent à la mise en place d’une grappe
                                                    d’entreprises comme outil d’aide à la structuration de la filière
                                                    numérique. La volonté d’un
                                                    noyau dur, d’une vingtaine d’entrepreneurs de porter et mettre en
                                                    oeuvre le projet, c’est la naissance de Think IT.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-auto text-center flex-column d-none d-lg-flex">
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <i class="bi bi-x-circle"></i>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            </article>

        </div>

        <div class="col-md-4">
            <div class="position-sticky" style="top: 2rem;">
                <?= get_sidebar('homepage') ?>
                <!--
                <div class="p-4">
                    <h4 class="fst-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2021</a></li>
                        <li><a href="#">February 2021</a></li>
                        <li><a href="#">January 2021</a></li>
                        <li><a href="#">December 2020</a></li>
                        <li><a href="#">November 2020</a></li>
                        <li><a href="#">October 2020</a></li>
                        <li><a href="#">September 2020</a></li>
                        <li><a href="#">August 2020</a></li>
                        <li><a href="#">July 2020</a></li>
                        <li><a href="#">June 2020</a></li>
                        <li><a href="#">May 2020</a></li>
                        <li><a href="#">April 2020</a></li>
                    </ol>
                </div> -->

                <div class="p-4">
                    <h4 class="fst-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                    <?php
                    the_widget(YoutubeWidget::class, ['title' => 'Découvrez OPEN NC', 'YouTube' => 'LKMKgihS6cw'], ['after_widget' => '', 'before_widget' => '']);
                    ?>
                </div>
            </div>
        </div>
    </div>

</main>


<?php get_footer() ?>