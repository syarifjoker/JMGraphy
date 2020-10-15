@extends('pages.crew_layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2><b>Crew Management</b></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('booking_register') }}"> Register New Crew</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered"><table class="table table-bordered">
        <tr style="background-color:#008080; color:white">
            <th>Crew ID</th>
            <th>Crew Name</th>
            <th>Crew Position</th>
            <th>Crew Department</th>
            <th>Crew Email</th>
            <th width="350px">Action</th>
        </tr>
        @foreach ($crew as $c)
        <tr style="background-color:white">
            <td>{{ $c->crew_id }}</td>
            <td>{{ $c->crew_name}}</td>
            <td>{{ $c->crew_position}}</td>
            <td>{{ $c->crew_department}}</td>
            <td>{{ $c->crew_email}}</td>
            <td>
                <form action="#" method="POST"><!--{{ route('booking_destroy',$c->crew_id) }}-->
   
                    <a class="btn btn-info" href="#">Show</a><!--{{ route('booking_show',$b->booking_id) }}-->
    
                    <a class="btn btn-primary" href="#">Edit</a><!--{{ route('booking_edit',$b->booking_id) }}-->
   
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $crew ?? ''->links() !!}
      
@endsection