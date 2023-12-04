<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    <meta charset="UTF-8">
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 10;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. pilih privilagemu .</h1>
    </div>
    <p>

    <div>



    
</div>


    


<div>
<!--<a href="logout.php" class="btn btn-danger">administator</a>
<a href="logout.php" class="btn btn-danger">pengawas</a>
<a href="logout.php" class="btn btn-danger">siswa</a>-->
</div>
<div>
</body>
</html>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                <a href="siswa.php" class="btn btn-success pull-right">siswa</a>
                <a href="pengawas.php" class="btn btn-success pull-right">pengawas</a>
                <a href="administator.php" class="btn btn-success pull-right">administator</a>
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Informasi siswa</h2>
                        
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";

                    // Attempt select query execution
                    $sql = "SELECT * FROM biodata";
                    if ($result = mysqli_query($link, $sql)) {
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table table-bordered table-striped'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>#</th>";
                            echo "<th>Nama</th>";
                            echo "<th>tplahir</th>";
                            echo "<th>tglahir</th>";
                            echo "<th>Alamat</th>";
                            echo "<th>hobi</th>";
                            echo "<th>cita_cita</th>";
                            echo "<th>jmsaudara</th>";
                            echo "<th>id_kelas</th>";
                            echo "<th>id_agama</th>";
                            echo "<th>Pengaturan</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";
                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['tplahir'] . "</td>";
                                echo "<td>" . $row['tglahir'] . "</td>";
                                echo "<td>" . $row['address'] . "</td>";
                                echo "<td>" . $row['hobi'] . "</td>";
                                echo "<td>" . $row['cita_cita'] . "</td>";
                                echo "<td>" . $row['jmsaudara'] . "</td>";
                                echo "<td>" . $row['id_kelas'] . "</td>";
                                echo "<td>" . $row['id_agama'] . "</td>";
                                echo "<td>";
                                echo "<a href='read.php?id=" . $row['id'] . "' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                echo "<a href='update.php?id=" . $row['id'] . "' title='Update Record' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
                                echo "<a href='delete.php?id=" . $row['id'] . "' title='Delete Record' data-toggle='tooltip'><span class='glyphicon glyphicon-trash'></span></a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }

                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    
<h1>reset and loguot</h1>
</div>
<a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
<a href="logout.php" class="btn btn-warning">Sign Out of Your Account</a>

    </p>
</body>
</html>
