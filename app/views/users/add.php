<form action="<?php echo _WEB_ROOT . '/home/post_user' ?>" method="post">

    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-outline my-3">
                <label class="form-label">fullname</label>
                <input type="text" class="form-control" name="fullname" value="<?= old('fullname') ?>">
                <?php
                echo form_error('fullname', '<span style="color: red">', '</span>')
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Email</label>
                <input type="text" class="form-control" name="email" value="<?= old('email') ?>">
                <?php
                echo form_error('email', '<span style="color: red">', '</span>')
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="input-group input-group-outline is-valid my-3">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" name="age" value="<?= old('age') ?>">
                <?php
                echo form_error('age', '<span style="color: red">', '</span>')
                ?>
            </div>
        </div>

        <div class="col-md-6">
            <div class="input-group input-group-outline is-valid my-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" value="<?= old('password') ?>">
                <?php
                echo form_error('password', '<span style="color: red">', '</span>')
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-outline is-valid my-3">
                <label class="form-label">Confirm password</label>
                <input type="password" class="form-control" name="confirm_password" value="<?= old('confirm_password') ?>">
                <?php
                echo form_error('confirm_password', '<span style="color: red">', '</span>')
                ?>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group input-group-outline is-invalid my-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
<div>
    </form>