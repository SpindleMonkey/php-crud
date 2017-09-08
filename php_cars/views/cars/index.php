<!DOCTYPE html>
<html>
<head>
  <title>cars</title>
</head>
<body>
  <h1>cars</h1>
  <section>
    <ul>
      <?php while($row = $cars->fetch_object()): ?>
        <li>
          Here is a <?php echo $row->car ?> for <?php echo $row->owner?>
        </li>
      <?php endwhile; ?>
    </ul>
  </section>
</body>
</html>