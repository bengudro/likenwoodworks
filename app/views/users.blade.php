@extends('layouts.master')

@section('sidebar')
  <p>This is appended to the master sidebar.</p>
@stop

@section('content')
   <table>
    <thead>
     <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Name</th>
      <th>Created At</th>
      <th>Updated At</th>
     </tr>
    </thead>
    <tbody>
@foreach($users as $user)
     <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->name }}</td>
      <td>{{ $user->created_at }}</td>
      <td>{{ $user->updated_at }}</td>
     </tr>
@endforeach
    </tbody>
    <tfoot>
     <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Name</th>
      <th>Created At</th>
      <th>Updated At</th>
     </tr>
    </tfoot>
   </table>
@stop
