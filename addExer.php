<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.html">FitApp</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="jeden.html">Ćwiczenia</a>
            </li>
          </ul>
        </div>
      </nav>
    <section id="addExer">
        
        
        <div class="jumbotron" style="height: fit-content;">
            <h1 class="display-4">Add Exercise</h1>
            <div style="height: 25rem;">
            <form action="insert.php" method="POST">
                <div id="col1" style="height: 22rem; width: calc(50% - 2px); float: left;">
                    <input style="margin: 10px; width:20rem;" class="form-control" type="text" placeholder="Name" name="name">
                    <input style="margin: 10px; width:20rem;" class="form-control" type="text" placeholder="Weight" name="weight">
                    <input style="margin: 10px; width:20rem;" class="form-control" type="text" placeholder="Sets" name="set">
                    <input style="margin: 10px; width:20rem;" class="form-control" type="text" placeholder="Reps" name="rep">
                    <select style="margin: 10px; width:20rem;" class="form-control" name="bodypart">
                        <option value="Arms">Arms</option>
                        <option value="Legs">Legs</option>
                        <option value="Chest">Chest</option>
                        <option value="Back">Back</option>
                    </select>
                    <select style="margin: 10px; width:20rem;" class="form-control" name="difficult">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                    <input style="margin: 10px; width:20rem;" class="form-control" type="text" placeholder="Warnings" name="warning">
                </div>
                <div id="col2" style="height: 22rem;  width: calc(50% - 2px); float: left;">
                    <textarea rows="13" cols="65" style="resize: none; border-radius: 5px; border-color: lightgray; word-wrap: hard; margin: 10px;" placeholder="Description" name="description"></textarea>
                </div>
                <div id="col3" style="float: left;  height: 4rem;  width: 100%; display: block; text-align: right;">
                        <button style="margin-right: 40px; margin-top: 20px;" name="submit" class="btn btn-primary" type="submit">Add Exercise</button> 
                </div>
            </form>
        </div>
        </div>
        </section>
        
</body>
</html>