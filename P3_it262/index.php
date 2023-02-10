<?php 

    include 'Item.php';
    include 'Cart.php';
    
    $cart = new Cart();
    setlocale(LC_MONETARY, 'en_US');

?>
<!DOCTYPE html>
<html lang="en">
    <head>    
        <title>Quiban's Food Truck</title>
        <meta name="keywords" content="enter your keywords here" />
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <div class="banner">
                <h1>Quiban's Food Truck</h1>
            </div>
            <header>
                <div class="food"></div>
            </header>
            <div class="tagline">
                <h1>Grab a bite and Get full!</h1><br />
            </div>
            
            <section>
                <!-- START HTML FORM -->
                <form action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="post">
                    <?php 
                        foreach($items as $item){
                            echo '<div class=menu_item>	
                                    <label>
                                        <h3>'.$item->name.'</h3>
                                        <p>'.$item->description.'</p>
                                        <select name="'.$item->name.'" required title="0" tabindex="15">
                                                <option value="0">Please choose the quantity:</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                        </select>
                                    </label>
                                </div>';
                            if(isset($_POST[str_replace(' ','_',$item->name)])){
                                if($_POST[str_replace(' ','_',$item->name)] > 0){
                                    $item->quantity = intval($_POST[str_replace(' ','_',$item->name)]);
                                }
                            }
                        }
                    ?>
                    <div class="submit">
                        <input type="Submit" id="submit" value="Click Here for Total!" />
                    </div>
                    
                
                </form>
                <!-- END HTML FORM -->
            </section>
            <aside>
                <h1><em>Your order: </em></h1>

                <p>
                    <?php 

                    foreach($items as $item){
                        if($item->quantity > 0){
                            $output = '<strong>'.$item->name.'</strong></br>';
                            $output .= $item->quantity.' x $'.money_format('%!.2n',$item->price);
                            $output .= ' = ';
                            $output .= '$'.money_format('%!.2n',($item->quantity*$item->price)).'</br>';
                            echo $output;
                        }
                    }
                    
                    echo ''
                    ?>
                </p>

                <p>
                    Subtotal: <?='$'.money_format('%!.2n',$cart->getSubtotal($items));?>
                </p>
                <p>
                    Tax: <?='$'.money_format('%!.2n',$cart->getTax($items))?>
                </p>
                <p>
                    <strong>Total: </strong><?='$'.money_format('%!.2n',$cart->getTotal($items))?>
                </p><br /><br />
                <a href="https://docs.google.com/document/d/1khkOhJeQbrH19m1dDOC1RJFCegOWWrNyfNi555UAlOY/edit?usp=sharing">Click to View Web Log</a><br /><br />
                <a href="https://github.com/JoQuibs/P3_it262">Click to View GitHub Repo</a>
            </aside>
        </div>
    </body>
</html>