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

    <main class="container mt-3" style="height: 1000px">
      <div class="py-5">
        <div class="d-flex align-items-center mb-2">
          <div
            style="width: 15px; height: 30px"
            class="bg-primary d-inline-block me-3 rounded"
          ></div>
          <span class="text-primary fw-bold">Menjadi Mitra Kami</span>
        </div>
        <br /><br />
        <form class="row g-3">
          <div class="col-md-6">
            <label for="namaBisnis" class="form-label">Nama Bisnis</label>
            <input type="text" class="form-control" id="namaBisnis" required />
          </div>
          <div class="col-md-6">
            <label for="tahunAwal" class="form-label"
              >Tahun Awal Bisnis Berjalan</label
            >
            <input
              type="text"
              class="form-control"
              id="tahunAwal"
              placeholder="DD/Month/YY"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="usernameIG" class="form-label"
              >Username Instagram</label
            >
            <input type="text" class="form-control" id="usernameIG" required />
          </div>
          <div class="col-md-6">
            <label for="jumlahOutlet" class="form-label">Jumlah Outlet</label>
            <input
              type="number"
              class="form-control"
              id="jumlahOutlet"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="namaPJBisnis" class="form-label"
              >Nama Penanggung Jawab Bisnis</label
            >
            <input
              type="text"
              class="form-control"
              id="namaPJBisnis"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="areaJangkauan" class="form-label"
              >Area Jangkauan Outlet</label
            >
            <input
              type="text"
              class="form-control"
              id="areaJangkauan"
              placeholder="Kalimantan, Jawa, Sumatera, dll."
              required
            />
          </div>
          <div class="col-md-6">
            <label for="kontakPJBisnis" class="form-label"
              >Kontak Penanggung Jawab Bisnis</label
            >
            <input
              type="text"
              class="form-control"
              id="kontakPJBisnis"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="rataRataKotor" class="form-label"
              >Rata-rata penghasilan kotor bisnis per-bulan</label
            >
            <input
              type="text"
              class="form-control"
              id="rataRataKotor"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="emailBisnis" class="form-label">Email Bisnis</label>
            <input
              type="email"
              class="form-control"
              id="emailBisnis"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="rataRataBersih" class="form-label"
              >Rata-rata penghasilan bersih bisnis per-bulan</label
            >
            <input
              type="text"
              class="form-control"
              id="rataRataBersih"
              required
            />
          </div>
          <div class="col-md-6">
            <label for="kategoriBisnis" class="form-label"
              >Kategori Bisnis</label
            >
            <select
              class="form-select"
              aria-label="Default select example"
              required
            >
              <option selected>Kategori</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-6">
            <label for="kontrak" class="form-label">Kontrak</label>
            <input
              type="file"
              class="form-control"
              id="kontrak"
              required
              accept=".pdf"
              placeholder="PDF"
            />
          </div>
          <div class="col-12">
            <input
              type="checkbox"
              class="form-check-input"
              id="exampleCheck1"
              required
            />
            <label class="form-check-label" for="exampleCheck1"
              >Menyetuji Syarat & Ketentuan yang ditetapkan oleh Amang
              UMKM.</label
            >
            <div class="invalid-feedback">
              Kamu harus menyetujui syarat & ketentuan sebelum mengirim.
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Kirim</button>
            <button type="button" class="btn btn-outline-dark">Batal</button>
          </div>
        </form>
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
