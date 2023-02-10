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

$items[] = new item('Q-Classic Hotdog','Tender Juicy hotdog - $7.95', 7.95);
$items[] = new item('Q-Hotdog on Stick','Tender Juicy hotdog on a stick - $9.95', 9.95);
$items[] = new item('Fil/Am-style Hotdog','Tender Juicy hotdog, served with cream cheese and grilled onions on a toasted bun - $10.95', 10.95);
$items[] = new item('Filipino-style Hotdog','Steamed bun, topped with ketchup & mayo, chopped white onions, shredded cheese, tender & juicy meat - $13.95', 13.95);
$items[] = new item('Q-Burger','1/3 lb. beef patty topped with onions, lettuce, tomato, mayo - $9.95', 9.95);
$items[] = new item('Q-Cheeseburger w/ egg','1/3 lb. beef patty topped with cheese, onions, lettuce, tomato, mayo, sunnyside up egg - $8.95', 8.95);
$items[] = new item('Q-Bacon BBQ Burger','1/3 lb. beef patty topped with bacon spreaded with bbq sauce, onions, lettuce, tomato - $11.95', 11.95);
$items[] = new item('Q-Sundae','Plain vanilla sundae - $5.95', 5.95);