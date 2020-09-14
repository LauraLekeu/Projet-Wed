<h4 class="widget_title">Category</h4>
<ul class="list cat-list">
  <?php foreach ($categories as $categorie): ?>
    <li>
        <a href="#" class="d-flex">
            <p><?php echo $categorie['categorieName']; ?></p>
            <p>(<?php echo $categorie['nbCategories']; ?>)</p>
        </a>
    </li>
  <?php endforeach; ?>
</ul>
