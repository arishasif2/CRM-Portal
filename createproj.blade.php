<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Create Project</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class='col-sm-6'>

                <form action="{{ route('createpro') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label"><h5>Title</h5></label>
                        <input type="text" name="title" id="title" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label"><h5>Description</h5></label>
                        <input type="text" name="description" id="description" class="form-control" >
                    </div>

                    <div class="mb-3">
                        <label for="deadline" class="form-label"><h5>Deadline</h5></label>
                        <input type="date" name="deadline" id="deadline" class="form-control" >
                    </div>
                    <div class="mb-3">
                        <label for="client_ID" class="form-label"><h5>Existing Clients</h5></label><br>
                        <select id="client_ID" class="btn btn-light" style="width: 150px">
                        @foreach ($client as $client)
                            <option class="btn btn-light" value="{{$client->id}}">{{$client->id}}----{{$client->company}}</option>
                        @endforeach
                          </select><br><br>
                          <label for="client_ID" class="form-label"><h5>Enter Client ID</h5></label>
                          <input type="text" name="client_id" id="client_ID" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="status" class="form-label"><h5>Status</h5></label>
                        <input type="text" name="status" id="status" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
