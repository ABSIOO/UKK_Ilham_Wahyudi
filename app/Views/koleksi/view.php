<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

        <section class="section">
            <div class="card">
           
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Buku</th>
                                    <th>Nama User</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no=1;
                            foreach ($a as $riz) {
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                   
                                
                                    
                                    <td><?php echo $riz->nama_b?></td>
                                    <td><?php echo $riz->nama?></td>
                                    <td><?php echo $riz->status?></td>
                                    <td>
                                        
                                    
                                    <a href="<?=base_url('/book/detail/'.$riz->book_id)?>"><button class="btn btn-warning">Detail</button></a>

                                    </td>

                                <?php   }
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>