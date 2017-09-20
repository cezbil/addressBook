@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Contacts</div>

                    <div class="panel-body">
                        <a href="{{ route('contacts.create') }}">Add Contact</a>
                    </div>

                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">List of Contacts</div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                <tr>

                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone number</th>
                                    <th>Edit/Delete</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->fullName}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->phoneNumber}}</td>

                                        <td>
                                            <a href="#">
                                                <div class="btn btn-primary">
                                                    Edit
                                                </div>
                                            </a>

                                            <a href="#">
                                                <div class="btn btn-danger">
                                                    Delete
                                                </div>
                                            </a>
                                        </td>
                                        <td>


                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="#">
                                <div class="btn btn-default">
                                    Back
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection