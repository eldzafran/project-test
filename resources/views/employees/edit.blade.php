<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
</head>
<body>

    <h1>Edit Karyawan</h1>

    <!-- Tombol Kembali -->
    <div>
        <a href="/employees">Kembali ke Daftar Karyawan</a>
    </div>
    <br>

    <form action="/employees/<?= $employee->id ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="company_id">Perusahaan:</label>
            <select name="company_id" required>
                <?php foreach ($companies as $company): ?>
                    <option value="<?= $company->id ?>" <?= ($employee->company_id == $company->id) ? 'selected' : '' ?>><?= $company->name ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <br>

        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" value="<?= old('name', $employee->name) ?>" required>
        </div>
        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= old('email', $employee->email) ?>" required>
        </div>
        <br>

        <div>
            <label for="phone">Telepon:</label>
            <input type="text" name="phone" value="<?= old('phone', $employee->phone) ?>">
        </div>
        <br>

        <button type="submit">Update Karyawan</button>
    </form>

</body>
</html>