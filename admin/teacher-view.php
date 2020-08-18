<?php
session_start();
/**
 * Connect to DB
 */
require_once("config/db_config.php");
if(strlen($_SESSION['email']) == 0){
  header("Location:index.php");
}else{
    /**
     * Test Db Config
     */
    if($dbh){
        /**
         * Get id form url
         */
        if(isset($_GET['id'])){
           /**
            * Select Query
            */
            $sql = "SELECT * FROM `teachers` WHERE id = :id";
            /**
             * prepare statement
             */
            $stmt = $dbh->prepare($sql);
            /**
             * Bind Param
             */
            $stmt->bindParam(':id', $_GET['id']);
            /**
             * Execute Query
             */
            $stmt->execute();
            /**
             * Fetch Single Row
             */
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            /**
             * Array key to valiable Con
             */
            extract($row);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Deshboard | Edit Teachers</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php include_once('include/header.php') ?>
    <!-- Sidebar -->
    <?php include_once('include/sidebar.php') ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit View</h1>
          <p>View a single Teacher</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><a href="deshboard.php"><i class="fa fa-home fa-lg"></i></a> </li>
          <li class="breadcrumb-item"><a href="slider-show.php">Teacher</a></li>
          <li class="breadcrumb-item">View</li>
        </ul>
      </div>
      <div class="row">
      <div class="col-md-12">
        <div class="tile">
            <table class="table table-hover">
                <tr>
                    <th>Name</th>
                    <th><?php echo $name; ?></th>
                </tr>
                <tr>
                    <th>email</th>
                    <th><?php echo $email; ?></th>
                </tr>
                <tr>
                    <th>phone</th>
                    <th><?php echo $phone; ?></th>
                </tr>
                <tr>
                    <th>designation</th>
                    <th><?php echo $designation; ?></th>
                </tr>
                <tr>
                    <th>dob</th>
                    <th><?php echo $dob; ?></th>
                </tr>
                <tr>
                    <th>address</th>
                    <th><?php echo $address; ?></th>
                </tr>
                <tr>
                    <th>f_link</th>
                    <th><?php echo $f_link; ?></th>
                </tr>
                <tr>
                    <th>t_link</th>
                    <th><?php echo $t_link; ?></th>
                </tr>
                <tr>
                    <th>g_link</th>
                    <th><?php echo $g_link; ?></th>
                </tr>
                <tr>
                    <th>i_link</th>
                    <th><?php echo $i_link; ?></th>
                </tr>
                <tr>
                    <th>l_link</th>
                    <th><?php echo $l_link; ?></th>
                </tr>
                <tr>
                    <th>short_description</th>
                    <th><?php echo $short_description; ?></th>
                </tr>
                <tr>
                    <th>long_description</th>
                    <th><?php echo $long_description; ?></th>
                </tr>
                <tr>
                    <th>joining_date</th>
                    <th><?php echo $joining_date; ?></th>
                </tr>

                <tr>
                    <th>password</th>
                    <th><?php echo $password; ?></th>
                </tr>
                <tr>
                    <th>Slide Image</th>
                    <th>
                         <img src="<?php echo $image ?>" alt="!" height="200" />
                    </th>
                </tr>



                <tr>
                    <th>Status</th>
                    <th>
                         <?php
                         if($status == 1){
                            echo "<span class='text-success'>Active</span>";
                         }
                         else{
                            echo "<span class='text-danger'>Deactive</span>";
                         }

                           ?>
                    </th>
                </tr>

            </table>
        </div>
      </div>
      </div>
    </main>
   <!-- Footer -->
    <?php include_once('include/footer.php') ?>
  </body>
</html>
<?php
}
?>
