<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<h1>Student</h1>
<form method="post">
    @csrf
    <select name="name">
        @foreach($students as $student)
            <option value="{{$student->name}}">{{$student->name}}</option>
        @endforeach
    </select>

    <select name="age">
        @foreach($students as $student)
            <option value="{{$student->age}}">{{$student->age}}</option>
        @endforeach
    </select>
    <select name="weight">
        @foreach($students as $student)
            <option value="{{$student->weight}}">{{$student->weight}}</option>
        @endforeach
    </select>
    <input type="submit" value="search">
</form>
<table class="table table-bordered">
    <thead>
    <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Age</th>
        <th scope="col">Weight</th>
    </tr>
    </thead>
    <tbody>
    @foreach($students as $student)
    <tr>
        <th scope="row">{{$student->id}}</th>
        <td>{{$student->name}}</td>
        <td>{{$student->email}}</td>
        <td>{{$student->age}}</td>
        <td>{{$student->weight}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
