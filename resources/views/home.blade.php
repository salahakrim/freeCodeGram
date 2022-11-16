@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="data:image/png;base64,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" class="rounded-circle">
        </div>

        <div class="col-9 pt-5">
            <div><h1>freecodecamp</h1></div>
            <div class="d-flex">
                <div style="padding-right: 5%"><strong>23k</strong> followers</div>
                <div style="padding-right: 5%"><strong>212</strong> following</div>
                <div style="padding-right: 5%"><strong>153</strong> posts</div>
            </div>
            <div class="pt-4"><b>freeCampCode.org</b></div>
            <div>We're a global community of millions of people learning to code together.
                LearnToCodeRPG: https://www.freecodecamp.org/news/learn-to-code-rpg/</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-4">
            <img src="/pictures/pic1.jpg" class="w-150">
        </div>
        <div class="col-4">
            <img src="/pictures/pic1.jpg" class="w-150">
        </div>
        <div class="col-4">
            <img src="/pictures/pic1.jpg" class="w-150">
        </div>
    </div>
</div>
@endsection
