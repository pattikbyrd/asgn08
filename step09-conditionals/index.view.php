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


  <h2>Step 9</h2>

  <h3>Spring Cleaning</h3>

  <ul>
    <li><strong>Name: </strong>
      <?= $task['title']; ?>
    </li>

    <li><strong>Due Date: </strong>
      <?= $task['due']; ?>
    </li>

    <li><strong>Person Responsible:</strong>
      <?= $task['assigned_to']; ?>
    </li>

    <li><strong>Status: </strong>

      <?php if ($task['completed']) : ?>

      <span class="icon">&#9989;</span>

      <?php else : ?>

      <span class="icon">Incomplete</span>

      <?php endif; ?>

    </li>

    <li><strong>Well, have you even swept yet?:</strong>

      <?php if ($task['swept']) : ?>

      <span class="icon">&#9989;</span>

      <?php else : ?>

      <span class="icon">Incomplete</span>

      <?php endif; ?>

    </li>

  </ul>


</body>

</html>