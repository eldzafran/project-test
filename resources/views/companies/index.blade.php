<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies</title>
</head>
<body>

    <h1>Daftar Perusahaan</h1>

    <div>
        <a href="/dashboard">Kembali ke Dashboard</a> | 
        <a href="/employees">Lihat Karyawan</a>
    </div>
    <br>

    <a href="/companies/create">Tambah Perusahaan Baru</a>
    <br>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Logo</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
                <tr>
                    <td><?= $company->name ?></td>
                    <td><?= $company->email ?></td>
                    <td>
                        <?php if ($company->logo): ?>
                            <img src="<?= asset(str_replace('public/', 'storage/', $company->logo)) ?>" alt="Logo" style="width: 50px;">
                        <?php else: ?>
                            Tidak ada logo
                        <?php endif; ?>
                    </td>
                    <td><?= $company->description ?></td>
                    <td>
                        <a href="/companies/<?= $company->id ?>/edit">Edit</a>
                        <form action="/companies/<?= $company->id ?>" method="POST" style="display:inline-block;">
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