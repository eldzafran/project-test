<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Company</title>
</head>
<body>

    <h1>Edit Perusahaan</h1>

    <!-- Tombol Kembali -->
    <div>
        <a href="/companies">Kembali ke Daftar Perusahaan</a>
    </div>
    <br>

    <form action="/companies/<?= $company->id ?>" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>

        <div>
            <label for="name">Nama:</label>
            <input type="text" name="name" value="<?= old('name', $company->name) ?>" required>
        </div>
        <br>

        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" value="<?= old('email', $company->email) ?>" required>
        </div>
        <br>

        <div>
            <label for="logo">Logo:</label>
            <input type="file" name="logo">
            <?php if ($company->logo): ?>
                <br>
                <img src="<?= asset(str_replace('public/', 'storage/', $company->logo)) ?>" alt="Logo" style="width: 50px;">
            <?php endif; ?>
        </div>
        <br>

        <div>
            <label for="description">Deskripsi:</label>
            <textarea name="description" rows="3"><?= old('description', $company->description) ?></textarea>
        </div>
        <br>
        
        <div>
            <label for="website">Website:</label>
            <input type="text" name="website" value="<?= old('website', $company->website) ?>">
        </div>
        <br>

        <button type="submit">Update Perusahaan</button>
    </form>

</body>
</html>