<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        img{
            width: 40px;
        }
    </style>
    <title></title>
</head>
<body>
    <form action="index.php" method="post">
        <div class="d-flex flex-wrap justify-content-around m-3">
            <div class="p-2 flex-fill">

                <table class="table text-center table-bordered border-secondary w-80" style="border-spacing:2 1px; " >   
                    <tr class="text-center">
                        <th class=" col bg-light">
                        <span>23 NOV 11:00 H</span>
                    </th><th class="" style="background-color:grey">
                        <span>FINALIZADO</span>
                    </th><th class=" col bg-light">
                        <span>PARTIDO 9</span>
                    </th></tr>
                   <tr >
                    <td class=" bg-light">
                        <img src="./img/m.png" class="rounded-circle" alt="MARRUECOS" >
                        <label for="MARRUECOS">MARRUECOS</label>
                    </td>
                    <td class=" bg-secondary">
                        <input type="number" name="MARRUECOS1" style="width: 45px;" >
                        <input type="number" name="CROACIA1" style="width: 45px;" >
                    </td>
                    <td class=" bg-light">
                        <label for="CROACIA">CROACIA</label>
                        <img src="./img/c.png" class="rounded-circle" alt="CROACIA" >
                    </td>
                   </tr>
                
                    <tr class="text-center">
                        <th class="w-35 bg-light">
                        <span>23 NOV 11:00 H</span>
                        </th>
                        <th class="w-35" style="background-color:grey">
                        <span>FINALIZADO</span>
                        </th>
                        <th class="w-35 bg-light">
                        <span>PARTIDO 12</span>
                        </th>
                </tr>
                <tr >
                    <td class="w-35 bg-light">
                        <img src="./img/b.png" class="rounded-circle" alt="BELGIGA" >
                        <label for="BELGIGA">BELGIGA</label>
                    </td>
                    <td class="w-35 col bg-secondary">
                        <input type="number" name="BELGIGA1" style="width: 45px;" >
                        <input type="number" name="CANADA1" style="width: 45px;" >
                    </td>
                    <td class="w-35 bg-light">
                        <label for="CANADA">CANADA</label>
                        <img src="./img/cn.jpg" class="rounded-circle" alt="CANADA" >
                    </td>
                   </tr>
                
                    <tr class="text-center"><th class="bg-light">
                        <span>27 NOV 14:00 H</span>
                    </th><th style="background-color:grey">
                        <span>FINALIZADO</span>
                    </th><th class="bg-light">
                        <span>PARTIDO 26</span>
                    </th></tr>
                   <tr >
                    <td class="bg-light">
                        <img src="./img/b.png" class="rounded-circle" alt="BELGIGA" >
                        <label for="BELGIGA">BELGIGA</label>
                    </td>
                    <td class="col bg-secondary">
                        <input type="number" name="BELGIGA2" style="width: 45px;" >
                        <input type="number" name="MARRUECOS2" style="width: 45px;" >
                    </td>
                    <td class="bg-light">
                        <label for="MARRUECOS">MARRUECOS</label>
                        <img src="./img/m.png" class="rounded-circle" alt="MARRUECOS" >
                    </td>
                   </tr>
                
                    <tr class="text-center"><th class="bg-light">
                        <span>27 NOV 17:00 H</span>
                    </th><th style="background-color:grey">
                        <span>FINALIZADO</span>
                    </th><th class="bg-light">
                        <span>PARTIDO 27</span>
                    </th></tr>
                   <tr >
                    <td class="bg-light">
                        <img src="./img/c.png" class="rounded-circle" alt="CROACIA" >
                        <label for="CROACIA">CROACIA</label>
                    </td>
                    <td class="col bg-secondary">
                        <input type="number" name="CROACIA2" style="width: 45px;" >
                        <input type="number" name="CANADA2" style="width: 45px;" >
                    </td>
                    <td class="bg-light">
                        <label for="CANADA">CANADA</label>
                        <img src="./img/cn.jpg" class="rounded-circle" alt="CANADA" >
                    </td>
                   </tr>
                
                    <tr class="text-center"><th class="bg-light">
                        <span>01 DIC 16:00 H</span>
                    </th><th style="background-color:grey">
                        <span>FINALIZADO</span>
                    </th><th class="bg-light">
                        <span>PARTIDO 41</span>
                    </th></tr>
                   <tr >
                    <td class="bg-light">
                        <img src="./img/c.png" class="rounded-circle" alt="CROACIA" >
                        <label for="CROACIA">CROACIA</label>
                    </td>
                    <td class="col bg-secondary">
                        <input type="number" name="CROACIA3" style="width: 45px;" >
                        <input type="number" name="BELGIGA3" style="width: 45px;" >
                    </td>
                    <td class="bg-light">
                        <label for="BELGIGA">BELGIGA</label>
                        <img src="./img/b.png" class="rounded-circle" alt="BELGIGA" >
                    </td>
                   </tr>
                
                    <tr class="text-center"><th class="bg-light">
                        <span>01 DIC 16:00 H</span>
                    </th><th style="background-color:grey">
                        <span>FINALIZADO</span>
                    </th><th class="bg-light">
                        <span>PARTIDO 42</span>
                    </th></tr>
                   <tr >
                    <td class="bg-light">
                        <img src="./img/cn.jpg" class="rounded-circle" alt="CANADA" >
                        <label for="CANADA">CANADA</label>
                    </td>
                    <td class="col bg-secondary">
                        <input type="number" name="CANADA3" style="width: 45px;" >
                        <input type="number" name="MARRUECOS3" style="width: 45px;" >
                    </td>
                    <td class="bg-light">
                        <label for="MARRUECOS">MARRUECOS</label>
                        <img src="./img/m.png" class="rounded-circle" alt="MARRUECOS" >
                    </td>
                   </tr>
                </table>
            </div>

            <div class="p-2 flex-fill">
                <button class="rounded-pill w-100" style='border: #c2165e solid 1px;color:#c2165e;'" type="submit" >CLASIFICACION</button>
   
   <?php
    $ptsM = $parM = $ganM = $empM = $perM = $gfM = $gcM = $diffM = $ptsC = $parC = $ganC = $empC = $perC = $gfC = $gcC = $diffC = $ptsCN = $parCN = $ganCN = $empCN = $perCN = $gfCN = $gcCN = $diffCN = $ptsB = $parB = $ganB = $empB = $perB = $gfB = $gcB = $diffB = 0;
    $tableR = [];
    $imgM =" <img src='./img/m.png' class='rounded-circle' alt='MARRUECOS' >MARRUECOS";
    $imgC = "<img src='./img/c.png' class='rounded-circle' alt='CROACIA' >CROACIA";
    $imgCN = "<img src='./img/cn.jpg' class='rounded-circle' alt='CANADA' >CANADA"; 
    $imgB =" <img src='./img/b.png' class='rounded-circle' alt='BELGIGA' >BELGIGA";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if ($_POST["MARRUECOS1"] > $_POST["CROACIA1"]) {
            $ptsM += 3;
            $parM += 1;
            $parC += 1;
            $ganM += 1;
            $perC += 1;
            $gfM += $_POST["MARRUECOS1"];
            $gcM += $_POST["CROACIA1"];
            $gfC += $_POST["CROACIA1"];
            $gcC += $_POST["MARRUECOS1"];
         } elseif ($_POST["MARRUECOS1"] == $_POST["CROACIA1"]) {
            $ptsM += 1;
            $ptsC += 1;
            $parM += 1;
            $parC += 1;
            $empM += 1;
            $empC += 1;
            $gfM += $_POST["MARRUECOS1"];
            $gfC += $_POST["CROACIA1"];
            $gcM += $_POST["CROACIA1"];
            $gcC += $_POST["MARRUECOS1"];
        }else {
            $ptsC += 3;
            $parM += 1;
            $parC += 1;
            $ganC += 1;
            $perM += 1;
            $gfC += $_POST["CROACIA1"];
            $gcC += $_POST["MARRUECOS1"];
            $gfM += $_POST["MARRUECOS1"];
            $gcM += $_POST["CROACIA1"];
        }
        if ($_POST["BELGIGA1"] > $_POST["CANADA1"]) {
            $ptsB += 3;
            $parB += 1;
            $parCN += 1;
            $ganB += 1;
            $perCN += 1;
            $gfB += $_POST["BELGIGA1"];
            $gcB += $_POST["CANADA1"];
            $gfCN += $_POST["CANADA1"];
            $gcCN += $_POST["BELGIGA1"];
    } elseif ($_POST["BELGIGA1"] == $_POST["CANADA1"]) {
            $ptsB += 1 ;
            $ptsCN +=1 ;
            $parB += 1;
            $parCN += 1;
            $empB += 1;
            $empCN += 1;
            $gfB += $_POST["BELGIGA1"];
            $gfCN += $_POST["CANADA1"];
            $gcB += $_POST["CANADA1"];
            $gcCN += $_POST["BELGIGA1"];
    }else {
            $ptsCN +=3 ;
            $parB += 1;
            $parCN += 1;
            $ganCN += 1;
            $perB += 1;
            $gfCN += $_POST["CANADA1"];
            $gcCN += $_POST["BELGIGA1"];
            $gfB += $_POST["BELGIGA1"];
            $gcB += $_POST["CANADA1"];
    }
    if ($_POST["BELGIGA2"] > $_POST["MARRUECOS2"]) {
            $ptsB += 3;
            $parB += 1;
            $parM += 1;
            $ganB += 1;
            $perM += 1;
            $gfB += $_POST["BELGIGA2"];
            $gcB += $_POST["MARRUECOS2"];
            $gfM += $_POST["MARRUECOS2"];
            $gcM += $_POST["BELGIGA2"];
    } elseif ($_POST["BELGIGA2"] == $_POST["MARRUECOS2"]) {
            $ptsB += 1 ;
            $ptsM +=1 ;
            $parB += 1;
            $parM += 1;
            $empB += 1;
            $empM += 1;
            $gfB += $_POST["BELGIGA2"];
            $gfM += $_POST["MARRUECOS2"];
            $gcB += $_POST["MARRUECOS2"];
            $gcM += $_POST["BELGIGA2"];
    }else {
            $ptsM +=3 ;
            $parB += 1;
            $parM += 1;
            $ganM += 1;
            $perB += 1;
            $gfM += $_POST["MARRUECOS2"];
            $gcM += $_POST["BELGIGA2"];
            $gfB += $_POST["BELGIGA2"];
            $gcB += $_POST["MARRUECOS2"];
    }
    if ($_POST["CROACIA2"] > $_POST["CANADA2"]) {
            $ptsC += 3;
            $parC += 1;
            $parCN += 1;
            $ganC += 1;
            $perCN += 1;
            $gfC += $_POST["CROACIA2"];
            $gcC += $_POST["CANADA2"];
            $gfCN += $_POST["CANADA2"];
            $gcCN += $_POST["CROACIA2"];
    } elseif ($_POST["CROACIA2"] == $_POST["CANADA2"]) {
            $ptsC += 1 ;
            $ptsCN +=1 ;
            $parC += 1;
            $parCN += 1;
            $empC += 1;
            $empCN += 1;
            $gfC += $_POST["CROACIA2"];
            $gfCN += $_POST["CANADA2"];
            $gcC += $_POST["CANADA2"];
            $gcCN += $_POST["CROACIA2"];
    }else {
            $ptsCN +=3 ;
            $parC += 1;
            $parCN += 1;
            $ganCN += 1;
            $perC += 1;
            $gfCN += $_POST["CANADA2"];
            $gcCN += $_POST["CROACIA2"];
            $gfC += $_POST["CROACIA2"];
            $gcC += $_POST["CANADA2"];
    }
    if ($_POST["CROACIA3"] > $_POST["BELGIGA3"]) {
            $ptsC += 3;
            $parC += 1;
            $parB += 1;
            $ganC += 1;
            $perB += 1;
            $gfC += $_POST["CROACIA3"];
            $gcC += $_POST["BELGIGA3"];
            $gfB += $_POST["BELGIGA3"];
            $gcB += $_POST["CROACIA3"];
    } elseif ($_POST["CROACIA3"] == $_POST["BELGIGA3"]) {
            $ptsC += 1 ;
            $ptsB +=1 ;
            $parC += 1;
            $parB += 1;
            $empC += 1;
            $empB += 1;
            $gfC += $_POST["CROACIA3"];
            $gfB += $_POST["BELGIGA3"];
            $gcC += $_POST["BELGIGA3"];
            $gcB += $_POST["CROACIA3"];
    }else {
            $ptsB +=3 ;
            $parC += 1;
            $parB += 1;
            $ganB += 1;
            $perC += 1;
            $gfB += $_POST["BELGIGA3"];
            $gcB += $_POST["CROACIA3"];
            $gfC += $_POST["CROACIA3"];
            $gcC += $_POST["BELGIGA3"];
    }
    if ($_POST["CANADA3"] > $_POST["MARRUECOS3"]) {
            $ptsCN += 3;
            $parCN += 1;
            $parM += 1;
            $ganCN += 1;
            $perM += 1;
            $gfCN += $_POST["CANADA3"];
            $gcCN += $_POST["MARRUECOS3"];
            $gfM += $_POST["MARRUECOS3"];
            $gcM += $_POST["CANADA3"];
    } elseif ($_POST["CANADA3"] == $_POST["MARRUECOS3"]) {
            $ptsCN += 1 ;
            $ptsM +=1 ;
            $parCN += 1;
            $parM += 1;
            $empCN += 1;
            $empM += 1;
            $gfCN += $_POST["CANADA3"];
            $gfM += $_POST["MARRUECOS3"];
            $gcCN += $_POST["MARRUECOS3"];
            $gcM += $_POST["CANADA3"];
    }else {
            $ptsM +=3 ;
            $parCN += 1;
            $parM += 1;
            $ganM += 1;
            $perCN += 1;
            $gfM += $_POST["MARRUECOS3"];
            $gcM += $_POST["CANADA3"];
            $gfCN += $_POST["CANADA3"];
            $gcCN += $_POST["MARRUECOS3"];
    }
    }

