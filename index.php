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
        <title>Dunsparce.net - News for Pokemon GO Events, Research Tasks, and Eggs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <style>
            .card {
                margin: 0 auto;
                float: none; 
                margin-bottom: 10px; 
                width:90%;
            }
        </style>
    </head>
    <body>
        
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
                <a class="navbar-brand" href="#">Dunsparce</a><button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mynav" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="news.php">News</a>
                        </li>
                        <li class="nav-item dropdown">
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
            <div class="jumbotron">
                <h1 class = "text-center">Events</h1>
            </div>    
        </header>
        <div style="width:95%;" class="container">
            <?php
                echo"
                <div class = 'row''>
                <div class = 'col' id = 'curr'>
                <h1>Current Events</h1>
                <hr/>";
                $prep_stmt = $conn->prepare("SELECT * FROM updates WHERE CONVERT_TZ(NOW(),'GMT','US/Eastern') < dateEnd AND CONVERT_TZ(NOW(),'GMT','US/Eastern') > dateStart ORDER BY dateEnd ASC");
                // $prep_stmt = $conn->prepare("SELECT * FROM updates WHERE NOW() < dateEnd AND NOW() > dateStart ORDER BY dateEnd ASC");

                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x++) {
                    echo "<div class ='card border-light text-black'>
                            <div class='card-header bg-primary'>
                                <div class='row'>
                                    <div class='col'>
                                        <h3 class='card-title text-center text-white'>". $row[$x]['title']. "</h4>
                                    </div>
                                </div>
                            </div>

                            <div class = 'card-body' style='background-size:cover; background-position:center; background-image: linear-gradient(270deg, rgba(242,242,242,0.90) -1%, rgba(242,242,242,0.90) 100%), url(\"".$row[$x]['img']."\")'>
                                <div class = 'row'>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;' class = 'card-subtitle'>Category: </span>". $row[$x]['category'] ."
                                    </div>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;'>Start: </span>". date('m/d/Y h:i a', strtotime($row[$x]['dateStart'])). "<br/>
                                        <span style='font-weight:bold;'>End: </span>". date('m/d/Y h:i a', strtotime($row[$x]['dateEnd'])). "
                                    </div>
                                </div>
                                
                                <hr/>
                                <p class='card-text'>". $row[$x]['text']. "</p>
                                <input type='button' class='btn btn-warning' value='Official Post' onclick='window.location=\"".$row[$x]['postlink'] ."\"'>
                            </div>
                        </div>
                        <br/>";
                }
                
                echo "</div>
                    </div>
                    <div class = 'row'>
                    <div class = 'col' id ='upcoming'>
                    <h1>Upcoming Events</h1>
                    <hr/>";
                $prep_stmt = $conn->prepare("SELECT * FROM updates WHERE CONVERT_TZ(NOW(),'SYSTEM','US/Eastern') < dateStart ORDER BY dateEnd ASC");
                // $prep_stmt = $conn->prepare("SELECT * FROM updates WHERE NOW() < dateStart ORDER BY dateEnd ASC");

                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x++) {
                    echo "<div class ='card border-light text-black'>
                            <div class='card-header bg-success text-white'>
                                <div class='row'>
                                    <div class='col'>
                                        <h3 class='card-title text-center'>". $row[$x]['title']. "</h4>
                                    </div>
                                </div>
                            </div>

                            <div class = 'card-body' style='background-size:cover; background-position:center; background-image: linear-gradient(270deg, rgba(242,242,242,0.90) -1%, rgba(242,242,242,0.90) 100%), url(\"".$row[$x]['img']."\")'>
                                <div class = 'row'>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;' class = 'card-subtitle'>Category: </span>". $row[$x]['category'] ."
                                    </div>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;'>Start: </span>". date('m/d/Y h:i a', strtotime($row[$x]['dateStart'])) . "<br/>
                                        <span style='font-weight:bold;'>End: </span>". date('m/d/Y h:i a', strtotime($row[$x]['dateEnd'])). "
                                    </div>
                                </div>
                                
                                <hr/>
                                <p class='card-text'>". $row[$x]['text']. "</p>
                                <input type='button' class='btn btn-warning' value='Official Post' onclick='window.location=\"".$row[$x]['postlink'] ."\"'>
                            </div>
                        </div>
                        <br/>";
                }
            ?>
                </div>
            </div>
        </div>
    </body>
</html>