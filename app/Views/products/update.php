<?php echo $this->extend("template"); ?>

<?= $this->section("content"); ?>
<div class="container">
  <?php $session = session(); ?>
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
  
  <div class="my-3">
    <h1> Update data</h1>
  </div>
  <?php if (session('validation')) : ?>
    <div class="alert alert-danger alert-dismissible">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <ul>
        <?php foreach (session('validation')->getErrors() as $error) : ?>
          <li><?= esc($error) ?></li>
        <?php endforeach ?>
      </ul>
    </div>
  <?php endif ?>
  <form action="<?= base_url("/products/updateAction/" . $products["id"]); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="col-6">
        <div class="mb-3">
          <label for="title" class="form-label">Nama Products</label>
          <input type="text" class="form-control <?= (validation_show_error('title')) ? 'is-invalid' : ''; ?>" id="title" name="title" placeholder="Inputan Nama Products.." value="<?= $products["title"]; ?>">
          <div class="invalid-feedback">
            <?= validation_show_error('title'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <input type="text" class="form-control <?= (validation_show_error('category')) ? 'is-invalid' : ''; ?>" id="category" name="category" placeholder="Inputan Category.." value="<?= $products["category"]; ?>">
          <div class="invalid-feedback">
            <?= validation_show_error('category'); ?>
          </div>
        </div>
        <div class="mb-3">
          <label for="price" class="form-label">Harga</label>
          <input type="text" class="form-control <?= (validation_show_error('price')) ? 'is-invalid' : ''; ?>" id="price" name="price" placeholder="Inputan Harga.." value="<?= $products["price"]; ?>">
          <div class="invalid-feedback">
            <?= validation_show_error('price'); ?>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="mb-3">
          <label for="quantity" class="form-label">Jumlah</label>
          <input type="text" class="form-control <?= (validation_show_error('quantity')) ? 'is-invalid' : ''; ?>" id="quantity" name="quantity" placeholder="Inputan Jumlah.." value="<?= $products["quantity"]; ?>">
          <div class="invalid-feedback">
            <?= validation_show_error('quantity'); ?>
          </div>
        </div>
		<div class="mb-3">
		  <label for="image" class="form-label">Image</label>
		  <input type="file" class="form-control" id="image" name="image" placeholder="Inputan Gambar.." value="<?= $products["image"]; ?>">
		</div>
		<input type="hidden" name="old_image" value="<?= $products['image']; ?>">
		
      </div>
      <div>
        <button class="btn btn-success" type="submit">Update</button>
      </div>
    </div>
  </form>

</div>

<?= $this->endSection(); ?>