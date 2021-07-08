 <div class="row">
  <div class="col-12">
    <div class="card card-secondary">
      <div class="card-header">
        <h4>Pengguna</h4>
        <div class="card-header-action">
          <a data-collapse="#mycard-collapse" class="btn btn-icon btn-info" href="#"><i class="fas fa-minus"></i></a>
        </div>
      </div>
      <div class="collapse" id="mycard-collapse">
        <div class="card-body">
         <div class="card-header">
          <div class="table-responsive">
            <table class="table table-hover" id="table-2" >
              <thead class="text-center">
                <tr>
                  <th>NO</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody class="text-center">
                
               <?php $no=1; foreach($user2 as $user2) { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $user2->nidn ?></td>
                  <td><?php echo $user2->nama ?></td>
                  <td><?php echo $user2->alamat ?></td>
                  <td><div class="badge badge-success"><?php echo $user2->status ?></div></td>
                </tr>
                <?php $no++; } ?>
                
              </tbody>
            </table>
          </div>
        </div>    
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <div class="card card-info">
        <div class="card-header">
          <h4>Basic DataTables</h4>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="table-1" >
              <thead class="text-center">
                <tr>
                  <th>NO</th>
                  <th>NIDN</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody class="text-center">
               <?php $no=1; foreach($user as $user) { ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $user->nidn ?></td>
                  <td><?php echo $user->nama ?></td>
                  <td><?php echo $user->alamat ?></td>
                  <td><div class="badge badge-success"><?php echo $user->status ?></div></td>
                </tr>
                <?php $no++; } ?>                   
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 