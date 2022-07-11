<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        h1 {
            text-align: center;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-top: 1em;
        }

        .container {
            width: 50%;
        }

        .table-2 {
            padding-top: 5em;
        }

        .image-style {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <h1>CRUD OPERATION</h1>

    <div class="container mt-3 pt-5">
        <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="Name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="file" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <table class="table table-striped mt-4 table-2">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($person as $item)
                <th scope="row">
                    {{ $loop->index + 1}}
                </th>
                <td>{{$item->name}}</td>
                <td> <img src="image/{{$item->image}}" alt="" class="image-style"> </td>
                <td>
                    <div>
                        <a href={{"edit/".$item['id']}}><button class="btn btn-success">Update</button></a>
                        <a href={{"delete/".$item['id']}}><button class="btn btn-danger">Delete</button></a>
                    </div>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>