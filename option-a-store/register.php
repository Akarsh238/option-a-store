<?php $pageTitle = "Register — MyStore"; include __DIR__ . "/includes/header.php"; ?>
  <section class="hero">
    <h1>Create an Account</h1>
    <p class="muted">Static registration form to satisfy the “Register/Login page” requirement.</p>
  </section>

  <section class="grid">
    <form class="card form col-6">
      <label for="fullname">Full Name</label>
      <input id="fullname" type="text" placeholder="Jane Doe" required />

      <label for="email">Email</label>
      <input id="email" type="email" placeholder="jane@example.com" required />

      <label for="password">Password</label>
      <input id="password" type="password" placeholder="••••••••" required />

      <button type="button">Create Account</button>
    </form>
    <div class="card col-6">
      <h2>Already have an account?</h2>
      <p><a class="btn ghost" href="/login.php">Go to Login</a></p>
      <p class="muted">All content here is placeholder; backend will be added in Phase Two.</p>
    </div>
  </section>
<?php include __DIR__ . "/includes/footer.php"; ?>
