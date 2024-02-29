{{-- {{$categoyCurrent ?? null}} --}}

<section id="about" class="about py-2" style="background-image: url('{{asset("images/background/brand/about1024x480.png")}}') !important;">
    <div class="container-fluid">

        <div class="row">
            {{-- <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right"> --}}
            <div class="col-md-12 col-xl-2 col-lg-2 d-flex justify-content-center align-items-stretch" data-aos="fade-right">
                {{-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> --}}
                {{-- @include('welcome.component.icon.category',['category'=>$categoyAbout]) --}}
                <div class="text-{{$categoyAbout->color_class ?? null}}">
                    @include('welcome.component.icon.categorySvg',['category'=>$categoyAbout,'size'=>8])
                    <div class="d-flex justify-content-center display-6">{{$categoyAbout->name ?? null}}</div>
                </div>
            </div>

            <div class="col-md-12 col-xl-10 col-lg-10 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-2 px-lg-5" data-aos="fade-left">
                <h4>{{$categoyAbout->title ?? null}}</h4>
                <p>{{$categoyAbout->descriptions ?? null}}.</p>

                @php $postAbouts = $categoyAbout->getFeaturePosts()->take(4) @endphp

                @forelse ($postAbouts as $post)
                    @php $delay = $loop->iteration * 25 @endphp
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="{{$delay}}">
                        @include('welcome.component.icon.post',['post'=>$post])
                        <h4 class="title">{{$post->title}}</h4>
                        <p class="description fw-bold pb-0 mb-0">{{$post->description}}</p>
                        <p class="description">{{Str::limit($post->body,200,'...')}}</p>
                        <div class="text-end">
                            <a href="{{route('welcome',['post_id'=>$post->id])}}" class="btn btn-{{$post->color_class}} btn-small">Detalles</a>
                        </div>
                    </div>
                @empty
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="icon"><i class="bx bx-fingerprint"></i></div>
                        <h4 class="title"><a href="">Información por defecto</a></h4>
                        <p class="description"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam sapiente laboriosam ipsum ut repellat enim adipisci error nesciunt animi. Voluptatibus laboriosam sunt voluptatum repellendus odio nihil sapiente soluta odit exercitationem. </p>
                    </div>
                @endforelse

            </div>
        </div>

    </div>
</section>
