<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FAQMenu</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link href="/css/app.css" rel="stylesheet">
    <style>
        table {
            border-collapse: collapse;
            border-spacing: 0;
            width: 50%;
            border: 1px solid #ddd;
        }

        th, td {
            text-align: left;
            padding: 16px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    </style>
</head>
<body>
<center>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add Category</button>

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/insertCat" method="post">
            {{ csrf_field() }}
            <div class="container">
                <h1>Add FAQ Category</h1>
                <hr>
                <label for="CategoryTitle"><b>Category Title</b></label><br>
                <input type="text" placeholder="Enter Category Title" name="CategoryTitle" required><br>

                <label for="CategoryDescription"><b>Category Description</b></label><br>
                <input type="text" placeholder="Enter Description" name="CategoryDescription" required><br>

                <div>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'">Cancel</button>
                    <button type="submit">Save</button>
                </div>
            </div>
        </form>
    </div>
</center>
<center>
    <table>
        <tr>
            <td>ID</td>
            <td>Category</td>
            <td>Category Description</td>
            <td>Actions</td>
        </tr>
        @foreach($data as $value)
            <tr>
                <td>{{ $value->FaqID }}</td>
                <td>{{ $value->CategoryTitle }}</td>
                <td>{{ $value->CategoryDescription }}</td>
                <td><a href=""><button>Edit</button></a>&nbsp;<a href="/deleteCat/{{ $value->FaqID }}"><button>Delete</button></a> </td>
            </tr>
        @endforeach
    </table>
    <form method="get" action="/admin">
        <button type="submit">Back</button>
    </form>
</center>
</body>
</html>