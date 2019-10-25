<?php 
//Session
if($this->session->flashdata('sukses')){
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
// File upload error
if(isset($error)) {
    echo '<div class="alert alert-success">';
    echo $error;
    echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="tambah">
                                <div class="col-lg-12">
                                    <div class="sparkline12-list shadow-reset mg-t-30">
                                        <div class="sparkline12-hd">
                                            <div class="main-sparkline12-hd">
                                                <h1>General Setting</h1>
                                                <div class="sparkline12-outline-icon">
                                                    <span class="sparkline12-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline12-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline12-graph">
                                            <div class="basic-login-form-ad">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="all-form-element-inner">
                                                            <form action="<?php echo base_url('admin/dashboard/config') ?>" method="post" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <div id="pwd-container3" class="row">
                                                                        <div class="col-lg-3">
                                                                            <label for="username" class="login2 pull-right pull-right-pro"></label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="hidden" required class="form-control" name="config_id" value="<?php echo $site['config_id'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                        							<div class="row">
                                        								<div class="col-lg-3">
                                        									<label class="login2 pull-right pull-right-pro">Nama Website</label>
                                        								</div>
                                        								<div class="col-lg-9">
                                        									<input type="text" name="namaweb" required class="form-control" value="<?php echo $site['namaweb'] ?>">
                                        								</div>
                                        							</div>
                                        						</div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Email</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="email" required class="form-control" value="<?php echo $site['email'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">No Telp</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="telp_no" required class="form-control"  value="<?php echo $site['telp_no'] ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Alamat</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="alamat" required class="form-control" value="<?php echo $site['alamat'] ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Tentang</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <textarea  name="tentang"  required class="form-control" value="tentang" id="tentang"><?php echo $site['tentang'] ?></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-3"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button type="reset" name="reset" value="Reset" class="btn btn-white">Cancel</button>
                                                                                    <button  type="submit" name="submit" value="Create User" class="btn btn-sm btn-primary login-submit-cs">Simpan</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>