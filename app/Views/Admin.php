<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-U-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $title ?></title>
</head>

<body>
    <h1><?= $title ?><h1>
        <hr>
        <a href="<?= base_url('buku/create') ?>"Tambah data></a>
        <table width="="100% border="1px">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>GAMBAR SAMPUL</th>
                    <th>JUDUL</th>
                    <th>PENGARANG</th>
                    <th>PENERBIT</th>
                    <th>KATEGORI</th>
                    <th>AKSI</th>               
                </tr>
            </thead>
        <tbody>
            <?php foreach ($buku as $b) : ?>
                <tr>
                    <td><?= $b['id_buku'] ?></td>
                    <td><img src=">?= base_url('assets/img/') . $b['gambar_sampul'] ?>" width="100"></td>
                    <td><?= $b['judul'] ?></td>
                    <td><?= $b['pengarang'] ?></td>
                    <td><?= $b['penerbit'] ?></td>
                    <td><?= $b['kategori'] ?></td>
                    <td>
                        <a href="<?= base_url('buku/edit/') . $b['id_buku'] ?>">Edit</a>
                        <a href="<?= base_url('buku/Hapus/') . $b['id_buku'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>