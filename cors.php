<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h1><?php echo $_SERVER['HTTP_HOST'] ?></h1>

  <script>
    setTimeout(() => {
      fetch('http://<?php echo $_GET['host']; ?>/api.php?t=' + Math.random(), {
        method: 'GET',
        credentials: 'include',
      }).then(r => r.json()).then(r => console.log(r));
    }, 100);
  </script>

</body>
</html>