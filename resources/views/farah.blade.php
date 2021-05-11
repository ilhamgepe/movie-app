@extends('layouts.app')
@section('content')
    
    @push('js')
        <script src="{{asset('test.js')}}"></script>
    @endpush
@endsection