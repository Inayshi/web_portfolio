@include('cms-navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap');

        body {
            font-family: "Urbanist", sans-serif;
            margin-top: 10%;
            padding-right: 30px;
            padding-left: 30px;
        }
        .shadow-container {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 10px;
        }
        .shadow-container:not(:last-child) {
            margin-bottom: 20px; /* Add margin bottom to all containers except the last one */
        }
        .container-fluid {
            padding-bottom: 50px;
        }
    </style>
    <title>CMS</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row justify-content-center">
        <h1> Resume </h1>
            <div class="col-md-12"> <!-- Adjusted to col-md-12 to take up the entire row -->
                <div class="shadow-container">
                    <form>
                        <div class="form-group">
                            <label for="summary">Summary</label>
                            <input type="text" class="form-control" id="summary" placeholder="Enter Summary">
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
                        </div>
                    </form>
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
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
            <div class="shadow-container">
                    <form>
                    <h2>Social Links</h2>
                        <div class="form-group">
                            <label for="github">GitHub</label>
                            <input type="text" class="form-control" id="github" placeholder="Enter GitHub link">
                        </div>
                        <div class="form-group">
                            <label for="behance">Behance</label>
                            <input type="text" class="form-control" id="behance" placeholder="Enter Behance link">
                        </div>
                        <div class="form-group">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" placeholder="Enter LinkedIn link">
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
            <h1> Projects </h1>
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
                            </div>
                        </form>
                    </div>               
                </div>
                
            </div>
        </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
            <h1> Projects </h1>
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
