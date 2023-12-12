<?= $this->extend("template"); ?>

<?= $this->section("content"); ?>
<?php $session = session(); ?>
<div class="container">
  <?php if ($session->getFlashdata("success")) : ?>
    <div class="alert alert-success" role="alert">

      <?= $session->getFlashdata("success"); ?>
    </div>
  <?php endif; ?>
  <?php if ($session->getFlashdata("error")) : ?>
    <div class="alert alert-danger" role="alert">

      <?= $session->getFlashdata("error"); ?>
    </div>
  <?php endif; ?>
  <h1><?= $title; ?></h1>
  <table class="table caption-top">
    <caption>List of users</caption>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Category</th>
        <th scope="col">Harga</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($products as $p) : ?>
        <tr>
          <th scope="row"><?= $no++; ?></th>
          <td><img src="<?= base_url("image/" . $p['image']); ?>" class="img-fluid rounded" style="width:80px; height:100px;" alt=""></td>
          <td><?= $p["title"]; ?></td>
          <td><?= $p["category"]; ?></td>
          <td><?= $p["price"]; ?></td>
          <td>
            <a href="<?= site_url("products/destroy/" . $p["id"]); ?>" class="btn btn-danger btn-sm">Delete</a>
            <a href="<?= site_url("products/update/" . $p["id"]); ?>" class="btn btn-primary btn-sm">Update</a>
			<a href="<?= site_url("products/" . $p["id"]); ?>" class="btn btn-primary btn-sm">Checkout</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Create
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Products</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url("products/create"); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-12 row mb-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="title">Products Name</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Products Name" aria-label="Products Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" id="category" name="category" class="form-control" placeholder="Category" aria-label="Category">
                  </div>
                </div>
              </div>

              <div class="col-12 row mb-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="price">Harga</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Harga" aria-label="Harga">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="quantity">Jumlah</label>
                    <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Jumlah" aria-label="Jumlah">
                  </div>
                </div>
              </div>
              <div class="col-sm-12 mb-3">
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
              </div>


            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section("script"); ?>
<script>
  function sendIdDataDelete() {

  }
</script>
<?= $this->endSection(); ?>