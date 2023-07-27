<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Kodigo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
</head>
<body>
   <h1 class="text-center">Welcome to Kodigo App</h1>
   <h2 class="text-center">All Bootcamps</h2>

   <div class="container">
      <div class="row">
           <?php foreach($bootcamps as $bootcamp): ?>
              <div class="col-sm-3">
                 <div class="card" style="width: 18rem;">
                      <img src="https://mujeres360.org/wp-content/uploads/2022/08/soft-skills-de-un-programadora.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                         <h5 class="card-title"><?php echo $bootcamp['title']; ?></h5>
                         <p class="card-text"><?php echo $bootcamp['description']; ?></p>
                         <a href="#" class="btn btn-primary">Go somewhere</a>
                      </div>
                 </div>
               </div>
           <?php endforeach; ?>
      </div>
  </div>

  
</body>
</html>