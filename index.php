<?php 
        require('./class/Village.class.php');
        session_start();
        if(!isset($_SESSION['v'])) // jeżeli nie ma w sesji naszej wioski
        {
            echo "Tworzę nową wioskę...";
            $v = new Village();
            $_SESSION['v'] = $v;
            //reset czasu od ostatniego odświerzenia strony
            $deltaTime = 0;
        } 
        else //mamy już wioskę w sesji - przywróć ją
        {
            $v = $_SESSION['v'];
            //ilosc sekund od ostatniego odświerzenia strony
            $deltaTime = time() - $_SESSION['time'];
        }
        $v->gain($deltaTime);
        
        if(isset($_REQUEST['action'])) 
        {
            switch($_REQUEST['action'])
            {
                case 'upgradeBuilding':
                    if($v->upgradeBuilding($_REQUEST['building']))
                    {
                        echo "Ulepszono budynek: ".$_REQUEST['building'];
                    }
                    else
                    {
                        echo "Nie udało się ulepszyć budynku: ".$_REQUEST['building'];
                    }
                    
                break;
                default:
                    echo 'Nieprawidłowa zmienna "action"';
            }
        }




        $_SESSION['time'] = time();
        
        
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="row border-bottom">
            <div class="col-12 col-md-3">
                Informacje o graczu
            </div>
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 col-md-3">
                        Drewno: <?php echo $v->showStorage("wood"); ?>
                    </div>
                    <div class="col-12 col-md-3">
                        Żelazo: <?php echo $v->showStorage("iron"); ?>
                    </div>
                    <div class="col-12 col-md-3">
                        Zasób 3
                    </div>
                    <div class="col-12 col-md-3">
                        Zasób 4
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                Guzik wyloguj
            </div>

        </header>
        <div>
 <b>LEVEL:
  <progress id="progress_bar" max="100" title="0"><span>10</span>%</progress>
    </b>
 <script type="text/javascript">
  var progressBar = document.getElementById('progress_bar');
  function update_progress(newValue){
    progressBar.value = newValue;
    progressBar.title = newValue;
    progressBar.getElementsByTagName('span')[0].textContent = newValue;
  }
 </script>
</div>
        <main class="row border-bottom">
            <div class="col-12 col-md-3 border-right">
                Lista budynków<br>
                Drwal, poziom <?php echo $v->buildingLVL("woodcutter"); ?> <br>
                Zysk/h: <?php echo $v->showHourGain("wood"); ?><br>
                <a href="index.php?action=upgradeBuilding&building=woodcutter">
                    <button>Rozbuduj drwala</button>
                </a><br>
                Kopalnia żelaza, poziom <?php echo $v->buildingLVL("ironMine"); ?> <br>
                Zysk/h: <?php echo $v->showHourGain("iron"); ?><br>
                <a href="index.php?action=upgradeBuilding&building=ironMine">
                    <button>Rozbuduj kopalnie żelaza</button>
                </a>
            </div>
            <div id="mel">

<div id="contener">
<div id="wioska" style="background-image: url(img\ramka.png);">
    <img src="mapa123.jpg" alt="wioska" style="height: 350px; width: 550px; " >
</div>
<div id="kont">
    </div>
    <div id="level" style="background-image: url(ramka.png); ">
    </div>
</div>
</div>

            <div class="col-12 col-md-6">
               
            </div>

            <div class="col-12 col-md-3 border-left">
                
            </div>
            
        </main>
        <footer class="row">
            <div class="col-12">
            <pre>
            <?php
            var_dump($v);
            var_dump($_REQUEST);
            ?>
            </pre>
            </div>
        </footer>
    </div>

</body>

</header>

<div style="text-align: center; width: 500px">
  <img src="mapa123.jpg" alt="wioska" style=" margin-left: auto; margin-right: auto; margin-top: 100px;">

    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>