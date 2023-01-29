<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Pendaftaran Siswa Baru</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
   <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">SMKN 1 KEDAWUNG</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
               </li>
               <li class="nav-item dropdown">
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ Auth::user()->name }}
                     </button>
                     <ul class="dropdown-menu">
                        <li><a href='/profile' class="dropdown-item">Profil</a></li>
                        <li><a href='/logout' class="dropdown-item">Logout</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </nav>
      <h1>Dashboard</h1>
      <hr>
   <header>
      <h3>Siswa yg sudah mendaftar</h3>
   </header>
   <nav>
      <input type="text" name="cari" id="cari" placeholder="Cari..."><button onclick="cari()">Cari</button>
      <a href="/tambah-siswa" class="btn btn-primary btn-sm">Tambah Siswa</a>
   </nav>
   <br>
   <?php $a = 1 ?>
   <table class="table">
      <thead>
         <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Agama</th>
            <th scope="col">Sekolah Asal</th>
            <th colspan="2"  scope="col">Tindakan</th>
         </tr>
      </thead>
      <tbody class="x">
         @foreach ($siswa as $i)
            <tr>
               <td scope="row">{{ $a++ }}</td>
               <td>{{ $i->name }}</td>
               <td>{{ $i->alamat }}</td>
               <td>{{ $i->jenis_kelamin }}</td>
               <td>{{ $i->agama }}</td>
               <td>{{ $i->sekolah_asal }}</td>
               <td><a href='/edit/{{ $i->id }}'>Edit</td>
               <td><a href='/hapus/{{ $i->id }}'>Hapus</td>
            </tr>
         @endforeach
      </tbody>
   </table>
   <p>{{ $siswa->links() }}</p>
</div>
</body>
</html>
<script>
   $(document).ready(function () {
      tampildata();
   })
   function tampildata() {
      $('#cari').on('keyup', function() {
         let value = $(this).val();
         // console.log(value);
         $.ajax({
            url: '/cari',
            type: 'GET',
            dataType: 'json',
            data: {'cari': value},
            success: function (data) {
               $('.x').html(data);
            }
         })
      })
   }
</script>