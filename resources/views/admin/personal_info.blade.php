@extends('template')
@section('content')
    <h1 style="text-align: center">MY BIODATA</h1>
    <form class="myForm" method="post" action="{{url('/save_personal_info')}}">
@csrf
      <p>

        <label
          >Name
          <input type="text" name="name" placeholder="Name" />
        </label>
      </p>

      <p>
        <label
          >Email
          <input
            type="email"
            name="email"
            placeholder="Email"
          />
        </label>
      </p>

      <p>
        <label
          >Phone
          <br>
          <input type="number" name="phone" placeholder="Phone no" />
        </label>
      </p>

      <p>
        <label
          >Image
          <input type="file" name="img" placeholder="Your image" />
        </label>
      </p>

      <p>
        <label
          >Designation
          <input
            type="text"
            name="designation"
            placeholder="Designation "
          />
        </label>
      </p>

      <p>
        <label
          >Birth Date
          <input
            type="date"
            name="birthdate"
            placeholder="birthdate"
          />
        </label>
      </p>

      <p>
        <label
          >About me
            <textarea
              name="me"
              maxlength="500"
              id="me"
              placeholder="Write abour yourself"
            ></textarea>
          </label>
        </label>
      </p>

      <p>
        <label
          >Address
          <input
            type="text"
            name="address"
            placeholder="Address"
          />
        </label>
      </p>


      <p>
        <label
          >Skype
          <input
            type="text"
            name="skype"
            placeholder="Skype account"
          />
        </label>
      </p>

      <p>
        <label
          >Facebook
          <input
            type="text"
            name="fb"
            placeholder="Facebook account"
          />
        </label>
      </p>

      <p>
        <label
          >
          Linkedin
          <input
            type="text"
            name="linkedin"
            placeholder="linkedin account"
          />
        </label>
      </p>


      <p><button type="submit">Submit</button></p>
    </form>
    @endsection
  

