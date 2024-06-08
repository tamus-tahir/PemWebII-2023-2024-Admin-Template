<?php require '../template/header.php' ?>

<?php

$query = "SELECT * FROM user ORDER BY id_user DESC";
$result = mysqli_query($koneksi, $query);

$user = [];

while ($data = mysqli_fetch_assoc($result)) {
    $user[] = $data;
}

?>

<div class="card shadow p-3">
    <h5>User</h5>
</div>

<div class="card shadow p-3">

    <div class="mb-3">
        <a class="btn btn-primary" href="<?= $base_url; ?>admin/user/tambah.php" role="button">Tambah</a>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-bordered " id="example">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Role</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1 ?>
                <?php foreach ($user as $row) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row['username']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['role'] == 1 ? 'Superadmin' : 'Admin'; ?></td>
                        <td>
                            <?php if ($row['foto']) : ?>
                                <img src="<?= $base_url; ?>/assets/uploads/user/<?= $row['foto']; ?>" alt="<?= $row['nama']; ?>" width="70">
                            <?php else : ?>
                                <img src="<?= $base_url; ?>assets/img/noprofil.png" alt="<?= $row['nama']; ?>" width="70">
                            <?php endif ?>
                        </td>
                        <td></td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </div>

</div>

<?php require '../template/footer.php' ?>