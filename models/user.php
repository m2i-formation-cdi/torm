<?php
   class User extends TORM\Model {};
   User::setOrder("name");
   User::validates("name" ,array("presence"=>true));
   User::validates("email",array("presence"=>true));
   User::validates("email",array("format"  =>"^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$"));
   User::validates("email",array("uniqueness"=>true));
   User::validates("level",array("numericality"=>true));
   User::hasMany("tickets",array("class_name"=>"Ticket"));
?>
