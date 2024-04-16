<div class="container text-center">
<div class="row justify-content-between"> 

<?php 
    $books = $db->getAllBook();
    
    Layout::showBooks($books);
?>

</div>
</div>