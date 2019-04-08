@extends('layouts.material.html')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>BLANK PAGE</h2>
            @bs_datepicker(
                ['name'=>'test_datepicker',
                'id'=>'test_datepicker']
            )
            @endbs_datepicker

        </div>
    </div>
</section>
@endsection
