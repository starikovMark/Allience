<section class="section marks">
  <div class="container">
    <?php
    if (!empty($block_title)) {
      echo '<div class="seporator"></div>';
      echo '<h2 class="section-title">' . $block_title . '</h2>';
    }
    ;
    ?>
    <div class="cards products">
      <div class="card product">
        <svg class="product-image">
          <use href="img/svg/sprites.svg#ag-tech"></use>
        </svg>
        <div class="product-text">
          <h3 class="card-title product-text-title">Автохимия AG-Tech</h3>
          <p class="card-text product-text-subtitle">
            Для современного мира разбавленное изрядной долей эмпатии,
            рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </div>
      </div>
      <div class="card product">
        <svg class="product-image">
          <use href="img/svg/sprites.svg#allience"></use>
        </svg>
        <div class="product-text">
          <h3 class="card-title product-text-title">Автохимия AP</h3>
          <p class="card-text product-text-subtitle">
            Для современного мира разбавленное изрядной долей эмпатии,
            рациональное мышление создаёт предпосылки для поставленных
            обществом задач.
          </p>
        </div>
      </div>
    </div>
    <!-- /.products -->
  </div>
  <!-- /.container -->
</section>
<!-- /.section marks -->