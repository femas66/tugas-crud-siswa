<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Tambah siswa</title>
</head>
<body>
   <header>
      <h3>Formulir pendaftaran siswa baru</h3>
   </header>
   <form action="/tambah-siswa" method="POST">
      @csrf
      <fieldset>
         <p>
            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Nama lengkap">
         </p>
         <p>
            <label for="alamat">Alamat:</label>
            <textarea name="alamat" id="alamat"></textarea>
         </p>
         <p>
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <label for=""><input type="radio" name="jenis_kelamin" id="" value="laki-laki">Laki-Laki</label>
            <label for=""><input type="radio" name="jenis_kelamin" id="" value="perempuan">Perempuan</label>
         </p>
         <p>
            <label for="agama">Agama:</label>
            <select name="agama" id="">
               <option value="islam">Islam</option>
               <option value="kristen">Kristen</option>
               <option value="hindu">Hindu</option>
               <option value="budha">Budha</option>
               <option value="atheis">Atheis</option>
            </select>
         </p>
         <p>
            <label for="sekolah_asal">Sekolah asal:</label>
            <input type="text" name="sekolah_asal" id="" placeholder="Nama sekolah asal">
         </p>
         <p>
            <input type="submit" value="Submit">
         </p>
      </fieldset>
   </form>
</body>
</html>