<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body class="container pt-5"> 

    <form method="POST" action="{{route('stagiaires.update',$data[0]->id)}}"  >
        @csrf
        @method('patch')
        <div class="mb-3">
          {{-- {{$data[0]->id}} --}}
          <label for="name" class="form-label">Name</label>
          <input type="text" name="name" class="form-control" id="name" value="{{$data[0]->name}}" >
          {{-- {{$data->id}} --}}
          {{-- {{$data[0]->id}}
          {{$data[0]->name}}
          {{$data[0]->age}}
          {{$data[0]}} --}}
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror  
        </div>
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="text" name="age" class="form-control" id="age" value="{{$data[0]->age}}">
            @error('age')
                <span class="text-danger">{{$message}}</span>
            @enderror 
        </div>
        <div class="mb-3">
          <label for="work" class="form-label">Work</label>
          <input type="text" name="work" class="form-control" id="work" value="{{$data[0]->work}}">
            @error('work')
                <span class="text-danger">{{$message}}</span>
            @enderror 
        </div>
        <button type="submit" class="btn btn-primary btn-submit">Update Data</button>
      </form>
    
</body>
</html>