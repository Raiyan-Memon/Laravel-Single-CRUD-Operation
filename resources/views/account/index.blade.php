@include('layouts.app')


{{-- @foreach ($account as $data)
    
<p>{{$data->id}}</p>
<p>{{$data->name}}</p>
<p>{{$data->enrollno}}</p>
<p><a class="btn btn-primary" href="{{route('crud.show',$data->id)}}">Show</a></p>
<p><a class="btn btn-success" href="{{route('crud.edit',$data->id)}}">Edit</a>
@endforeach --}}

<div class="container">

    <a class="btn btn-primary" href="{{route('crud.create')}}">Insert data</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Name</th>
        <th scope="col">Branch</th>
        <th scope="col">Enrollment Number</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>

        @foreach ($account as $data)

      <tr>
        <th scope="row">{{$data->id}}</th>
        <td>{{$data->name}}</td>
        <td>{{$data->branch}}</td>
        <td>{{$data->enrollno}}</td>
        <td><a class="btn btn-primary" href="{{route('crud.show',$data->id)}}">Show</a>
            <a class="btn btn-success" href="{{route('crud.edit',$data->id)}}">Edit</a>

            <form action="{{route('crud.destroy',$data->id)}}" method="POST">
              @csrf
            @method('DELETE')
     <a> <button type="submit" class="btn btn-danger">Delete</button></a></td>
          </form>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>