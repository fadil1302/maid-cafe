@extends('layout.page')

@section('content')
    <div class="content-header bg-dark">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Welcome to Maid Cafe</h1>
                </div>
            </div>
        </div>
    </div>

    
    <div id="carouselExampleIndicators" class="carousel container slide bg-dark" data-ride="carousel">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h3 class="ml-5"> Our Staf</h3>
            </div>
        </div>
        <div class="carousel-inner">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            @foreach ($data as $key => $d)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                <img class="d-block  corousel-img" style="width: 30%;" src="{{ asset($d->image) }}" alt="Slide {{ $key + 1 }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $d->name }}</h5>
                    <p>{{ $d->email }}</p>
                </div>
            </div>
            @endforeach
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <section id="menu" class="content bg-dark">
        <div class="container">

        </div>
    </section>
    <section id="about" class="content bg-dark">
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2>Our Menu</h2>
                    <div class="row">
                        <div class="col-md-4 ">
                            <div class="card bg-gray">
                                <img src="{{ asset('lte/dist/img/food1.jpg') }}" style="height: 400px" class="card-img-top" alt="Menu Item 1">
                                <div class="card-body">
                                    <h5 class="card-title">Roti coklat</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-gray">
                                <img src="{{ asset('lte/dist/img/food2.jpg') }}" style="height: 400px" class="card-img-top" alt="Menu Item 2">
                                <div class="card-body">
                                    <h5 class="card-title">Pancake strawberry</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-gray">
                                <img src="{{ asset('lte/dist/img/drink.jpg') }}" style="height: 400px" class="card-img-top" alt="Menu Item 3">
                                <div class="card-body">
                                    <h5 class="card-title">coklat / susu hangat</h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2>About Us</h2>
                    <p>Selamat datang di Maid Cafe, tempat di mana kami menghadirkan pengalaman unik dan menyenangkan bagi para pengunjung kami. Maid Cafe adalah konsep kafe yang berasal dari Jepang, di mana kami tidak hanya menyajikan hidangan lezat dan minuman yang menyegarkan, tetapi juga menawarkan suasana yang hangat dan ramah seperti di rumah sendiri.</p>
                    <p>Di Maid Cafe, kami membangun konsep kafe kami di sekitar tema maid atau pelayan, di mana staf kami mengenakan kostum maid yang menggemaskan untuk melayani Anda. Kami berkomitmen untuk memberikan pengalaman yang menyenangkan dan menyambut setiap tamu dengan senyum dan keramahan yang tulus.</p>
                
                    <p>Setiap hidangan di menu kami disiapkan dengan cinta dan keahlian oleh koki kami yang berbakat. Mulai dari hidangan klasik hingga kreasi modern, menu kami dirancang untuk memuaskan berbagai selera. Tidak hanya itu, kami juga menawarkan berbagai acara dan pertunjukan khusus yang menambah keseruan kunjungan Anda ke Maid Cafe.</p>
                
                    <p>Bergabunglah dengan kami di Maid Cafe untuk merasakan kehangatan dan keunikan dari konsep kafe kami. Jadikan kunjungan Anda menjadi pengalaman yang tak terlupakan di mana Anda dapat bersantai, menikmati makanan dan minuman yang lezat, serta menikmati suasana yang berbeda dari kafe pada umumnya.</p>
                    
                </div>
            </div>
        </div>
    </section>
    @endsection
    