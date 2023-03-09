<?php get_header() ?>

<form>
  <fieldset>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="search" name="1" class="form-control" placeholder="Disabled input" value="<?= get_search_query() ?>" placeholder="Votre recherche">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input type="checkbox" class="form-check-input" value="1" name="sponso" id="inlineFormCheck" <?= checked('1', get_query_var('sponso'))?> >
        <label class="form-check-label" for="disabledFieldsetCheck">
          Article sponsorisé seulement
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

<!-- <form class="form-inline">
  <div class="form-group mb-2">
    <input type="search" name="s" readonly class="form-control-plaintext" value="<?= get_search_query() ?>" placeholder="Votre recherche">
    <div class="form-check mb-2 mr-sm-2">
        <input type="checkbox" class="form-check-input" value="1" id="inlineFormCheck">""
        <label class="form-check-label" for="inlineFormCheck">
            Article sponsorisé seulement
        </label>
    </div>
</div>
  
  <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
</form> -->

<h1 class="mb-4">Résultat pour votre recherche "<?= get_search_query() ?>"</h1>

<?php if (have_posts()): ?>
    <div class="row">
        <?php while (have_posts()):
            the_post(); ?>
            <div class="col-sm-4">
                <?php get_template_part('parts/card', 'post'); ?>
            </div>
        <?php endwhile ?>
    </div>
    <?php montheme_pagination() ?>


<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>