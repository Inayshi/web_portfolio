

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,800;0,9..144,900;1,9..144,500;1,9..144,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        
</head> 

@include('navbar')
<body>
    <div class="container About">
        <div class="row align-items-center">
            <div class="col-md-6">
                <img src="{{ asset('images/illustration.png') }}" alt="Illustration" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1>Hey there! I'm Nic.</h1>
                <h2>A full-stack developer and designer <br> who loves sleeping and cats.</h2>
                <button class="btn btn-pill">Download my Resume</button>
            </div>
        </div>
    </div>


    <div class="container About">
        <div class="row align-items-center">
            <h1 class="header"> Skills </h1>
            <!-- Developer section -->
            <div class="col-md-5 dev">
                <h3>As a developer, here are some tools I learned how to use:</h3>
                <div class="developer-tools">
                   
                </div>
            </div>
            <!-- Designer section -->
            <div class="col-md-5 designer">
                <h3>As a designer, here are some designer tools I'm familiar with:</h3>
                <div class="designer-tools">
                  
                </div>
            </div>
        </div>
    </div>

    <div class="container Projects">
    <div class="row align-items-center">
            <h1 class="header"> My Projects </h1>
           
            <div class="col-md-5 case">
                
           
            </div>

    </div>
    </div>

    <div class="container Projects">
    <div class="row align-items-center">
            <h1 class="header"> Contact Me </h1>
           
            <div class="col-md-5 case">
                
           
            </div>

    </div>
    </div>

</body>

<style>

@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap');

body {
    display: grid;
    background-color: #FDF3C0;
    font-family: 'Fraunces', sans-serif;
}

.About {
    margin-top: 10%;
    margin-left: auto;
    color: #193F56;
}

.About h1{
    font-weight: 900;
    margin-left: auto;
}

.btn {
    background-color: #FFA114;
    border-radius: 30px;
    font-size: 14px;
    padding: 10px;
    padding-left: 15px;
    padding-right: 15px;
    font-family: 'Inter', sans-serif; 
    font-weight: 700;
    color: #193F56;

}

.image {
    position: relative;
}

.row .dev {
    background-color: white;
    border-radius: 20px;
    padding: 20px;
    margin-top: 10px;
    margin-left: auto;
    
}

.row .designer {
    background-color: white;
    border-radius: 20px;
    padding: 20px;
    margin-top: 10px;
    margin-left: auto;


}
h3 {
    font-family: 'Inter', sans-serif; 
    font-weight: 500;
    font-size: 16px;
    color: #193F56;
}

h1 {
    font-family: 'Fraunces', sans-serif;
    font-weight: 900;
    font-size: 45px;
    color: #193F56;
}

.Projects {
    margin-top: 30px;
}
</style>
</html>