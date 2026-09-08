<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>

<body>
    <h1>Edit user info</h1>
    <form action="{{ route('post.update', $user) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $user->name }}">
        <input type="email" name="email" value="{{ $user->email }}">
        <button type="submit">Update</button>
    </form>
</body>

</html>
