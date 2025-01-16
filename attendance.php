<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Presensi</title>
</head>
<body>
    <h1>Formulir Presensi</h1>
    <form action="process_attendance.php" method="post">
        <label for="nama_murid">Nama Murid:</label><br>
        <input type="text" id="nama_murid" name="nama_murid" required><br><br>

        <label for="jadwal_bimbel">Jadwal Bimbel:</label><br>
        <input type="text" id="jadwal_bimbel" name="jadwal_bimbel" required><br><br>

        <label for="id_presensi">ID Presensi:</label><br>
        <input type="text" id="id_presensi" name="id_presensi" required><br><br>

        <label for="jam_masuk">Jam Masuk:</label><br>
        <input type="time" id="jam_masuk" name="jam_masuk" required><br><br>

        <label for="jam_keluar">Jam Keluar:</label><br>
        <input type="time" id="jam_keluar" name="jam_keluar" required><br><br>

        <label for="keterangan">Keterangan Presensi:</label><br>
        <select id="keterangan" name="keterangan" required>
            <option value="Hadir">Hadir</option>
            <option value="Sakit">Sakit</option>
            <option value="Izin">Izin</option>
            <option value="Absen">Absen</option>
        </select><br><br>

        <label for="penjelasan">Penjelasan Keterangan:</label><br>
        <textarea id="penjelasan" name="penjelasan"></textarea><br><br>

        <input type="submit" value="Simpan Presensi">
    </form>
</body>
</html>
