<?php

function component($coolername, $coolerprice, $coolerid){
    $element = "
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
                <form action=\"product.php\" method=\"post\">
                    <div class=\"card shadow\">
                       
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">$coolername</h5>
                            <h6>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"fas fa-star\"></i>
                                <i class=\"far fa-star\"></i>
                            </h6>
                            <p class=\"card-text\">
                                Some quick example text to build on the card.
                            </p>
                            <h5>
                                
                                <span class=\"price\">Npr $coolerprice</span>
                            </h5>

                            <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button>
                             <input type='hidden' name='product_id' value='$coolerid'>
                        </div>
                    </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($coolername, $coolerprice, $coolerid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$coolerid\" method=\"post\" class=\"cart-items\">
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$coolername</h5>
                                <small class=\"text-secondary\">Seller: dailytuition</small>
                                <h5 class=\"pt-2\">Npr $coolerprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger \" name=\"remove\">Remove</button>
                            </div>
                            <div class=\"col-md-3 py-5\">
                                
                            </div>
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}
















