</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
        &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- data tables -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>

<!-- plugins JS Files -->
<script src="<?= $base_url; ?>assets/plugins/apexcharts/apexcharts.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/chart.js/chart.umd.js"></script>
<script src="<?= $base_url; ?>assets/plugins/echarts/echarts.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/quill/quill.js"></script>
<script src="<?= $base_url; ?>assets/plugins/simple-datatables/simple-datatables.js"></script>
<script src="<?= $base_url; ?>assets/plugins/tinymce/tinymce.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="<?= $base_url; ?>assets/js/main.js"></script>

<script>
    $('#form').parsley({
        errorClass: 'is-invalid text-red',
        successClass: 'is-valid',
        errorsWrapper: '<span class="invalid-feedback"></span>',
        errorTemplate: '<span></span>',
        trigger: 'change'
    });

    let pesanBerhasil = $('#pesan-berhasil').data('pesan')
    if (pesanBerhasil) {
        Swal.fire({
            title: "Good job!",
            text: pesanBerhasil,
            icon: "success"
        });
    }

    let pesanGagal = $('#pesan-gagal').data('pesan')
    if (pesanGagal) {
        Swal.fire({
            icon: "error",
            title: "Oops...",
            text: pesanGagal,
        });
    }

    $('#data-table').on('click', '.button-delete', function(e) {

        e.preventDefault()
        let href = $(this).attr('href')

        Swal.fire({
            title: "Anda yakin?",
            text: "Data akan dihapus!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, hapus data!"
        }).then((result) => {
            if (result.isConfirmed) {
                document.location.href = href
            }
        });
    })



    $('#upload').on('change', function(event) {
        $('#preview').attr('src', URL.createObjectURL(event.target.files[0]))
    })

    new DataTable('#data-table');
</script>

</body>

</html>