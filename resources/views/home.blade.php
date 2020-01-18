@extends('layouts.app')

@sections('content')
  <h1>Home</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, illum ipsa. Incidunt nihil in cum, quis tempore natus similique expedita, asperiores porro numquam vero blanditiis dolores fugiat sit accusantium reiciendis.</p>
@endsection

@section('sidebar')
   @parent
    <p>This is appended to the Sidebar</p>
   @endsection