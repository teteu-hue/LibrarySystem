<div class="container text-center">
<div class="row justify-content-between"> 

<?php 
    $books = $conn->getAllBook();
    
    Layout::showBooks($books) 
?>

</div>
</div>