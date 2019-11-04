<?php
   include('session.php');
?>
<!DOCTYPE html>

<html lang="en-US">
  <!-- Head -->
  <?php include 'head.php';?>

  <!-- Body -->
  <body>
    <!-- HTML5 introduced "semantics" into HTML. That means that HTML elements are more "descriptive". 
         The HTML4 equivalent for many of these semantic elements (header, main, aside, section, footer)
         are div tags. HTML4 can also accomplish semantics by using the "id" attribute or by including
         Aria attributes.
    -->
    <?php include 'header.php';?>

    <main>
      <h3>Other Models</h3>

      <section id="listing" style="text-align: center; margin: auto; padding: auto;">
        <?php
        // include("config.php");
        // Create connection
        // $conn = new mysqli($servername, $username, $password, $dbname);
        // // Check connection
        // if ($conn->connect_error) {
        //     die("Connection failed: " . $conn->connect_error);
        // } 

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $sql="INSERT INTO models (id, year, name, type) 
            VALUES (NULL,'$_POST[year]','$_POST[name]','$_POST[type]')";

            if(mysqli_query($db, $sql)){
                echo "Records inserted successfully.";
            } else{
                echo "ERROR: Unable to execute $sql. " . mysqli_error($link);
            }
            
        }

        $sql = "SELECT year, name, type FROM models WHERE name = '" . $_GET['name'] . "'";
        $result = $db->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table class='table table-striped table-dark'>";
            echo "<thead><tr><th scope='col'>Year</th><th scope='col'>Name</th><th scope='col'>Type</th></tr></thead><tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["year"]. "</td><td>" . $row["name"]. "</td><td>" . $row["type"]. "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "0 results";
        }
        if (isset($_GET['debug']) && $_GET['debug'] == 'true')
            echo "<br><b>Query:</b> " . $sql;
        // $conn->close();
        ?>

        <form action="" method="post" class="form-group">
          <div style="background-color: rgba(0,0,0,50)">Are we missing a d.lee snowboard model? Add it to our database! You can only do this if you're allowed to...</div>
          <table class='table table-striped table-dark'>
            <tr>
              <td><input class="form-control" type="text" name="year" placeholder="Snowboard year" readonly></td>
              <td><input class="form-control" type="text" name="name" value="d.lee" readonly></td>
              <td>
                <select class="form-control" name="type" readonly disabled>
                  <option value="Rocker" selected="selected">Rocker</option>
                  <option value="Camber">Camber</option>
                  <option value="Hybrid">Hybrid</option>
                </select> 
              </td>
              <td><input class="btn btn-primary" type="submit" value="Add Model" disabled></td>
            </tr>
          </table>
        </form>
      </section>

    </main>

    <?php include 'footer.php';?>

  </body>
</html>
