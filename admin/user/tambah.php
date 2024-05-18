<?php require '../template/header.php' ?>

<?php

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $nama = $_POST['nama'];
    $role = $_POST['role'];

    $query = "INSERT INTO user VALUES (null, '$username', '$password','$nama', '$role', null)";

    mysqli_query($koneksi, $query);
}

?>

<div class="card shadow p-3">
    <h5>Halaman Tambah User</h5>
</div>

<div class="card shadow p-3">

    <form action="" method="post" id="form">
        <div class="mb-3">
            <label for="username" class="form-label">Username <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="password" name="password" required minlength="8">
        </div>
        <div class="mb-3">
            <label for="passwordconfirm" class="form-label">Konfirmasi Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="passwordconfirm" name="passwordconfirm" required minlength="8" data-parsley-equalto="#password">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
            <select class="form-select" id="role" name="role" required>
                <option value="1">Superadmin</option>
                <option value="2">Admin</option>
            </select>
        </div>

        <a class="btn btn-warning" href="<?= $base_url; ?>admin/user" role="button">Cancel</a>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php require '../template/footer.php' ?>