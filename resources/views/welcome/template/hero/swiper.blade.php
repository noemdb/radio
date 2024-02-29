<section id="testimonials" class="testimonials" style="background-image: url('{{asset("images/background/brand/UEFLACarucelBg444x1024.png")}}') !important; background-repeat: repeat-x;">
    <div class="container">
        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @forelse ($priorityPosts as $post)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            {{-- @php $imageUrl = (!empty($post->file_url)) ? $post->file_url : null; @endphp --}}
                            {{-- <img src="{{$imageUrl}}" class="testimonial-img" alt=""> --}}

                            @php $category = $post->category @endphp
                            {{-- @include('welcome.component.icon.category',['category'=>$category]) --}}

                            @include('welcome.component.icon.post',['post'=>$post,'size'=>6])

                            <h3 class="text-light">{{ $post->title}}</h3>
                            <h4>
                                <div class="text-light small">
                                    <div>{{$category->name}}</div>
                                    <div>Creado: {{ ($post->created_at) ? $post->created_at->format('d-m-Y h:i') : null }}</div>
                                    <div>Actualizado: {{ ($post->updated_at) ? $post->updated_at->format('d-m-Y h:i') : null }}</div>
                                </div>
                            </h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{ $post->description}}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                            <a href="{{route('welcome',['post_id'=>$post->id])}}" class="btn btn-{{$post->color_class}}">Detalles</a>
                        </div>
                    </div>
                    <!-- End swiper-slide -->
                @empty

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="display-3">
                                Bienvenidos
                            </div>
                        </div>
                    </div>

                @endforelse
                @foreach ($priorityPosts as $post)

                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
