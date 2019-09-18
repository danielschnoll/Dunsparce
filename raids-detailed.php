<!DOCTYPE html>
<?php 
    //Get Heroku ClearDB connection information
    $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);

    try {
        // $conn = new PDO("mysql:host=localhost; dbname=dunsparce.net", "root", "");
        $conn = new PDO("mysql:host=".$cleardb_server."; dbname=".$cleardb_db, $cleardb_username, $cleardb_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>  
<html>
    <head>
        <title>Pokemon GO Raids | Dunsparce.net - News for Pokemon GO Events, Research Tasks, and Eggs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/types.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
                            <a class="nav-link" href="index.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item dropdown active">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Raids</a>
                            <div class = "dropdown-menu">
                                <a class = "dropdown-item" href="raids-list.php">List View</a>
                                <a class = "dropdown-item" href="raids-detailed.php">Detailed Counters View</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="research.php">Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eggs.php">Eggs</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron text-center">
                <h1>Active Raid Bosses</h1>
            </div>    
        </header>
        <script>
            $(document).ready(function(){
                $("#b1").click(function(){
                    $("h2#tier1").fadeToggle();
                    $("div#tier1").fadeToggle();
                });
                $("#b2").click(function(){
                    $("h2#tier2").fadeToggle();
                    $("div#tier2").fadeToggle();
                });
                $("#b3").click(function(){
                    $("h2#tier3").fadeToggle();
                    $("div#tier3").fadeToggle();
                });
                $("#b4").click(function(){
                    $("h2#tier4").fadeToggle();
                    $("div#tier4").fadeToggle();
                });
                $("#b5").click(function(){
                    $("h2#tier5").fadeToggle();
                    $("div#tier5").fadeToggle();
                });
            });
        </script>
        <div class="container">
            <div class = "row">
                <div class = "col">
                    <p> These are the Current Raid Bosses for the "A Unova Unveiling" Ultra Bonus Week 3 Event.
                        They are expected to change on <i>September 23</i> when the event ends. The list will be updated
                        as new information is revealed or as new bosses are added, as sometimes Niantic adds bosses
                        to the rotation mid-event. If you're looking for just the list of bosses, click <a href="raids-list.php">here</a>.
                    </p>
                    <p> <strong>NOTE</strong>: Always keep in mind the weather which you're raiding in. Weather plays 
                        an important factor in choosing the counters to use in a given scenario. This detailed list 
                        is by no means definitive, or final. Other sources may advise you differently. It merely serves 
                        as a general guide for how to craft your counter rosters when going up against difficult bosses.
                    </p>
                </div>
            </div>
            <div class = 'row text-center'>
                <div class = 'col'>
                    <h5>Use the Show/Hide toggles to make page navigation easier. All tiers are shown by default</h5>
                </div>
            </div>
            <div class = 'row text-center'>
                <div class = 'col'>
                    <button type="button" class="btn btn-secondary" id = 'b1'>Tier 1</button>
                </div>
                <div class = 'col'>
                    <button type="button" class="btn btn-secondary" id = 'b2'>Tier 2</button>
                </div>
                <div class = 'col'>
                    <button type="button" class="btn btn-secondary" id = 'b3'>Tier 3</button>
                </div>
                <div class = 'col'>
                    <button type="button" class="btn btn-secondary" id = 'b4'>Tier 4</button>
                </div>
                <div class = 'col'>
                    <button type="button" class="btn btn-secondary" id = 'b5'>Tier 5</button>
                </div>
            </div>
            <br/>
            <?php
                for($tierCount = 5; $tierCount > 2; $tierCount--){
                    echo "<h2 id = tier".$tierCount.">Tier ".$tierCount. "</h2>
                          <hr/>";
                    $prep_stmt = $conn->prepare("SELECT * FROM raids WHERE isActive = 1 AND tier=".$tierCount. " ORDER BY dex_num");
                    $prep_stmt->execute();
                    $row = $prep_stmt->fetchAll();
                    $count = $prep_stmt->rowCount();

                    for($x = 0; $x < $count; $x++) {
                        $weaknesses = $row[$x]['weaknesses'];
                        $resistances = $row[$x]['resistances'];
                        $str_arr_weak = preg_split ("/\,/", $weaknesses); 
                        $str_arr_resist = preg_split("/\,/", $resistances);

                        $fast = $row[$x]['fastMoveList'];
                        $fastArr = preg_split ("/\,/", $fast);
                        $charged = $row[$x]['chargedMoveList'];
                        $chargedArr = preg_split ("/\,/", $charged);

                        $primary = $row[$x]['main'];
                        try{
                            $secondary = $row[$x]['secondary'];
                        }
                        catch(Exception $e){
                            $secondary = NULL;
                        }
                        echo " 
                            <!--Overview-->
                            <div class='row' id=tier".$tierCount.">
                                <div class='col text-center'>
                                    <div class='card border-light'>
                                    <!--Overview Header-->
                                    <div class='card-header bg-danger text-center text-white'>
                                        <div class='row'>
                                            <div class='col'>
                                                <h5>Overview</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='card-body'>
                                    
                                    <img style='width:122px;height:122px;' src='". $row[$x]['img']."'/>
                                    <h2 class='card-title'>". $row[$x]['name']. "</h2>
                                    <div class = 'row text-center'>
                                        <div class = 'col'>
                                            <span class='type ". $primary."'>". $primary. "</span> ";
                                            if($secondary != NULL){
                                                echo "<span class='type ". $secondary."'>". $secondary. "</span>";
                                            }
                                echo"   </div>
                                    </div>
                                    <br/>
                                    
                                    <!--Data-->
                                    <table class='table'>
                                        <thead>
                                            <th>Max CP</th>
                                            <th>Attack</th>
                                            <th>Defense</th>
                                            <th>Stamina</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>".$row[$x]['absMaxCP']."</td>
                                                <td>".$row[$x]['atk']."</td>
                                                <td>".$row[$x]['def']."</td>
                                                <td>".$row[$x]['sta']."</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    
                                    <hr/>
                                    
                                    <!--Combat Power-->
                                    <h5 class = 'card-subtitle'>Combat Power Values</h5>
                                    <br/>
                                    <div class='row'>
                                        <div class='col'>
                                            <h6>Raid Boss</h6>
                                            <hr/>
                                            ". $row[$x]['raid_cp']. "cp
                                        </div>
                                        <div class='col'>
                                            <h6>Normal (lv20)</h6>
                                            <hr/>
                                            ". $row[$x]['min_cp']. "-". $row[$x]['max_cp']. "cp
                                        </div>
                                        <div class='col'>
                                            <h6>Boosted (lv25)</h6>
                                            <hr/>
                                            ". $row[$x]['min_wb']. "-". $row[$x]['max_wb']. "cp
                                        </div>
                                    </div>
                                    <hr/>

                                    <!--Weaknesses -->
                                    <h5 class = 'card-subtitle'>Type Matchups</h5>
                                    <br/>
                                    <h6>Weaknesses: ";
                                for($i = 0; $i < sizeof($str_arr_weak); $i++){
                                    echo "<span class='type ". $str_arr_weak[$i]."'>". $str_arr_weak[$i]. "</span> ";
                                } 
                                echo "</h6>

                                    <!--Resistances -->
                                    <h6>Resistances: ";
                                for($i = 0; $i < sizeof($str_arr_resist); $i++){
                                    echo "<span class='type ". $str_arr_resist[$i]."'>". $str_arr_resist[$i]. "</span> ";
                                } 
                                echo "</h6>
                                    <hr/>

                                    <!--Moves-->
                                    <h5 class = 'card-subtitle'>Move Sets</h5>
                                    <br/>
                                    <div class = 'row'>
                                        <!-- Fast -->
                                        <div class = 'col'>
                                            <h6>Fast:</h6>";
                                        
                                        for($i = 0; $i < sizeof($fastArr); $i+=2){
                                            echo $fastArr[$i]." <span class='type ". $fastArr[$i+1]. "'>". $fastArr[$i+1]."</span>
                                            <br/>";
                                        }
                                    echo"</div>
                                        <div class = 'col'>
                                            <h6>Charged:</h6>";
                                        for($i = 0; $i < sizeof($chargedArr); $i+=2){
                                            echo $chargedArr[$i]." <span class='type ". $chargedArr[$i+1]. "'>". $chargedArr[$i+1]."</span>
                                            <br/>";
                                        }
                                    echo "</div>
                                    </div>
                                </div>
                                </div>
                                </div> <!-- end col overview -->
                            

                                <!-- Counter -->
                                <div class='col'>
                                    <div class='card border-light'>

                                    <!--Counters Header-->
                                    <div class='card-header bg-danger text-center text-white'>
                                        <div class='row'>
                                            <div class='col'>
                                                <h5>Counters</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class='card-body'>";

                        $currBossName = $row[$x]['name'];
                        $stmt = "SELECT * FROM counters WHERE counterBossName =\"" . $currBossName ."\" ORDER BY priority;";
                        $inner_prepStmt = $conn->prepare($stmt);
                        $inner_prepStmt->execute();
                        $innerRow = $inner_prepStmt->fetchAll();
                        $innerCount = $inner_prepStmt->rowCount();

                        for($y = 0; $y < $innerCount; $y++){
                            echo "  <!-- A single counter-->
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
            <h4 class='text-center'>The last two tiers of raids are borderline trivial to choose counters for, so they aren't displayed</h4>
            <?php
                for($tierCount = 2; $tierCount>0; $tierCount--){

        echo "  <h2 class = 'text-left' id=tier".$tierCount.">Tier ". $tierCount. "</h2>
                <hr/>
                <div class='row' id=tier".$tierCount.">
                    <div class='col text-center'>
                        <div class='card border-light'>
                        <!--Overview Header-->
                        <div class='card-header bg-danger text-center text-white'>
                            <div class='row'>
                                <div class='col'>
                                    <h5>Boss List</h5>
                                </div>
                            </div>
                        </div>";
                    $prep_stmt = $conn->prepare("SELECT * FROM raids WHERE isActive = 1 AND tier=".$tierCount. " ORDER BY dex_num");
                    $prep_stmt->execute();
                    $row = $prep_stmt->fetchAll();
                    $count = $prep_stmt->rowCount();
                echo "  <div class='card-body'>";
                    for($i = 0; $i < $count; $i+=3){
                        echo "<div class ='row'>";
                        for($j = $i; $j < $i+3; $j++){
                            if($j >= $count){
                                break;
                            }
                            $fast = $row[$j]['fastMoveList'];
                            $fastArr = preg_split ("/\,/", $fast);
                            $charged = $row[$j]['chargedMoveList'];
                            $chargedArr = preg_split ("/\,/", $charged);
                            

                    echo"       <div class = 'col-md-4'>
                                    <img style='width:122px;height:122px;' src='". $row[$j]['img']."'/>
                                    <h2 class='card-title'>". $row[$j]['name']. "</h2>
                                    <span class='type ". $row[$j]['main']."'>". $row[$j]['main']. "</span> ";
                                    if($row[$j]['secondary'] != NULL){
                                        echo "<span class='type ". $row[$j]['secondary']."'>". $row[$j]['secondary']. "</span>";
                                    }
                            echo "  <div class='row'> <!-- START CP ROW -->
                                        <div class='col'>
                                            <h6>Normal</h6>
                                            <hr/>
                                            ". $row[$j]['min_cp']. "-". $row[$j]['max_cp']. "cp
                                        </div>
                                        <div class='col'>
                                            <h6>Boosted</h6>
                                            <hr/>
                                            ". $row[$j]['min_wb']. "-". $row[$j]['max_wb']. "cp
                                        </div>
                                    </div> <!-- END CP ROW -->
                                    <hr/>
                                    
                                    
                                    <div class = 'row mobile-view'> <!-- Start of Moves List -->
                                        <!-- Fast -->
                                        <div class = 'col text-right'>
                                            <h6>Fast Moves:</h6><br/>";
                                        for($k = 0; $k < sizeof($fastArr); $k+=2){
                                            echo $fastArr[$k]." <span class='type ". $fastArr[$k+1]. "'>". $fastArr[$k+1]."</span>
                                            <br/>";
                                        }
                            echo "      </div>

                                        <!-- Charged -->
                                        <div class = 'col text-left'>
                                            <h6>Charged Moves:</h6><br/>";
                                        for($k = 0; $k < sizeof($chargedArr); $k+=2){
                                            echo $chargedArr[$k]." <span class='type ". $chargedArr[$k+1]. "'>". $chargedArr[$k+1]."</span>
                                            <br/>";
                                        }
                                echo "  </div>
                                    </div><hr/><!-- End of Moves List -->
                                </div>";
                        }
                        echo "</div>";
                        

                    }
                    include("raids.cardFooter.php");
                }
            ?>
        </div>
    </body>
</html>

