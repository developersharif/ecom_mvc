<title>Signup::<?php echo SITENAME; ?></title>
<div class="row">
    <?php if ($signup_msg == 'success') {
    ?> <div class="alert alert-success">Succesfully registered!</div> <?php
                                                                    } else {
                                                                        echo '<div class="alert alert-info">' . $signup_msg . '</div>';
                                                                    }
                                                                        ?>
    <div class="col-3"></div>
    <div class="col-md-6">
        <form role="form" action="" method="post">
            <div class="form-group">
                <label for="name">&nbsp; Name:</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Mobile Number:</label>
                <input type="number" name="mobile" class="form-control" id="phone" required>
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" name="pass" id="pwd" required>
            </div>
            <div class="form-group">
                <label for="cpwd">Verify Password:</label>
                <input type="password" class="form-control" name="cpass" id="cpwd" required>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Submit</button>
        </form>
    </div>

</div>