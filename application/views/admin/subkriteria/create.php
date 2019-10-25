<?php 
 
$this->db->select('*');
$this->db->from('kriteria');
$this->db->order_by('id_kriteria','ASC');
$data = $this->db->get();

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
                                                <h1>Tambah Data Sub-Kriteria</h1>
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
                                                            <form action="<?php echo base_url('admin/subkriteria/create') ?>" method="post" enctype="multipart/form-data">
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Kriteria</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <div class="chosen-select-single">
                                                                                <select name="id_kriteria" class="select2_demo_2 form-control" >
                                                                                    <?php foreach($kriteria as $kriteria) { ?>
                                                                                    <option value="<?php echo $kriteria['id_kriteria'] ?>">
                                                                                        <?php echo $kriteria['kriteria'] ?>
                                                                                    </option>
                                                                                    <?php } ?>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Keterangan</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="keterangan" class="form-control" value="<?php echo set_value('keterangan') ?>" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group-inner">
                                                                    <div class="row">
                                                                        <div class="col-lg-3">
                                                                            <label class="login2 pull-right pull-right-pro">Nilai Bobot</label>
                                                                        </div>
                                                                        <div class="col-lg-9">
                                                                            <input type="text" name="nilai_bobot" class="form-control" value="<?php echo set_value('nilai_bobot') ?>" />
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