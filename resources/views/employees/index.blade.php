<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
</head>
<body>

    <h1>Daftar Karyawan</h1>

    <div>
        <a href="/dashboard">Kembali ke Dashboard</a> | 
        <a href="/companies">Lihat Perusahaan</a>
    </div>
    <br>

    <a href="/employees/create">Tambah Karyawan Baru</a>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Perusahaan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= $employee->name ?></td>
                    <td><?= $employee->email ?></td>
                    <td><?= $employee->phone ?></td>
                    <td><?= $employee->company->name ?? 'N/A' ?></td>
                    <td>
                        <a href="/employees/<?= $employee->id ?>/edit">Edit</a>
                        <form action="/employees/<?= $employee->id ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" onclick="return confirm('Apakah Anda yakin?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>