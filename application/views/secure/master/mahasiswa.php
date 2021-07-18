 <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  
                  <div class="card-body">
                    <button class="btn btn-primary" id="modal-1">Tambah</button>
                    <br>
                    <br>
                    <table id="tabelku" class="table table-striped">
                      <thead>
                        <tr>
                          <th >NO</th>
                          <th >NIM</th>
                          <th >NAMA</th>
                          <th >Alamat</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($mhs as $mhs) {?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $mhs->MhsNim ?></td>
                          <td><?php echo $mhs->MhsNama ?></td>
                          <td><?php echo $mhs->MhsAlamat ?></td>
                        </tr>
                        <?php $no++;} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
