<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Edit siswa</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
   <header>
      <h3>Edit siswa baru</h3>
   </header>
   <form action="/edit-siswa" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{ $a->id }}">
      <fieldset>
         <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap" value="{{ $a->name }}">
         </p>
         <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat" >{{ $a->alamat }}</textarea>
         </p>
         <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <label for=""><input type="radio" name="jenis_kelamin" id="" value="laki-laki" {{ $a->jenis_kelamin == "laki-laki" ? "checked" : "" }}>Laki-Laki</label>
            <label for=""><input type="radio" name="jenis_kelamin" id="" value="perempuan" {{ $a->jenis_kelamin == "perempuan" ? "checked" : "" }}>Perempuan</label>
         </p>
         <p>
            <label for="agama">Agama:</label>
            <select name="agama" id="">
               <option value="islam" {{ $a->agama == "islam" ? "selected" : "" }}>Islam</option>
               <option value="kristen" {{ $a->agama == "kristen" ? "selected" : "" }}>Kristen</option>
               <option value="hindu" {{ $a->agama == "hindu" ? "selected" : "" }}>Hindu</option>
               <option value="budha" {{ $a->agama == "budha" ? "selected" : "" }}>Budha</option>
               <option value="atheis" {{ $a->agama == "atheis" ? "selected" : "" }}>Atheis</option>
            </select>
         </p>
         <p>
            <label for="sekolah_asal">Sekolah asal:</label>
            <input type="text" name="sekolah_asal" id="" placeholder="Nama sekolah asal" value="{{ $a->sekolah_asal }}">
         </p>
         <p>
            <input type="submit" value="Submit">
         </p>
      </fieldset>
   </form>
</body>
</html>