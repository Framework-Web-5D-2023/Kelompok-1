<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Tautan ke Bootstrap CSS -->
  <link href="<?= site_url("assets/bootstrap.css"); ?>" rel="stylesheet">

  <title>Navbar</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url("dashboard"); ?>">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url("products"); ?>">Products</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url("products/form"); ?>">Add</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <?= $this->renderSection('content') ?>

  <script type="text/javascript" src="<?= site_url("assets/bootstrap.js"); ?>"></script>

  <?= $this->renderSection('script') ?>

</body>

</html>
