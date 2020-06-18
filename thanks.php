<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Little Tesla </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

    <div class = "tesla_bio">
    <h1>Little Tesla Pediatric Therapy </h1>

    <h4>6000 Turkey Lake Rd Suite 114</h4>
    <h6>Orlando, Fl 32819</h6>
    <h6>Phone: (321)-732-3723</h6>
    <h6>Fax: (321)-352-7168</h6>
    </div>

    <div class = "tesla-image">
        <img src="Modern Logo.jpg" class="logo" width = '250', height = '230' >
    </div>

    

    <hr class = "hr">
    
    <div class ='container'>

        <h1>Thank you <?php echo $_GET['fname'];?> for completing the new patient paperwork! Please print it out and bring it to your first visit.<a href = "./completed/<?php echo $_GET['link'];?>" download> Download it here</a> </h1>
    

    </div>
   
      
    






    </body>
</html>