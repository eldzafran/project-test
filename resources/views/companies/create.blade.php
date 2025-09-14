<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Company</title>
</head>
<body>

    <h1>Tambah Perusahaan Baru</h1>
    
    <!-- Tombol Kembali -->
    <div>
        <a href="/companies">Kembali ke Daftar Perusahaan</a>
    </div>
    <br>

    <form action="/companies" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

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
            <label for="logo">Logo:</label>
            <input type="file" name="logo">
        </div>
        <br>

        <div>
            <label for="description">Deskripsi:</label>
            <textarea name="description" rows="3"></textarea>
        </div>
        <br>
        
        <div>
            <label for="website">Website:</label>
            <input type="text" name="website">
        </div>
        <br>

        <button type="submit">Tambah Perusahaan</button>
    </form>

</body>
</html>