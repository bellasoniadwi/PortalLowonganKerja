
  <!-- Bootstrap JS-->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Bootstrap Min JS-->
  <!--
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  <script type="text/javascript" src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  -->
  <!-- Feather Icon -->
  <!-- <script type="text/javascript" src="https://unpkg.com/feather-icons"></script> -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
  <script type="text/javascript" src="{{ asset('feather/feather.min.js') }}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script> -->
  <!-- Script for yajra datatable-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/b-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/r-2.3.0/sb-1.3.4/sp-2.0.2/sl-1.4.0/datatables.min.js"></script>
  <script type="text/javascript" src="{{ asset('datatable/pdfmake.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('datatable/vfs_fonts.js') }}"></script>
  <script type="text/javascript" src="{{ asset('datatable/datatables.min.js') }}"></script>

  <script type="text/javascript">
    feather.replace()

    $(document).ready(function() {
        $('#myTable').DataTable({
            responsive: true,
        });
    });

  </script>
</body>
</html>