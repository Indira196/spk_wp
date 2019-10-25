 <script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>
 <script type="text/javascript">
        $(document).ready(function(){
            $('#summernote').summernote({
                height: "300px",
                callbacks: {
                    onImageUpload: function(image) {
                        uploadImage(image[0]);
                    },
                    onMediaDelete : function(target) {
                        deleteImage(target[0].src);
                    }
                }
            });
 
            function uploadImage(image) {
                var data = new FormData();
                data.append("image", image);
                $.ajax({
                    url: "<?php echo site_url('post/upload_image')?>",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: data,
                    type: "POST",
                    success: function(url) {
                        $('#summernote').summernote("insertImage", url);
                    },
                    error: function(data) {
                        console.log(data);
                    }
                });
            }
 
            function deleteImage(src) {
                $.ajax({
                    data: {src : src},
                    type: "POST",
                    url: "<?php echo site_url('post/delete_image')?>",
                    cache: false,
                    success: function(response) {
                        console.log(response);
                    }
                });
            }
 
        });
         
</script>
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
                                                <h1>Upload Video</h1>
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
                                                            <form action="<?php echo base_url('admin/dashboard/video') ?>" method="post" enctype="multipart/form-data">
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
                                                                        <div class="tinymce-area">
                                                                            <textarea id="summernote" name="video" value="video" class="form-control">
                                                                                <?php echo $site['video']; ?>
                                                                            </textarea>  
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
                                                                                    <button  type="submit" name="submit" value="Create" class="btn btn-sm btn-primary login-submit-cs">Simpan</button>
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