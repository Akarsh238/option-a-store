<?php $pageTitle = "Home — MyStore"; include __DIR__ . "/includes/header.php"; ?>
  <section class="hero">
    <h1>Welcome to MyStore</h1>
    <p>Beautiful products. Simple prices. Fully responsive layout with PHP includes.</p>
  </section>

  <section class="grid">
    <div class="card col-6">
      <h2>Featured Collection</h2>
      <p class="muted">This is placeholder content (static, not from DB yet).</p>
    </div>
    <div class="card col-6">
      <h2>Why Shop With Us?</h2>
      <ul>
        <li>Quality you can trust</li>
        <li>Fast shipping</li>
        <li>Great support</li>
      </ul>
    </div>
    <div class="card col-3 product">
      <div>
        <h3>Product A</h3>
        <p class="muted">Short description</p>
      </div>
      <span class="price">$19.99</span>
    </div>
    <div class="card col-3 product">
      <div>
        <h3>Product B</h3>
        <p class="muted">Short description</p>
      </div>
      <span class="price">$24.99</span>
    </div>
    <div class="card col-3 product">
      <div>
        <h3>Product C</h3>
        <p class="muted">Short description</p>
      </div>
      <span class="price">$29.99</span>
    </div>
    <div class="card col-3 product">
      <div>
        <h3>Product D</h3>
        <p class="muted">Short description</p>
      </div>
      <span class="price">$39.99</span>
    </div>
  </section>
<?php include __DIR__ . "/includes/footer.php"; ?>
