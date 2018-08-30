@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
        <div class="card">
                <div class="card-header">
                    Użytkownik
                    @if ($user->id === Auth::id())
                        <a href="{{ url('/users/' . $user->id) .'/edit/' }}">Edit</a>
                    @endif
                </div>

                <div class="card-body text-center">
                    <h2><a href="{{ url('/users/' . $user->id) }}">{{ $user->name }}</a></h2>
                    <p>@if($user->sex == 'm')
                        Mężczyzna
                    @else
                        Kobieta
                    @endif</p>
                    <p>{{ $user->email }}</p>

                </div>
            </div>

        </div>
        <div class="col-md-7">
            <div class="card">

            <div class="card-body">
                <p>
                    Culpa aliqua aliquip eu enim eiusmod aute Lorem cupidatat fugiat et velit tempor ad. Cupidatat duis cillum ullamco magna quis id ex et adipisicing tempor deserunt. Enim adipisicing reprehenderit ullamco laboris laborum non aliqua veniam ipsum do velit. Consequat reprehenderit adipisicing est officia ea ullamco cillum laborum ullamco enim et. Ullamco minim velit ut quis amet est quis. Aliqua deserunt mollit occaecat eiusmod dolore sint sunt.
                    Est aliqua tempor quis aliquip culpa incididunt Lorem veniam incididunt esse aute id labore velit. Exercitation dolor nostrud adipisicing proident eiusmod minim elit veniam commodo minim laboris incididunt aliqua dolore. Occaecat dolore esse aute commodo aliquip Lorem aliquip. Tempor nostrud ex consequat velit veniam fugiat commodo Lorem cillum do nisi. Ullamco do Lorem dolore ipsum nulla ad anim ipsum pariatur laborum ipsum officia aute excepteur. Pariatur id nostrud excepteur velit sunt minim.
                </p>

            </div>
        </div>
    </div>
</div>
@endsection
