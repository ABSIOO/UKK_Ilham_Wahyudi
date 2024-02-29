<!-- app/Views/book/detail.php -->

<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>

    <div class="row justify-content-center"> <!-- Menambah kelas 'justify-content-center' untuk menengahkan konten -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header text-center"> <!-- Menambah kelas 'text-center' untuk menengahkan teks -->
                    <h4 class="card-title"><?= $book['nama_b'] ?></h4>
                </div>
                <div class="card-content">
                    <div class="card-body"> <!-- Menambah kelas 'text-center' untuk menengahkan konten -->
                        <img src="<?= base_url('images/' . $book['cover']) ?>" alt="Cover Buku" class="img-fluid rounded mx-auto" style="max-width: 300px; display: block;">
                        <br>
                        <p><strong>Penulis:</strong> <?= $book['penulis'] ?></p>
                        <p><strong>Penerbit:</strong> <?= $book['penerbit'] ?></p>
                        <p><strong>Tahun:</strong> <?= $book['tahun'] ?></p>
                        <p><strong>Sipnopsis:</strong> <?= $book['sipnopsis'] ?></p>
                        <p><strong>Stok:</strong> <?= $book['stok'] ?></p>
                        <p><strong>Kategori:</strong> <?= $book['nama_k'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
