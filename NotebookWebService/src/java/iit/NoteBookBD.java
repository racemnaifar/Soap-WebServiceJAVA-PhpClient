/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package iit;

import java.util.ArrayList;
import java.util.List;

/**
 *
 * @author RACEM
 */
public class NoteBookBD {
     private static List<Person> personnes = new ArrayList<Person>();  
        static { 

            personnes.add(new Person("Ahmed", "Sfax", "1981")); 

            personnes.add(new Person("Slim", "Sfax", "1980")); 

            personnes.add(new Person("Youssef", "Tunis", "2014")); 

        } 
        public static List<Person> getPersonnes() { 
            return personnes; 
        } 
        
        public static void deletePersonne(Person p){
            personnes.remove(p);           
        }
        
        public static void updatePersonne(Person pancien , Person pnouveau){
           personnes.set(personnes.indexOf(pancien), pnouveau);
        }

        
       void test(){
           NoteBookBD.getPersonnes();
       }
               
}

