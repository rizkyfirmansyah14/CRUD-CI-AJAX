
<script>

	// Dashboard

	$(document).ready(function () {
        // ini adalah fungsi untuk mengambil data mahasiswa dan di  incluce ke dalam datatable
          var datamahasiswa = $('#tableUser').DataTable({
                  "processing": true,
                  "ajax": "<?=base_url("index.php/sistem/datamahasiswa")?>",
                  stateSave: true,
                  "order": []
          })
            
          

      });
      
</script>