
<?php $this->load->view('staff/template/staff_header'); ?>  
<?php $this->load->view('staff/template/staff_headercontent'); ?>
        <h4><i class="mdi-action-assignment"></i>&nbsp;  Tambah Inventaris Barang</h4>
          <?php $this->load->view('staff/template/staff_subheadercontent'); ?>
            <?php echo form_open('staff/prosesinsertinvent'); ?>
             <table>
              <tr>
                  <td>
                     <input class="form-control" name="kd_invent" ng-model="user.firstName" value="<?php echo $kode; ?>" type="hidden" readonly>
                  <div class="col-sm-4 form-group">
                      <label>Tanggal Inventaris</label>
                      <input class="form-control datepicker-here" name="tgl_invent" data-language="en" data-date-format="dd/mm/yyyy" required>
                    </div>
                  </td>
              </tr>
              <tr>
                <td width="35%"> 
                <div class="col-md-4 form-group">
                    <label>Kode Penerimaan</label>
                <?php 
                $kodebarang  = $kd_brg;
                $qnmb = $this->db->query("SELECT * FROM tb_barang where kd_barang = '$kodebarang' ORDER BY kd_barang DESC limit 1");
                $dbb = $qnmb->row_array();
                $nmbarang = $dbb['nm_barang'];
                ?>
                    <input class="form-control autocompleteinv" name="autocomplete_barang" id="auto1" type="text" value="<?php echo $kdpnrmaan."-".$nmbarang; ?>" readonly>
                    <input class="form-control autocompleteinv" name="kd_barang" id="kd_barang" type="hidden" required>
                    <input class="form-control autocompleteinv" name="kd_penerimaan" id="kd_penerimaan" type="hidden" required>
                  </div>
                  </td>
              </tr>
              <tr>
                <td>
                    <div class="col-sm-3 form-group">
                      <label>Stok Awal</label>
                      <input class="form-control autocompleteinv" name="stok_awal" id="stok_awal" value="<?php echo $stok_awal; ?>" type="text" readonly>
                    </div>
                </td>
              </tr>
              <tr>
                <td>
                    <div class="col-sm-3 form-group">
                      <label>Stok Akhir</label>
                      <input class="form-control autocompleteinv" name="stok_akhir" id="stok_akhir" value="<?php echo $stok_akhir; ?>" type="text" readonly>
                    </div>
                </td>
              </tr>
              <tr>
              <td>
              </br>
              <div class="col-sm-6">
              <button class="btn btn-addon btn-success" type="submit"><i class="fa fa-save"></i>Tambahkan Barang</button>
              <a href="../inventarisbarang"><button class="btn btn-default" type="button"><i class="fa fa-undo"></i>&nbsp; Batal</button></a>
                 </br></br>
              </div>
              </td>
              </tr>
            </table>  
            <?php echo form_close(); ?>
<?php $this->load->view('staff/template/staff_dashboardfootercontent'); ?>
<?php $this->load->view('staff/template/staff_footer'); ?>