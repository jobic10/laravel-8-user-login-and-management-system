@extends('templates.main')

@section('content')
    <h1>Register</h1>
    <form method="POST" action="{{ route('register')  }}">
        @csrf
        <div class="form-group mb-3 mb-3">
            <label for="name">Name</label>
            <input type="text" value="{{ old('name')  }}" class = "form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="name" placeholder="Enter name">
            @error('name')
            <span class="invalid-feedback" >
                {{ $message }}
            </span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="email"  value="{{ old('email')  }}"  class = "form-control @error('email') is-invalid @enderror"  name='email' id="email" aria-describedby="email" placeholder="Enter email">
            @error('email')
            <span class="invalid-feedback" >
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password"  class = "form-control @error('password') is-invalid @enderror"  aria-describedby="password" name="password" id="password" placeholder="Password">
            @error('password')
            <span class="invalid-feedback" >
                {{$message}}
            </span>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label for="password_confirmation">Password</label>
            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation">
        </div>
        @if ($errors->any())
         <ul>
             @foreach ($errors->all() as $error)
             <li class="text-red-500 text-xs">{{ $error }}</li>
             @endforeach
         </ul>
         @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
