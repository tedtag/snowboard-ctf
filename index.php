<!DOCTYPE html>
<?php
   include('session.php');
?>
<html lang="en-US">

  <!-- Head -->
  <?php
    include 'head.php';
  ?>

  <!-- Body -->
  <body>
    <!-- HTML5 introduced "semantics" into HTML. That means that HTML elements are more "descriptive". 
         The HTML4 equivalent for many of these semantic elements (header, main, aside, section, footer)
         are div tags. HTML4 can also accomplish semantics by using the "id" attribute or by including
         Aria attributes.
    -->
    <?php include 'header.php';?>

    <main class="container">
    
      <?php if (isset($_GET['wax']) && $_GET['wax'] == 'none'): ?>
      <section>
      Do NOT <a style="color: #C99;" href="./snowboard.php">upload</a> the following PHP code! 
      <!-- adminstrator: We don't want anyone finding out about our "super_secret_uploads_folder" directory... -->
        <pre style="color: white; text-align: left; background-color: rgba(0,0,0,.6); padding: 20px">
&#x3c;&#x68;&#x74;&#x6d;&#x6c;&#x3e;&#x0a;&#x20;&#x20;&#x3c;&#x62;&#x6f;&#x64;&#x79;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x66;&#x6f;&#x72;&#x6d;&#x20;&#x6d;&#x65;&#x74;&#x68;&#x6f;&#x64;&#x3d;&#x22;&#x47;&#x45;&#x54;&#x22;&#x20;&#x6e;&#x61;&#x6d;&#x65;&#x3d;&#x22;&#x3c;&#x3f;&#x70;&#x68;&#x70;&#x20;&#x65;&#x63;&#x68;&#x6f;&#x20;&#x62;&#x61;&#x73;&#x65;&#x6e;&#x61;&#x6d;&#x65;&#x28;&#x24;&#x5f;&#x53;&#x45;&#x52;&#x56;&#x45;&#x52;&#x5b;&#x27;&#x50;&#x48;&#x50;&#x5f;&#x53;&#x45;&#x4c;&#x46;&#x27;&#x5d;&#x29;&#x3b;&#x20;&#x3f;&#x3e;&#x22;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x69;&#x6e;&#x70;&#x75;&#x74;&#x20;&#x74;&#x79;&#x70;&#x65;&#x3d;&#x22;&#x54;&#x45;&#x58;&#x54;&#x22;&#x20;&#x6e;&#x61;&#x6d;&#x65;&#x3d;&#x22;&#x63;&#x6d;&#x64;&#x22;&#x20;&#x69;&#x64;&#x3d;&#x22;&#x63;&#x6d;&#x64;&#x22;&#x20;&#x73;&#x69;&#x7a;&#x65;&#x3d;&#x22;&#x38;&#x30;&#x22;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x69;&#x6e;&#x70;&#x75;&#x74;&#x20;&#x74;&#x79;&#x70;&#x65;&#x3d;&#x22;&#x53;&#x55;&#x42;&#x4d;&#x49;&#x54;&#x22;&#x20;&#x76;&#x61;&#x6c;&#x75;&#x65;&#x3d;&#x22;&#x45;&#x78;&#x65;&#x63;&#x75;&#x74;&#x65;&#x22;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x2f;&#x66;&#x6f;&#x72;&#x6d;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x70;&#x72;&#x65;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x3f;&#x70;&#x68;&#x70;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x69;&#x66;&#x28;&#x24;&#x5f;&#x47;&#x45;&#x54;&#x5b;&#x27;&#x63;&#x6d;&#x64;&#x27;&#x5d;&#x29;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x7b;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x73;&#x79;&#x73;&#x74;&#x65;&#x6d;&#x28;&#x24;&#x5f;&#x47;&#x45;&#x54;&#x5b;&#x27;&#x63;&#x6d;&#x64;&#x27;&#x5d;&#x29;&#x3b;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x7d;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x20;&#x20;&#x3f;&#x3e;&#x0a;&#x20;&#x20;&#x20;&#x20;&#x3c;&#x2f;&#x70;&#x72;&#x65;&#x3e;&#x0a;&#x20;&#x20;&#x3c;&#x2f;&#x62;&#x6f;&#x64;&#x79;&#x3e;&#x0a;&#x20;&#x20;&#x3c;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3e;&#x64;&#x6f;&#x63;&#x75;&#x6d;&#x65;&#x6e;&#x74;&#x2e;&#x67;&#x65;&#x74;&#x45;&#x6c;&#x65;&#x6d;&#x65;&#x6e;&#x74;&#x42;&#x79;&#x49;&#x64;&#x28;&#x22;&#x63;&#x6d;&#x64;&#x22;&#x29;&#x2e;&#x66;&#x6f;&#x63;&#x75;&#x73;&#x28;&#x29;&#x3b;&#x3c;&#x2f;&#x73;&#x63;&#x72;&#x69;&#x70;&#x74;&#x3e;&#x0a;&#x3c;&#x2f;&#x68;&#x74;&#x6d;&#x6c;&#x3e;
        </pre>
      </section>

      <?php else: ?>
      <section id="welcome">
        <h1> Welcome  <?php echo $_SESSION['login_user']; //pulls logged in user email?> <a href = "logout.php">Sign Out</a></h2> </h1>
      </section>
      <section id="snowboard">
        <a href="./snowboard.php">
          <img src="./images/snowboard.png">
        </a>
      </section>

      <section id="binding-left">
        <a href="./binding.php?type=Left">
          <img class="binding binding-left" src="./images/binding.png">
        </a>
      </section>

      <section id="binding-right">
        <a href="./binding.php?type=Right">
          <img class="binding" src="./images/binding.png">
        </a>
      </section>

      <?php endif ?>

      <section id="other-models" style="margin-top: 100px;">
        <a href="./other-models.php?name=d.lee" class="btn btn-dark btn-sm">
          View Our Other Models
        </a>
      </section>
    </main>

    <?php
      include 'footer.php';
    ?>

  </body>
</html>