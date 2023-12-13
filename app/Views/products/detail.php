<?= $this->extend("template"); ?>

<?= $this->section("content"); ?>
<div class="container">
  <div class="container">
    <h1><?= $title; ?></h1>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Nama Barang</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $products["title"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Gambar</h3>
      <span class="d-inline-block mx-3">:</span>
	  <img src="<?= base_url("image/" . $products['image']); ?>" class="img-fluid rounded" style="width:80px; height:100px;" alt="">
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Harga</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block">Rp. <?= $products["price"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Jumlah</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $products["quantity"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Pembeli</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $customers["name"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">No. Telepon Pembeli</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $customers["phoneNumber"]; ?></h3>
    </div>
    <div class="mt-5">
      <h3 style="width:200px;" class="d-inline-block">Alamat</h3>
      <span class="d-inline-block mx-3">:</span>
      <h3 class="d-inline-block"><?= $customers["address"]; ?></h3>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>