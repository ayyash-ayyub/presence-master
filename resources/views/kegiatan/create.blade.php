<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">


  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

    <title>Tambah Kegiatan</title>
  </head>
  <body> -->
@extends('layouts.theme')

@section('content')
     <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="btn-group m-0 pull-right">
                    <ol class="breadcrumb hide-phone p-0 m-0">
                        <li class="breadcrumb-item"><a href="#">Kegiatan</a></li>
                        <li class="breadcrumb-item active"><a href="#">Tambah baru</a></li>
                        
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
                    <h4 class="mt-0 header-title">Tambah Kegiatan</h4>
    

                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                      @endif


                      <form action="{{ route('kegiatan.store') }}" method="POST">
                          @csrf
                          <div class="form-group">
                              <label for="formGroupExampleInput">Nama Kegiatan</label>
                              <input type="text" class="form-control" id="formGroupExampleInput" name="nama_kegiatan" placeholder="contoh: Vicon dengan mereka" value="{{ old('nama_kegiatan') }}" >
                            </div>

                            <div class="form-group">
                              <label for="formGroupExampleInput2">Tanggal Kegiatan </label>
                              <!-- <input type="text" id="input" class="form-control"name="tanggal_waktu" width="320"> -->
                              <input type="text" name="tanggal_waktu" id="date-format" class="form-control" placeholder="2020-01-31 - 21:44">
                              <script>
                                  $('#input').datetimepicker({ format: 'yyyy-mm-dd HH:MM' });
                              </script>
                            </div>

                            <div class="form-group">
                              <label for="formGroupExampleInput2">Koordinator</label>
                              <input type="text" class="form-control" id="formGroupExampleInput2"  name="koordinator" value="{{ old('koordinator') }} ">
                            </div>
                         
                          <div class="form-group row">
                            <div class="col-sm-10">
                              <input type="submit" class="btn btn-primary" value="Simpan">
                              
                            </div>
                          </div>
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



    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  
    
    
   

</body>
</html>