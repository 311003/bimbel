<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Pembayaran</title>
</head>
<body>
    <h1>Formulir Pembayaran</h1>
    <form action="process_payment.php" method="post">
        <label for="nama_murid">Nama Murid:</label><br>
        <input type="text" id="nama_murid" name="nama_murid" required><br><br>

        <label for="paket_bimbel">Paket Bimbel:</label><br>
        <input type="text" id="paket_bimbel" name="paket_bimbel" required><br><br>

        <label for="metode_pembayaran">Metode Pembayaran:</label><br>
        <select id="metode_pembayaran" name="metode_pembayaran" required>
            <option value="Transfer Bank">Transfer Bank</option>
            <option value="Tunai">Tunai</option>
            <option value="Kartu Kredit">Kartu Kredit</option>
        </select><br><br>

        <label for="biaya">Biaya:</label><br>
        <input type="number" id="biaya" name="biaya" required><br><br>

        <label for="keterangan">Keterangan:</label><br>
        <textarea id="keterangan" name="keterangan"></textarea><br><br>

        <input type="submit" value="Simpan Pembayaran">
    </form>
</body>
</html>
