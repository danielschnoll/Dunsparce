<!DOCTYPE html>

<html>
    <head>
        <title>Dunsparce.net - News for Pokemon GO Events, Research Tasks, and Eggs</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
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
                            <a class="nav-link" href="events.php">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="research.php">Research</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="raids.php">Raids</a>
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
        <div class="container">
            <?php 
                try{
                    $conn = new PDO('mysql:host=localhost;dbname=dunsparce.net', "root", "");
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }catch(PDOException $e){
                    echo 'ERROR: ' . $e->getMessage();
                }
            ?>
            <h2>Recent Game Updates</h2>
            <hr/>
            <?php
                $prep_stmt = $conn->prepare("SELECT *, DATE_FORMAT(date, '%m/%d/%y') as create_date_formatted FROM updates WHERE date BETWEEN NOW() - INTERVAL 30 DAY AND NOW()");
                $prep_stmt->execute();
                $row = $prep_stmt->fetchAll();
                $count = $prep_stmt->rowCount();
                for($x = 0; $x < $count; $x++) {
                    echo "<div class ='card border-primary'>";
                    echo "<div class = 'card-body'>";
                    echo "<h5 class='card-title'>". $row[$x]['category']. "</h5>";
                    echo "<h6 class='card-subtitle mb-2 text-muted'>". $row[$x]['date']."</h6>";
                    echo "<p class='card-text'>". $row[$x]['text']. "</p>";
                    echo "</div></div><br/>";
                }
            ?>
        </div>
    </body>
</html>