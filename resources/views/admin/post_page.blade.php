<!DOCTYPE html>
<html>
<head> 
  @include('admin.css')
  <style type="text/css"> 
    .post_title {
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      color: white;
      padding: 30px;
    }
    .div_center {
      text-align: center;
      padding: 30px;
    }
    label {
      display: inline-block;
      font-weight: bold;
      width: 200px;
    }
    #preview {
      width: 100%;
      height: auto;
      margin-top: 10px;
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
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            x 
          </button>
          {{ session()->get('message') }}
        </div>
      @endif
      <h1 class="post_title">Add post</h1>
      <div>
        <form action="{{ url('add_post') }}" method="POST" enctype="multipart/form-data">
          @csrf  
          <div class="div_center">
            <label> Title</label>
            <input style="width: 90%" type="text" name="title">
          </div>
          <div class="div_center">
            <label>Description</label>
            <textarea name="description" style="height: 150px; width: 100%;"></textarea>
          </div>
          <div class="div_center">
            <label> Image</label>
            <input type="file" name="image" onchange="previewImage(this);">
          </div>
          <div id="preview" class="div_center"></div>
          <div class="div_center">
            <input type="submit" class="btn btn-primary" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>

</body>
</html>
