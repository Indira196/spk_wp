<?php 
$this->db->select('*');
$this->db->from('hitung');
$this->db->order_by('id_hitung','ASC');
$data = $this->db->get();
?>
            <!-- Data table area Start-->
            <div class="admin-dashone-data-table-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Perhitungan SPK-WP</h1>
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
                                         <button name="button1" onclick="window.location.href='<?php echo base_url('admin/perhitungan/create') ?>'" type="button" class="btn btn-custon-four btn-success fa fa-plus" style="border-radius: 10px;"> Tambah Data</button><br><br>
                                           <h4>Matrik Alternatif</h4>
                                        </div>
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        
                                            <thead>
                                                <tr>
                                                    <th>Alternatif / Kriteria</th>
                                                    <?php foreach($kriteria as $i){ ?>
                                                    <th>K<?php echo $i['id_kriteria'] ?></th>
                                                    <?php  } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach($alternatif as $list){ ?>
                                            <?php 
                                            $sql = ('SELECT `hitung`.`nilai_bobot`,`hitung`.`id_alternatif` FROM `hitung` INNER JOIN `alternatif` ON `alternatif`.`id_alternatif`=`hitung`.`id_alternatif` WHERE `hitung`.`id_alternatif`= '.$this->db->escape($list['id_alternatif']));
                                            $data = $this->db->query($sql);
                                            ?>
                                                <tr>
                                                    <td>A<?php echo $list['id_alternatif']; ?></td>
                                                    <td value = <?php echo $list['id_alternatif'] ?> ><?php foreach($data->result_array() as $list) {?>
                                                        <?php echo $list['nilai_bobot'] ?>
                                                    </td>
                                                    <?php  } ?>
                                                </tr>
                                                <?php  } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>