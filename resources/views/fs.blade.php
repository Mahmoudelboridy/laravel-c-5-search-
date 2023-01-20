@extends('layouts.app')

<form action="{{ route('search') }}" method="GET" class="d-flex mx-5" role="search">
  @csrf
    <input name="search" class="form-control me-2 w-25 my-5" type="search" placeholder="Search" aria-label="Search">
    <button class="btn h-25 my-5  btn-outline-success" type="submit">Search</button>
  </form>    


<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data )
      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->name }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
