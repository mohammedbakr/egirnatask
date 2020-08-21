@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <h2>Create Person</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <form action="{{ route('people.store') }}" method="POST">
          @csrf

          <div class="form-group">
            <select name="city_id" id="city_id" class="form-control">
              @foreach ($cities as $city)
              <option value="{{ $city->id }}" {{ old('city_id') == $city->id ? 'selected' : '' }}>{{ $city->name }}</option>
              @endforeach
            </select>

            @error('city_id')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name') }}">

            @error('first_name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}">

            @error('last_name')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-group">
            <label for="email">E-Mail</label>
            <input type="text" id="email" name="email" class="form-control" value="{{ old('email') }}">

            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>

          <div class="form-group">
            <input type="submit" value="Create" class="btn btn-primary">
          </div>

        </form>
      </div>
    </div>
  </div>
@endsection