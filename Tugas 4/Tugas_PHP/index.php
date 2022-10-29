<?php 
$n=0;
$awal=0;
$beda=0;
  if($_POST!=null){
    $n=$_POST['suku'];
    $awal=$_POST['awal'];
    $beda=$_POST['beda'];
  }
  
  $result = $awal+($n-1)*$beda;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/style.css" />

    <title>Baris Aritmatika</title>
  </head>
  <body class="bg-black">
    <header class="h-32 w-full bg-black">
      <h1 class="text-center font-black text-4xl text-white">PROGRAM DERET ARITMATIKA</h1>
    </header>
    <main class="border-0 border-solid bg-black">
      <div class="w-4/5 lg:w-3/5 m-auto border-solid border border-black rounded-md bg-white">
        <form method="post" class="flex flex-col lg:flex-row justify-evenly lg:items-center lg:justify-around pb-9" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
          <div class="flex flex-col rounded-md lg:w-80">
            <label class="mx-3 mt-3" for="">Suku ke N</label>
            <input id="suku" class="border-solid border border-black rounded-md m-3" name="suku" type="text" size="20" value="<?php echo $n;?>" />
            <label class="mx-3" for="">Awalan</label>
            <input id="awal" class="border-solid border border-black rounded-md m-3" name="awal" type="text" size="20" value="<?php echo $awal;?>" />
            <label class="mx-3" for="">Beda</label>
            <input id="beda" class="border-solid border border-black rounded-md m-3" name="beda" type="text" size="20" value="<?php echo $beda;?>" />
          </div>
          <div class="lg:flex lg:flex-col lg:justify-center lg:self-center sm:py-8 lg:w-80">
            <label class="mx-3" for="">Suku ke-<span id="det">n</span></label>
            <input id="result" class="border-solid border border-black rounded-md m-3" type="text" size="10" value="<?php echo $result;?>" readonly />
            <button class="border" type="submit">Calculate</button>
          </div>
        </form>
      </div>
    </main>
  </body>
</html>
