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


  <h2>Step 8</h2>

  <h3>Spring Cleaning</h3>

  <ul>
    <li><strong>Name: </strong> <?= $task['title']; ?></li>

    <li><strong>Due Date: </strong> <?= $task['due']; ?></li>
    
    <li><strong>Person Responsible:</strong> <?= $task['assigned_to']; ?></li>
    
    <li><strong>Status: </strong> <?= $task['completed'] ? 'complete' : 'Incomplete'; ?>
  </ul>


</body>

</html>
