<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method="post" action="{{route('content.save')}}">
                @csrf
                @method('post')
                <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title"/>
                </div>
                <!--<div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Author
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>-->
                <div class="form-group">
                <label> Image </label>
                <div class="input-group">
                    
                    <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">
                        Browse <input type="file" name="bimgs" multiple>
                    </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                </div>
                </div>
                <div class="form-group">
                <textarea class="form-control bcontent" name="contents"></textarea>
                </div>
                <div class="form-group">
                <input type="submit" name="Submit" value="Publish" class="btn btn-primary form-control" />
                </div>
            </form>
            </div>
        </div>
    </div>
</body>
</html>