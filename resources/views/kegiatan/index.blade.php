@extends('layouts.theme')

@section('content')
     <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group m-0 pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item active"><a href="#">Home</a></li>
                        
                </div>
                <h4 class="page-title">Kegiatan</h4>
            </div>
        </div>
    </div>
    <!-- end page title end breadcrumb -->
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">List Kegiatan</h4>
                        <a class="btn btn-primary" href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <input type="submit" value="Logout">
                            </form>
                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Kegiatan</th>
                                    <th>Waktu</th>
                                    <th>Koordinator</th>
                                    <th>Jumlah Peserta</th>
                                    <th>Detail</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $loop->index+1 }}</td>
                                    <td>{{ $item->nama_kegiatan }}</td>
                                    <td>{{ $item->tanggal_waktu }}</td>
                                    <td>{{ $item->koordinator }}</td>
                                    <td>{{ $item->peserta->count() }}</td>
                                    <td><a href="{{ route('kegiatan.show', $item->id) }}" class="btn btn-primary">Detail</a></td>
                                    <td><a href="{{ route('peserta.create', $item->slug) }}" class="btn btn-primary">Link</a></td>
                                    <td>
                                        <a href="{{ route('kegiatan.edit', $item->id) }}" class="btn btn-success"><i class="fa fa-penci"></i> Edit</a>
                                        <form method="POST" action="{{ route('kegiatan.destroy', $item->id) }}" onsubmit="return confirm('Yakin nih mau delete?');">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6">Data Kosong</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Required datatable js -->
       <script src="{{asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <!-- Buttons examples -->
       <script src="{{asset('/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/jszip.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/pdfmake.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/vfs_fonts.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/buttons.print.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
       <!-- Datatable init js -->
       <script src="{{asset('assets/pages/datatables.init.js')}}"></script>
@endsection

