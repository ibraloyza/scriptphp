<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bsic of php </title>
</head>
<body>
    <?php
    // php if 
    if (5>3){
        echo "have a good day!<br>";
    }

    $t = 14;
    if ($t < 20){
        echo "welcome! <br>";
    }
    
    // php if operators 
    $x = 14;
    if($x ==14){
        echo "yes its equal <br>";
    }

    $a =12;
    $b =12.5;
    if ($a === $b){
        echo "yes";
    }else{
        echo "there is defferent data Type <br>";
    }

    $y =200;
    $l =33;
    $c = 500;
    if ( $y > $l && $y <$c ){
        echo "both condition are true <br>";
    }


    // phop if..else 
    $d = date('H');
    echo '<p> The hour (of the server ) is' .$d ;
    echo ', and will give the following massage: </p>';
    if ($d < '20'){
        echo 'have a good day!<br>';
    }else{
        echo 'have a good night!<br>';
    }

    if($d <'20'){
        echo "have a good morning!<br>";
    }elseif($d <'20'){
        echo 'have a good day!<br>';
    }else{
        echo 'have a good night!<br>';
    }
    // php shorthand if 
    //one line if statement
    $f = 5;
    if($f <10) $r = 'hello <br>';
    echo $r;
    // php nested if
    
    //An if inside an if:
     if ($f <10 ){
        echo 'obave 10<br>';
        if ($f <20){
            echo 'and olso above 20 <br>';
        }else{
            echo 'but not above 20<br>';
        }
     }  
     
     //The PHP switch Statement
     $favcolor = "green";
     switch ($favcolor) {
        case "green":
          echo "Your favorite color is red!<br>";
          break;
        case "blue":
          echo "Your favorite color is blue!<br>";
          break;
        case "green":
          echo "Your favorite color is green!<br>";
          break;
        default:
          echo "Your favorite color is neither red, blue, nor green!<br>";
      }

      //loops
      //while loop
      $i =1;
      while($i <6){
        echo $i;
        $i++ ;
      }
     // The break Statement

      $i =1;
      while($i <6){
        if ($i == 3) break;
        echo $i ;
        $i++;
      }
      //Alternative Syntax
      $i =1;
      while($i <6):
        echo $i ;
        $i++;
      endwhile;

      //step 10
      $i = 0;
      while ($i < 100) {
        $i+=10;
        echo "$i<br>";
    }




    ?>
</body>
</html>