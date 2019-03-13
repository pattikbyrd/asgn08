<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>asgn08</title>
  <style>
    h1 {
      background: #28c9c4;
      padding: 1em;
      text-align: center;
    }
    
  </style>
</head>
<body>
  
  
  <h1>asgn08</h1>
   
  
  <h2>Step 7</h2>
  
  <ul>
  
  <?php foreach($task as $key => $detail) : ?>
  
    <li><strong><?= $key; ?></strong> <?= $detail; ?></li>
    
    <?php endforeach; ?>
  
  </ul>
  
  
</body>
</html>