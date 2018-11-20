<section class="Socials container">
    <div class="Socials-hGroup">
        <h2 class="Title-h2">
            ELLOS YA SE UNIERON AL RETO
            @for($i = 0 ; $i < 5; $i++) <span class="Title-h2Span"></span> @endfor
        </h2>
    </div>
    <hr class="Socials-hr">
    <div class="Socials-feed">
        <div class="row middle-items Socials-title">
            <figure><img class="Socials-img" src="{{asset('images/facebook.png')}}" alt=""></figure>
            <div>
                <h4 class="Socials-h4">FACEBOOK</h4>
                <h5 class="Socials-h5">@lilipinkcolombia</h5>
            </div>

        </div>
        <div class="row justify-between is-full-width">
            @for($i = 0 ; $i < 3; $i++)
                <article class="Socials-article col-16 col-l-5"></article>
            @endfor
        </div>
    </div>
    <hr class="Socials-hr">
    <div class="Socials-feed">
        <div class="row middle-items Socials-title">
            <figure><img class="Socials-img" src="{{asset('images/instagram.png')}}" alt=""></figure>
            <div>
                <h4 class="Socials-h4">INSTAGRAM</h4>
                <h5 class="Socials-h5">@lilipinkcol</h5>
            </div>
        </div>
        <div class="row justify-between is-full-width">
            @for($i = 0 ; $i < 3; $i++)
                <article class="Socials-article col-16 col-l-5">
                    asda
                </article>
            @endfor
        </div>
    </div>
</section>