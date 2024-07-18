<!-- je cree ma page View pour mon MVC  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super blog</title>
    <link rel="stylesheet" type="text/css" href="../public/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>

<?php require_once ('../templates/partial/header.php');?> 

<main id="divaddArticle"> 

    
    <h2 id="addArticle">Add an Article</h2>

    <?php if ($isRequestOk) { ?>  
        <!-- $isRequestOk===true de base donc $isRequestOk suffit ici -->

        <p> Article has been saved </p>

    <?php }?>

    <form method="post">
            <label>
                Title
                <input type="text" name="title">
            </label>
            <label>
                Content
                <input type="text" name="content">
            </label>
            <input type="submit" value="submit">
    </form>
<form>
    <input name="_method" type="hidden" value="DELETE">

<button type="submit" class="btn btn-danger btn-delete" id="borrar_datos">
  <span class="btn-txtb">Delete record</span>
</button>

</form>


</main>

<?php require_once ('../templates/partial/footer.php');?>  