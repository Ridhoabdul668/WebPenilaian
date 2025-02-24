<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
    <title>Document</title>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Data Siswa</h1>

                <!-- Button trigger modal -->
<button type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#exampleModal">
  Tambah Siswa
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        method="POST" action="{{ route('index.create') }}">
        @csrf
        <div class="mb-3">
            {{csrf_field()}}
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Nama</label>
              <input name="Nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Nama">
            </div>  
          

     
            <div class="form-group">
                <label for="disabledSelect" class="form-label">Pilih Kelamin</label>
                <select name="Pilih Kelamin" id="disabledSelect" class="form-select">
                  <option value="l">Laki-Laki</option>
                  <option value="p">Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Agama</label>
                <input nama="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="Agama">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea class="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          
              </div>
              
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>

    </div>
  </div>
</div>
        </div>
            
        

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <p>Selamat Datang</p>
   <table class="table table-hover">
    <tr>
        <th>Nama Siswa</th>       
        <th>Jenis Kelamin</th>       
        <th>Agama</th>       
        <th>Alamat</th> 
    </tr>
    @foreach ($data_siswa as $siswa)
    <tr>
        <td>{{$siswa->nama}}</td>
        <td>{{$siswa->jenis_kelamin}}</td>
        <td>{{$siswa->agama}}</td>
        <td>{{$siswa->alamat}}</td>
    </tr>
    @endforeach
    </table>
        
</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>