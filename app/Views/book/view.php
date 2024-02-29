 
 <?php
        if(session()->get('level')== 1){
          ?>
<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>
<section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a href="<?php echo base_url('/book/tambah/')?>"><button class="btn btn-primary mt-2"><i class="fa-solid fa-plus"></i>
					Tambah</button></a>
                    </div>
                    <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Cover</th>
                                        <th>Nama Buku</th>
                                        <th>Penulis</th>
                                       
                                        <th>Stok</th>
                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td>
                                            <img src="<?=base_url('images/'.$b->cover)?>" height="100px">
                                        </td>
                                        <td><?php echo $b->nama_b?> </td>
                                        <td><?php echo $b->penulis?> </td>
                                      
                                       
                                     
                                        <td><?php echo $b->stok?> </td>
                                       
                                        <td>
                                        
                                        <a href="<?=base_url('/book/detail/'.$b->id_book)?>"><button class="btn btn-warning">Detail</button></a>
                                            <a href="<?=base_url('/book/edit/'.$b->id_book)?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="<?=base_url('/book/delete/'.$b->id_book)?>"><button class="btn btn-danger">Delete</button></a>
                                            
                                        <a href="<?= base_url('/book/commentForm/' . $b->id_book); ?>" class="comment-button"> <button class="btn btn-success">Ulasan</button></a>

                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </section>
                                <?php
        }else if(session()->get('level')== 3){
          ?>
       <div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>
<section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                   
                    <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Cover</th>
                                        <th>Nama Buku</th>
                                        <th>Penulis</th>
                                       
                                        <th>Stok</th>
                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td>
                                            <img src="<?=base_url('images/'.$b->cover)?>" height="100px">
                                        </td>
                                        <td><?php echo $b->nama_b?> </td>
                                        <td><?php echo $b->penulis?> </td>
                                      
                                       
                                     
                                        <td><?php echo $b->stok?> </td>
                                       
                                        <td>
                                        
                                        <a href="<?=base_url('/book/detail/'.$b->id_book)?>"><button class="btn btn-warning">Detail</button></a>
                                           
                                            <?php if ($b->statusKoleksi === 'Masuk') : ?>
                                            <a href="<?= base_url('/book/batalkan_koleksi/' . $b->id_book) ?>">
                                                <button class="btn btn-danger">Batalkan Koleksi</button>
                                            </a>
                                        <?php else : ?>
                                            <a href="<?= base_url('/book/masukkan_koleksi/' . $b->id_book) ?>">
                                                <button class="btn btn-primary">Masukkan Koleksi</button>
                                            </a>
                                        <?php endif; ?>
                                        <a href="<?= base_url('/book/commentForm/' . $b->id_book); ?>" class="comment-button"> <button class="btn btn-success">Ulasan</button></a>

                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </section>
                                <?php
        }else if(session()->get('level')== 2){
          ?>
        <div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>
<section class="section">
        <div class="row" id="table-hover-row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <a href="<?php echo base_url('/book/tambah/')?>"><button class="btn btn-primary mt-2"><i class="fa-solid fa-plus"></i>
					Tambah</button></a>
                    </div>
                    <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Cover</th>
                                        <th>Nama Buku</th>
                                        <th>Penulis</th>
                                       
                                        <th>Stok</th>
                                    
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                <?php 
                                $no=1;
                                foreach ($a as $b) {
                                    ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td>
                                            <img src="<?=base_url('images/'.$b->cover)?>" height="100px">
                                        </td>
                                        <td><?php echo $b->nama_b?> </td>
                                        <td><?php echo $b->penulis?> </td>
                                      
                                       
                                     
                                        <td><?php echo $b->stok?> </td>
                                       
                                        <td>
                                        
                                        <a href="<?=base_url('/book/detail/'.$b->id_book)?>"><button class="btn btn-warning">Detail</button></a>
                                            <a href="<?=base_url('/book/edit/'.$b->id_book)?>"><button class="btn btn-primary">Edit</button></a>
                                            <a href="<?=base_url('/book/delete/'.$b->id_book)?>"><button class="btn btn-danger">Delete</button></a>
                                           
                              
                                        <a href="<?= base_url('/book/commentForm/' . $b->id_book); ?>" class="comment-button"> <button class="btn btn-success">Ulasan</button></a>

                                        </td>

                                    </tr>
                                    <?php
                                    }
                                    ?>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                                </section>
                                <?php } ?>