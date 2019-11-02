@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new Thread</div>

                <div class="card-body mb-3">
                    <form method="POST" action="/threads">
                        @csrf
                        <div class="form-group">
                          <label for="title">Title:</label>
                          <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                          <label for="body">Body:</label>
                          <textarea name="body" id="body" class="form-control" placeholder=""></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Publish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