//la differences +/-:
    $diffM = $gfM-$gcM;
    $diffC = $gfC-$gcC ;
    $diffCN = $gfCN-$gcCN ;
    $diffB =  $gfB-$gcB;

$tableR = array(
    array($imgM,$ptsM,$parM,$ganM,$empM,$perM,$gfM,$gcM,$diffM),
    array($imgC,$ptsC,$parC,$ganC,$empC,$perC,$gfC,$gcC,$diffC),
    array($imgB,$ptsB,$parB,$ganB,$empB,$perB,$gfB,$gcB,$diffB),
    array($imgCN,$ptsCN,$parCN,$ganCN,$empCN,$perCN,$gfCN,$gcCN,$diffCN));

    //tri:
    usort($tableR ,function($a,$b){
        if ($a[1] == $b[1]) {
            if($a[7] == $b[7]){
                return $a[6]< $b[6]? 1 : -1;
            }
            return $a[7]< $b[7]? 1 : -1;
        }
        return $a[1]< $b[1]? 1 : -1; 
    });

    //Affichage:
    echo " 
    <table style='border-collapse:separate;border-spacing:0 10px;' class='table text-center align-middle table-bordered'>
    <thead style='border:#c2165e;' > 
        <tr> 
        <th class='w-15'>#</th>
        <th class='w-45'>Selection</th>
        <th class='w-15'>PTS</th>
        <th class='w-15'>PAR</th>
        <th class='w-15'>GAN</th>
        <th class='w-15'>EMP</th>
        <th class='w-15'>PER</th>
        <th class='w-15'>G.F</th>
        <th class='w-15'>G.C</th> 
        <th class='w-15'>+/-</th>
        </tr>
    </thead>
    <tbody style='border: #c2165e solid 1px;' class='text-light'>";
    for ($k =0 ; $k < count($tableR); $k++){
        for ($j=0; $j < 1; $j++) {
            echo "<tr style='background-color: #870036;'><td class='col'>".($k+1)."</td>";      
                    echo "
                    <td class='col'>".$tableR[$k][0]."</td>
                    <td class='col'>".$tableR[$k][1]."</td>
                    <td class='col'>".$tableR[$k][2]."</td>
                    <td class='col'>".$tableR[$k][3]."</td>
                    <td class='col'>".$tableR[$k][4]."</td>
                    <td class='col'>".$tableR[$k][5]."</td>
                    <td class='col'>".$tableR[$k][6]."</td>
                    <td class='col'>".$tableR[$k][7]."</td>
                    <td class='col'>".$tableR[$k][8]."</td>
            ";
            }
    }
    echo "</tr>";
    echo "  </tbody>";
    echo "</table>";
    ?>
            </div>
        </div>
    </form>
</body>
</html>