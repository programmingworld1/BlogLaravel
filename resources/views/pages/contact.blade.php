@extends('layouts.main')

@section('title', 'Contact')

@section('content')
<div class="row">
    <div class="col-md-12">
        <h1>Contact Me</h1>
        <hr>
        <form>
            <div class="form-group">
                <label name="email"> email: </label>
                <input id="email" name="email" class="form-control">
            </div>

            <div class="form-group">
                <label name="subject"> subject: </label>
                <input id="subject" name="subject" class="form-control">
            </div>

            <div class="form-group">
                <label name="message"> message: </label>
                <textarea id="message" rows="10" name="message" placeholder="Type your text here" class="form-control"></textarea>
            </div>

            <input type="submit" value="Send message" class="btn btn-succes">
        </form>
    </div>
</div>
@endsection