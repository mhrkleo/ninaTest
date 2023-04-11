@extends('templates.template')
@section('content')
<table class="mx-auto max-w-4xl border-collapse border border-slate-400 ...">
  <thead>
    <tr>
      <th class="border border-slate-300 ...">Name</th>
      <th class="border border-slate-300 ...">Age</th>
      <th class="border border-slate-300 ...">Gender</th>
      <th class="border border-slate-300 ...">Location</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
        <td class="border border-slate-300 ...">{{ $user->name }}</td>
        <td class="border border-slate-300 ...">{{ $user->age }}</td>
        <td class="border border-slate-300 ...">{{ $user->gender }}</td>
        <td class="border border-slate-300 ...">{{ $user->getLocation->name }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop