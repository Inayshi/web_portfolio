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
            <div class="col-md-12"> 
            <!-- Summary -->
            <div class="shadow-container">
            <form id="summaryForm" action="{{ route('summary.store') }}" method="POST">
                    @csrf 
                    <div class="form-group">
                    <h2> Summary </h2>
                        @foreach ($summaries as $summary)
                            <p style="color: #C8C6BA; line-height: 18px; text-align: justify;">{{ $summary->content }}</p>
                        @endforeach
                        <input type="text" class="form-control" id="summaryInput" name="content" placeholder="Enter Summary">
                        <button type="submit" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding-top: 3px;">Save</button>
                    </div>
                </form>
            </div>

            </div>
            <div class="col-md-6">
                <!-- Experiences -->
                <div class="shadow-container">
                    <form action="{{ route('experiences.store') }}" method="POST">
                        <h2>Experiences</h2>
                        @csrf
                            <div class="form-group">
                                <label for="company">Company</label>
                                <input type="text" class="form-control" id="company" name="company" placeholder="Enter Company Name">
                                
                                <label for="role">Position</label>
                                <input type="text" class="form-control" id="role" name="role" placeholder="Enter Position">
                                
                                <label for="date">Date</label>
                                <input type="text" class="form-control" id="date" name="date" placeholder="Enter date started and ended">
                                
                                <button type="submit" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding: 3px;">Add</button>
                            </div>
                    </form>
                    <hr>
                    <div class="experience-container">
                        @foreach($experiences as $experience)
                        <div class="experience-text">
                            <p>
                                {{ $experience->company }}<br>
                                {{ $experience->role }}<br>
                                {{ $experience->date }}
                            </p>
                        </div>
                        <div class="experience-buttons">
                            <a href="{{ route('experiences.edit', $experience->id) }}" class="btn btn-warning px-1"><i class="fas fa-edit" aria-hidden="true"></i></a>
                            <form action="{{ route('experiences.destroy', $experience->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger px-1"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        @endforeach
                    </div>
                    <hr>
                </div>
                <!-- Affiliations -->
                <div class="shadow-container">
                <form action="{{ route('affiliations.store') }}" method="POST">
                    <h2>Affiliations</h2>
                    @csrf
                    <div class="form-group">
                        <label for="company">Organization</label>
                        <textarea class="form-control" id="company" name="organization" rows="1" placeholder="Enter Company Name"></textarea>
                        <label for="position">Position</label>
                        <textarea class="form-control" id="position" name="position" rows="1" placeholder="Enter Position"></textarea>
                        <label for="date">Date</label>
                        <textarea class="form-control" id="date" name="date" rows="1" placeholder="Enter date started and ended"></textarea>                        
                        <button type="submit" class="btn btn-light px-3" style="font-family: 'Urbanist', sans-serif; font-weight: bold; background-color: #C8C6BA; padding: 3px;">Add</button>
                    </div>
                </form>
                    <hr>
                    <div class="experience-container">
                    @foreach($affiliations as $affiliation)
                        <div class="experience-text">
                        <p>
                            {{ $affiliation->organization }}<br>
                            {{ $affiliation->position }}<br>
                            {{ $affiliation->date }}
                        </p>
                        </div>
                        <div class="experience-buttons">
                            <a href="{{ route('affiliations.edit', $affiliation->id) }}" class="btn btn-warning px-1"><i class="fas fa-edit" aria-hidden="true"></i></a>
                            <form action="{{ route('affiliations.destroy', $affiliation->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger px-1"><i class="fas fa-trash-alt" aria-hidden="true"></i></button>
                            </form>                        
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Social Links -->
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
                <!-- Tools -->
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

        <!-- Projects -->
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
       
        </div>
    </div>


</body>
</html>

