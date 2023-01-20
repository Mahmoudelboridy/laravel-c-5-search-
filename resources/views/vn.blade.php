@extends('layouts.app')

<div class="container">
    <h1 class="text-center">laravel course</h1>
<form method="GET" action="{{ route('post') }}">
    <div class="mb-3">
      <label for="exampleInputEmail1" class=" form-label">عنوان</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label  class="form-label">كلام </label>
      <input type="text" name="content" class="h-25 p-5 form-control" >
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
<div class="card my-5" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ $title }}</h5>
      <h6 class="card-subtitle mb-2 text-muted"> {{ $content }}</h6>
    </div>
  </div>
</div>


<style>
    *{
        text-align: center;
        font-size: 20pt;
        font-weight: bold;
    }
</style>