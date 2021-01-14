<!--footer-->
<footer class="page-footer text-center text-md-left pt-4">
    <!--Footer Links-->
    <div class="row">

        <!--First column-->
        <div class="col-md-3">
            <h5 class="text-uppercase font-weight-bold mb-4">Footer Content</h5>
            <p>Here you can use rows and columns here to organize your footer content.</p>
        </div>
        <!--/.First column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Second column-->
        <div class="col-md-2 mx-auto">
            <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
            <ul class="list-unstyled">
                <li><a href="#!">Link 3</a></li>
                <li><a href="#!">Link 4</a></li>
            </ul>
        </div>
        <!--/.Second column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Third column-->
        <div class="col-md-2 mx-auto">
            <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
            <ul class="list-unstyled">
                <li><a href="#!">Link 1</a></li>
                <li><a href="#!">Link 2</a></li>

            </ul>
        </div>
        <!--/.Third column-->

        <hr class="w-100 clearfix d-md-none">

        <!--Fourth column-->
        <div class="col-md-2 mx-auto">
            <h5 class="text-uppercase font-weight-bold mb-4">Links</h5>
            <ul class="list-unstyled">
                <?php if (isset($login) and $login == true) { ?>
                <li class="nav-item">
                    <a href="action/logout">Logout</a>
                </li>
                <?php } ?>
            </ul>
        </div>
        <!--/.Fourth column-->
    </div>
    <!--/.Footer Links-->
    <hr>
    <!--Call to action-->
    <div class="call-to-action text-center my-4">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
                <h5>Register for free</h5>
            </li>
            <li class="list-inline-item"><a href="signup" class="btn btn-primary">Sign up!</a></li>
        </ul>
    </div>
    <!--/.Call to action-->
    <hr>
    <!--Social buttons-->
    <div class="social-section text-center">
        <ul class="list-unstyled list-inline">
            <li class="list-inline-item"><a class="btn-floating btn-fb"><i class="fab fa-facebook-f"> </i></a></li>
        </ul>
    </div>
    <!--/.Social buttons-->
    <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            ©2018 Copyright:<a href="#"> E-Shop </a>
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<!--/.Footer-->

</div>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js//bootstrap.min.js"></script>
<script src="assets/js/app.js"></script>
<script src="assets/js/icon.js"></script>
</body>

</html>