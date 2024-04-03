<?php 

class Layout{

    public static function showBooks($books){
        for($i = 0; $i < count($books); $i++){
            echo "<div class='col-4 w-100'> " .
               " <div class='card'> " .
                    "<img src='...' class='card-img-top' alt='...'>".
                            
                    " <div class='card-body'> " .
                        "<h5 class='card-title'>" . $books[$i]->getNameBook() . "</h5> " .
                        "<p class='card-text'>" . $books[$i]->getDescription() . "</p>" .
                    "</div>
                </div>
            </div>";
        } 
    }
}

?>
