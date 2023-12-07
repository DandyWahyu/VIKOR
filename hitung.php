<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="javascript:;">Hasil Dan Analisa</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <!-- <form class="navbar-form">
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form> -->
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="javascript:;">
                            <i class="material-icons">dashboard</i>
                            <p class="d-lg-none d-md-block">
                                Stats
                            </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">
                                Some Actions
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mike John responded to your email</a>
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                        </div>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">
                                Account
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="aksi.php?act=logout">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Hasil Analisa</h4>
                            <p class="card-category"> Kriteria dalam mementukan guru terbaik</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <?php
                                            $data = get_data();
                                            foreach ($KRITERIA as $key => $val) : ?>
                                                <th><?= $val->nama_kriteria ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <?php foreach ($data as $key => $val) : ?>
                                        <tr>
                                            <td><?= $key ?></td>
                                            <td><?= $ALTERNATIF[$key] ?></td>
                                            <?php foreach ($val as $k => $v) : ?>
                                                <td><?= round($v, 3) ?></td>
                                            <?php endforeach; ?>
                                        </tr>
                                    <?php endforeach ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Cost/Benefit</td>
                                            <?php foreach ($KRITERIA as $key => $val) : ?>
                                                <td><?= $val->atribut == 'benefit' ? 1 : -1 ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Konversi</h4>
                            <!-- <p class="card-category"> Kriteria dalam mementukan guru terbaik</p> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <?php
                                            $data_cb = get_data_cb($data);
                                            $minmax = get_minmax($data_cb);
                                            foreach ($KRITERIA as $key => $val) : ?>
                                                <th><?= $val->nama_kriteria ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <?php foreach ($data_cb as $key => $val) : ?>
                                        <tr>
                                            <td><?= $key ?></td>
                                            <td><?= $ALTERNATIF[$key] ?></td>
                                            <?php foreach ($val as $k => $v) : ?>
                                                <td><?= round($v, 3) ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    <?php endforeach ?>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2">Max</td>
                                            <?php foreach ($minmax['max'] as $key => $val) : ?>
                                                <td><?= $val ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Min</td>
                                            <?php foreach ($minmax['min'] as $key => $val) : ?>
                                                <td><?= $val ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">N<sub>ij</h4>
                            <!-- <p class="card-category"> Kriteria dalam mementukan guru terbaik</p> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <?php
                                            $nij = get_nij($data_cb, $minmax);
                                            foreach ($KRITERIA as $key => $val) : ?>
                                                <th><?= $key ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <?php foreach ($nij as $key => $val) : ?>
                                        <tr>
                                            <td><?= $key ?></td>
                                            <?php foreach ($val as $k => $v) : ?>
                                                <td><?= round($v, 3) ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Terbobot</h4>
                            <!-- <p class="card-category"> Kriteria dalam mementukan guru terbaik</p> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <?php
                                            $terbobot = get_terbobot($nij);
                                            foreach ($KRITERIA as $key => $val) : ?>
                                                <th><?= $key ?></th>
                                            <?php endforeach; ?>
                                        </tr>
                                    </thead>
                                    <?php foreach ($terbobot as $key => $val) : ?>
                                        <tr>
                                            <td><?= $key ?></td>
                                            <?php foreach ($val as $k => $v) : ?>
                                                <td><?= round($v, 3) ?></td>
                                            <?php endforeach ?>
                                        </tr>
                                    <?php endforeach ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Nilai Utilitas (S) dan Ukuran Regret (R)</h4>
                            <!-- <p class="card-category"> Kriteria dalam mementukan guru terbaik</p> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <?php
                                            $sr = get_utilitas_regret($terbobot);
                                            foreach ($KRITERIA as $key => $value) : ?>
                                                <th><?= $key ?></th>
                                            <?php endforeach; ?>
                                            <th>S</th>
                                            <th>R</th>
                                        </tr>
                                    </thead>
                                    <?php foreach ($terbobot as $key => $value) : ?>
                                        <tr>
                                            <td><?= $key ?></td>
                                            <?php foreach ($value as $k => $v) : ?>
                                                <td><?= round($v, 3) ?></td>
                                            <?php endforeach; ?>
                                            <td><?= round($sr['s'][$key], 3) ?></td>
                                            <td><?= round($sr['r'][$key], 3) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    <tr>
                                        <td colspan="<?= count($KRITERIA) + 1 ?>" class="text-right">S*</td>
                                        <td><?= round(max($sr['s']), 3) ?></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="<?= count($KRITERIA) + 1 ?>" class="text-right">S-</td>
                                        <td><?= round(min($sr['s']), 3) ?></td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr>
                                        <td colspan="<?= count($KRITERIA) + 1 ?>" class="text-right">R*</td>
                                        <td>&nbsp;</td>
                                        <td><?= round(max($sr['r']), 3) ?></td>
                                    </tr>
                                    <tr>
                                        <td colspan="<?= count($KRITERIA) + 1 ?>" class="text-right">R-</td>
                                        <td>&nbsp;</td>
                                        <td><?= round(min($sr['r']), 3) ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Indeks Vikor/ Perangkingan</h4>
                            <!-- <p class="card-category"> Kriteria dalam mementukan guru terbaik</p> -->
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <?php
                                $indeks = array(0.5, 0.57, 0.43);
                                $q = get_q($sr, $indeks);
                                $rank_q = get_rank_q($q);
                                $rata = get_rata($rank_q);
                                $rank_rata = get_rank($rata);
                                ?>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th rowspan="2">Kode</th>
                                            <th rowspan="2">Nama</th>
                                            <th colspan="<?= count($indeks) ?>">Indeks Vikor (Q)</th>
                                            <th colspan="<?= count($indeks) ?>">Rank</th>
                                            <th rowspan="2">Rata</th>
                                        </tr>
                                        <tr>
                                            <?php foreach ($indeks as $key => $val) : ?>
                                                <th>v=<?= $val ?></th>
                                            <?php endforeach ?>
                                            <?php foreach ($indeks as $key => $val) : ?>
                                                <th>v<?= $key + 1 ?></th>
                                            <?php endforeach ?>
                                        </tr>
                                    </thead>
                                    <?php
                                    foreach ($rank_rata as $key => $val) : ?>
                                        <tr>
                                            <td><?= $key ?></td>
                                            <td><?= $ALTERNATIF[$key] ?></td>
                                            <?php foreach ($q[$key] as $k => $v) : ?>
                                                <td><?= round($v, 3) ?></td>
                                            <?php endforeach ?>
                                            <?php foreach ($q[$key] as $k => $v) : ?>
                                                <td><?= $rank_q[$key][$k] ?></td>
                                            <?php endforeach ?>
                                            <td><?= round($rata[$key], 3) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <a class="btn btn-default" target="_blank" href="cetak.php?m=hitung"><i class="material-icons">
                                    print
                                </i> Cetak</a>
                            <a class="btn btn-danger" type="hidden" target="_blank" href="pdf.php?m=hitung"><i class="material-icons">
                                    picture_as_pdf
                                </i> PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="https://www.creative-tim.com">
                            Creative Tim
                        </a>
                    </li>
                    <li>
                        <a href="https://creative-tim.com/presentation">
                            About Us
                        </a>
                    </li>
                    <li>
                        <a href="http://blog.creative-tim.com">
                            Blog
                        </a>
                    </li>
                    <li>
                        <a href="https://www.creative-tim.com/license">
                            Licenses
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>, made with <i class="material-icons">favorite</i> by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
            </div>
        </div>
    </footer>
</div>