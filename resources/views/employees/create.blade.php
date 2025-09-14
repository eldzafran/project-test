<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
</head>
<body>

    <h1>Tambah Karyawan Baru</h1>

    <!-- Tombol Kembali -->
    <div>
        <a href="/employees">Kembali ke Daftar Karyawan</a>
    </div>
    <br>

    <form action="/employees" method="POST">
        <?php echo csrf_field(); ?>

        <div>
            <label for="company_id">Perusahaan:</label>
            <select name="company_id" required>
                <?php foreach ($companies as $company): ?>
                    <option value="<?= $company->id ?>"><?= $company->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>

        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" required>
        </div>
        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" required>
        </div>
        <br>

        <div>
            <label for="phone">Telepon:</label>
            <input type="text" name="phone">
        </div>
        <br>

        <button type="submit">Tambah Karyawan</button>
    </form>

</body>
</html>