@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    Hello!
                </div>
                <form action="/search" method="POST" role="search">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="Search users">
                        <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                     <span class="glyphicon glyphicon-search"></span>
                    </button>
                        </span>
                    </div>
                </form>
                <center>
                    <h1>Category will be there next time, i promise  </h1>

                </center>

            </div>
        </div>
    </div>
</div>
@endsection

