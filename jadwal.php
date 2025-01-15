<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Jadwal Bimbel Siswa</title>
</head>
<body>
    <h1>Formulir Jadwal Bimbel Siswa</h1>
    <form action="proses.php" method="post">
        <label for="nama">Nama Siswa:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="mata_pelajaran">Mata Pelajaran:</label><br>
        <input type="text" id="mata_pelajaran" name="mata_pelajaran" required><br><br>

        <label for="hari">Hari:</label><br>
        <select id="hari" name="hari" required>
            <option value="Senin">Senin</option>
            <option value="Selasa">Selasa</option>
            <option value="Rabu">Rabu</option>
            <option value="Kamis">Kamis</option>
            <option value="Jumat">Jumat</option>
            <option value="Sabtu">Sabtu</option>
            <option value="Minggu">Minggu</option>
        </select><br><br>

        <label for="jam">Jam:</label><br>
        <input type="time" id="jam" name="jam" required><br><br>

        <label for="lokasi">Lokasi:</label><br>
        <input type="text" id="lokasi" name="lokasi" required><br><br>

        <input type="submit" value="Simpan Jadwal">
    </form>
</body>
</html>