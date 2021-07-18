 <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <button class="btn btn-primary" id="modal-1">Tambah</button>
                    <br>
                    <br>
                    <table  id="tabelku" class="table table-striped">
                      <thead>
                        <tr>
                          <th >NO</th>
                          <th >NIDN</th>
                          <th >NAMA</th>
                          <th >Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $no=1; foreach ($dosen as $dosen) {?>
                        <tr>
                          <td><?php echo $no ?></td>
                          <td><?php echo $dosen->DosenNIDN ?></td>
                          <td><?php echo $dosen->DosenNama ?></td>
                          <td><?php echo $dosen->DosenEmail ?></td>
                        </tr>
                        <?php $no++;} ?>
                      </tbody>
                    </table>
                  </div>
                </div>
