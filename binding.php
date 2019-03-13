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
      <h3>
        <span id="binding-side">
          <?php 
            if(isset($_GET['type'])) 
              echo $_GET['type']
          ?>
        </span>
      Binding</h3>

      <section id="binding">
        <?php if (isset($_GET['type']) && $_GET['type'] == 'Left'): ?>
          <img class="binding binding-left" src="./images/binding.png">
        <?php else: ?>
          <img class="binding" src="./images/binding.png">
        <?php endif ?>
      </section>

    </main>

    <?php include 'footer.php';?>

  </body>
</html>