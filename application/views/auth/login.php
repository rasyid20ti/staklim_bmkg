
<div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?= base_url('assets/img/wow.png'); ?>');"></div>
    <div class="contents order-2 order-md-1">

        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                    <h3>Welcome to <strong><?= $title; ?></strong></h3>
                    <p class="mb-4"><?= $this->session->flashdata('message'); ?></p>
                    <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                        <div class="form-group first">
                            <label for="username">Username</label>
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group last mb-3">
                            <label for="password">Password</label>
                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <input type="submit" value="Log In" class="btn btn-block btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>