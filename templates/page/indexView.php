

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon super blog</title>
    <link rel="stylesheet" type="text/css" href="../public/assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
</head>

    <body>
        <?php require_once ('../templates/partial/header.php');?> 
            <main> 
         
            <h1>THE BEST JAPANESE DRAMA RELEASED</h1>
            <!-- On boucle pour recuperer les articles pour les afficher-->
            <?php foreach ($articles as $article) { ?> 
            <section>
                <h3>Article</h3>
                <h3><?php echo $article['title'];?></h3> 
                <h2><?php echo $article['content'];?></h2>
                <h3><?php echo $article['created_at'];?></h3>
                </div> 
             </section>
            <?php } ?> 

            </main>
        <?php require_once ('../templates/partial/footer.php');?>  
    </body>
    
</html>

