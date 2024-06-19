<?php 

class Layout{

    public static function showBooks($books){
        foreach($books as $row){
            echo "<div class='col-4 w-100'> " .
               " <div class='card'> " .
                    "<img src='...' class='card-img-top' alt='...'>".
                            
                    " <div class='card-body'> " .
                        "<h5 class='card-title'>" . $row["nome_livro"] . "</h5> " .
                        "<p class='card-text'>" . $row["descricao"] . "</p>" .
                    "</div>
                </div>
            </div>";
        } 
    }
}

?>
