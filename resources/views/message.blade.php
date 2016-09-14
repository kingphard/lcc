@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                   CHECK MESSAGES
                </div>
            </div>
        </div>
    </div>

 <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">Add Video Sermon </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Abdul Muhiz</td>
                            <td>Abdullahi</td>
                            <td>abdulmuhiz@gmail.com</td>
                            <td>please can your try to call me now</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>


</div>
@endsection
