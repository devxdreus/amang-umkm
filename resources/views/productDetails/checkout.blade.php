<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg bg-body-tertiary border-bottom">
        <div class="container">
          <a class="navbar-brand" href="#">Amang UMKM</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sign Up</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Search
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <main class="container mt-3" style="min-height: 100vh">
      <div class="py-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <h1>Detail Paket</h1>
              <br />
              <img
                class="justify-content-center img-fluid"
                width="80%"
                height="200"
                src="kkoldak.png"
                alt=""
              />
              <div
                class="card text-dark bg-light mb-3"
                style="max-width: 40rem"
              >
                <div class="card-body">
                  <h5 class="card-title">Yang Didapat:</h5>
                  <p class="card-text">
                    1. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    <br />
                    2. Corrupti earum, magni alias totam praesentium vel rem
                    <br />
                    eligendi ad enim officiis tempora itaque reprehenderit.
                    <br />
                    3. Dignissimos non nisi velit, mollitia consequuntur
                    consectetur.
                  </p>
                </div>
              </div>
              <br />
              <h2>Detail Kontrak</h2>
              <embed width="80%" height="300" src="surat.pdf" type="" />
            </div>
            <div class="col-lg-4">
              <h1>Data Franchisee</h1>
              <hr />

              <form>
                <div class="mb-3">
                  <label for="noTelepon" class="form-label"
                    >Nomor Telepon</label
                  >
                  <input
                    type="text"
                    id="noTelepon"
                    class="form-control"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="email"
                    id="email"
                    class="form-control"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="alamat" class="form-label">Alamat</label>
                  <input
                    type="text"
                    id="alamat"
                    class="form-control"
                    required
                  />
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
                <br />
                <h3>Pembayaran</h3>
                <hr />

                <ul class="list-group">
                  <li class="list-group-item d-flex justify-content-between">
                    <h6 class="my-0">Nama Franchise:</h6>
                    <div class="text-muted">Kkoldak</div>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <h6 class="my-0">Harga:</h6>
                    <div class="text-muted">Rp9.000.000</div>
                  </li>
                </ul>
                <br />
                <h5>Bank:</h5>
                <img class="img-fluid" src="bank.png" alt="" />
                <div class="mb-3">
                  <label for="namaCC" class="form-label"
                    >Nama Credit Card</label
                  >
                  <input
                    type="text"
                    id="namaCC"
                    class="form-control"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label for="noCC" class="form-label">Nomor Credit Card</label>
                  <input
                    type="number"
                    id="noCC"
                    class="form-control"
                    required
                  />
                </div>
                <button type="submit" class="btn btn-primary">Checkout</button>
              </form>
            </div>
          </div>
        </div>
      </div>
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
          <span class="fs-5 fw-medium d-lg-inline-block mb-3"
            >Social Media</span
          >
          <p class="mb-1">[...] [...] [...] [...]</p>
        </div>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
      integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
