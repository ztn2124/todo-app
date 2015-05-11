@extends('layout')
@section('content')
<section class="header section-padding">
<div class="background">&nbsp;</div>
<div class="container">
<div class="header-text">
<h1>Learning Laravel: The Easiest Way</h1>
<p>
This is our To-do list! <br />
Built using Laravel 4 framework!
</p>
</div>
</div>
</section>
<div class="container">
<section class="section-padding">
<div class="jumbotron text-center">

<div class="panel panel-default">
<div class="panel-heading">
<h1>
<span class="grey">Our</span> To-do List
</h1>
</div>
@if ($tasks->isEmpty())
<p> Currently, there is no task!</p>
@else
<table class="table">
<thead style="background: green; color: #FFFFFF">
<tr>
<td>#</td>
<td>Title</td>
<td>Body</td>
<td>Finish</td>
</tr>
</thead>
<tbody>
@foreach($tasks as $task)
<tr>
<td>{{ $task->id }} </td>
<td>{{ $task->title }}</td>
<td>{{ $task->body}}</td>
<td>{{ $task->done ? 'Yes' : 'No'}}</td>
<td>
<a href="{{ action('TasksController@edit', $task->id) }}"
class="btn btn-info">Edit</a>
<a href="{{ action('TasksController@delete', $task->id) }}"
class="btn btn-info">Delete</a>
</td>
</tr>
@endforeach
</tbody>
</table>
@endif
</div>


</div>
</section>
</div>

@stop
