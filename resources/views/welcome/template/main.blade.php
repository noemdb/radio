<main id="main">

    <!-- ======= About Section ======= -->
    @php $categoyAbout = $featureCategories->shift() @endphp
    {{-- {{$categoyCurrent ?? null}} --}}
    @includeWhen($categoyAbout,'welcome.partials.about')
    <!-- End About Section -->

    <!-- ======= Features Section ======= -->
    {{-- @php $categoyFeature = $featureCategories->shift() @endphp --}}
    {{-- @includeWhen($categoyFeature,'welcome.partials.features') --}}
    <!-- End Features Section -->

    <!-- ======= Counts Section  ======= -->
    {{-- @include('welcome.partials.counts') --}}
    <!-- End Counts Section -->

    <!-- ======= Details Section ======= coverPagePost -->
    @php $postDetails = $coverPagePost @endphp
    @include('welcome.partials.details')
    <!-- End Details Section -->

    <!-- ======= Gallery Section ======= -->
    {{-- @include('welcome.partials.gallery') --}}
    <!-- End Gallery Section  -->

    <!-- ======= Testimonials Section ======= -->
    {{-- @include('welcome.partials.testimonials') --}}
    <!-- End Testimonials Section -->

    <!-- ======= Team Section ======= -->
    {{-- @include('welcome.partials.team') --}}
    <!-- End Team Section -->

    <!-- ======= Pricing Section  ======= -->
    {{-- @include('welcome.partials.pricing') --}}
    <!-- End Pricing Section -->

    <!-- ======= F.A.Q Section ======= -->
    {{-- @include('welcome.partials.faq') --}}
    <!-- End F.A.Q Section -->

    <!-- ======= Contact Section ======= -->
    {{-- @include('welcome.partials.contact') --}}
    <!-- End Contact Section -->

</main><!-- End #main -->
