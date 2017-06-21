<html>

  <head>
    <title>Hello World</title>
  </head>

  <body>
    <?php
    $visitor = $_POST['name']
    echo "Hi,$visitor!";

    $log = fopen('log.txt','a+');//log visitor's name
    fwrite($log,$visitor."\n");
    fclose($log)
    
     ?>
