<div>
  <h1>contact us</h1>
  
  {{-- without route parameter --}}
  {{-- <h3>name: {{$name}}</h3>
  <h3>email: {{$email}}</h3> --}}

  {{-- with route parameter --}}
  <h3>name: {{request()->name}}</h3>
  <h3>id: {{request()->id}}</h3>

</div>