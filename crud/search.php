<html>
    <body>
        <h1>Searching Buku</h1>
        <form action = "hasilsearch.php" method = "post">
            <select name = "kolom">
                <option value = "judul_buku">Judul Buku</option>
                <option value = "penulis">Penulis</option>
                <option value = "jenis_buku">Jenis Buku</option>
        </select>
        Masukkan kata yang anda cari
        <input type = "text" type = "text" name = "cari">
        <input type = "submit" value = "cari">
        </form>
    </body>
</html>
 