@extends('master')
@section('content')
<h1>This is contact page </h1>
<form action='' method='post'>
    @csrf
    <label for='contact'>Contact Name </label>
    <input type ='text' id='name' name='name'>

    <button type='submit'>Submit </button>
</form>
@endsection('content')