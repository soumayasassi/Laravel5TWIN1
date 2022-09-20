@extends('template')
@section('titre')
    Child Title
    @endsection
@section('content')
<form action="result">
    <label> age</label>
    <input type="text" name="age"/>
    <input type="submit" value="valider"/>
</form>
@endsection
