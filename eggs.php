<!DOCTYPE html>
<?php 
    //Get Heroku ClearDB connection information
    $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);

    try {
        //$conn = new PDO("mysql:host=localhost; dbname=dunsparce.net", "root", "");
        $conn = new PDO("mysql:host=".$cleardb_server."; dbname=".$cleardb_db, $cleardb_username, $cleardb_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>  
<html>
    <head>
        <title>Current Egg Rotation | Dunsparce.net - News for Pokemon GO Events, Research Tasks, and Eggs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <style>
            img{
                width: 100px;
                height: 100px;
            }
            @media (max-width: 411px){
                img{
                    width: 83px;
                    height: 83px;
                }
            }

            @media (max-width: 375px){
                img{
                    width: 90px;
                    height: 90px;
                }
            }
            @media (max-width: 360px){
                img{
                    width: 83px;
                    height: 83px;
                }
            }
        </style>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                <a class="navbar-brand" href="index.php">Dunsparce</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="raids.php">Raids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="research.php">Research</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="eggs.php">Eggs</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <h1 class = "text-center">Current Egg Rotation</h1>
            </div>    
        </header>
        <div class = "container">

            <!--2K Eggs-->
            <p><img src="/img/egg_2k.png" style="width:26px;height:32px;"/> 2km</p>
            <hr/>
            <?php
                $prep_stmt = $conn->prepare("SELECT * FROM eggs WHERE egg_dist = 2 AND isActive = 1 ORDER BY dex_num");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x+=6) {
                    echo "<div class ='row justify-content-md-center'>";
                    for($y = $x; $y < $x+6; $y++){
                        if($y >= $count){
                            break;
                        }
                        echo "<div class = 'col-2-md text-center text-black'>
                                <div class='container bg-light'>
                                    <img src='".$row[$y]['img']."'/>
                                    <br/><h6>";
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo $row[$y]['name'];
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo "</h6>
                                    <hr/>
                                    <p>cp ".$row[$y]['min_cp']."-".$row[$y]['max_cp']."</p></div>";
                        echo "</div>";
                    }
                    echo "</div><br/>";
                }
            ?>

            <!--5K Eggs-->
            <p><img src="/img/egg_5k.png" style="width:26px;height:32px;"/> 5km</p>
            <hr/>
            <?php
                $prep_stmt = $conn->prepare("SELECT * FROM eggs WHERE egg_dist = 5 ORDER BY dex_num");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x+=6) {
                    echo "<div class ='row justify-content-md-center'>";
                    for($y = $x; $y < $x+6; $y++){
                        if($y >= $count){
                            break;
                        }
                        echo "<div class = 'col-2-md text-center text-black'>
                                <div class='container bg-light'>
                                    <img src='".$row[$y]['img']."'/>
                                    <br/><h6>";
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo $row[$y]['name'];
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo "</h6>
                                    <hr/>
                                    <p>cp ".$row[$y]['min_cp']."-".$row[$y]['max_cp']."</p></div>";
                        echo "</div>";
                    }
                    echo "</div><br/>";
                }
            ?>

            <!--7K Eggs-->
            <p><img src="/img/egg_7k.png" style="width:26px;height:32px;"/> 7km</p>
            <hr/>
            <?php
                $prep_stmt = $conn->prepare("SELECT * FROM eggs WHERE egg_dist = 7 UNION SELECT * FROM eggs WHERE baby = 1 ORDER BY dex_num");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x+=6) {
                    echo "<div class ='row justify-content-md-center'>";
                    for($y = $x; $y < $x+6; $y++){
                        if($y >= $count){
                            break;
                        }
                        echo "<div class = 'col-2-md text-center text-black'>
                                <div class='container bg-light'>
                                    <img style='width:100px;height:100px;' src='".$row[$y]['img']."'/>
                                    <br/><h6>";
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo $row[$y]['name'];
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo "</h6>
                                    <hr/>
                                    <p>cp ".$row[$y]['min_cp']."-".$row[$y]['max_cp']."</p></div>";
                        echo "</div>";
                    }
                    echo "</div><br/>";
                }
            ?>

            <!--10K Eggs-->
            <p><img src="/img/egg_10k.png" style="width:26px;height:32px;"/> 10km</p>
            <hr/>
            <?php
                $prep_stmt = $conn->prepare("SELECT * FROM eggs WHERE egg_dist = 10 AND isActive = 1 ORDER BY dex_num");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x+=6) {
                    echo "<div class ='row justify-content-md-center'>";
                    for($y = $x; $y < $x+6; $y++){
                        if($y >= $count){
                            break;
                        }
                        echo "<div class = 'col-2-md text-center text-black'>
                                <div class='container bg-light'>
                                    <img style='width:100px;height:100px;' src='".$row[$y]['img']."'/>
                                    <br/><h6>";
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo $row[$y]['name'];
                                    if ($row[$y]['shiny']){
                                        echo "<img style='width:15px;height:15px;' src='/img/sparkles.png'/>";
                                    }
                                    echo "</h6>
                                    <hr/>
                                    <p>cp ".$row[$y]['min_cp']."-".$row[$y]['max_cp']."</p></div>";
                        echo "</div>";
                    }
                    echo "</div><br/>";
                }
            ?>
        </div>
    </body>
    
