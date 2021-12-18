<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <title>DowntownLibrary</title>
</head>
<body>
    <p class="lead text-center display-5 text-capitalize p-3 mt-2">Books matching description</p>
    <div class="container w-50">
        <table class="table table-bordered mt-5 mx-auto">
            {{-- <caption>Books</caption> --}}
        <tr>
            <th>Book Id</th>
            <th>Book Title</th>
            <th>Author</th>
            <th>Book Shelf</th>
            <th>Status</th>
        </tr>
        @if($count==0)
            <tr>
                <td colspan="5" class="text-center text-capitalize">no matches found</td>
            </tr>
        @else
        @foreach ($results as $result)
            <tr class="text-capitalize text-nowrap {{ $result->status == true ? 'bg-success' : '    ' }}">
                <td>{{ $result->id }}</td>
                <td>{{ $result->bookTitle }}</td>
                <td>{{ $result->Author }}</td>
                <td>{{ $result->shelfNumber }}</td>
                <td
                class="">{{ $result->status == true ? 'Available' : 'Not Available' }}</td>
            </tr>
        @endforeach
        @endif

    </table>
    <a href="{{ route('welcome') }}" class="btn btn-outline-primary mx-auto form-control">Close</a>
    </div>
    <script></script>
</body>
</html>


