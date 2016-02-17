<!DOCTYPE html>
<html>
<head>
<!--DEPENDENCIES PLUGINS -->
<?php include('views/layout/_shim.html'); ?> <!-- browser's compatibility-->

<link href="resources/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
<link href="resources/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />  
<script src="resources/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<script src="resources/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
<script src="resources/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>   
<link href="resources/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />  

<!--/.DEPENDENCIES PLUGINS -->

</head>
<body>

<?php include('views/layout/_header.html'); ?> <!-- header -->


<div class="container"><!-- main content-->
<hr>
	<div class="jumbotron">
		<div class="row">
			<div id="div_name" class="col-sm-4 col-xs-12" style="margin-top:10px">
				<input id="name" class="form-control" placeholder="Name">
			</div>
			<div id="div_address" class="col-sm-4 col-xs-12" style="margin-top:10px">
				<textarea id="address"  class="form-control" placeholder="Address" style="resize:none"></textarea>
			</div>
			<div  class="col-sm-4 col-xs-12" style="margin-top:10px">
				<button onclick="save()" class="btn btn-lg btn-success"> SAVE RECORD</button>
			</div>
		</div><!--row-->

		<hr>

		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-8 col-xs-12">
				<table id="mytable" class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Address</th>
					</thead>
				</table>
			</div><!--col-->
			<div class="col-sm-2"></div>
		</div><!--/.row-->

	</div> <!--./div.-->

</div>


</body>
</html>


<script> /* CONTROLLER SCRIPT */

  function populate_mytable(){ 
    //ajax now
    $.ajax ({
      type: "POST",
      url: "serverside/populate_mytable.php",
      dataType: 'json',      
      cache: false,
      success: function(x)
      {
        mytable.fnClearTable();        
        for(var i = 0; i < x.length; i++) 
        { 
          mytable.fnAddData
          ([
						x[i][0],x[i][1],x[i][2],     
          ]); 
        }       
      }  
    }); 
    //ajax end  
  } //.load cat_table


</script> 