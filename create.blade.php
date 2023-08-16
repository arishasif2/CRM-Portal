<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Custom CSS --}}
    <link href="{{asset('frontend/css/style.min.css')}}" rel="stylesheet">
    <title>Client Creation</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class='col-sm-6'>
                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label"><h5>Company</h5></label>
                        <input type="text" name="company" id="company" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label"><h5>VAT</h5></label>
                        <input type="text" name="VAT" id="VAT" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="marks" class="form-label"><h5>Address</h5></label>
                        <input type="text" name="address" id="address" class="form-control" >

                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                <br>
                @if (session()->has('status'))
                <div class="alert alert-success" role="alert">
                    {{session('status')}};
                </div>
                @endif
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
