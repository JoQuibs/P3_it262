<?php

class Item{
#set the variable initial values
public $name = '';
public $description = '';
public $price = 0;
public $quantity = 0;

#constructor
    public function __construct($name, $description, $price){

     $this->name = $name;
     $this->description = $description;
     $this->price = $price;
        
    }//end class constructor
    
}//end of item class

#fill array with items to be displayed on the menu

$items[] = new item('Classic Hot Dog','Tender Juicy hot dog - $9.95', 7.95);
$items[] = new item('Hot Dog on Stick','Tender Juicy hot dog on a stick - $13.95', 9.95);
$items[] = new item('Seattle-style Hot Dog','Hot Dog, served with cream cheese and grilled onions on a toasted bun - $10.95', 7.95);
$items[] = new item('Filipino-style hot dog','Steamed bun, topped with ketchup & mayo, chopped white onions, shredded cheese, tender & juicy meat - $13.95', 13.95);
$items[] = new item('Burger','1/3 lb. beef patty topped with onions, lettuce, tomato, mayo - $9.95', 9.95);
$items[] = new item('Cheese Burger w/ egg','1/3 lb. beef patty topped with cheese, onions, lettuce, tomato, mayo, sunnyside up egg - $8.95', 8.95);
$items[] = new item('BBQ Bacon Burger','1/3 lb. beef patty topped with bacon spreaded with bbq sauce, onions, lettuce, tomato, mayo - $11.95', 11.95);
$items[] = new item('Salad','Plain salad - $5.95', 5.95);