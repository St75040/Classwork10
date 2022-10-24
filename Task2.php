<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Task 2.</title>
    </style>
  </head>
  <body>
    <div>
      <article>
        <form method="get">
          <label for="name">Name: </label>
          <input type="text" id="name" name="name">
          <br>
          <label for="surname">Surname: </label>
          <input type="text" id="surname" name="surname">
          <br>
          <label for="birthday">Date of Birth: </label>
          <input type="text" id="birthday" name="birthday">
          <br>
          <input type="submit" value="Submit">
        </form>
        <ul>
    <li>
        <p><?php echo $_GET['name']; ?></p>
        <p><?php echo $_GET['surname']; ?></p>
        <p><?php echo $_GET['birthday']; ?></p>
    </li>
</ul>
      </article>
    </div>
  </body>
</html>