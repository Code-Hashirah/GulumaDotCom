<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Blog</title>
    <style>
        #bdy{
            width: auto;
            overflow: hidden;
            height: 50px;
        }
    </style>
    @extends('layouts.admin.app')
    @section('table')
    @if(count($Blogs) > 0)
    <table class="table">
            <tr>
                <th>S/N</th>
                <th>Title</th>
                <th>Body</th>
                <th>Picture</th>
                <th>Author</th>
                <th>Actions</th>
            </tr>
    @php
    $sn=1
    @endphp
    @foreach ($Blogs as $blog)
           <tr> 
                <td>{{$sn++}}</td>
                <td>{{$blog->title}}</td>
                <td><p id="bdy">{{$blog->body}}</p></td>
                <td><img src="{{$blog->picture}}" alt="picture" width="200px" height="150px"></td>
                <td>
                        <p>{{$blog->author}}</p>
                    </td>
                <td>   
                <form action="/admin/delete-blog" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="Id" class="" value="{{$blog->id}}">
                    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                    <a href="{{url('/admin/edit-blog', $blog->id) }}" class="btn  btn-success">Update</a>
                </form> </td>
            </tr> 
            @endforeach
          </table>
          @endif

        
    @endsection
</body>
</html>