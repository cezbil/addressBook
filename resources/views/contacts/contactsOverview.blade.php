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
                                            <a href="{{ route('contacts.edit', ['id' => $contact->id]) }}">

                                                <div class="btn btn-primary">
                                                    Edit
                                                </div>
                                            </a>
                                            <form class="form-horizontal" role="form" method="POST" action="{{route('contacts.destroy', ['id' => $contact->id]) }}">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                        <td>


                                        </td>

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
@endsection