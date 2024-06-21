<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-Bv7Zo5woqQnS15VNYfMQ+DqXzK9r8F2rJImG5o5z5ruYx/ujA0EBvgXxofHmW/tqm/ZXo/7a9C7uyAfYUb/mNQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    #mapid {
      height: 250px;
      width: 100%;
    }
  </style>
</head>

<body>
  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('admin/dashboard'); ?>">Home</a></li>
            </ol>
          </div>
        </div>
        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success alert-transparent">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>
        <?php if ($this->session->flashdata('success_changed')): ?>
        <div class="alert alert-success alert-transparent">
          <?php echo $this->session->flashdata('success_changed'); ?>
        </div>
        <?php endif; ?>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>120</h3>
                <p>New Cooffees</p>
              </div>
              <div class="icon">
                <i class="fas fa-coffee"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>80<sup style="font-size: 20px">%</sup></h3>
                <p>Customer Satisfaction</p>
              </div>
              <div class="icon">
                <i class="ion ion-happy-outline"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>50</h3>
                <p>New Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>300</h3>
                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div class="card bg-primary-gradient">
                  <div class="card-header border-0">
                    <h3 class="card-title">
                      <i class="fas fa-map-marker-alt mr-1"></i>
                      Cooffeeshop Locations
                    </h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                        <i class="far fa-calendar-alt"></i>
                      </button>
                      <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse"
                        title="Collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <div id="mapid"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
  </div>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      var mymap = L.map('mapid').setView([-7.7956, 110.3695], 13);

      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(mymap);

      // Ganti koordinat berikut dengan koordinat Kontrakan MGM
      L.marker([-7.7793, 110.4065]).addTo(mymap)
        .bindPopup('Kontrakan MGM Jl. Kanigoro No.265, Pomahan, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta')
        .openPopup();
    });
  </script>
</body>

</html>
