@extends('layout.index')

@section('content')
<div class="container">
  <form action="{{route('store')}}" method="POST">
      @csrf
      <div id="feedback-form">
          <h2 class="header">Add Student</h2>
          <div>

              <label for="student_type">Student Type</label><br>
                <select name="student_type" id="student_type">
                   
                    <option name="local_student" value="local_student">Local Student</option>
                    <option name="foreign_student" value="foreign_student">Foreign Student</option>
                </select>
                @error('student_type')
                {{$message}}
                @enderror
          
              <br><label for="id_number">Id_number</label><br>
              <input class="input-form" type="text" name="id_number" id="id_number" placeholder="Id Number">
              @error('id_number')
              {{$message}}
              @enderror

              <label for="name">Name</label><br>
              <input class="input-form" type="text" name="name" id="name" placeholder="Name">
              @error('name')
              {{$message}}
              @enderror
              <label for="age">Age</label><br>
              <input class="input-form" type="number" name="age" id="age" placeholder="Age"><br>
              @error('age')
              {{$message}}
              @enderror
              <label for="gender">Gender</label><br><br>
                <select name="gender" id="gender">
                    <option value="none">Gender Reveal</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select><br>
              @error('gender')
              {{$message}}
              @enderror
              <label for="city">City</label><br>
              <input class="input-form" type="text" name="city" id="city" placeholder="City">
              @error('city')
              {{$message}}
              @enderror
              <label for="mobile_number">Mobile Number</label><br>
              <input class="input-form" type="text" name="mobile_number" id="mobile_number" placeholder="Mobile Number">
              @error('mobile_number')
              {{$message}}
              @enderror
              <label for="grades">Grades</label><br>
              <input class="input-form" type="number" name="grades" id="grades" placeholder="Grades">
              @error('grades')
              {{$message}}
              @enderror
              <label for="email">Email</label><br>
              <input class="input-form" type="email" name="email" id="email" placeholder="Email">
              @error('email')
              {{$message}}
              @enderror
              <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </div>
  </form>
</div>
@endsection