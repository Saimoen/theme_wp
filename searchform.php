<form class="d-flex" role="search" action="<?= esc_url(home_url('/')) ?>">
    <input class="form-control me-2" name="s" type="search" placeholder="Recherche" aria-label="Recherche"
        value="<?= get_search_query() ?>">
    <button class="btn btn-outline" type="submit"><i class="bi bi-search"></i></button>
</form>