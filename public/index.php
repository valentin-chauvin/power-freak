<!doctype html>
<html lang="en">
    <head>
        <?php include 'partials/meta.php';  ?>
        <title>The Road | Home</title>
    </head>

    <body>
      <div class="wrapper">

<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- DEBUT HEADER -->

        <header>
          <div class="container">
            <?php include 'partials/menu.php';  ?>
          </div>

        </header>

<!-- FIN HEADER -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- DEBUT MAIN -->

            <main>
              <section class="slider">
                <div class="flexslider">
                  <ul class="slides">
                    <li>
                      slide1
                    </li>
                    <li>
                      slide2
                    </li>
                    <li>
                      slide3
                    </li>
                  </ul>
                </div>
              </section>
            </main>

<!-- FIN MAIN -->
<!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
<!-- DEBUT FOOTER -->

<footer>

</footer>

<!-- FIN FOOTER -->

      </div>
      <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider();
  });
</script>
    </body>
</html>
