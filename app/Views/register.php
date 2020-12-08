<?= $this->extend('layout_login/page_login'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Register Page</h1>
              </div>
              <form class="" action="/register" method="post">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="firstname">First Name</label>
                      <input type="text" class="form-control" name="firstname" id="firstname" value="<?= set_value('firstname') ?>">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="lastname">Last Name</label>
                      <input type="text" class="form-control" name="lastname" id="lastname" value="<?= set_value('lastname') ?>">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" class="form-control" name="username" id="username" value="<?= set_value('username') ?>">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" name="password" id="password" value="">
                    </div>
                  </div>
                  <div class="col-12 col-sm-6">
                    <div class="form-group">
                      <label for="password_confirm">Confirm Password</label>
                      <input type="password" class="form-control" name="password_confirm" id="password_confirm" value="">
                    </div>
                  </div>
                  <?php if (isset($validation)) : ?>
                    <div class="col-12">
                      <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                      </div>
                    </div>
                  <?php endif; ?>
                </div>
                <div class="row">
                  <div class="col-12 col-sm-4">
                    <button type="submit" class="btn btn-primary">Register</button>
                  </div>
                  <div class="col-12 col-sm-8 text-right">
                    <a href="/">Already have an account</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection(); ?>