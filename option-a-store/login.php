<?php $pageTitle = "Login — MyStore"; include __DIR__ . "/includes/header.php"; ?>
  <section class="hero">
    <h1>Login</h1>
    <p class="muted">Static login form; no authentication yet (Option A).</p>
  </section>

  <section class="grid">
    <form class="card form col-6">
      <label for="email">Email</label>
      <input id="email" type="email" placeholder="you@example.com" required />

      <label for="password">Password</label>
      <input id="password" type="password" placeholder="••••••••" required />

      <button type="button">Sign In</button>
    </form>
    <div class="card col-6">
      <h2>New here?</h2>
      <p><a class="btn" href="/register.php">Create an Account</a></p>
    </div>
  </section>
<?php include __DIR__ . "/includes/footer.php"; ?>
