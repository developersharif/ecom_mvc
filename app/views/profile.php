<title>Profile</title>
<div class="row">
    <div class="col-3"></div>
    <div class="col-md-6">
        <?php
        if (isset($update_status)) {
            if ($update_status) {
        ?> <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            Successfully Updated!
        </div> <?php
                    }
                }
                        ?>
        <form role="form" action="" method="post">
            <div class="form-group">
                <label for="name">&nbsp; Name:</label>
                <input type="text" name="name" class="form-control" id="name" value="<?php echo $userData['name']; ?>"
                    required>
            </div>
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" name="email" class="form-control" id="email"
                    value="<?php echo $userData['email']; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="phone">Mobile Number:</label>
                <input type="number" name="mobile" class="form-control" id="phone"
                    value="<?php echo $userData['phone']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Region">Region:</label>
                <input type="text" class="form-control" name="region" id="Region"
                    value="<?php echo $userData['region']; ?>" required>
            </div>
            <div class="form-group">
                <label for="City">City</label>
                <input type="text" class="form-control" name="city" id="City" value="<?php echo $userData['city']; ?>"
                    required>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Update</button>
        </form>
    </div>

</div>