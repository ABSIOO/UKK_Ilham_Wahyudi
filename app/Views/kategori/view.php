<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

        <section class="section">
            <div class="card">
            <div class="card-header">
					<a href="<?php echo base_url('/kategori/tambah/')?>"><button class="btn btn-primary mt-2"><i class="fa-solid fa-plus"></i>
					Tambah</button></a>
				</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <?php
                            $no=1;
                            foreach ($jojo as $riz) {
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                   
                                
                                    <td><?php echo $riz->nama_k?></td>
                                    <td>
                                        
                                        <a class="btn btn-warning" href="<?php echo base_url('/kategori/edit/'. $riz->id_kategori) ?>"><i class="faj-button fa-solid fa-pencil"></i>Edit</a>
                                        <a class="btn btn-danger" href="<?php echo base_url('/kategori/delete/'. $riz->id_kategori) ?>"><i class="faj-button fa-solid fa-trash"></i>Delete</a>
                                    </td>

                                <?php   }
                                ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>