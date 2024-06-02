@extends('layouts.front_layout')
@section('title')
    FAQ 
@endsection

@section('content')
<button class="btn btn-info" type="button" data-toggle="modal" data-target="#my-modal">Add New</button>
@foreach ($faqs as $faq)
    <div class="card mt-3">
        <div class="card-header">
            <div class="row">
                <!-- div class="col-8">
                    <h5 class="card-title">{{ $faq->question }}</h5>
                </div -->
                <div class="col-12 text-right">
                    <a href="{{ route('edit.faq',$faq->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('delete.faq',$faq->id) }}" class="btn btn-danger text-white">Delete</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">{!! $faq->answer !!}</p>
        </div>
    </div>
    @endforeach
@endsection

<div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{ route('add.faq') }}">

                    <!-- div class="mb-3">
                      <label for="" class="form-label">FAQ</label>
                      <input type="text"
                        class="form-control" name="question" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">FAQ Question</small>
                    </div -->
                    
                    <div class="mb-3">
                        <label for="" class="form-label">FAQ</label>
                        <textarea class="form-control" name="ans" id="faq" rows="3"></textarea>
                        <small id="helpId" class="form-text text-muted">FAQ Answer</small>
                    </div>

                    <button type="submit" class="btn btn-success">Add</button>

                </form>
            </div>
        </div>
    </div>
</div>