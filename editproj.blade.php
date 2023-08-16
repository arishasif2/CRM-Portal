<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Edit Projects</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class='col-sm-6'>
                <form action="" method="post">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label"><h5>Title</h5></label>
                        <input type="text" name="title" id="title" class="form-control" value={{$project->title}}>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"><h5>Description</h5></label>
                        <input type="text" name="description" id="description" class="form-control" value={{$project->description}}>
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label"><h5>Deadline</h5></label>
                        <input type="date" name="deadline" id="deadline" class="form-control" value={{$project->deadline}}>
                    </div>
                    <div class="mb-3">
                        <label for="client_ID" class="form-label"><h5>Assigned Client</h5></label>
                        <input type="text" name="client_id" id="client_id" class="form-control" value={{$project->client_id}}>
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label"><h5>Status</h5></label>
                        <input type="text" name="status" id="status" class="form-control" value={{$project->status}}>
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
