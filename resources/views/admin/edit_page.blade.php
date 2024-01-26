<!DOCTYPE html>
<html>
  <head>
    <base href="/public">
   @include('admin.css')
   <style> 
   .title_deg
   {
    font-size:30px;
    font-weight:bold;
    color:white;
    padding:30px;
    text-align:center;
   }

   .div_center {
    text-align: center;
      padding: 30px;
   }
   .post_title {
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      color: white;
      padding: 30px;
    }

   .table_deg
   {
    border:1px solid white;
    width:80%;
    text-align:center;
    margin-left:70px;
   }
   label {
      display: inline-block;
      font-weight: bold;
      width: 200px;
    }
   .th_deg
  {
     background-color:skyblue;
    }
    .img_deg{
        height:100px;  
        width:150px;
        padding:10px;
          }
</style>
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
      @if(session()->has('message'))
     <div class='alert alert-sucess'>
      <button type='button' class='close' data-dismiss='alert'
      aria-hidden='true'>
x
      </button>
{{session()->get('message')}}
     </div>
      @endif
      <h1 class="post_title">Update post</h1>

      <form action="{{ url('update_post'),$post->id}}" method="POST" enctype="multipart/form-data">
       @csrf  
          <div class="div_center">
            <label>Post Title</label>
            <input style="width: 90%" type="text" name="title">

          </div>
          <div class="div_center">
            <label>Post Description</label>
            <textarea name="description" style="height: 150px; width: 100%;"></textarea>
          </div>
          <div class="div_center">
    <label>Old Image</label>

    <img style="margin:auto;" height="150px" width="150px" src="/postimage/{{$post->image}}">

          </div>
          <div class="div_center">
            <label>Update Old Image</label>
            <input type="file" name="image">
          </div>
          <div class="div_center">
            <input type="submit" class="btn btn-primary" value="Update">
          </div>
        </form>
</div>
       @include('admin.footer')
  </body>
</html>