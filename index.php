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

        <form method = "POST" action = 'generate.php'>
                <div class = "form-group row">
                    <div class = "col-lg-6">

                        <input type = "text" name = 'fname' class = 'form-control' placeholder = 'Parent First Name'>
                    
                    </div>

                    <div class = "col-lg-6">

                        <input type = "text" name = 'lname' class = 'form-control' placeholder = 'Parent Last Name'>
                    </div>
      
                </div>



                <div class = "form-group row">
                    <div class = "col-lg-6">

                        <input type = "email" name = 'email' class = 'form-control' placeholder = 'Email Address'>
                    
                    </div>

                    <div class = "col-lg-6">

                        <input type = "tel" name = 'phone' class = 'form-control' placeholder = 'Telephone Number'>
                    </div>
      
                </div>



                <div class = 'form-group'>

                    <textarea name = "enquiry" rows = '10' class = 'form-control' placeholder = 'Enter your enquiry'></textarea>
                <div>

                <div class = 'form-group'>

                    <button type = 'submit' class = 'btn btn-block btn-success'> Generate PDF</button>

                </div>


              
                
        
        </form>
    

    </div>
   
      
    






    </body>
</html>