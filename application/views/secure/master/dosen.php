 <div class="row">
              <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                  <div class="card-body">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>
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
                </div>
                </div>
                </section>
                <!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                </div>

