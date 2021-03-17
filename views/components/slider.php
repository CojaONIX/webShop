

<style>
    .carousel-item {
        transition: 1s; /* Bitno zbog tranzicije slika (umesto trenutnog pojavljivanja) */
    }
</style>

<div class="bs-slider">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slider/slider1.jpg" class="d-block w-100">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Accessories</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/slider/slider2.jpg" class="d-block w-100">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Apparel</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <img src="images/slider/slider3.jpg" class="d-block w-100">
                <!-- <div class="carousel-caption d-none d-md-block">
                    <h5>Computers</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div> -->
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>