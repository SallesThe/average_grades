<?php
    include 'connect.php';
    include 'average_grade.php';

    if(isset($averange))
    {
        $sql = "INSERT INTO aluno(nome, nota) VALUES($name, $averange);";
        Connect($sql);
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Average Grades</title>
    <link rel="stylesheet" href="style.css" type="text/css" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Average grades</h1>
        <h3 class=" <?php echo $tpMsg; ?> "> <?php echo $msg; ?></h3>
    </header>
    <main>
        <form action="index.php" method="post">
            <label for="name">Student name:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Insert student's name">
            <label for="first_grade">First grade:</label>
            <input type="number" class="form-control" name="first_grade" id="first_grade" placeholder="Insert a glade" max="10"> 
            <label for="second_grade">Second grade:</label>
            <input type="number" class="form-control" name="second_grade" id="second_grade" placeholder="Insert a glade" max="10">
            <br>
            <input type="submit" class="btn btn-primary" value="Send"> 
            <br>
            <a href="index.php" class="btn btn-secondary">New grade</a>
            <br>
            <a href="#" class="btn btn-warning">Student area</a>
        </form>
    </main>
</body>
</html>