<?php

include_once('cgi/config.php');
include_once('cgi/common.php');
db_init();

$samples = get_rows('samples');

?>
<html lang="en">
<head>
  <title>Data Generator App!</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet" >
  <link href="css/themes/<?php echo $theme ?>.css" rel="stylesheet" >
</head>
<body>
  <div class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <a href="/" class="navbar-brand">Data Generator App!!!</a>
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar-main">
        <ul class="nav navbar-nav">
          <li>
            <a href="#">Home</a>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Build <?php include "info.txt" ?></a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="page-header">
        <h1>Sample App!</h1>
        <p class="lead">Data Generator App Demo for DevOps</p>
    </div>

    <h3>Sample Data</h3>
    <p>To create random samples, specify sample size and click on Run!</p>
      <div class="row">
        <div class="col-md-6">
          <form action="/cgi/run.php" method="post" class="form-inline">
            <label for="size">Sample Size:</label>
            <input id="size" class="form-control" type="text" size="20" name="size" required="" />
            <input type="submit" value="Run" class="form-control btn btn-primary"/>
          </form>
        </div>
        <div class="col-md-6"></div>
      </div>


      <table class="table table-hover">
        <caption>Total samples (so far): <b><?php print count($samples); ?></b></caption>
        <thead>
          <tr>
            <th>ID</th>
            <th>Value</th>
            <th>Created At</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($samples as $sample): ?>
            <tr>
              <td><?php print $sample['id']; ?></td>
              <td><?php print $sample['value']; ?></td>
              <td><?php print $sample['created_at']; ?></td>
            </tr>
          <?php endforeach; ?>
        <tbody>
      </table>
  </div>
</body>
</html>
