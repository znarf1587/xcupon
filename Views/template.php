<?php 
  namespace Views;

  $template = new Template();

  class Template{

    public function __construct(){
?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Store</title>
    <link rel="stylesheet" href="<?php echo URL; ?>Views\template\css\bootstrap.css">
  </head>
  <body>

<?php
    }

    public function __destruct(){
?>     
  </body>
  </html>
<?php
    }

  }
?>