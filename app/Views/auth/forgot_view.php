<div class="glass-card">

    <?php if (session()->getFlashdata('success')): ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger" role="alert">
            <?= session()->getFlashdata('error') ?>
        </div>
    <?php endif; ?>

    <?php if (isset($validation)): ?>
        <div class="alert alert-danger">
            <?= $validation->listErrors() ?>
        </div>
    <?php endif; ?>

    <img src="https://img.icons8.com/ios-filled/100/ffffff/user.png" width="80" alt="User Icon" />

    <h2 class="mt-2">Reset Password</h2>

    <p class="mt-2" style="color: #eee;">Enter your username and we'll send you a link to reset your password.</p>

    <form action="<?= base_url('auth/reset-request') ?>" method="post" novalidate>
        <?= csrf_field() ?>
        <input type="text" class="my-2" id="username" name="username" value="<?= set_value('username') ?>" placeholder="Your username" required>

        <button type="submit" class="mt-2">Send Reset Link</button>

        <p class="mt-2"><a href="<?= base_url('') ?>">Back to login</a></p>
    </form>
</div>
