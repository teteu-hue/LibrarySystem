<div class="container text-center">
<div class="row justify-content-between"> 

<?php for($i = 0; $i < count($books); $i++){ ?>
<div class="col-4 w-100">
    <div class="card">
        <img src="..." class="card-img-top" alt="...">
                
        <div class="card-body">
            <h5 class="card-title"><?php echo $books[$i]->getNameBook() ?></h5>
            <p class="card-text"><?php echo $books[$i]->getDescription() ?></p>
        </div>
    </div>
</div>
<?php } ?>

</div>
</div>