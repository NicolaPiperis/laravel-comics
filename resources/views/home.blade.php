@extends('welcome')

@section('cards')
    <main>

        <section class="hero">
            <div>
                <strong>CURRENT SERIES</strong>
            </div>
        </section>

        <section class="comics">

            <div class="container-comics">

                @foreach ($fumetti as $fumetto)
                    <div>
                        <img class="img-fumetti" src="{{ $fumetto['thumb'] }}" alt="">
                        <div id="details-fumetti">{{ $fumetto['series'] }}</div>
                    </div>
                @endforeach

            </div>

            <div class="more">
                <strong>LOAD MORE</strong>
            </div>

        </section>

        <section class="buy">

            <div class="tools-container">

                <div class="tools">
                    <img src="images/buy-comics-digital-comics.png" alt="">
                    <div>DIGITAL COMICS</div>
                </div>

                <div class="tools">
                    <img src="images/buy-comics-merchandise.png" alt="">
                    <div>DC MERCHANDISE</div>
                </div>

                <div class="tools">
                    <img src="images/buy-comics-subscriptions.png" alt="">
                    <div>SUBSCRIPTION</div>
                </div>

                <div class="tools">
                    <img src="images/buy-comics-shop-locator.png" alt="">
                    <div>COMIC SHOP LOCATOR</div>
                </div>

                <div class="tools">
                    <img src="images/buy-dc-power-visa.svg" alt="">
                    <div>DC POWER VISA </div>
                </div>

            </div>

        </section>

    </main>
@endsection;
