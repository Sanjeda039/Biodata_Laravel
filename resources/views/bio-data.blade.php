@extends('template')
@section('content')
    <h1 style="text-align: center">MY BIODATA</h1>
    <form class="myForm" method="post" action="{{url('/save-profile')}}">
@csrf
      <p>

        <label
          >Name
          <input type="text" name="name" placeholder="Sanjeda Nasrin" />
        </label>
      </p>

      <p>
        <label
          >Country
          <input type="text" name="country" placeholder="Bangladesh " />
        </label>
      </p>

      <p>
        <label
          >University
          <input
            type="text"
            name="university"
            placeholder="Bangladesh University of Profesionals "
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
          />
        </label>
      </p>

      <p>
        <label
          >Phone
          <input type="tel" name="phone" placeholder="01774608677" />
        </label>
      </p>

      <p>
        <label
          >Email
          <input
            type="email"
            name="email"
            placeholder="sanjeda0390@gmail.com"
          />
        </label>
      </p>

      <p>
        <label
          >Date of Birth
          <input type="date" name="birthdate" placeholder="2002-03-27" />
        </label>
      </p>

      <p>
        <label
          >Gender
          <select id="pickup_place" name="gender">
            <option placeholder="Female" selected="selected">Female</option>
            <option placeholder="Male ">Male</option>
          </select>
        </label>
      </p>

      <p>
        <label
          >Subject
          <input type="text" name="dropoff_place" list="destinations" />
        </label>

        <datalist id="destinations">
          <select name="subject">
            <option>ICT</option>
            <option>BBA</option>
            <option>IR</option>
            <option>ES</option>
          </select>
        </datalist>
      </p>

      <p>
        <label
          >Hobby
          <textarea
            name="hobby"
            maxlength="500"
            placeholder="Travelling,Reading......."
          ></textarea>
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
            ></textarea>
          </label>
        </label>
      </p>
      <input type="hidden" name="status" value="1">

      <p><button type="submit">Submit</button></p>
    </form>
    @endsection
  

