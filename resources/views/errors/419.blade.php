<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QR Menu|419 - Error Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark d-flex align-items-center justify-content-center min-vh-100">

    <div class="container">
        <div class="p-5 m-5 text-center">
            <div class="card p-5 rounded-5" style="background-color: #fff2dc">
                <h1 class="display-1 fw-bold">419</h1>
                <h3 class="display-6">Session Has Expired</h3>
                <hr>
                <p class="lead fw-normal">
                   Sorry, your session has expired .
                   <br>
                   Please refresh and try again.
                </p>
                <div class="mt-3">
                    <a href="{{ url('/') }}" class="btn btn-primary rounded-5 px-5" style="background-color: #f25c05 " style="border-color: #f25c05">Go to Home</a>
                    <style>.btn-primary{
                        --bs-btn-border-color: #f25c05;
                    }</style>
                </div>
            </div>
        </div>
    </div>

</body>
</html>