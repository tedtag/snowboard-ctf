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

      <section id="listing">
        <?php
        $servername = "localhost:3306";
        $username = "root_user";
        $password = "1qazxsw2!QAZXSW@";
        $dbname = "snowboard-ctf";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT year, name, type FROM models WHERE name = '" . $_GET['name'] . "'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "year: " . $row["year"]. " - Name: " . $row["name"]." - Type: " . $row["type"]. "<br>";
            }
        } else {
            echo "0 results";
            if (isset($_GET['true']) && $_GET['true'] == 'true'):
                echo "<br><b>Query:</b> ". $sql;
        }
        $conn->close();
        ?>
      </section>

    </main>

    <?php include 'footer.php';?>

  </body>
</html>