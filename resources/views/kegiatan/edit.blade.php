@extends('layouts.theme')

@section('content')
     <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group m-0 pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                        <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                        
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
                    <h4 class="mt-0 header-title">Edit Kegiatan</h4>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('kegiatan.update', $item->id) }}" method="POST">
                            @csrf
                            @method('put')

                            <div class="form-group">
                              <label for="formGroupExampleInput">Nama Kegiatan</label>
                              <input type="text" class="form-control" id="formGroupExampleInput" name="nama_kegiatan" placeholder="contoh: Vicon dengan mereka" value="{{ $item->nama_kegiatan }}" >
                            </div>

                            <div class="form-group">
                              <label for="formGroupExampleInput2">Tanggal Kegiatan </label>
                              <!-- <input type="text" id="input" class="form-control"name="tanggal_waktu" width="320"> -->
                              <input type="text" id="date-format" name="tanggal_waktu" class="form-control" value="{{ $item->tanggal_waktu }}" >
                              <!-- <script>
                                  $('#input').datetimepicker({ format: 'yyyy-mm-dd HH:MM' });
                              </script> -->
                            </div>

                            <div class="form-group">
                              <label for="formGroupExampleInput2">Koordinator</label>
                              <input type="text" class="form-control" id="formGroupExampleInput2"  name="koordinator" value="{{ $item->koordinator }}">
                            </div>
                         
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <input type="submit" class="btn btn-primary" value="Update Data">
                              
                            </div>
                          </div>
                            <!-- <table>
                                <tr>
                                    <td>Nama Kegiatan</td>
                                    <td><input type="text" name="nama_kegiatan" value="{{ $item->nama_kegiatan }}"></td>
                                </tr>
                                <tr>
                                    <td>Tanngal & Waktu</td>
                                    <td><input type="text" name="tanggal_waktu" value="{{ $item->tanggal_waktu }}"></td>
                                </tr>
                                <tr>
                                    <td>Koordinator</td>
                                    <td><input type="text" name="koordinator" value="{{ $item->koordinator }}"></td>
                                </tr>
                                <tr>
                                    <td colspan="2"><input type="submit" value="Update Data"></td>
                                </tr>
                            </table> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>

      <script src="{{asset('/assets/plugins/timepicker/moment.js')}}"></script>
       <script src="{{asset('/assets/plugins/timepicker/tempusdominus-bootstrap-4.js')}}"></script>
       <script src="{{asset('/assets/plugins/timepicker/bootstrap-material-datetimepicker.js')}}"></script>

       <script src="{{asset('/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}"></script>
       <script src="{{asset('/assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}"></script>

       <script src="{{asset('/assets/pages/form-advanced.js')}}"></script>

      @endsection