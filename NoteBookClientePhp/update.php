<?php 
 $mathservice = new SoapClient("http://localhost:8080/NotebookWebService/NoteBookService?WSDL");
 $result = $mathservice->getPersons(); 
  $result = $mathservice->updatePersonWithId(array("id"=>"".$_REQUEST['idp']."","nom"=>"".$_REQUEST['namep']."","adresse"=>"".$_REQUEST['adrp']."","annee"=>"".$_REQUEST['birthp'].""));
  header('Location: index.php');      
 ?>