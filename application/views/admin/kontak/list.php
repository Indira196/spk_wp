<?php 
$this->db->select('*');
$this->db->from('kontak');
$this->db->order_by('kontak_id','ASC');
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
                                        <h1>Data Pesan</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="no">No</th>
                                                    <th data-filed="nama">Nama</th>
                                                    <th data-field="email" >Email</th>
                                                    <th data-field="subjek">Subjek</th>
                                                    <th data-filed="pesan">Pesan</th>
                                                    <th data-filed="tanggal">Tanggal Kirim</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i=1; foreach($kontak as $list){ ?>
                                                <tr>
                                                    <td><?php echo $i; ?></td>
                                                    <td><?php echo $list['nama'] ?></td>
                                                    <td><?php echo $list['email'] ?></td>
                                                    <td><?php echo $list['subjek'] ?></td>
                                                    <td><?php echo $list['pesan'] ?></td>
                                                    <td><?php echo date('l, d/m/Y', strtotime($list['tanggal'])); ?></td>
                                                    <td>
                                                    <button type="button" class="btn btn-custon-rounded-three btn-danger fa fa-trash" style="border-radius: 20px;" data-toggle="modal" data-target="#DangerModalhdbgcl<?php echo $list['kontak_id'];?>"> Hapus</button>
                                                    </td>
                                                </tr>

                                                <?php $i++; }?>
                                            </tbody>

                                             <?php foreach($data->result_array() as $i){ 
                                                $kontak_id=$i['kontak_id'];
                                                $nama=$i['nama'];
                                                ?>

                                <div id="DangerModalhdbgcl<?php echo $kontak_id;?>" class="modal modal-adminpro-general FullColor-popup-DangerModal fade" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header header-color-modal bg-color-4">
                                            <h4 class="modal-title">Hapus Data Pesan</h4>
                                            <div class="modal-close-area modal-close-df">
                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <span class="adminpro-icon adminpro-danger-error modal-check-pro information-icon-pro"></span>
                                            <h2>Danger!</h2>
                                            <p>Yakin ingin menghapus data pesan, <b><?php echo $nama;?></b></p>
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" href="#">Cancel</a>
                                            <a href="<?php echo base_url('admin/kontak/delete/'.$kontak_id); ?>">Process</a>
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