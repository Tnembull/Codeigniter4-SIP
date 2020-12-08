<?= $this->extend('layout_login/page_login'); ?>
<?= $this->section('content'); ?>
<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-lg-7">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <div class="col-lg">
              <div class="p-5">
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                </div>
                <?php if (session()->get('success')) : ?>
                  <div class="alert alert-success" role="alert">
                    <?= session()->get('success') ?>
                  </div>
                <?php endif; ?>
                <form class="" action="/" method="post">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control form-control-user" name="username" id="username" value="<?= set_value('username') ?>">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control form-control-user" name="password" id="password" value="">
                  </div>
                  <?php if (isset($validation)) : ?>
                    <div class="col-12">
                      <div class="alert alert-danger" role="alert">
                        <?= $validation->listErrors() ?>
                      </div>
                    </div>
                  <?php endif; ?>
                  <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                  <a class="btn btn-primary btn-user btn-block" href="/register">Register</a>
              </div>
              </form>
              <hr>
              <div class="text-center">
                <div class="row">
                  <div class="mx-auto mt-2 mb-4">
                    Link project: <a href="https://github.com/Tnembull/Codeigniter4-SIP">Tnembull/Codeigniter4-SIP</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>


  <?= $this->endSection(); ?>