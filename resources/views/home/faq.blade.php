@extends('layouts.product')

@section('title', 'Frequently Asked Questions')

@section('content')

@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/boostrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@endsection

<div class="container">
	<div class="row">
		<div class="col-sm-9 padding-right">
			<div class="features_items"><!--features_items-->
				<h2 class="title text-center">Frequently Asked Questions</h2>
                <div id="accordion">
                    @foreach($datalist as $rs)
                    <div class="card">
                        <div class="card-header">
                            <a class="card-link" data-toggle="collapse" href="#collapse{{$loop->iteration}}">
                                <h3>{{$rs->question}}</h3>
                                
                            </a>
                        </div>
                        <div id="collapse{{$loop->iteration}}" class="collapse @once show @endonce" data-parent="#accordion">
                            <div class="card-body">
                                <p>{!! $rs->answer !!}</p>
                            </div>

                        </div>
                    </div>                
                    @endforeach
                </div>
			</div>
		</div>		
	</div>
</div>
@endsection