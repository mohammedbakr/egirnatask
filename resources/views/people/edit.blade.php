@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h2>Create Person</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('people.update', $person->id) }}" method="POST">
          @csrf
          @method("PUT")

          <div class="form-group">
            <select name="city_id" id="city_id" class="form-control">
              @foreach ($cities as $city)
              <option value="{{ $city->id }}"  {{ $person->city_id == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
              @endforeach
            </select>

            @error('city_id')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $person->first_name }}">

            @error('first_name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $person->last_name }}">

            @error('last_name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email" class="form-control" value="{{ $person->email }}">

            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="job">Job</label>
            <input type="number" id="job" name="job" class="form-control" min="0" max="1" value="{{ $person->job }}">

            @error('job')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="form-group">
            <input type="submit" value="Update" class="btn btn-primary">
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection