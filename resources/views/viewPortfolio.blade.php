@extends('template')
@section('title')
View Bio-Data
@endsection
@section('content')
@if(Session::has('succsess'))
<h2>{{Session::get('succsess')}}</h2>
@endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Country</th>
      <th scope="col">University</th>
      <th scope="col">College</th>
      <th scope="col">School</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Gender</th>
      <th scope="col">Subject</th>
      <th scope="col">Hobby</th>
      <th scope="col">About Me</th>
      <th scope="col">Upadate</th>
      <th scope="col">Change</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($fillable as $data)
    @if($data->status==1)
    <tr>
      <td>{{$data['id']}}</td>
      <td>{{$data['name']}}</td>
      <td>{{$data['country']}}</td>
      <td>{{$data['university']}}</td>
      <td>{{$data['college']}}</td>
      <td>{{$data['school']}}</td>
      <td>{{$data['phone']}}</td>
      <td>{{$data['email']}}</td>
      <td>{{$data['birthdate']}}</td>
      <td>{{$data['gender']}}</td>
      <td>{{$data['subject']}}</td>
      <td>{{$data['hobby']}}</td>
      <td>{{$data['me']}}</td>
      <td><a href="{{route('edit',$data->id)}}" class="btn text-white bg-success">Update</a></td>
      <td><a href="" class="btn text-white bg-danger" data-toggle="modal" data-target="#exampleModal{{$data->id}}">Delete</a></td>


      <!-- Modal -->
     <div class="modal fade" id="exampleModal{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="text-danger">Do you want to delete</p>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <form method="post" action="{{route('delete_profile')}}">
          @csrf
          <input type="hidden" name="id" value="{{$data->id}}">
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        <!-- <a class="btn btn-danger" href="">Delete</a> -->
      </div>
    </div>
  </div>
</div>


    </tr>
    @endif
    @endforeach
  </tbody>
</table>
@endsection