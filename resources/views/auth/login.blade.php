@extends('templates.main')

@section('content')
    <h1>Login</h1>
    <form method="POST" action="{{ route('login')  }}">
        @csrf

        <div class="form-group mb-3">
            <label for="email">Email address</label>
            <input type="email"  value="{{ old('email')  }}"  class = "form-control"  name='email' id="email" aria-describedby="email" placeholder="Enter email">

        </div>
        <div class="form-group mb-3">
            <label for="password">Password</label>
            <input type="password"  class = "form-control"  aria-describedby="password" name="password" id="password" placeholder="Password">

        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
