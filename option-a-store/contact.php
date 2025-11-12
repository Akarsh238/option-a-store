<?php $pageTitle = "Contact — MyStore"; include __DIR__ . "/includes/header.php"; ?>
  <section class="hero">
    <h1>Contact Us</h1>
    <p class="muted">This is a static contact form (no backend processing yet).</p>
  </section>

  <section class="grid">
    <form class="card form col-6">
      <label for="name">Name</label>
      <input id="name" type="text" placeholder="Your full name" required />

      <label for="email">Email</label>
      <input id="email" type="email" placeholder="you@example.com" required />

      <label for="msg">Message</label>
      <textarea id="msg" rows="5" placeholder="How can we help?"></textarea>

      <button type="button">Send Message</button>
    </form>
    <div class="card col-6">
      <h2>Store Info</h2>
      <p class="muted">123 Example Ave, Toronto, ON · (555) 123-4567</p>
      <div style="height:240px; background:#0b1220; border:1px dashed rgba(255,255,255,.15); border-radius:12px; display:flex; align-items:center; justify-content:center;">
        <span class="muted">Map placeholder</span>
      </div>
    </div>
  </section>
<?php include __DIR__ . "/includes/footer.php"; ?>
