<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <form action="/store" method="POST">
        @csrf
        <div>
            <label for="Source">Custom Link</label>
            <input type="text" id="Link" name="Link" value="{{ old('Link') }}">
        </div>
        <div>
            <label for="Source">Source</label>
            <input type="text" id="Source" name="Source" value="{{ old('Source') }}">
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>