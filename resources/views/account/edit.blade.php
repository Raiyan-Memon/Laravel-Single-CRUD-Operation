@include('layouts.app')

{{"edit"}}

<form action="{{route('crud.update',$account)}}" method="POST">

    @csrf
    @method('PATCH')
    @include('account.form')
</form>