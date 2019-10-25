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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="sparkline12-list shadow-reset mg-t-30">
                                        <div class="sparkline12-graph">
                                            <div class="basic-login-form-ad">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="all-form-element-inner">
                                                            <form action="<?php echo base_url('admin/users/edit_admin/'.$admin['admin_id']) ?>" method="post" enctype="multipart/form-data">
                                                                <div class="form-group">
                                                                    <div id="pwd-container3" class="row">
                                                                        <div class="col-lg-3">
                                                                            <label for="username" class="login2 pull-right pull-right-pro">Username</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" class="form-control" name="username" placeholder="Username" required value="<?php echo $admin['username'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group-inner">
                                        							<div class="row">
                                        								<div class="col-lg-3">
                                        									<label for="password1" class="login2 pull-right pull-right-pro">Password</label>
                                        								</div>
                                        								<div class="col-lg-9">
                                        									<input type="password" name="password" class="form-control example1" placeholder="Password" >
                                        								</div>
                                        							</div>
                                        						</div>
                                     							<div id="pwd-container1">
                                       								<div class="form-group-inner" style="padding-left: 280px;">
                                        								<div class="row">
                                        									<div class="col-lg-12">
                                        										<div class="pwstrength_viewport_progress"></div>
                                        									</div>
                                        								</div>
                                       		 						</div>
                                    							</div>
                               
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Email</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="email" class="form-control" required value="<?php echo $admin['email'] ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-3"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button onclick="window.location.href='<?php echo base_url('admin/users') ?>'" type="reset" name="reset" value="Reset" class="btn btn-white">Cancel</button>
                                                                                    <button  type="submit" name="submit" value="Update" class="btn btn-sm btn-primary login-submit-cs">Simpan</button>
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