@extends('layout.admin')

@section('title', 'Data Karyawan')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div style="float: left;">
          <h2>Data Karyawan</h2>
        </div>
        <div style="float: right;">
          <a href="{{ url('users/tambah')}}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i> Tambah Karyawan Baru</a>
        </div>
        <div style="clear: both"></div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tabel_karyawan" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th width="10">No</th>
                <th width="300">Nama Karyawan</th>
                <th width="300">Inisial</th>
                <th width="950">Username</th>
                <th width="950">Level</th>
                <th width="950">Status</th>
                <th width="80" class="text-center">Aksi</th>
              </tr>
            </thead>
            
          </table>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
  <script>
  // Halaman kelola karyawan
    $('#tabel_karyawan').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "api/users",
        serverMethod: "post",
        order: [[1, 'asc']],
        columns: [
            {
              data: null,
              render: function( data, type, row, meta ){
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                searchable: false
            },
            {
              data: "nama_user", orderable: true, searchable: true
            },
            {
              data: "inisial", orderable: true, searchable: true
            },
            {
              data: "username", orderable: true, searchable: true
            },
            {
              data: "level", orderable: true, searchable: false
            },
            { // Kolom status user
              data: "status",
              render: function( data, type, row, meta ){
                if(data.status == 0)
                {
                  return "Tidak Aktif";
                }
                else
                {
                  return "Aktif";
                }
              },orderable: true, searchable: false
            },
            {
              data: null,
              render: function( data, type, row, meta ){
                  return  "<div class='btn-group'>" +
                          "<a href='{{ url('users/edit') }}/" + data.id_user +"' class='btn btn-xs btn-info tipsy-kiri-atas' title='Edit Data'><i class='fa fa-pencil'></i> Edit</a>" +
                          "</div>" +
                          "<div class='btn-group'>" +
                          "<a href=' class='btn btn-xs btn-danger tipsy-kiri-atas' name='tombol_hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini? Semua data transaksi yang terkait dengan user ini akan DIHAPUS. \")' title='Hapus Data'><i class='fa fa-trash-o'></i> Hapus</a></div>";
                },
                searchable: false
            }
        ]
    }
    );
  </script>
@endsection
