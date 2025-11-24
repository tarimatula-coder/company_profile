<!-- JS utama project kamu -->
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/libs/simplebar/dist/simplebar.js"></script>
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/js/sidebarmenu.js"></script>
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/js/app.min.js"></script>
<script src="../../SEODash-1.0.0/SEODash-1.0.0/src/assets/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

<!-- DATATABLES CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- DATATABLES JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<!-- INISIALISASI DATATABLE -->
<script>
    $(document).ready(function() {
        $('#datatable').DataTable({
            "pageLength": 10,
            "lengthMenu": [5, 10, 25, 50, 100],
            "ordering": true
        });
    });
</script>

</body>

</html>