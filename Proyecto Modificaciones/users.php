<?php

class Demo
{

    private $userId;
    private $user;
    private $password;
    private $name;
    private $lastname;
    private $birthdate;
    private $email;
    private $sex;
    private $rol;

     function __construct($userId, $user, $password, $name, $lastname, $birthdate, $email, $sex, $rol) {
       $this->userId = $userId;
       $this->user = $user;
       $this->password = $password;
       $this->name = $name;
       $this->lastname = $lastname;
       $this->birthdate = $birthdate;
       $this->email = $email;
       $this->sex = $sex;
       $this->rol = $rol;
     }

    
     function setUserId($userId){
       $this->userId = $userId;
     } 
     function getUserId(){
       return $this->userId;
     } 

     
     function setUser($user){
       $this->user = $user;
     } 
     function getUser(){
       return $this->user;
     } 


     function setPassword($password){
       $this->password = $password;
     } 
     function getPassword(){
       return $this->password;
     }


     function setName($name){
       $this->name = $name;
     } 
     function getName(){
       return $this->name;
     }


     function setLastname($lastname){
       $this->lastname = $lastname;
     } 
     function getLastname(){
       return $this->lastname;
     }


     function setBirthdate($birthdate){
       $this->birthdate = $birthdate;
     } 
     function getBirthdate(){
       return $this->birthdate;
     }


     function setEmail($email){
       $this->email = $email;
     } 
     function getEmail(){
       return $this->email;
     }


     function setSex($sex){
       $this->sex = $sex;
     } 
     function getSex(){
       return $this->sex;
     }


     function setRol($rol){
       $this->rol = $rol;
     } 
     function getRol(){
       return $this->rol;
     }

}

?> 
