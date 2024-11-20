<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard - Admin</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        {{-- icon big --}}
                        <div class="card-icon bg-primary">
                            <i class="fas fa-children"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total User</h4>
                            </div>
                            <div class="card-body">
                                0{{-- {{ count(\App\Models\Stunting::all()) }} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-danger">
                            <i class="fas fa-children"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Regional</h4>
                            </div>
                            <div class="card-body">
                                0{{-- {{ count(\App\Models\Stunting::all()) }} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Event</h4>
                            </div>
                            <div class="card-body">
                                0{{-- count total Stunting belum diberi intervensi --}}
                                {{-- {{ App\Models\Stunting::totalBelumDiberiIntervensi() }} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-chart-simple"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total Member</h4>
                            </div>
                            <div class="card-body">
                                0{{-- {{ count(\App\Models\Position::all())}} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-warning">
                            <i class="fas fa-marker"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total </h4>
                            </div>
                            <div class="card-body">
                                {{-- count total stunting dengan status TB/U = Sangat Pendek --}}
                                0{{-- {{ count(\App\Models\Stunting::where('STATUS_TBU','Sangat Pendek')->get()) }} --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                    <div class="card card-statistic-1">
                        <div class="card-icon bg-success">
                            <i class="fas fa-people-group"></i>
                        </div>
                        <div class="card-wrap">
                            <div class="card-header">
                                <h4>Total </h4>
                            </div>
                            <div class="card-body">
                                0{{-- {{ count(\App\Models\BapakAsuh::all()) }} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>