<?= $this->extend("template"); ?>

<?= $this->section('content') ?>
<div class="container m-auto mt-5" style="width:500px;">
  <h1 class="mb-3">Login</h1>
  <form method="post" action="/loginAction">
    <div>
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Registrasi
  </button>

  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Create Customers</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="<?= base_url("/create"); ?>" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="row">
              <div class="col-12 row mb-3">
                <div class="col-6">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name" aria-label="Name">
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username">
                  </div>
                </div>
              </div>
              <div class="col-12 mb-3">
                <div class="col-6">
					<div class="form-group">
					  <label for="address">Address</label>
						<input type="text" id="address" name="address" class="form-control" placeholder="Address" aria-label="Address">
					</div>
				</div>
                <div class="col-6">
                  <div class="form-group">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="Phone Number" aria-label="Phone Number">
                  </div>
                </div>
              </div>


              <div class="col-sm-12 mb-3">
                <div class="col-6">
					<div class="form-group">
					  <label for="image">Image</label>
					  <input type="file" class="form-control" id="image" name="image">
					</div>
                </div>
              </div>
              <div class="col-sm-12 mb-3">
                <div class="col-6">
					<div class="form-group">
					  <label for="email">Email</label>
					  <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
					</div>
				</div>
				  <div class="col-6">
					<div class="form-group">
					  <label for="password">Password</label>
					  <input type="password" class="form-control" id="password" name="Password" required>
					</div>
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

