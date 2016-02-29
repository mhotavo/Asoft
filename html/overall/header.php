<head>
    <meta charset="UTF-8">
    <title><?php echo APP_TITLE;  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link href="views/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="views/css/style.css"/>
    <link rel="stylesheet" href="views/fontawesome/css/font-awesome.min.css"/>
    <!-- DataTables-->
     <script src="views/web/assets/jquery/jquery-2.2.0.min.js"></script> 
	<link rel="stylesheet" type="text/css" href="views/DataTables/media/css/dataTables.bootstrap.css">

	<script type="text/javascript" language="javascript" src="views/DataTables/media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="views/DataTables/media/js/dataTables.bootstrap.js"></script>


    <style type="text/css">
/*table {border-collapse:collapse}
td {
	border:1px solid black;
}*/

</style>

<script type="text/javascript">

	$(document).ready(function() {
	$('#FamiliaresDesplazados').DataTable({
		 "iDisplayLength": -1,
//		 "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
		 "autoWidth": false,
/*		  "columns": [                // there must be an entry for every column
            {"width": "30%", "orderable": true},     
            null,
            null,
            null,
            {"width": "10%", "orderable": true},
            {"width": "19%", "orderable": true},
            null
          ],
 */
          "order": [[ 1, "desc" ]],
          "sPaginationType": "full_numbers",
           'bPaginate': false

	});
} );
</script>
</head>