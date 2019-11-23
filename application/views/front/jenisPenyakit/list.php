
<!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/front/img/bg-img/24.jpg);">
            <h2>Gejala Penyakit Anggrek</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Penyakit</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

        <!-- ##### Related Product Area Start ##### -->
    <div class="related-products-area">
        <div class="container">
            <div class="row">
                <div class="col-12">

                </div>
            </div>

            <div class="row">

                <!-- Single Product Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-product-area mb-100">
                        <!-- Product Image -->
                        <div class="product-img">
                            <a href="shop-details.html"><img src="assets/front/img/bg-img/42.png" alt=""></a>
                            <div class="product-meta d-flex">
                                <a href="#" class="wishlist-btn"><i class="icon_heart_alt"></i></a>
                                <a href="#" class="add-to-cart-btn" onclick="showDiv()">Deskripsi</a>
                                <a href="#" class="compare-btn"><i class="arrow_left-right_alt"></i></a>
                            </div>
                        </div>
                        <!-- Product Info -->
                        <div class="product-info mt-15 text-center">
                            <a href="shop-details.html">
                                <p>Cactus Flower</p>
                            </a>
                            <h6>$10.99</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Single Product Details Area Start ##### -->
    <section class="single_product_details_area mb-50">
        <div class="produts-details--content mb-50" id="deskripsiDiv" style="display: none;">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-lg-5">
                        <div class="single_product_thumb">
                            <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a class="product-img" href="assets/front/img/bg-img/49.jpg" title="Product Image">
                                        <img class="d-block w-100" src="assets/front/img/bg-img/49.jpg" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="assets/front/img/bg-img/49.jpg" title="Product Image">
                                        <img class="d-block w-100" src="assets/front/img/bg-img/49.jpg" alt="1">
                                    </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a class="product-img" href="assets/front/img/bg-img/49.jpg" title="Product Image">
                                        <img class="d-block w-100" src="assets/front/img/bg-img/49.jpg" alt="1">
                                    </a>
                                    </div>
                                </div>
                                <ol class="carousel-indicators">
                                    <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url(assets/front/img/bg-img/49.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url(assets/front/img/bg-img/49.jpg);">
                                    </li>
                                    <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url(assets/front/img/bg-img/49.jpg);">
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="single_product_desc">
                            <h4 class="title">Recuerdos Plant</h4>
                            <h4 class="price">$9.99</h4>
                            <div class="short_overview">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus pellem malesuada in nibh selama euismod. Curabitur a rhoncus dui. Nunc lobortis cursus magna utrum faucibus. Vivamus justo nibh, pharetra non risus accumsan, tincidunt suscipit leo.</p>
                            </div>

                            <div class="cart--area d-flex flex-wrap align-items-center">
                                <!-- Add to Cart Form -->
                                <form class="cart clearfix d-flex align-items-center" method="post">
                                    <div class="quantity">
                                        <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-minus" aria-hidden="true"></i></span>
                                        <input type="number" class="qty-text" id="qty" step="1" min="1" max="12" name="quantity" value="1">
                                        <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-plus" aria-hidden="true"></i></span>
                                    </div>
                                    <button type="submit" name="addtocart" value="5" class="btn alazea-btn ml-15">Add to cart</button>
                                </form>
                                <!-- Wishlist & Compare -->
                                <div class="wishlist-compare d-flex flex-wrap align-items-center">
                                    <a href="#" class="wishlist-btn ml-15"><i class="icon_heart_alt"></i></a>
                                    <a href="#" class="compare-btn ml-15"><i class="arrow_left-right_alt"></i></a>
                                </div>
                            </div>

                            <div class="products--meta">
                                <p><span>SKU:</span> <span>CT201807</span></p>
                                <p><span>Category:</span> <span>Outdoor Plants</span></p>
                                <p><span>Tags:</span> <span>plants, green, cactus </span></p>
                                <p>
                                    <span>Share on:</span>
                                    <span>
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">

    <div class="cart-area section-padding-0-100 clearfix">
        <div class="container">
                    <div class="row">

                <!-- Coupon Discount -->
                <div class="col-12 col-lg-6">
                    <div class="coupon-discount mt-70">
                        <h5>COUPON DISCOUNT</h5>
                        <p>Coupons can be applied in the cart prior to checkout. Add an eligible item from the booth of the seller that created the coupon code to your cart. Click the green "Apply code" button to add the coupon to your order. The order total will update to indicate the savings specific to the coupon code entered.</p>
                        <form action="#" method="post">
                            <input type="text" name="coupon-code" placeholder="Enter your coupon code">
                            <button type="submit">APPLY COUPON</button>
                        </form>
                    </div>
                </div>
            </div>
             <!-- Perhitungan -->
                <div class="col-12 col-lg-10">
                    <div class="cart-totals-area mt-70">
                        <h5 class="title--">Prediksi Penyakit Anggrek</h5>
                        <div class="subtotal d-flex justify-content-between">
                            <h5>Bagian Anggrek</h5>
                            <h5>Gejala Penyakit</h5>
                        </div>
                        <form action="<?php echo base_url('hitung') ?>" method="post" enctype="multipart/form-data">
                        <?php foreach($kriteria as $kriteria){ ?>
                        <?php
                                $sql = ('SELECT `sub_kriteria`.`keterangan`,`sub_kriteria`.`id_kriteria` FROM `sub_kriteria` INNER JOIN `kriteria` ON `kriteria`.`id_kriteria`=`sub_kriteria`.`id_kriteria` WHERE `sub_kriteria`.`id_kriteria`= '.$this->db->escape($kriteria['id_kriteria']));
                                $data = $this->db->query($sql);
                        ?>
                        <div class="shipping d-flex justify-content-between">
                            <h5><?php echo $kriteria['kriteria'] ?></h5>
                            <div class="shipping-address">
                                    <input type="text" name="id_alternatif" class="form-control" value="<?php echo set_value('id_alternatif') ?>">
                                    <select name="id_kriteria" class="custom-select"  style="width: 300px;">
                                     <?php foreach($data->result_array() as $list) {?>
                                         <option value="<?php echo $list['id_kriteria'] ?>">
                                                <?php echo $list['keterangan'] ?>
                                        </option>
                                    <?php } ?>
                                    </select>
                            </div>

                        </div>
                        <?php }?>
                        <div class="checkout-btn">
                            <button class="btn alazea-btn w-100" type="submit" name="submit" value="Create">PROSES</button>
                        </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
        </div>
    </section>
<script>
    function showDiv(){
        var x = document.getElementById('deskripsiDiv');
        if (x.style.display === "none"){
            x.style.display = "block";
        }else{
            x.style.display = "none";
        }
    }
</script>