@extends('layouts/main')

@section('content')

    <!--==================== CONTACT PAGE ====================-->
    <section class="work__page section container" id="work__page">
        <h1 class="work__page-title">
            <div>This </div> <div>is </div> <div>our </div> <div>work. </div> <br>
            <div>Check </div> <div>out </div> <div>by </div> <div>filters.</div>
        </h1>

        <div class="work__page__container">
            <a href="#work_digital-strategy" class="work__page__filters">All Projects</a>
            <a href="#work_branding" class="work__page__filters">Website</a>
            <a href="#work_user-experience" class="work__page__filters">Mobile App</a>
            <a href="#work_user-experience" class="work__page__filters">Dashboard</a>
        </div>

        <div class="work__page__body">
            <div class="work__page__list">
                <h1 class="work__page__list-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, aspernatur.</h1>
                <img class="work__page__list-img" src="img/office.jpg" alt="">
                <div class="work__page__list-desc grid">
                    <div> 
                        <h6>Services</h6>
                        <h5>Category <br>
                        </h5>
                    </div>
                    <div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam saepe atque culpa exercitationem deserunt dignissimos magni eveniet autem, quam unde, id quibusdam eligendi ut voluptatum voluptas? Accusamus eius sapiente voluptates accusantium, eveniet reprehenderit necessitatibus quibusdam qui veritatis perspiciatis illum. Cum iusto a eius voluptas perferendis nobis dolorem, placeat ad nesciunt!</p>
                    </div>
                    <div class="work__page__list-link">
                        <a href="">View Case Study</a>
                    </div>
                </div>
            </div>
            <div class="work__page__list">
                <h1 class="work__page__list-title">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Soluta, aspernatur.</h1>
                <img class="work__page__list-img" src="img/office.jpg" alt="">
                <div class="work__page__list-desc grid">
                    <div> 
                        <h6>Services</h6>
                        <h5>Category <br>
                        </h5>
                    </div>
                    <div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam saepe atque culpa exercitationem deserunt dignissimos magni eveniet autem, quam unde, id quibusdam eligendi ut voluptatum voluptas? Accusamus eius sapiente voluptates accusantium, eveniet reprehenderit necessitatibus quibusdam qui veritatis perspiciatis illum. Cum iusto a eius voluptas perferendis nobis dolorem, placeat ad nesciunt!</p>
                    </div>
                    <div class="work__page__list-link">
                        <a href="">View Case Study</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection