<!DOCTYPE html>
<?php
    try{
        $conn = new PDO('mysql:host=localhost;dbname=dunsparce.net', "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        echo 'ERROR: ' . $e->getMessage();
    }
    $message = "";
    if(isset($_POST['SubmitNewBoss'])){
        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO raids (name, img, dex_num, main, secondary, 
                                absMaxCP, atk, def, sta, raid_cp, max_cp, max_wb, min_cp, min_wb, 
                                tier, isActive, weaknesses, resistances, fastMoveList, chargedMoveList) 
                                VALUES (:name, :img, :dex_num, :main, :secondary, 
                                :absMaxCP, :atk, :def, :sta, :raid_cp, :max_cp, :max_wb, :min_cp, :min_wb, 
                                :tier, :isActive, :weaknesses, :resistances, :fastMoveList, :chargedMoveList)");
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->bindParam(':dex_num', $_POST['dex_num']);
        $stmt->bindParam(':main', $_POST['main']);
        $stmt->bindParam(':secondary', $_POST['secondary']);
        $stmt->bindParam(':absMaxCP', $_POST['absMaxCP']);
        $stmt->bindParam(':atk', $_POST['atk']);
        $stmt->bindParam(':def', $_POST['def']);
        $stmt->bindParam(':sta', $_POST['sta']);
        $stmt->bindParam(':raid_cp', $_POST['raid_cp']);
        $stmt->bindParam(':max_cp', $_POST['max_cp']);
        $stmt->bindParam(':max_wb', $_POST['max_wb']);
        $stmt->bindParam(':min_cp', $_POST['min_cp']);
        $stmt->bindParam(':min_wb', $_POST['min_wb']);
        $stmt->bindParam(':tier', $_POST['tier']);
        $stmt->bindParam(':isActive', $_POST['isActive']);
        $stmt->bindParam(':weaknesses', $_POST['weaknesses']);
        $stmt->bindParam(':resistances', $_POST['resistances']);
        $stmt->bindParam(':fastMoveList', $_POST['fastMoveList']);
        $stmt->bindParam(':chargedMoveList', $_POST['chargedMoveList']);

        $stmt->execute();

    }

    if(isset($_POST['SubmitNewCounter'])){
        // prepare sql and bind parameters
        $stmt = $conn->prepare("INSERT INTO counters (name, img, dex_num, counterBossDex, priority, 
                                fast, fast_type, charged, charged_type, description) 
                                VALUES (:name, :img, :dex_num, :counterBossDex, :priority, 
                                :fast, :fast_type, :charged, :charged_type, :description)");

        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':img', $_POST['img']);
        $stmt->bindParam(':dex_num', $_POST['dex_num']);
        $stmt->bindParam(':counterBossDex', $_POST['counterBossDex']);
        $stmt->bindParam(':priority', $_POST['priority']);
        $stmt->bindParam(':fast', $_POST['fast']);
        $stmt->bindParam(':fast_type', $_POST['fast_type']);
        $stmt->bindParam(':charged', $_POST['charged']);
        $stmt->bindParam(':charged_type', $_POST['charged_type']);
        $stmt->bindParam(':description', $_POST['description']);

        $stmt->execute();
    }
?>
<html>
    <head>
        <title>Current Pokemon GO Events | Dunsparce.net - News for Pokemon GO Events, Research Tasks, and Eggs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
                            <a class="nav-link" href="raids.php">Raids</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="research.php">Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="eggs.php">Eggs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="events.php">Events</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <h1 class = "text-center">Site Management</h1>
            </div>
        </header>
        <div class="container text-center">
            <h2 class = 'text-left'>Raid Bosses</h2>
            <div class ='row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Insert New Raid Boss</h5>
                    <?php echo $message;?>
                    <form class = "form-group" method="post">
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Name</label>
                                <input name="name" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Img</label>
                                <input name="img" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Dex #</label>
                                <input name="dex_num" type="number" min="1" max= "999"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Primary</label>
                                <input name="main" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Secondary</label>
                                <input name="secondary" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Max CP</label>
                                <input name="absMaxCP" type="number" min="0"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Attack</label>
                                <input name="atk" type="number" min="0"/>
                            </div>
                            <div class = 'col'>
                                <label>Defense</label>
                                <input name="def" type="number" min="0"/>
                            </div>
                            <div class = 'col'>
                                <label>Stamina</label>
                                <input name="sta" type="number" min="0"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Raid CP</label>
                                <input name="raid_cp" type="number" min="0"/>
                            </div>
                            <div class = 'col'>
                                <label>Max Catch</label>
                                <input name="max_cp" type="number" min="0"/>
                            </div>
                            <div class = 'col'>
                                <label>WB Max Catch</label>
                                <input name="max_wb" type="number" min="0"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Min Catch</label>
                                <input name="min_cp" type="number" min="0"/>
                            </div>
                            <div class = 'col'>
                                <label>WB Min Catch</label>
                                <input name="min_wb" type="number" min="0"/>
                            </div>
                            <div class = 'col'>
                                <label>Raid Tier</label>
                                <input name="tier" type="number" min="1" max = "5"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Active?</label>
                                <input name="isActive" type="checkbox" value = "1"/>
                            </div>
                            <div class = 'col'>
                                <label>Weaknesses</label>
                                <input name="weaknesses" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Resistances</label>
                                <input name="resistances" type="text"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Fast Move List</label>
                                <input name="fastMoveList" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Charged Move List</label>
                                <input name="chargedMoveList" type="text"/>
                            </div>
                        </div>
                        <br/>
                        <input type = "submit" name="SubmitNewBoss" value="Submit"/>
                    </form>
                </div>
            </div>
            <br/>
            <div class = 'row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Insert New Counter Boss</h5>
                    <form class = "form-group" method="post">
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Name</label>
                                <input name="name" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Img</label>
                                <input name="img" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Dex #</label>
                                <input name="dex_num" type="number" min="1" max= "999"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Counter Boss Dex #</label>
                                <input name="counterBossDex" type="number" min="1" max= "999"/>
                            </div>
                            <div class = 'col'>
                                <label>Priority</label>
                                <input name="priority" type="number" min="1" max = "10"/>
                            </div>
                            <div class = 'col'>
                                <label>Fast Move</label>
                                <input name="fast" type="text"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Fast Move Type</label>
                                <input name="fast_type" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Charged Move</label>
                                <input name="charged" type="text"/>
                            </div>
                            <div class = 'col'>
                                <label>Charged Move Type</label>
                                <input name="charged_type" type="text"/>
                            </div>
                        </div>
                        <div class = 'row'>
                            <div class = 'col'>
                                <label>Description</label>
                                <input name="description" type="text" value=""/>
                            </div>
                        </div>
                        <br/>
                        <input name="SubmitNewCounter" type ="submit" value="Submit"/>
                    </form>
                </div>
            </div>
            <br/>
            <div class ='row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Set Active Raid Boss to Inactive</h5>
                    <form>
                        <select>
                            <option disabled selected value> -- select an option -- </option>
                            <?php
                                $prep_stmt = $conn->prepare("SELECT * FROM raids WHERE isActive = 1");
                                $prep_stmt->execute();
                                $row = $prep_stmt->fetchAll();
                                $count = $prep_stmt->rowCount();
            
                                for($x = 0; $x < $count; $x++) {
                                    echo "<option value='".$row[$x]['name']."'>". $row[$x]['name']. "</option>";
                                }
                            ?>
                        </select>
                        <input type = 'button' value="Submit"/>
                    </form>
                    
                </div>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Set Inactive Raid Boss to Active</h5>
                    <form>
                        <select>
                            <option disabled selected value> -- select an option -- </option>
                            <?php
                                $prep_stmt = $conn->prepare("SELECT * FROM raids WHERE isActive = 0");
                                $prep_stmt->execute();
                                $row = $prep_stmt->fetchAll();
                                $count = $prep_stmt->rowCount();
            
                                for($x = 0; $x < $count; $x++) {
                                    echo "<option value='".$row[$x]['name']."'>". $row[$x]['name']. "</option>";
                                }
                            ?>
                        </select>
                        <input type = 'button'/ value="Submit">
                    </form>
                </div>
            </div>
            <hr/>

            <h2 class = 'text-left'>Research</h2>
            <div class = 'row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Add New Research</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Set Active Research to Inactive</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Set Inactive Research to Active</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
            </div>
            <hr/>
            
            <h2 class = 'text-left'>Egg Pool</h2>
            <div class = 'row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Add New Pokemon to Egg Pool</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Disable Pokemon from Egg Pool</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Enable Pokemon from Egg Pool</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
            </div>
            <hr/>

            <h2 class = 'text-left'>Events</h2>
            <div class = 'row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Add New Event Post</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
            </div>
            <hr/>

            <h2 class = 'text-left'>News</h2>
            <div class = 'row'>
                <div class = 'col'>
                    <h5 style="text-decoration: underline;">Add New News Post</h5>
                    <form>
                        <input type="text"/>
                    </form>
                </div>
            </div>
            <br/>
        </div>
    </body>
</html>