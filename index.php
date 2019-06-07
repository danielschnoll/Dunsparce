<!DOCTYPE html>

<?php 
    //Get Heroku ClearDB connection information
    $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);


    $active_group = 'default';
    $query_builder = TRUE;

    try {
        $pdo = new PDO("mysql:host=".$cleardb_server."; dbname=".$cleardb_db, $cleardb_username, $cleardb_password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo = null;
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
                        <li class="nav-item active">
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
                    </ul>
                </div>
            </nav>
            <div class="jumbotron">
                <h1 class = "text-center">Dunsparce.net - Home</h1>
            </div>    
        </header>

        <div style="width:95%;" class="container">
            <?php
                echo"<div class = 'row'>
                <div class = 'col'>
                <h1>Current Events</h1>
                <hr/>";
                $prep_stmt = $conn->prepare("SELECT * FROM updates WHERE NOW() BETWEEN dateStart AND dateEnd ");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                var_dump($count);
                for($x = 0; $x < $count; $x++) {
                    echo "<div class ='card border-light'>
                            <div class='card-header bg-warning'>
                                <div class='row'>
                                    <div class='col'>
                                        <h3 class='card-title text-center'>". $row[$x]['title']. "</h4>
                                    </div>
                                </div>
                            </div>

                            <div class = 'card-body'>
                                <div class = 'row'>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;' class = 'card-subtitle text-muted'>Category: </span>". $row[$x]['category'] ."
                                    </div>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;' class = 'text-muted'>Start: </span>". $row[$x]['dateStart']. "<br/>
                                        <span style='font-weight:bold;' class = 'text-muted'>End: </span>". $row[$x]['dateEnd']. "
                                    </div>
                                </div>
                                
                                <hr/>
                                <p class='card-text'>". $row[$x]['text']. "</p>
                            </div>
                        </div>
                        <br/>";
                }
                
                echo "</div>
                    <div class = 'col'>
                    <h1>Upcoming Events</h1>
                    <hr/>";
                $prep_stmt = $conn->prepare("SELECT * FROM updates WHERE dateStart > CURDATE()");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x++) {
                    echo "<div class ='card border-light'>
                            <div class='card-header bg-success text-white'>
                                <div class='row'>
                                    <div class='col'>
                                        <h3 class='card-title text-center'>". $row[$x]['title']. "</h4>
                                    </div>
                                </div>
                            </div>

                            <div class = 'card-body'>
                                <div class = 'row'>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;' class = 'card-subtitle text-muted'>Category: </span>". $row[$x]['category'] ."
                                    </div>
                                    <div class = 'col'>
                                        <span style='font-weight:bold;' class = 'text-muted'>Start: </span>". $row[$x]['dateStart']. "<br/>
                                        <span style='font-weight:bold;' class = 'text-muted'>End: </span>". $row[$x]['dateEnd']. "
                                    </div>
                                </div>
                                
                                <hr/>
                                <p class='card-text'>". $row[$x]['text']. "</p>
                            </div>
                        </div>
                        <br/>";
                }
            ?>
                </div>
            </div>
            <hr/>
            <div class = 'row'>
                <div class = 'col'>
                <h1>Site News</h1>
                <hr/>
                <?php
                    $prep_stmt = $conn->prepare("SELECT *, DATE_FORMAT(posted, '%m/%d/%y') as create_date_formatted FROM updates WHERE posted BETWEEN NOW() - INTERVAL 30 DAY AND NOW() AND category='Site News'");
                    $prep_stmt->execute();
                    $row = $prep_stmt->fetchAll();
                    $count = $prep_stmt->rowCount();
                    for($x = 0; $x < $count; $x++) {
                        echo "<div class ='card border-light'>
                                <div class='card-header bg-danger text-white'>
                                    <div class='row'>
                                        <div class='col'>
                                            <h3 class='card-title text-center'>". $row[$x]['title']. "</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class = 'card-body'>
                                    <div class = 'row'>
                                        <div class = 'col'>
                                            <span style='font-weight:bold;' class = 'card-subtitle text-muted'>Category: </span>". $row[$x]['category'] ."
                                        </div>
                                        <div class = 'col'>
                                            <span style='font-weight:bold;' class = 'text-muted'>Posted: </span>". $row[$x]['posted']. "</h5>
                                        </div>
                                    </div>
                                    
                                    <hr/>
                                    <p class='card-text'>". $row[$x]['text']. "</p>
                                </div>
                            </div>
                            <br/>";
                    }
                ?>
                </div>
                <div class = 'col'>
                    <h1>Game Updates</h1>
                    <hr/>
                    <?php
                    $prep_stmt = $conn->prepare("SELECT *, DATE_FORMAT(posted, '%m/%d/%y') as create_date_formatted FROM updates WHERE posted BETWEEN NOW() - INTERVAL 30 DAY AND NOW() AND category='Game Update'");
                    $prep_stmt->execute();
                    $row = $prep_stmt->fetchAll();
                    $count = $prep_stmt->rowCount();
                    for($x = 0; $x < $count; $x++) {
                        echo "<div class ='card border-light'>
                                <div class='card-header bg-primary text-white'>
                                    <div class='row'>
                                        <div class='col'>
                                            <h3 class='card-title text-center'>". $row[$x]['title']. "</h4>
                                        </div>
                                    </div>
                                </div>

                                <div class = 'card-body'>
                                    <div class = 'row'>
                                        <div class = 'col'>
                                            <span style='font-weight:bold;' class = 'card-subtitle text-muted'>Category: </span>". $row[$x]['category'] ."
                                        </div>
                                        <div class = 'col'>
                                            <span style='font-weight:bold;' class = 'text-muted'>Posted: </span>". $row[$x]['posted']. "</h5>
                                        </div>
                                    </div>
                                    
                                    <hr/>
                                    <p class='card-text'>". $row[$x]['text']. "</p>
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