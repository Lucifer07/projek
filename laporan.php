    <section class="content">
      <div class="container-fluid">
        <!-- Info laporan -->
        <div class="row">
            <section class="col-md-12">
              <div class="card">
                <div  class="card-header">
                  <h3 id=laporan class="card-title">laporan</h3>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                </div>
                <div class="card-body">
                  <figure class="highcharts-figure">
                    <div id="container-kr" class="chart-container"></div>
                    <div id="container-ks" class="chart-container"></div>
                    <div id="container-kt" class="chart-container"></div>
                    <div id="container-ktot" class="chart-container"></div>
                    <div id="container-ptot" class="chart-container"></div> 
                    <div id="container-vr" class="chart-container"></div>
                    <div id="container-vs" class="chart-container"></div>
                    <div id="container-vt" class="chart-container"></div>
                    <div id="container-cr" class="chart-container"></div>
                    <div id="container-cs" class="chart-container"></div>
                    <div id="container-ct" class="chart-container"></div>
                  </figure>
                </div>
              </div>
            </section>
          </div>
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">grafik pemakaian daya</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
        
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div  class="col-md-8">
                    <div class="chart">
                      <canvas id="pemakaian-chart"></canvas>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Perhitungan Total Biaya</strong>
                    </p>

                    <div class="progress-group">
                      Rp.
                      <span class="float-right"><b id=bln>1000000</b>/<b id=bln2>2000000</b></span>
                      <div class="progress progress-sm">
                        <div id=prog class="progress-bar bg-primary" style="width: 10%"></div>
                      </div>
                    </div>
                    <div>
                      <form action="print.php" method="post">
                      <p>
                      <center>
                          <input type="date" name="tanggal" >
                          to
                          <input type="date" name="tanggal2" >
                      </center>
	                   </p>
                     <button type="submit" value="kirim" class="btn btn-block btn-success btn-sm">Cetak Data</button>
                      </form>
                      <p></p>
                      <form action="galat.php" method="post">
                      <button type="submit" value="kirim" class="btn btn-block btn-danger btn-sm">Cetak Data Voltage Tidak Stabil</button>
                      </form>
                    </div>
                  </div>

                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!--
            <div class="row">
            <section class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">kontrol panel 1</h3>
                  <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                </div>
                <div class="card-body">
                   ini buat kontrol 
                </div>
              </div>
            </section>
          </div>
          -->
            <!-- /.card -->
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-8"></div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
  <footer class="main-footer">
    <strong>Copyright &copy; <a href="../index.php"> Nuansa Inti Persada <?= date('Y') ?> </a>.</strong>
  </footer>
  <!-- Main Footer -->

</div>