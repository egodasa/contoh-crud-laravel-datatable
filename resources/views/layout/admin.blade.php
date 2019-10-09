<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Huqy Properti Syariah - @yield('title')</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('plugins/datepicker3.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datepicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
        
        <link href="{{ asset('css/pikaday.css') }}" rel="stylesheet" type="text/css" />
        
        <link rel="icon" href="favicon.ico">
        
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/moment-id.js') }}"></script>
        <script src="{{ asset('js/pikaday.js') }}"></script>
    </head>
    <body class="skin-black">
      <noscript>Javascript harus diaktifkan untuk mengakses program ini!</noscript>
        <header class="header">
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                      <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                          <i class="fa fa-bell-o"></i>
                        </a>
                        <ul class="dropdown-menu">
                          
                        </ul>
                      </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header bg-light-blue">
                                    <img src="img/default-user.png" class="img-circle" alt="User Image" />
                                    <p>
                                        <small>Aplikasi Kantor Cash Dan Kredit</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    
                                    <div class="pull-right">
                                        <a href="config/logout.php" class="btn btn-default btn-flat">Keluar</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <aside class="left-side sidebar-offcanvas">
              
              <!-- BAGIAN SIDEBAR MENU -->
              <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                  <div class="pull-left image">
                    <img src="img/default-user.png" class="img-circle" alt="User Image" />
                  </div>
                  <div class="pull-left info">
                    <p>Hello, Anu</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                  </div>
                </div>
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                  <li><a href="config/logout.php"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
                </ul>
              </section>
              
              
            </aside>

            <aside class="right-side">
              @yield('content')
            </aside>
        </div>

		    <script src="{{ asset('js/jquery.js') }}"></script>
		    <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <!-- Bootstrap -->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!-- Sparkline -->
        <script src="{{ asset('js/plugins/sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}" type="text/javascript"></script>

        <!-- jQuery Knob Chart -->
        <script src="{{ asset('js/plugins/jqueryKnob/jquery.knob.js') }}"></script>

        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
        <!-- iCheck -->
        <script src="{{ asset('js/plugins/iCheck/icheck.min.js') }}"></script>

        <script src="{{ asset('js/jquery-number.js') }}"></script>
		<script src="{{ asset('chosen/chosen.jquery.js') }}"></script>

        <!-- AdminLTE App -->
        <script src="{{ asset('js/AdminLTE/app.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('plugins/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        
        <!-- Library untuk format angka -->
        <script src="{{ asset('js/autonumeric.js') }}"></script>
        <script>
        // Pengaturan untuk autonumeric
        var pengaturan_rupiah = {
          currencySymbol: "Rp",
          decimalCharacter: ',',
          digitGroupSeparator: '.',
          allowDecimalPadding: false
        };
        
        // Pengaturan untuk momentjs
        moment.locale('id');
        </script>
        <script type="text/javascript">
            $(function(){
                $("#efektivitastanah").keyup(function() {
                    var efektivitastanah = parseInt($(this).val());
                    var luastanah = parseInt($("#luastanah").val());
                    $("#luastanahefektif").val((luastanah*efektivitastanah/100));
                });

                $("#luastanah").keyup(function() {
                    var luastanah = parseInt($(this).val());
                    var efektivitastanah = parseInt($("#efektivitastanah").val());
                    $("#luastanahefektif").val((luastanah*efektivitastanah/100));
                });

                $("#dp").keyup(function() {
                    var dp = parseInt($(this).val());
                    var pembayaran = parseInt($("#pembayaran").val());
                    $("#sisadp").val((dp-pembayaran));
                });

                $("#proyek").change(function(){
                var proyek = $("#proyek").val();
                $.ajax({
                url: "ambilblok.php",
                data: "proyek="+proyek,
                cache: false,
                    success: function(msg){
                //jika data sukses diambil dari server kita tampilkan
                //di <select id=kota>
                    $("#blok").html(msg);
                }
                });
                });

                $("#example1").DataTable();
                $('#example2').DataTable({
                  "paging": true,
                  "lengthChange": false,
                  "searching": false,
                  "ordering": true,
                  "info": true,
                  "autoWidth": false
                });
      	$('#debet22').hide();
      	$('#kredit22').hide();
      });
      
      
      </script>
      <script type="text/javascript">
      $(function () {
        //datepicker plugin
        $('.date-picker').datepicker({
          autoclose: true,
          todayHighlight: true
        });
      });
      </script>
      
      <script type="text/javascript">
            $(document).ready(function() {
                $('#harga').keyup(function(){
                <!-- Ambil nilai bayar dan diskon !-->
                var jumlah_uang=parseInt($('#jumlah_uang').val());
                var harga=parseInt($('#harga').val());
      
                <!-- Perhitungan bayar-(diskon/100 x bayar) !-->
                var berat=jumlah_uang/harga;
                hasil = berat.toFixed(2);
                $('#berat').val(hasil);
                });
            });
      </script>
      
      <!-- Pengaturan untuk setiap datatable dibawah ini -->
      <script src="{{ asset('js/datatable-ajax.js') }}"></script>
      <!-- Kumpulan method untuk JS -->
      <script src="{{ asset('js/helper.js') }}"></script>
      @yield('script')
    </body>
</html>
