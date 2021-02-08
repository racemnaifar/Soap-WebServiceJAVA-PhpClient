/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package iit;

import java.util.concurrent.atomic.AtomicInteger;
import javax.xml.bind.annotation.XmlAttribute;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author RACEM
 */
@XmlRootElement (name="Person")
public class Person {   
    private static final AtomicInteger count = new AtomicInteger(0); 
    @XmlAttribute(name="id")  
     int id;
     @XmlAttribute(name="name")
     String name;
     @XmlAttribute(name="adress")
     String adress;
     @XmlAttribute(name="birthYear")
     String birthYear;

     public Person(){
         name="default";
         adress="default";
         birthYear="default";
     }

    public Person(String n, String a, String birth) {
        name = n;
        adress = a;
        birthYear = birth;
        id = count.incrementAndGet();
    }

    String getName() {
        return name;
    }
    
    int getId() {
        return id;
    }

    void setName(String name) {
        this.name = name;
    }

    void setAdress(String adress) {
        this.adress = adress;
    }

    void setBirthYear(String birthYear) {
        this.birthYear = birthYear;
    }
    
    
    
    @Override
    public String toString() {
        return "Person{" + "name=" + name + ", adress=" + adress + ", birthYear=" + birthYear + '}';
    }
    
  
}
