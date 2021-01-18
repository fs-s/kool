<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body class="p-4 ">
    <table class="table-auto border border-solid bg-gray-300 w-full">
        <thead>
            <tr>
                <td class="p-4 fray 200 font-bold text-center bg-gray-500">Book Title</td>
                <td class="p-4 fray 200 font-bold text-center bg-gray-500">Book Release date</td>
            </tr>
        </thead>
        @foreach($books as $book)
        <tr>
            <td class="p-2 bg-gray-100"> <a href="/book/{{ $book -> id}}"> {{ $book ->title }}</a></td>
            <td class="p-2 bg-gray-100"> {{ $book ->release_date }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
