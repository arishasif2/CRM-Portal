<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Form</title>
    <style>
        span{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class='col-sm-6'>
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label"><h5>Company</h5></label>
                        <input type="text" name="company" id="company" class="form-control" value={{$client->company}}>
                    </div>

                    <div class="mb-3">
                        <label for="city" class="form-label"><h5>VAT</h5></label>
                        <input type="text" name="VAT" id="VAT" class="form-control" value={{$client->VAT}}>
                    </div>

                    <div class="mb-3">
                        <label for="marks" class="form-label"><h5>Address</h5></label>
                        <input type="text" name="address" id="address" class="form-control" value={{$client->address}}>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br>
                @if (session()->has('status'))
                <div class="alert- alert-success" role="alert">
                    {{session('status')}};
                </div>
                @endif
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
