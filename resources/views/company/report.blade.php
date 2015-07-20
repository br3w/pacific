@extends('layouts.company')

@section('title', 'Report')


@section('left-aside')
<p>This is my left-aside.</p>
@endsection

@section('content')

<section class="panel">
	<div class="panel-body">
       <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
   </div>
</section>

<div class="row">
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
            <div class="mini-stat-info">
                <span>320</span>
                New Order Received
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
            <div class="mini-stat-info">
                <span>22,450</span>
                Copy Sold Today
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="mini-stat clearfix">
            <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
            <div class="mini-stat-info">
                <span>34,320</span>
                Dollar Profit Today
            </div>
        </div>
    </div>
</div>
@endsection


@section('right-aside')
<p>This is my right-aside.</p>
@endsection 