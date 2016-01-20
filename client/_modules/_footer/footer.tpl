</div>
<script>
    $(document).ready(function() {
        
		$('#dataTables-example').DataTable({
                responsive: true
        });
		
		$('[data-toggle="tooltip"]').tooltip();
		
		$('#tabsModalClient a').click(function (e) {
			  e.preventDefault();
			  $(this).tab('show');
		})
		
    });
    </script>