<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <!--build:css css/main.css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!--endbuild-->
    <title>Certificate Generator</title>
    <style>
    body{
        background-color:black ;
        color:floralwhite;
    }
    </style>
    
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top bg-primary">
        <div class="container bg-primary">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar" >
                <span class="navbar-toggler-icon"></span></button>
            
            <div class="collapse navbar-collapse" id="Navbar">
                <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="#"><span class="fa fa-home fa-lg"></span>
                            Home</a></li>
                </ul>
            </div>
            
            
        </div>

    </nav>

    <header class="jumbotron bg-primary text-light">
        <div class="container ">
            <div class="row row-header">
                <div class="col-12 col-sm-6 mt-3">
                    <h1>Certificate Generator</h1>
                    <p>This helps to create Certificate in just few easy steps</p>
                </div>
                
            </div>
        </div>
    </header>


    
    <div class="container">
            <form action="generator.php" method="post">
            <div class="form-group">
                <div class="row m-6 mt-2 col-12 mx-auto">
                <label for="name">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Participant's Name" required>
              </div>
              <div class="row m-6 mt-2 col-12 mx-auto">
              <label for="event">Event Name</label>
                <input type="text" class="form-control" id="event"  name="event"placeholder="Enter Event's Name" required>
              </div>
              <div class="row m-6 mt-2 col-12 mx-auto">
                <label for="dat">Date</label>
                  <input type="date" class="form-control" id="dat" name="dat" placeholder="Date" required>
                </div>

                <div class="row m-6 ml-6 mx-auto mt-4 col-6 mb-3 ">
                    
                        <button type="submit" class="btn btn-primary btn-block btn-lg" name="submit" id="submit">Submit</button>
                      
                    </div>
                </form>


              
    </div>

        
    </div>
    
    
    <footer class="footer text-light bg-primary">
        <div class="container">
            
            <div class="row justify-content-center bg-primary">
                <div class="col-12 col-sm-6 offset-1 mt-3 ">
                    <p><b><i>© Developed by Anuj</i></b></p>
                    
                    
                </div>
                <div class="text-center mt-3">
                   
                    
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><span
                            class="fab fa-linkedin fa-lg"></span> </a>
                    <a class="btn btn-social-icon btn-github" href="http://github.com/"><span
                            class="fab fa-github fa-lg"></span> </a>
                  </div>
            </div>
            
        </div>
    </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>

</html>