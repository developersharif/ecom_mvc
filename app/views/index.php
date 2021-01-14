<div class="row">

    <div class="col-md-1 d-none d-md-block d-lg-block"></div>
    <div class="col-md-10 col-sm-12 col-xs-12">
        <h3>Just For You</h3>
        <div class="card-group">
            <?php
            while ($product = $producs_data->fetch_assoc()) {


            ?>
            <div class="card" style="max-width: 180px;">
                <a href="product.html">
                    <img src="assets/images/products/<?php echo $product["thumb"];
                                                            ?>" class="card-img-top img-zoom" alt="...">
                    <div class="card-body">
                        <p class="card-text"><?php echo $product["name"];
                                                    ?></p>
                </a>
                <hr>
                <h5 class="card-title"> ৳ <?php echo $product["price"];
                                                ?></h5>
            </div>
        </div>
        <?php } ?>


    </div>


    <!--card group end-->






    <div class="row">
        <div class="col">
            <center><button class="btn btn-info">Load More</button></center>
        </div>
    </div>
</div>
<div class="col-md-1"></div>

</div>