<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx auto d-grip gap-2">
                <form action="{{  url('students', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label>Author</label>
            <input type="text" name="author" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label>Description</label>
            <input type="text" name="description" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label>ISBN</label>
            <input type="text" name="isbn" class="form-control">
        </div>
        <div class="form-group mb-3">
            <label>Published Year</label>
            <input type="text" name="published year" class="form-control">
        </div>
        <div class="form-group mb-3">
            <button class="btn btn-primary">Save Changes</button>
        </div>
        <div class="form-group mb-3">
            <a href="{{  url('students')}}" class="btn btn-primary">Student list</a>
        </div>
        </form>
        </div>
        </div>
        </div>
    </div>
    
</body>
</html>