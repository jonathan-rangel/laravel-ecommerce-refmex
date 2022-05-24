<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <div class="container">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>¡Síguenos en nuestras redes sociales!</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            </i>RefMex
                        </h6>
                        <p>
                            Nos dedicamos a vender smartphones de la más alta calidad
                            a un precio que ni siquiera te puedes imaginar.
                            ¡Ve! Hasta hicimos una rima.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        @php
                            $categories = DB::table('categories')->get();
                        @endphp
                        <h6 class="text-uppercase fw-bold mb-4">
                            Categorías
                        </h6>
                        @foreach ($categories as $category)
                            <p>
                                <a href=" {{ url('/smartphones/' . $category->name) }}" class="text-reset"> {{ $category->name }} </a>
                            </p>
                        @endforeach
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Información
                        </h6>
                        <p>
                            <a href="/about_us" class="text-reset">Sobre nosotros</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Contact
                        </h6>
                        <p><i class="fas fa-home me-3"></i> San Luis Potosí, México. </p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            RefMex@refmex.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 44 234 567 88</p>
                        <p><i class="fas fa-print me-3"></i> + 44 234 567 89</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->
    </div>
</footer>
<!-- Footer -->
