<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="login.css">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="dashboard.php">Dashboard</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="classesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Classes</a>
                <div class="dropdown-menu" aria-labelledby="classesDropdown">
                    <a class="dropdown-item" href="add_class.php">Add Class</a>
                    <a class="dropdown-item" href="edit_class.php">View/Edit Class</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="studentsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Students</a>
                <div class="dropdown-menu" aria-labelledby="studentsDropdown">
                    <a class="dropdown-item" href="add_student.php">Add Student</a>
                    <a class="dropdown-item" href="edit_student.php">View/Edit Student</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" id="resultsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Results</a>
                <div class="dropdown-menu" aria-labelledby="resultsDropdown">
                    <a class="dropdown-item" href="add_result.php">Add Result</a>
                    <a class="dropdown-item" href="edit_result.php">View/Edit Result</a>

                </div>
                
            </li>
            <li class="nav-item">
                <a class="nav-link" href="result.php">Show Result</a>
               
            </li>
            <li>
                 <a href="logout.php" class="nav-link">Logout</a>
    </li>
        </ul>
    </nav>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4">See results</h1>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Select student</h2>
                        <form action="student.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <?php
                                        include('init.php');

                                        $class_result=mysqli_query($conn,"SELECT `cname` FROM `class`");
                                            echo '<select name="class" class="form-control">';
                                            echo '<option selected disabled>Select Class</option>';
                                            while($row = mysqli_fetch_array($class_result)){
                                                $display=$row['cname'];
                                                echo '<option value="'.$display.'">'.$display.'</option>';
                                            }
                                        echo'</select>'
                                    ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="rno" class="form-control" placeholder="Roll No">
                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Get Result</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
