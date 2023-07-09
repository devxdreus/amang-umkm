<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Amang UMKM</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>

<body>

  @include('partials._header')

  <main class="container mt-3" style="height: 1100px">
    <section class="row border-bottom pb-3 pt-3">
      <div class="col-2 border-end">
        <div class="list-group list-group-flush">
          <a href="#" class="list-group-item list-group-item-action active">
            Makanan & Minuman
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Fashion
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Elektronik
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Kesehatan
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Kecantikan
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Olahraga
          </a>
          <a href="#" class="list-group-item list-group-item-action">
            Lainnya
          </a>
        </div>
      </div>
      <div class="col-10 ps-4" onclick="window.location.href = 'productDetails.html'">
        <div
          style="
                            width: 892px;
                            height: 344px;
                            background-image: url(https://i.postimg.cc/nVkp1Gdx/Frame-560.png);
                        ">
        </div>
      </div>
    </section>

    <section>
      <div class="row mt-5">
        <div class="col">
          <div class="d-flex align-items-center mb-2">
            <div style="width: 15px; height: 30px" class="bg-primary d-inline-block me-3 rounded"></div>
            <span class="text-primary">Kategori</span>
          </div>
          <h3>Browse by Category</h3>
          <div class="d-flex justify-content-between mt-5">
            <div style="width: 150px; height: 150px" class="bg-light border"></div>
            <div style="width: 150px; height: 150px" class="bg-light border"></div>
            <div style="width: 150px; height: 150px" class="bg-light border"></div>
            <div style="width: 150px; height: 150px" class="bg-light border"></div>
            <div style="width: 150px; height: 150px" class="bg-light border"></div>
            <div style="width: 150px; height: 150px" class="bg-light border"></div>
          </div>
        </div>
      </div>

      <section>
        <div class="row mt-5">
          <div class="col">
            <div class="d-flex align-items-center mb-2">
              <div style="width: 15px; height: 30px" class="bg-primary d-inline-block me-3 rounded"></div>
              <span class="text-primary">Rekomendasi</span>
            </div>
            <h3>Best Selling Product</h3>
            <div class="d-flex justify-content-between mt-4">
              <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                <img src="images/sedangTren1.png">
              </div>
              <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                <img src="images/sedangTren2.png">
              </div>
              <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                <img src="images/sedangTren3.png">
              </div>
              <div style="width: 270px; height: 250px; border-radius: 4px;" class="bg-light border">
                <img src="images/sedangTren4.png">
              </div>
            </div>
          </div>
        </div>
      </section>
  </main>

  <footer class="container-fluid bg-dark text-white-50 p-5 mt-5">
    <div class="row">
      <div class="col-3">
        <span class="fs-5 fw-medium d-lg-inline-block mb-3">Support</span>
        <p class="mb-1">Banjarmasin, Kalimantan Selatan, Indonesia</p>
        <p class="mb-1">support@amangumkm.com</p>
        <p class="mb-1">+62 821-3456-7890</p>
      </div>
      <div class="col-2">
        <span class="fs-5 fw-medium d-lg-inline-block mb-3">Account</span>
        <p class="mb-1">My Account</p>
        <p class="mb-1">Login / Register</p>
        <p class="mb-1">Shop</p>
      </div>
      <div class="col-2">
        <span class="fs-5 fw-medium d-lg-inline-block mb-3">Quick Links</span>
        <p class="mb-1">Privacy Policy</p>
        <p class="mb-1">Terms of Use</p>
        <p class="mb-1">FAQ</p>
        <p class="mb-1">Contact</p>
      </div>
      <div class="col-2">
        <span class="fs-5 fw-medium d-lg-inline-block mb-3">Social Media</span>
        <p class="mb-1">[...] [...] [...] [...]</p>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
    integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>
