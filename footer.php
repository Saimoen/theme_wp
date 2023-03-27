<footer>
    <div class="bg-primary mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h3>En savoir plus</h3>
                    <?php wp_nav_menu([
                        'theme_location' => 'footer',
                        'container' => false,
                        'menu_class' => 'navbar-nav mr-auto'
                    ]);
                    ?>
                    <p>
                        OPEN New Caledonia <br />
                        Station N <br />
                        Port Autonome <br />
                        Rue du Commandant Babo <br />
                        98800 Nouméa <br />
                        Nous sommes dans le bureau 1 au RDC.
                    </p>
                </div>
                <div class="col-sm-4">
                    <h3>Horaires de l'agence</h3>
                    <?= get_option('agence_horaire') ?>
                </div>
                <div class="col-sm-4">
                    <h3>Logo de l'agence</h3>
                    <img src="https://www.open.nc/wp-content/themes/open/images/logo.svg" alt="">
                </div>
            </div>
        </div>
    </div>

</footer>
<div>

</div>
<?php wp_footer() ?>
</body>

</html>