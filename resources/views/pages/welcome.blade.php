@extends('layouts.main')

@section('title', 'Home')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <h1 class="display-4">Hello, world!</h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="post">
          <h1> Post Title</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, mollitia quos. Doloremque laborum magnam molestias perferendis quisquam sunt temporibus voluptates? Ab asperiores, ipsam laudantium minus pariatur perspiciatis rerum similique tenetur?</p>
        </div>
        <div class="btn btn-primary">Read more</div>
        <hr>
        <div class="post">
            <h1> Post Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, mollitia quos. Doloremque laborum magnam molestias perferendis quisquam sunt temporibus voluptates? Ab asperiores, ipsam laudantium minus pariatur perspiciatis rerum similique tenetur?</p>
        </div>
        <div class="btn btn-primary">Read more</div>
        <hr>
        <div class="post">
            <h1> Post Title</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae, mollitia quos. Doloremque laborum magnam molestias perferendis quisquam sunt temporibus voluptates? Ab asperiores, ipsam laudantium minus pariatur perspiciatis rerum similique tenetur?</p>
        </div>
        <div class="btn btn-primary">Read more</div>
     </div>

    <div class="col-md-3 col-md-offset-1">
        <h1>sidebard </h1>
    </div>
</div>
@endsection

