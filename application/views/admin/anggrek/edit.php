<script src="https://code.jquery.com/jquery-1.8.3.min.js"></script>

<style>
#imagePreview {
    margin-top: 7px;
    width: 180px;
    height: 150px;
    background-position: center center;
    background-size: cover;
    -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, .3);
    display: inline-block;
}
</style>
<script type="text/javascript">
$(function() {
    $("#file").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
        
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
            
            reader.onloadend = function(){ // set image data as background of div
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });
});
</script>

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
// Session 
if($this->session->flashdata('sukses')) { 
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
                                                <h1>Edit List Anggrek</h1>
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
                                                            <form action="<?php echo base_url('admin/anggrek/edit/'.$anggrek['anggrek_id']) ?>" method="post" enctype="multipart/form-data">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Upload Gambar</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="file" name="image" class="form-control" id="file">
                                                                            <div id="imagePreview"><img src="<?php echo base_url('assets/upload/image/thumbs/'.$anggrek['gambar']) ?>"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Nama Anggrek</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="anggrek_nama" class="form-control" value="<?php echo $anggrek['anggrek_nama'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Nama Latin Anggrek</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="nama_latin" class="form-control" value="<?php echo $anggrek['nama_latin'] ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Deskripsi Gambar</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <div class="tinymce-area">
                                                                                <textarea id="summernote" name="gambar_deskripsi" class="form-control">
                                                                                    <?php echo $anggrek['gambar_deskripsi'] ?>
                                                                                </textarea>  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group-inner">
                                                                    <div class="login-btn-inner">
                                                                        <div class="row">
                                                                            <div class="col-lg-3"></div>
                                                                            <div class="col-lg-9">
                                                                                <div class="login-horizental cancel-wp pull-left">
                                                                                    <button onclick="window.location.href='<?php echo base_url('admin/anggrek') ?>'" type="reset" name="reset" value="Reset" class="btn btn-white">Cancel</button>
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