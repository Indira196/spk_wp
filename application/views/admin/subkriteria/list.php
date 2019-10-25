<?php 
$this->db->select('*');
$this->db->from('sub_kriteria');
$this->db->order_by('id_sub','ASC');
$data = $this->db->get();
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
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Data Sub-Kriteria</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <div id="toolbar">
                                            <button name="button1" onclick="window.location.href='<?php echo base_url('admin/subkriteria/create') ?>'" type="button" class="btn btn-custon-four btn-success fa fa-plus" style="border-radius: 10px;"> Tambah Data Sub-Kriteria</button>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="no">No</th>
                                                    <th data-field="kriteria" >Kriteria</th>
                                                    <th data-field="keterangan">Keterangan</th>
                                                    <th data-filed="nilai">Nilai Bobot</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; foreach($subkriteria as $list){ ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $list['kriteria'] ?></td>
                                                    <td><?php echo $list['keterangan']?></td>
                                                    <td><?php echo $list['nilai_bobot']?></td>
                                                    <td>
                                                    <button onclick="window.location.href='<?php echo base_url('admin/subkriteria/edit/'.$list['id_sub']) ?>'" type="button" class="btn btn-custon-rounded-three btn-primary fa fa-pencil" style="border-radius: 20px;"> Ubah</button>
                                                   <button type="button" class="btn btn-custon-rounded-three btn-danger fa fa-trash" style="border-radius: 20px;" data-toggle="modal" data-target="#DangerModalhdbgcl<?php echo $list['id_sub'];?>"> Hapus</button>
                                                    </td>
                                                </tr>
                                                <?php $i++; } ?>
                                               
                                            </tbody>

                                            <?php foreach($data->result_array() as $i){ 
                                                $id_sub=$i['id_sub'];
                                                $keterangan=$i['keterangan'];
                                            ?>
                                <div id="DangerModalhdbgcl<?php echo $id_sub;?>" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-4">
                                            <h4 class="modal-title">Hapus Data Sub-Kriteria</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                            <h2>Danger!</h2>
                                            <p>Yakin ingin menghapus Kriteria <b><?php echo $list['kriteria'] ?></b>: <b><?php echo $keterangan;?></b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="<?php echo base_url('admin/subkriteria/delete/'.$id_sub) ?>">Process</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>

                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>