@extends('layouts.app')

  

<table class="table text-center">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
      </tr>
    </thead>
    <tbody>
        @if($posts->isNotEmpty())
        @foreach ($posts as $post )
        <tr>
            <th scope="row">{{ $post->id }}</th>
            <td>{{ $post->name }}</td>
          </tr>  
        @endforeach
        @else
        <div>
            <h2>No posts found</h2>
        </div>
    @endif
    </tbody>
  </table>

