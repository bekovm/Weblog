<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('Weblog', 'Index page')</title>
        @extends('layouts.app')
        <h1>Articles</h1>
  </head>
    <body>
        @section('content')
    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th>Action</th>
        </tr>
    </table>
        @endsection
    </body>
</html>