/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package iit;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;
import javax.jws.Oneway;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author RACEM
 */
@WebService(serviceName = "NoteBookService")
public class NoteBookService {


    @WebMethod(operationName = "addPersonWithSimpleType")
    @Oneway
    public void addPersonWithSimpleType(@WebParam(name = "nom") String nom,@WebParam(name = "adresse") String adresse,@WebParam(name = "annee") String annee) {
        NoteBookBD.getPersonnes().add(new Person(nom,adresse,annee));
    }
    
    @WebMethod(operationName = "addPersonWithComplexType")
    public boolean addPersonWithComplexType(@WebParam(name = "personne") Person personne) {
        NoteBookBD.getPersonnes().add(personne);
        return true;
    }
    
    @WebMethod(operationName = "getPersonByName")
    public Person getPersonByName(@WebParam(name = "nom") String nom) {
        Person p=null;
        List<Person> persons = NoteBookBD.getPersonnes();
        for(Person person: persons){
            if(person.getName().equals(nom)){
                p=person;
            }
        }
        return p;
    }
    
     @WebMethod(operationName = "getListPersonByName")
    public List<Person> getListPersonByName(@WebParam(name = "nom") String nom) {
        Person p=null;
        List<Person> persons = NoteBookBD.getPersonnes();
        List<Person> lpersons = new ArrayList<>();
        for(Person person: persons){
            if(person.getName().equals(nom)){
                lpersons.add(person);
            }
        }
        return lpersons;
    }
    
    @WebMethod(operationName = "getPersonById")
    public Person getPersonById(@WebParam(name = "id") int id) {
        Person p=null;
        List<Person> persons = NoteBookBD.getPersonnes();
        for(Person person: persons){
            if(person.getId()==id){
                p=person;
            }
        }
        return p;
    }
    
     @WebMethod(operationName = "deletePersonWithId")
    public void deletePersonWithId(@WebParam(name = "id") int id) {
        Person p = getPersonById(id);
        NoteBookBD.deletePersonne(p);
    }
    
    @WebMethod(operationName = "updatePersonWithId")
    public void updatePersonWithId(@WebParam(name = "id") int id, @WebParam(name = "nom") String nom,@WebParam(name = "adresse") String adresse,@WebParam(name = "annee") String annee) {
        Person pancien = getPersonById(id);
        Person pnouveau = new Person(nom,adresse,annee);
        NoteBookBD.updatePersonne(pancien, pnouveau);
    }
    
    @WebMethod(operationName = "getPersons")
    public List<Person> getPersons() {      
        return NoteBookBD.getPersonnes();
    }
       
}
