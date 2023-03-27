<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open NC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <?php wp_head() ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #FFD200!important;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="http://localhost/wordpress/wp-content/themes/pincolonnaire/assets/logo.png" style="width: 190px;
                     height: 135px;" alt="Logo du site">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <?php wp_nav_menu([
                        'theme_location' => 'header',
                        'container' => false,
                        'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0'
                    ]) ?>
                </ul>
                <form class="d-flex" role="search">
                    <?= get_search_form() ?>
                </form>
            </div>
        </div>
    </nav>