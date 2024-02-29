<div class="content-wrapper">
  <!-- Content -->

  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span><?=$title?></h4>
          <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Windows Print</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate
                        action="
                        <?php if ($kunci=='print_in') {
                        echo base_url('laporan_pengembalian/print_in'); 
                    }
                        ?>" method="post">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Awal</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="awal"/>
                            </div>
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Akhir</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                            type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="akhir"/>
                            </div>
                           
                            <div class="col-sm-12 d-flex justify-content-end">
                              <button
                                type="submit"
                                class="btn btn-primary me-1 mb-1"
                              >
                                Submit
                              </button>
                              <button
                                type="reset"
                                class="btn btn-light-secondary me-1 mb-1"
                              >
                                Reset
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">PDF</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate
                        action="
                        <?php if ($kunci=='print_in') {
                        echo base_url('laporan_pengembalian/pdf_in'); 
                    }
                        ?>" method="post">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Awal</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="awal"/>
                            </div>
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Akhir</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                            type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="akhir"/>
                            </div>
                           
                            <div class="col-sm-12 d-flex justify-content-end">
                              <button
                                type="submit"
                                class="btn btn-primary me-1 mb-1"
                              >
                                Submit
                              </button>
                              <button
                                type="reset"
                                class="btn btn-light-secondary me-1 mb-1"
                              >
                                Reset
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <section id="basic-horizontal-layouts">
            <div class="row match-height">
              <div class="col-md-6 col-12">
                <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Excel</h4>
                  </div>
                  <div class="card-content">
                    <div class="card-body">
                    <form class="form-horizontal form-label-left" novalidate
                        action="
                        <?php if ($kunci=='print_in') {
                        echo base_url('laporan_pengembalian/excel_in'); 
                    }
                        ?>" method="post">
                      <form class="form form-horizontal">
                        <div class="form-body">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Awal</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                      type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="awal"/>
                            </div>
                            <div class="col-md-4">
                              <label for="first-name-horizontal"
                                >Tanggal Akhir</label
                              >
                            </div>
                            <div class="col-md-8 form-group">
                            <input
                            type="date"
                      class="form-control mb-3 flatpickr-no-config"
                      placeholder="Pilih Tanggal" name="akhir"/>
                            </div>
                           
                            <div class="col-sm-12 d-flex justify-content-end">
                              <button
                                type="submit"
                                class="btn btn-primary me-1 mb-1"
                              >
                                Submit
                              </button>
                              <button
                                type="reset"
                                class="btn btn-light-secondary me-1 mb-1"
                              >
                                Reset
                              </button>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
      
      