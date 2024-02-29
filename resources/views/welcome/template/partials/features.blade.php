<section id="features" class="features">
    <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>{{$categoyFeature->name}}</h2>
            <p>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-2">
                            <div class="text-{{$categoyFeature->color_class}}">
                                @include('welcome.component.icon.categorySvg',['category'=>$categoyFeature,'size'=>4])
                            </div>
                        </div>
                        <div class="col-10">
                            <h5>{{$categoyFeature->title}}</h5>
                        </div>
                    </div>
                </div>
            </p>
        </div>


        <div class="row" data-aos="fade-left">
            @php $postFeatures = $categoyFeature->getFeaturePosts()->take(4) @endphp
            @php $arr_color = ['#ffbb2c','5578ff','e80368','e361ff','11dbcf','ff5828','ff5828'] @endphp

            @forelse ($postFeatures as $post)
                @php $delay = $loop->iteration * 25 @endphp
                @php $color = (array_key_exists($loop->index,$arr_color)) ? $arr_color[$loop->index] : null @endphp
                <div class="col-lg-3 col-md-4 {{ ($loop->iteration > 1) ? 'mt-4 mt-md-0' : null}}">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <a href="{{route('welcome',['post_id'=>$post->id])}}">
                            <div class="d-flex">
                                <div class="text-{{$post->color_class}}">
                                    @include('welcome.component.icon.post',['post'=>$post,'color'=>$color])
                                </div>
                                <div class="text-dark">{{$post->title}}</div>
                            </div>
                            <div class="text-secondary" style="font-size: 1rem">
                                <div>{{$post->description}}</div>
                                <div style="font-size: 0.8rem">{{Str::limit($post->body,100,'...')}}</div>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
                <div class="col-lg-3 col-md-4">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <i class="ri-store-line" style="color: #ffbb2c;"></i>
                        <h3><a href="">Lorem Ipsum</a></h3>
                    </div>
                </div>
            @endforelse
        </div>

    </div>
</section>
