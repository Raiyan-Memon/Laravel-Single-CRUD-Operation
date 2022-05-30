@include('layouts.app')


{{-- {{$errors}} --}}
{{-- {{"create"}} --}}

{{-- @foreach ($errors->all() as $err)
  <li>  {{$err}}</li>
@endforeach --}}

<form action="{{route('crud.store')}}" method="POST">
    @csrf

    @include('account.form')

</form>