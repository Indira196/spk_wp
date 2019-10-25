<?php  
$countAnggrek = $this->mStats->anggrek();
$this->db->select('*');
$this->db->from('anggrek');
$this->db->order_by('anggrek_id','ASC');
$data = $this->db->get();
?>
 <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(assets/front/img/bg-img/24.jpg);">
            <h2>Jenis Anggrek</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url();?>"><i class="fa fa-home"></i>Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Jenis Anggrek</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->

    <!-- ##### Shop Area Start ##### -->
    <section class="shop-page section-padding-0-100">
        <div class="container">
            <div class="row">
                <!-- Shop Sorting Data -->
                <div class="col-12">
                    <div class="shop-sorting-data d-flex flex-wrap align-items-center justify-content-between">
                        <!-- Shop Page Count -->
                        <div class="shop-page-count">
                            <p>List Anggrek <?php echo $countAnggrek;?> gambar</p>
                        </div>
                        <!-- Search by Terms -->
                        <div class="search_by_terms">

                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <!-- All Products Area -->
                <div class="col-12 col-md-8 col-lg-12">
                    <div class="shop-products-area">
                        <div class="row">

                            <?php
                                $anggrek = $this->mAnggrek->listAnggrek();
                                foreach ($anggrek as $list) {
                            ?>

                            <!-- Single Product Area -->
                            <div class="col-12 col-sm-6 col-lg-4">
                                <div class="single-product-area mb-50">
                                    <!-- Product Image -->
                                    <div class="product-img">
                                        <a href="#"><img style ="width:290px;height:350px; padding-left: 50px;" src="<?php echo base_url('assets/upload/image/'.$list['gambar']);?>" ></a>
                                        <div class="product-meta d-flex">
                                            <a href="#" class="wishlist-btn"><i class="fa big-icon fa-leaf"></i></a>
                                            <a href="<?php echo $list['anggrek_id'];?>" data-toggle="modal" data-target="#PrimaryModalalert<?php echo $list['anggrek_id'];?>" class="add-to-cart-btn">Deskripsi</a>
                                            <a href="#" class="compare-btn"><i class="fa big-icon fa-leaf"></i></a>
                                        </div>
                                    </div>
                                    <!-- Product Info -->
                                    <div class="product-info mt-15 text-center">
                                        <a href="#">
                                            <p><?php echo $list['nama_latin'];?></p>
                                        </a>
                                        <h6><?php echo $list['anggrek_nama'];?></h6>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php foreach($data->result_array() as $i){ 
                                $anggrek_id=$i['anggrek_id'];
                                $gambar_deskripsi=$i['gambar_deskripsi'];
                                $anggrek_nama=$i['anggrek_nama'];
                            ?>

                            <div id="PrimaryModalalert<?php echo $anggrek_id;?>" class="modal modal-adminpro-general default-popup-PrimaryModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-close-area modal-close-df">
                                            <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                        </div>
                                        <div class="modal-body">
                                            <i class="fa fa-check modal-check-pro"></i>
                                            <h2>Deskripsi <?php echo $anggrek_nama ?></h2>
                                            <p><?php echo $gambar_deskripsi;?></p>
                                        </div>
                                        <div class="modal-footer">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>

                        <!-- Pagination -->
                        <nav aria-label="Page navigation">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Shop Area End ##### -->