<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presensi</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="http://keith-wood.name/css/jquery.signature.css">
  
    <style>
        .kbw-signature { width: 100%; height: 200px;}
        #sig canvas{
            width: 100% !important;
            height: auto;
        }
    </style>
</head>
<body>


    
    <div class="container p-3 my-3 border" >
       
        <div class="container p-3 my-3 bg-dark text-white">
            <img src="/images/logoseamolec.png">
           <br>
            <p>Daftar Hadir Vicon. Silahkan melengkapi data berikut ini: </p>
          </div>


        <table class="table table-bordered table-dark">
            <thead>
              <tr>
               
                <th scope="col">Kegiatan</th>
                <th scope="col">Waktu</th>
                <th scope="col">Koordinator</th>
              </tr>
            </thead>
            <tbody>
              <tr>
               
                <td>{{ $kegiatan->nama_kegiatan }}</td>
                <td>{{ $kegiatan->tanggal_waktu }}</td>
                <td>{{ $kegiatan->koordinator }}</td>
              </tr>
              
             
              
            </tbody>
          </table>
          
          
        
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('peserta.store') }}" method="POST">
        @csrf
        <input type="hidden" name="kegiatan_id" value="{{ $kegiatan->id }}">
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
                 <input type="text" name="nama_peserta"  class="form-control" value="{{ old('nama_peserta') }}">
          <small id="emailHelp" class="form-text text-muted">nama lengkap,contoh: Abdullah Ayyash, P.hD.</small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Institusi Asal</label>
            <input type="text" name="institusi" class="form-control"  value="{{ old('institusi') }}">
            <small id="emailHelp" class="form-text text-muted">Contoh: SEAMEO SEAMOLEC.</small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan') }}">
            <small id="emailHelp" class="form-text text-muted">masukan tanda - jika ingin dikosongkan </small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Pangkat</label>
            <input type="text" name="pangkat"  class="form-control"  value="{{ old('pangkat') }}">
            <small id="emailHelp" class="form-text text-muted">masukan tanda - jika ingin dikosongkan</small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">e-mail</label>

            <input type="email" name="email" class="form-control" aria-describedby="emailHelp"  value="{{ old('email') }}">
            <small id="emailHelp" class="form-text text-muted">contoh: titik@seamolec.org.</small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">no HP</label>
             <input type="text" name="nohp" class="form-control" value="{{ old('nohp') }}">
            <small id="emailHelp" class="form-text text-muted">contoh: +62 00xxxx.</small>
        </div>

        <div class="form-group">
            <label class="" for="">Signature:</label>
            <br/>
            <div id="sig" ></div>
            <br/>
            <small id="emailHelp" class="form-text text-muted">Gunakan Mouse untuk hasil yang lebih baik.</small>
            <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
            <textarea id="ttd" name="ttd" style="display: none"></textarea>
        </div>

     
     
        
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

    
    </div>

      

 

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://keith-wood.name/js/jquery.signature.js"></script>
<script type="text/javascript">
    var sig = $('#sig').signature({syncField: '#ttd', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#ttd").val('');
    });
</script>

</body>
</html>