@extends('layouts.theme')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="mt-0 header-title">{{ $kegiatan->nama_kegiatan }}</h4>




                        <p>Tanggal : {{ $kegiatan->tanggal_waktu }}</p>
                        <p> Koordinator : {{ $kegiatan->koordinator }}</p>



                        <table id="datatable-buttons" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Peserta</th>
                                <th>Institusi</th>
                                <th>Jabatan</th>
                                <th>Pangkat</th>
                                <th>Email</th>
                                <th>No HP</th>
                                <th>Tth</td>
                            </tr>
                        </thead>
                        <tbody>
                             @forelse ($kegiatan->peserta as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $item->nama_peserta }}</td>
                                <td>{{ $item->institusi }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->pangkat }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->nohp }}</td>
                                <td><img src="{{asset('storage/$item->ttd') }}"></td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8">Data Kosong</td>
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

