<section>
<div class="signupcontainer">
    <h1>Signup Form</h1>

    <?php echo validation_errors(); ?>

    <?php echo form_open('users/register'); ?>
        <div class="signupform">
            <label>Username</label>
            <input type="text" placeholder="Enter Username" name="username">

            <label>Password</label>
            <input type="password" placeholder="Enter Password" name="password">

            <label>Repeat Password</label>
            <input type="password" placeholder="Repeat Password" name="password2">
            <div class="clearfix">
                <button type="submit" class="signupbtn">Sign Up</button>
                <button type="button" class="cancelbtn2">Cancel</button>
            </div>
        </div>
    <?php echo form_close(); ?>
</div>
</section>
