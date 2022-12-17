@extends('template')
@section('content')
    <h1 style="text-align: center">MY Skills</h1>
    <form class="myForm" method="post" action="{{url('/save_skill')}}">
@csrf
      <p>

        <label
          >Name
          <input type="text" name="name" placeholder="Name" />
        </label>
      </p>

      <p>
        <label
          >Type of Skill
          <br>
          <input
            type="skill"
            name="type"
            placeholder="skill type"
          />
        </label>
      </p>

      <p>
        <label
          >Percant
          <br>
          <input type="text" name="percant" placeholder="skill Percantage" />
        </label>
      </p>

      <p><button type="submit">Submit</button></p>
    </form>
    @endsection
  

