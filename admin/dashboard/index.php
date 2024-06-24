<?php require '../template/header.php' ?>

<?php $user = mysqli_query($koneksi, 'SELECT * FROM user')->num_rows; ?>

<div class="card shadow p-3">
    <h5>Dashboard</h5>
</div>

<section class="section dashboard">
    <div class="row g-3 justify-content-center">

        <!-- user -->
        <div class="col-md-3">
            <div class="card info-card sales-card">

                <div class="card-body">
                    <h5 class="card-title">Jumlah User</h5>

                    <div class="d-flex align-items-center">
                        <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                            <i class='bx bx-user'></i>
                        </div>
                        <div class="ps-3">
                            <h6><?= $user; ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end user -->

    </div>
</section>

<?php require '../template/footer.php' ?>