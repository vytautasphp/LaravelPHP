@extends('layouts.app')

@section('content')

    
 
    <div class="Home text-center"><h1>Home</h1></div>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptate ex, illo architecto accusantium error ab nisi, similique libero numquam distinctio nam tenetur minus voluptatum dignissimos! Aliquid dolore minus sint ipsum.</p>

    @include('inc.gallery')
   
    @endsection
    @include('inc.gal')
    @section('sidebar')
    @parent
        <p>this is appendet to sidebar</p>
        
    @endsection