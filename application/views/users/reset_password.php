<div class="row ">
    <div class="col-md-4 col-md-offset-4 login " style="margin: auto;">
        <?php echo form_open('users/reset-password'); ?>
        <h1 class="text-center fw-bold mb-3"><?php echo $title; ?></h1>
        <div class="form-group py-3">
            <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
        </div>
        <div class="form-group py-3">
            <input type="password" name="new_password" class="form-control" placeholder="Enter new  Password" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
        <?php echo form_close(); ?>
    </div>
</div>