@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-centre pt-5">
            <h1 class="display-one mt-5">{{ config('app.name')}}</h1>
            <p>This awesome blog has many articles, click the button below to see them</p>
            <br>
            <a href="/blog" class="btn">Show Blog</a>
        </div>
    </div>
</div>
@endsection
