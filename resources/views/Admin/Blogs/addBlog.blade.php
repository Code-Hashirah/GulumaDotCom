<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    @extends ('layouts.Admin.app')
    @section('form') 
    @if (session('success'))
<h2>Add Product</h2>
<div class="alert alert-success">
  <strong>Success!</strong>Blog added.
</div>
 @endif
    <!-- <center> -->
        <form action="{{url('/admin/add-blog')}}" method="post">
      
        @csrf
        <h3 id="sign-up-h3" style="color: rgb(27, 6, 6);">Add products</h3>
                <div class="input">
                    <label class="label" for="">Title of news</label>
                    <input  class="inpt-tag" name="Title" type="text">
                </div>
                <div class="input">
                    <label class="label" for=""> Body of news</label>
                   <textarea class="inpt-tagA" name="Body" cols="30" rows="10"></textarea>
                </div>
                <div class="input">
                    <label class="label" for="">Picture</label>
                    <input  class="inpt-tag" name="Picture" type="text">
                </div>
                <div class="input">
                    <label class="label" for="">Author</label>
                    <input  class="inpt-tag" name="Author" type="text">
                </div>
              
                <div class="input">
                  <button class="button btn btn-danger" type="submit">Add to Blogs</button>
                </div>
                <div class="input">
                   <a href="admin-dashboard.php" class="cancel">Cancel</a>
                </div>
        </form>
    <!-- </center> -->
    @endsection
</body>
</html>