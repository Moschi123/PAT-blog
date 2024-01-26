<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <base href="/public">
    @include('home.homecss')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .header_section {
            /* Estilos del encabezado, ajusta según sea necesario */
        }

        .main_content {
            text-align: center;
            padding: 20px;
        }

        .main_content img {
            width: 550px; /* Establece el ancho deseado */
            height: auto;
            display: block;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .post_title {
            font-size: 30px;
            margin-top: 100px ;
            color: #333;
        }

        .post_description {
            font-size: 24px;
            margin-top:100px;
            margin-bottom: 20px;
            color: #666;
        }

        .footer {
            /* Estilos del pie de página, ajusta según sea necesario */
        }
    </style>
</head>
<body>
    <!-- header section start -->
    <div class="header_section">
        @include('home.header')
    </div>

    <!-- Main Content -->
    <div class="main_content">
        <img src="/postimage/{{$post->image}}" class="services_img" alt="Post Image">
        <h3 class="post_title"><b>{{$post->title}}</b></h3>
        <h4 class="post_description">{{$post->description}}</h4>
    </div>

    <!-- footer section start -->
    <div class="footer">
        @include('home.footer')
    </div>
</body>
</html>
