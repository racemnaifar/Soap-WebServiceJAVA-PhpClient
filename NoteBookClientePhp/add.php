<?php 
 $mathservice = new SoapClient("http://localhost:8080/NotebookWebService/NoteBookService?WSDL");
 $result = $mathservice->getPersons(); 
  $result = $mathservice->addPersonWithSimpleType(array("nom"=>"".$_REQUEST['namep']."","adresse"=>"".$_REQUEST['adrp']."","annee"=>"".$_REQUEST['birthp'].""));

  header('Location: index.php');      

 ?>