<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
@include('navbar')
@include('home')

<div class="container About">
    <div class="row align-items-center">
        <div class="col-md-10">
            <h1> What can I do? </h1>
        </div>

    <div class="row">
    <div class="col-md-5 dev">
        <h3>As a developer, here are some tools I learned how to use:</h3>
        <div class="developer-tools">
        @foreach($developerLogos as $logo)
               <img src="{{ $logo->url }}" alt="{{ $logo->name }}" class="logo">
           @endforeach
        </div>
    </div>
    <div class="col-md-5 designer">
        <h3>As a designer, here are some designer tools I'm familiar with:</h3>
        <div class="designer-tools">
        @foreach($designerLogos as $logo)
               <img src="{{ $logo->url }}" alt="{{ $logo->name }}" class="logo">
           @endforeach
           </div>
    </div>
</div>
    </div>
</div>

<style>
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
</style>

</body>
</html>
