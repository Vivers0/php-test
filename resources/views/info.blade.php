<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>path - <b>{{ $path }}</b></p>
    <p>type - <b>{{ $type }}</b></p>
    <a href="{{ route('file.download', ['id' => $id]) }}">Download</a>
</body>

</html>