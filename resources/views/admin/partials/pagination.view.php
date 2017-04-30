<nav>
<ul class="pagination">
    <li><a href="<?= App::get('router')->generate($route, ['page' => $cur_page-1]); ?>" aria-label="Previous"><span aria-hidden="true" class="mdi mdi-chevron-left"></span></a></li>
    <?php for($i = 0; $i < $pages; $i++ ) : ?>
     <li class="<?= $cur_page == $i+1 ? 'active' : ''; ?>"><a href="<?= App::get('router')->generate($route, ['page' => $i+1]); ?> "><?= $i+1; ?></a></li>
    <?php endfor; ?>
    <li><a href="<?= App::get('router')->generate($route, ['page' => $cur_page+1]); ?>" aria-label="Next"><span aria-hidden="true" class="mdi mdi-chevron-right"></span></a></li>
</ul>
</nav>