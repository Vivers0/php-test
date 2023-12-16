<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
    <style>
        .flex {
            display: flex;
            flex-wrap: wrap;
        }

        .gap-2 {
            row-gap: .5rem;
        }
    </style>
</head>

<body>
    <form method="POST">
        @csrf
        <div class="flex gap-2">
            <label for="">Name</label>
            <input type="text" name="name" />
        </div>
        <div class="flex gap-2">
            <label for="">E-mail</label>
            <input type="text" name="email" />
        </div>
        <div class="flex gap-2">
            <label for="">Password</label>
            <input type="text" name="password" />
        </div>
        <button type="submit">Submit</button>
    </form>
</body>

</html>