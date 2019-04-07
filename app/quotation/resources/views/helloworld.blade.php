@extends('layouts.material.html')

@push('append_head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.css">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
@endpush


@section('content')


<section class="content">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>

    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

            <div class="card">
                <div class="body">
                    <textarea name="test_simplemde" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


@push('blank_scripts_body')
    <script>
        var simplemde = new SimpleMDE({
            element: document.getElementsByName("test_simplemde")[0],
        });
    </script>
@endpush
