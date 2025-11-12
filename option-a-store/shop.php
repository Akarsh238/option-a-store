<?php $pageTitle = "Shop — MyStore"; include __DIR__ . "/includes/header.php"; ?>
  <section class="hero">
    <h1>Shop</h1>
    <p class="muted">Static product grid to satisfy Option A (no DB data yet).</p>
  </section>

  <section class="grid">
    <?php for ($i=1; $i<=8; $i++): ?>
      <div class="card col-3">
        <img src="https://placehold.co/600x400/png" alt="Product image" style="width:100%; border-radius:12px; margin-bottom:0.6rem;">
        <h3>Product <?= $i ?></h3>
        <p class="muted">A short, static description.</p>
        <div class="product">
          <span class="price">$<?= 10 + $i ?>.99</span>
          <button type="button">Add to Cart</button>
        </div>
      </div>
    <?php endfor; ?>
  </section>
<?php include __DIR__ . "/includes/footer.php"; ?>
