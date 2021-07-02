<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>DowntownLibrary</title>
</head>
<body>
    <div class="container-fluid   min-vh-100">
        <div class="text-center fs-1 text-capitalize fw-bolder h-75 ">
            <p>welcome</p>
            <p>find book location here!</p>
        </div>

        <div class="container text-center">
            <i class="fas fa-arrow-down fa-6x mb-4"></i> <br>
            {{-- <label for="exampleDataList" class="form-label">Datalist example</label> --}}
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">

            </datalist>
            <input type="submit" value="Find" class="form-control w-50 mx-auto mt-5 fs-4 fw-bold border border-success">
        </div>


    </div>
    <script src="https://kit.fontawesome.com/9967e25fdf.js" crossorigin="anonymous"></script>
</body>
</html>
