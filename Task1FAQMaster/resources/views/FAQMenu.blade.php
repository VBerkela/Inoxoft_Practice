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
            width: 100%;
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
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Add FAQ</button>

    <div id="id01" class="modal">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal-content" action="/insert" method="post">
            {{ csrf_field() }}
            <div class="container">
                <h1>Add FAQ</h1>
                <hr>
                <label for="title"><b>Title</b></label><br>
                <input type="text" placeholder="Enter Title" name="title" required><br>

                <label for="question"><b>Question</b></label><br>
                <input type="text" placeholder="Enter Question" name="question" required><br>


                <label for="answer"><b>Answer</b></label><br>
                <input type="text" placeholder="Answer" name="answer" required><br>

                <label for="status"><b>Status</b></label><br>
                <input type="radio" name="status" value="Enabled" required>Enabled<br>
                <input type="radio" name="status" value="Disabled" >Disabled<br>

                <label for="category"><b>Category</b></label><br>
                @foreach($categories as $category)
                    <input type="radio" name="category" value="{{ $category-> CategoryTitle}}" required>{{ $category-> CategoryTitle}}<br>
                @endforeach


                <div>
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                    <button type="submit">Add</button>
                </div>
            </div>
        </form>
    </div>
</center>
<center>
    <table>
        <tr>
        <td>ID</td>
        <td>Tittle</td>
        <td>Question</td>
            <td>Answer</td>
        <td>Status</td>
        <td>Category</td>
        <td>Actions</td>
        </tr>
        @foreach($data as $value)
            <tr>
                <td>{{ $value->FaqID }}</td>
                <td>{{ $value->Title }}</td>
                <td>{{ $value->Question }}</td>
                <td>{{ $value->Answer }}</td>
                <td>{{ $value->Status}}</td>
                <td>{{ $value->Category }}</td>
                <td><a href=""><button>Edit</button></a>&nbsp;<a href="/delete/{{ $value->FaqID }}"><button>Delete</button></a> </td>

            </tr>
            @endforeach
    </table>
    <form method="get" action="/admin">
        <button type="submit">Back</button>
    </form>
</center>
</body>
</html>