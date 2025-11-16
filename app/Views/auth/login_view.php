<?php
//add session checker 
?>

    <div class="row min-vh-100 align-items-center justify-content-center">
        <div class="col-12 col-sm-9 col-md-6 col-lg-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Sign In</h3>

                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger" role="alert">
                            <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($validation)): ?>
                        <div class="alert alert-danger">
                            <?= $validation->listErrors() ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= current_url() ?>" method="post" novalidate>
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" placeholder="you@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember" <?= set_value('remember') ? 'checked' : '' ?>>
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>

                    </form>

                    <div class="mt-3 text-center">
                        <a href="<?= base_url('auth/register') ?>">Create an account</a> ·
                        <a href="<?= base_url('auth/forgot') ?>">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
