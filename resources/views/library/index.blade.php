<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>ISBN</th>
                <th>Published Year</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $library->title }}</td>
                <td>{{ $library->author }}</td>
                <td>{{ $library->description }}</td>
                <td>{{ $library->isbn }}</td>
                <td>{{ $library->published year }}</td>
                <td>
                    <a href="{{  url('library', $library->id) }}/edit" class="btn btn-outline-success">Edit</a>
                    <form action="{{  url('library', $library->id) }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Sure kana ba?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
            </div>
        </div>
    </div>
    
</body>
</html>