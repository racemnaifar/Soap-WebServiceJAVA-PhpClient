<?php 
 $mathservice = new SoapClient("http://localhost:8080/NotebookWebService/NoteBookService?WSDL");
 $result = $mathservice->getPersons(); 
  $result = $mathservice->deletePersonWithId(array("id"=>"".$_REQUEST['id'].""));
  header('Location: index.php');      
 ?>