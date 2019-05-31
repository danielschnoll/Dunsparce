<!DOCTYPE html>

<html>
    <head>
        <title>Current Pokemon GO Events | Dunsparce.net - News for Pokemon GO Events, Research Tasks, and Eggs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/types.css">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Dunsparce</a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="research.php">Research</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="raids.php">Raids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eggs.php">Eggs</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <h1 class = "text-center">Active Raid Bosses</h1>
            </div>    
        </header>

        <div class="container">
            <?php 
                try{
                    $conn = new PDO('mysql:host=localhost;dbname=dunsparce.net', "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo 'ERROR: ' . $e->getMessage();
                }

                for($tierCount = 5; $tierCount > 0; $tierCount--){
                    echo "<h3>Tier ".$tierCount. "</h3>
                          <hr/>";
                    $prep_stmt = $conn->prepare("SELECT * FROM raids WHERE isActive = 1 AND tier=".$tierCount);
                    $prep_stmt->execute();
                    $row = $prep_stmt->fetchAll();
                    $count = $prep_stmt->rowCount();

                    for($x = 0; $x < $count; $x++) {
                        $weaknesses = $row[$x]['weaknesses'];
                        $str_arr = preg_split ("/\,/", $weaknesses); 

                        include("raids.cardHeader.php");
                        echo "  <!--Overview-->
                                <div class='row'>
                                <div class='col text-center'>
                                    <img style='width:122px;height:122px;' src='". $row[$x]['img']."'/>
                                    <h4 class='card-title'>". $row[$x]['name']. "</h4>

                                    <!--Data-->
                                    <div class='row'>
                                        <div class='col'>
                                            <h6>Normal</h6>
                                            <hr/>
                                            <h6>". $row[$x]['min_cp']. "-". $row[$x]['max_cp']. "cp</h6>
                                        </div>
                                        <div class='col'>
                                            <h6>Boosted</h6>
                                            <hr/>
                                            <h6>". $row[$x]['min_wb']. "-". $row[$x]['max_wb']. "cp</h6>
                                        </div>
                                    </div>
                                    <hr/>

                                    <!--Weaknesses -->
                                    <h6>Weaknesses: ";
                                for($i = 0; $i < sizeof($str_arr); $i++){
                                    echo "<span class='type ". $str_arr[$i]."'>". $str_arr[$i]. "</span> ";
                                } 
                                echo "</h6>
                                </div>
                                
                                <!--Counters -->
                                <div class='col'>";

                        $currBossDex = $row[$x]['dex_num'];
                        $stmt = "SELECT * FROM counters WHERE counterBossDex =" . $currBossDex ." ORDER BY priority;";
                        $inner_prepStmt = $conn->prepare($stmt);
                        $inner_prepStmt->execute();
                        $innerRow = $inner_prepStmt->fetchAll();
                        $innerCount = $inner_prepStmt->rowCount();

                        for($y = 0; $y < $innerCount; $y++){
                            echo "<!-- A single counter-->
                                <div class='row'>

                                    <!-- Counter pic-->
                                    <div class='col text-center'>
                                        <img style='width:64px;height:64px;' src='".$innerRow[$y]['img']. "'/>
                                        <p>". $innerRow[$y]['name']."</p>
                                    </div>
                                    
                                    <!-- Moves -->
                                    <div class='col text-center'>
                                        <h6><span class='type ". $innerRow[$y]['fast_type']. "'>". $innerRow[$y]['fast_type']. "</span> " . $innerRow[$y]['fast']."</h6>
                                        <h6><span class='type ". $innerRow[$y]['charged_type']. "'>". $innerRow[$y]['charged_type'] . "</span> " .$innerRow[$y]['charged']."</h6>
                                        <hr/>
                                    </div>

                                    <!-- Description -->
                                    <p class = 'text-center'>". $innerRow[$y]['description']. "</p>
                                </div>
                                <hr/>";
                        }
                        include("raids.cardFooter.php");
                    }
                }
            ?>
        </div>
    </body>
</html>