<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NoteBook</title>
  <link rel="icon" type="image/png" href="dist/img/notes.png" sizes="16x16">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
    <section class="content">
      <div class="row">
        <div class="col-12">
        
          <div class="card">
            <div class="card-header">
              <h3 style="text-align: center;">NOTEBOOK</h3>
			  <a class="btn btn-block btn-secondary" href='addPerson.php'>ADD PERSON</a>
            </div>
            <div class="card-body">
			  <form role="form" method="post" action="searchPerson.php" enctype="multipart/form-data">
				<div class="row">
                  <div class="col-4">
                  </div>
                  <div class="col-4">
                    <input type="text" class="form-control" name="namep"  placeholder="Search By Name" required>
                  </div>
                  <div class="col-3">
                   <button type="submit" class="btn btn btn-success">Search</button>
                  </div>
                </div>
			  </form>
				<br>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
				  <th>ID</th>
                  <th>Name</th>
				  <th>Adress</th>
				  <th>BirthYear</th>
				  <th>Update</th>
			      <th>Delete</th>
                </tr>
                </thead>
                <tbody>
				<?php
				 $mathservice = new SoapClient("http://localhost:8080/NotebookWebService/NoteBookService?WSDL");
				 $result = $mathservice->getPersons();
				 foreach($result->return as $person){
				 ?>
                <tr>
				  <td><?php echo $person->id ?></td>
                  <td><?php echo $person->name ?></td>
                  <td><?php echo $person->adress ?></td>
                  <td><?php echo $person->birthYear ?></td>
                  <td><a href='updatePerson.php?id=<?php echo $person->id ?>&nom=<?php echo $person->name ?>&adr=<?php echo $person->adress ?>&year=<?php echo $person->birthYear ?>' class="btn btn-block btn-info">UPDATE PERSON</a></td>
                  <td><a class="btn btn-block btn-danger" onclick="if(!confirm('Are you sure ?')) return false;" href='delete.php?id=<?php echo $person->id ?>'>DELETE PERSON</a></td>
                </tr>
                <?php }?>
                </tbody>
                <tfoot>
                <tr>
				  <th>ID</th>				
                  <th>Name</th>
				  <th>Adress</th>
				  <th>BirthYear</th>
				  <th>Update</th>
			      <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

</div>
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
