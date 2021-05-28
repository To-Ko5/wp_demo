<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TK Theme</title>
    <?php wp_head() ; ?>
    <!-- required -->
  </head>
  <body>
    <div>
      <h1><?php echo $title = the_title( ) ;?></h1>
    </div>
    <?php wp_footer() ; ?>
    <!-- required -->
  </body>
</html>
