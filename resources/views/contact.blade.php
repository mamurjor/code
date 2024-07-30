<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<form action="{{ url('users') }}/2" method="post">
    @csrf
    @method('delete')
    <label for="username">Username</label>
    <input type="text" name="" class="form-control" id="">
    <label for="username">Password</label>
    <input type="text" name="" class="form-control" id="">
    <button type="submit">Save </button>

</form>
</body>
</html>
