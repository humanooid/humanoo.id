@extends('b._layout')
@section('content')
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>{{ $title }}</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title float-start">
                                Meeting Lists
                            </h5>
                            <!-- <a href="/makeapost" class="btn btn-success btn-style-light btn-sm float-end"><i class="material-icons">add</i>Create Post</a> -->
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($meetings as $meeting)
                                    <tr>
                                        <td>{{ $meeting->InputName }}</td>
                                        <td>{{ $meeting->InputDate }}</td>
                                        <td>{{ $meeting->InputEmail }}</td>                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection