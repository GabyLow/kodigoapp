<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Kodigo App</title> 
</head>
<body>
   <H1>Welcome to Kodigo App</h1>
   <H2>All Bootcamps</h2>

   <ul>
      <?php foreach($bootcamps as $bootcamp): ?>
          <li>
             <h2> <?php echo $bootcamp['title']; ?> </h2>
             <p><?php echo $bootcamp['description']; ?> </p>
          </li>
      <?php endforeach; ?>
   </ul>



</body>
</html>