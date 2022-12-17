@extends('template')
@section('title')
Update Biodata
@endsection
@section('content')
    <h1 style="text-align: center">MY BIODATA</h1>
     @if(Session::has('message')) 
<h2> {{Session::get('message')}}</h2>
    @endif
    <form class="myForm" method="post" action="{{route('update')}}">
@csrf
<input type="hidden" name="id" value="{{$data->id}}">
      <p>
        <label>Name
          <input type="text" name="name" placeholder="Sanjeda Nasrin" value="{{$data->name}}" />
        </label>
      </p>

      <p>
        <label
          >Country
          <input type="text" name="country" placeholder="Bangladesh " value="{{$data->country}}" />
        </label>
      </p>
      
      <p>
        <label
          >University
          <input
            type="text"
            name="university"
            placeholder="Bangladesh University of Profesionals "
            value="{{$data->university}}"
          />
        </label>
      </p>

      <p>
        <label
          >College
          <input
            type="text"
            name="college"
            placeholder="Adamjee Cantonment College"
            value="{{$data->college}}"
          />
        </label>
      </p>

      <p>
        <label
          >School
          <input
            type="text"
            name="school"
            placeholder="Muslim Modern Academy"
            value="{{$data->school}}"
          />
        </label>
      </p>

      <p>
        <label
          >Phone
          <input type="tel" name="phone" placeholder="01774608677" value="{{$data->phone}}"/>
        </label>
      </p>

      <p>
        <label
          >Email
          <input
            type="email"
            name="email"
            placeholder="sanjeda0390@gmail.com"
            value="{{$data->email}}"
          />
        </label>
      </p>

      <p>
        <label
          >Date of Birth
          <input type="date" name="birthdate" placeholder="2002-03-27" value="{{$data->birthdate}}"
/>
        </label>
      </p>

      <p>
        <label
          >Gender
          <select id="pickup_place" name="gender">
            <option placeholder="Female"{{$data->gender=='Female'?'selected':''}}>Female</option>
            <option placeholder="Male" {{$data->gender=='Male'?'selected':''}}>Male</option>
          </select>
        </label>
      </p>

      <p>
        <label
          >Subject
          <select id="pickup_place" name="subject">
            <option placeholder="Subject" {{$data->subject=='ICT'?'selected':''}}>ICT</option>
            <option placeholder="Subject" {{$data->subject=='BBA'?'selected':''}}>BBA</option>
            <option placeholder="Subject" {{$data->subject=='BBA'?'selected':''}}>IR</option>
            <option placeholder="Subject" {{$data->subject=='ES'?'selected':''}}>ES</option>

          </select>
        </label>
        
      </p>

      <p>
        <label
          >Hobby
          <textarea
            name="hobby"
            maxlength="500"
            placeholder="Travelling,Reading......."
          >{{$data->hobby}}"
</textarea>
        </label>
      </p>

      <p>
        <label
          >About me
            <textarea
              name="me"
              maxlength="500"
              id="me"
              placeholder="I have a passion for delivering the best experiences possible for users and am a strong believer that every decision should be made with the end-user in mind. I maintain a bias toward action with rapid high-fidelity prototypes and experiments, without sacrificing quality, the user experience, or brand reputation. "
            >{{$data->me}}"</textarea>
          </label>
        </label>
      </p>

      <p><button type="submit">Update</button></p>
    </form>
    @endsection
  
