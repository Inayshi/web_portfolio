@include('cms-navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: "Urbanist", sans-serif;
            margin-top: 10%;
            padding-right: 30px;
            padding-left: 30px;
            background-color: #2C2929;
        }
        .shadow-container {
            box-shadow: 0 0 20px #20201F;
            padding: 20px;
            margin-top: 10px;
        }
        .shadow-container:not(:last-child) {
            margin-bottom: 20px; /* Add margin bottom to all containers except the last one */
        }
        .container-fluid {
            padding-bottom: 50px;
            background-color: #2C2929;
        }

        .form-control {
            background-color: #2C2929;
        }

        .form-group {
           line-height: 50px;
        }
        label {
            color: #C8C6BA;
        }
        h2 {
            color: #C8C6BA;
        }

        h1 {
            color: #C8C6BA;
        }

        input {
            color: #C8C6BA;
        }

        ::placeholder {
            color: #C8C6BA !important;
            opacity: 1;
        }

        .experience-container{
            line-height: 1.5    px;  
        }


        .experience-container p {
            color: #C8C6BA;
            font-size: 14px;
        }

        hr {
            background-color: #C8C6BA;
            margin-top: 20px;
        }
        
       

        .btn {
            background-color: transparent; 
            border: none; 
            padding: 0;
        }

        .btn i {
            color: #C8C6BA; 
        }


    </style>
    <title>CMS</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
        <h1 id="resume"> Resume </h1>
            <div class="col-md-12"> <!-- Adjusted to col-md-12 to take up the entire row -->
                <div class="shadow-container">
                    <form>
                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <input type="text" class="form-control" id="summary" placeholder="Enter Summary">
                            <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding-top: 3px;">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="shadow-container">
                    <form>
                        <h2>Experiences</h2>
                        <div class="form-group">
                            <label for="experiences">Company</label>
                            <textarea class="form-control" id="company" rows="1" placeholder="Enter Company Name"></textarea>
                            <label for="experiences">Position</label>
                            <textarea class="form-control" id="position" rows="1" placeholder="Enter Position"></textarea>
                            <label for="experiences">Date</label>
                            <textarea class="form-control" id="date" rows="1" placeholder="Enter date started and ended"></textarea>
                            <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding: 3px;">Add</button>

                        </div>
                    </form>
                    <hr>
                    <div class="experience-container">
                        <div class="experience-text">
                            <p>
                                Zamboanga City Hall - Computer Services Division<br>
                                Software Development Intern<br>
                                February - March 2024
                            </p>
                        </div>
                        <div class="experience-buttons">
                            <button type="button" class="btn btn-warning px-1"><i class="fas fa-edit" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-danger px-1"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="shadow-container">
                    <form>
                        <h2>Affiliations</h2>
                        <div class="form-group">
                        <label for="experiences">Organization</label>
                            <textarea class="form-control" id="company" rows="1" placeholder="Enter Company Name"></textarea>
                            <label for="experiences">Position</label>
                            <textarea class="form-control" id="position" rows="1" placeholder="Enter Position"></textarea>
                            <label for="experiences">Date</label>
                            <textarea class="form-control" id="date" rows="1" placeholder="Enter date started and ended"></textarea>
                            <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding: 3px;">Add</button>

                        </div>
                    </form>
                    <hr>
                    <div class="experience-container">
                        <div class="experience-text">
                            <p>
                                Google Developer Student Clubs Crimsons<br>
                                CEO and Lead<br>
                                August 2023 - July 2024
                            </p>
                        </div>
                        <div class="experience-buttons">
                            <button type="button" class="btn btn-warning px-1"><i class="fas fa-edit" aria-hidden="true"></i></button>
                            <button type="button" class="btn btn-danger px-1"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="shadow-container">
                    <form>
                    <h2>Social Links</h2>
                        <div class="form-group">
                            <label for="github">GitHub</label>
                            <input type="text" class="form-control" id="github" placeholder="Enter GitHub link">
                            <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding-top: 3px;">Save</button>
                        </div>
                        <div class="form-group">
                            <label for="behance">Behance</label>
                            <input type="text" class="form-control" id="behance" placeholder="Enter Behance link">
                            <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding-top: 3px;">Save</button>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" placeholder="Enter LinkedIn link">
                            <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding-top: 3px;">Save</button>
                        </div>
                        
                    </form>
                </div>
                <div class="shadow-container">
                    <form>
                        <h2>Tools</h2>
                            <input type="file" class="form-control-file" id="imageUpload" accept="image/*">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div> 

        <div class="container-fluid">
            <div class="row justify-content-center">
            <h1 id="projects"> Projects </h1>
                <div class="col-md-12">
                    <div class="shadow-container">
                        <form>
                            <h2>Development Projects</h2>
                            <div class="form-group">
                                <label for="experiences">Title</label>
                                <textarea class="form-control" id="company" rows="1" placeholder="Title"></textarea>
                                <label for="experiences">Description</label>
                                <textarea class="form-control" id="position" rows="3" placeholder="Project Summary"></textarea>
                                <label for="experiences">Link</label>
                                <textarea class="form-control" id="date" rows="1" placeholder="Link to Github repository"></textarea>
                                <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding: 3px;">Add</button>
                            </div>
                        </form>
                    </div>               
                </div>
                <div class="col-md-12">
                    <div class="shadow-container">
                        <form>
                            <h2>Design Projects</h2>
                            <div class="form-group">
                                <label for="experiences">Title</label>
                                <textarea class="form-control" id="company" rows="1" placeholder="Title"></textarea>
                                <label for="experiences">Description</label>
                                <textarea class="form-control" id="position" rows="3" placeholder="Project Summary"></textarea>
                                <label for="experiences">Link</label>
                                <textarea class="form-control" id="date" rows="1" placeholder="Link to Behance Post"></textarea>
                                <button type="button" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding-top: 3px;">Add</button>
                            </div>
                        </form>
                    </div>               
                </div>
                
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
            <h1 id="bookings"> Bookings </h1>
                <div class="col-md-12">
                    <div class="shadow-container">
                        
                    </div>               
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>
