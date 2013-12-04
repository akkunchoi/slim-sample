<!DOCTYPE html>
<html lang="ja">
  <head>
    <title>Slim Bootstrap</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <h1>Slim Bootstrap</h1>
      <section>
        <?php if (isset($username) && $username){ ?>
          <p>Hello <span><?php echo htmlspecialchars($username) ?>!</span></p>
        <?php } ?>
        <form action="./new" method="post">
          Username: <input type="text" name="username" /><br />
          <input type="submit" value="Submit" class="btn" />
        </form>
      </section>
    </div>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
