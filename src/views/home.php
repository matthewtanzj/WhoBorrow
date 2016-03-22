<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">

        <title>WhoBorrow?</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <!--
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        -->
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

    <!-- Fixed navbar -->
    <?php include 'views/navbar.php' ?>

    <div class="container">
        <div class="row">
            <!-- Category box -->
            <div class="col-lg-2">
                <?php include 'views/category.php' ?>
            </div>
            <div class="col-lg-6">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Search!</button>
                    </span>
                </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            
            <!-- Trending Section -->
            <div class="trending-section col-lg-10">
                <h3>Trending Items</h3>
            </div>
        </div>

    </div> <!-- /container -->

    

  </body>
</html>

<script>
    // show login modal if has login error
    if (<?php echo isset($loginError) ? "true" : "false"; ?>) {
        console.log('here');
        $("#loginButton").click();
    }

    // show signup modal if has signup error
    if (<?php echo isset($signupError) ? "true" : "false"; ?>) {
        console.log('here');
        $("#signupButton").click();
    }

    var count = 0;
    <?php foreach($trendingItemArray as $item) { ?>
        if (count < 5) {
             count++;
            $(".trending-section").append("<div class='thumbnail col-lg-2'><a href='?page=item&id=<?php echo $item['id'] ?>'><img src='...' alt=''></a><div class='caption'><span style='font-size:16px;''><?php echo $item['name'] ?></span><br><span style='color:grey;'><?php echo $item['price'] ?></span></div></div>");
        }
    <?php } ?>
    
</script>



