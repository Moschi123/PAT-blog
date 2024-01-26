<div class="services_section layout_padding" style="margin-bottom: 20px;">
    <div class="container">
        <h1 class="services_taital">Enjoy </h1>
        <p class="services_text">"A unique place on Earth.</p>
        <div class="services_section_2">
            <div class="row">
                @foreach($post as $post)
                <div class="col-md-4">
                    <div>
                        <img src="/postimage/{{$post->image}}" class="services_img img-fluid" style="margin-bottom: 20px; width: 100%;">
                    </div>
                    <h4>{{$post->title}}</h4>
                    <div class="btn_main">
                        <a href="{{url('post_details',$post->id)}}">Read More</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
