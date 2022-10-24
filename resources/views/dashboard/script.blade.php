<!-- Bootstrap core JavaScript-->
<script src={{ asset("template/vendor/jquery/jquery.min.js") }}></script>
<script src={{ asset("template/vendor/bootstrap/js/bootstrap.bundle.min.js") }}></script>

<!-- Core plugin JavaScript-->
<script src={{ asset("template/vendor/jquery-easing/jquery.easing.min.js") }}></script>

<!-- Custom scripts for all pages-->
<script src={{ asset("template/js/sb-admin-2.min.js") }}></script>

<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
{{-- <script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script> --}}
<script>
function what(id) {
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $('#form-delete' + id).submit();
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )
        }
    })
}
</script>
