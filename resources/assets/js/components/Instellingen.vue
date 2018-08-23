<template>
    <div id="app">
        <div id="wrapper">
                <ul class="sidebar navbar-nav">
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="inkomsten.html"> -->
                        <i class="fas fa-fw fa-chart-area"></i>
                        <router-link to="/">Home</router-link>
                        <!-- <a class="nav-link" href="{{ route('home') }}">{{ __('Dashboard') }}</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="inkomsten.html"> -->
                        <i class="fas fa-fw fa-chart-area"></i>
                        <router-link to="/instellingen">Instellingen</router-link>
                        <!-- <a class="nav-link" href="{{ route('inkomsten') }}">{{ __('Inkomsten') }}</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="instellingen.html"> -->
                        <i class="fas fa-fw fa-table"></i>
                        <router-link to="/inkomsten">Inkomsten</router-link>
                        <!-- <a class="nav-link" href="{{ route('instellingen') }}">{{ __('Instellingen') }}</a> -->
                    </li>
                </ul>

                <div id="content-wrapper">
                    <div class="container-fluid">
                        <!-- Breadcrumbs-->
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="#">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Overview</li>
                        </ol>
                    </div>
                    <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Area Chart Example</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th></th>
                    <th>Aantal plaatsen</th>
                    <th>Max aantal kids</th>
                    <th>Type</th>
                    <th>Prijs</th>
                  </tr>
                </thead>
                <tbody>
                    <tr v-for="item in boten">
                        <td>boot {{item.id}}</td>
                        <td>{{item.aantal_plaatsen}}</td>
                        <td>{{item.max_kids}}</td>
                        <td>{{item.type_id}}</td>
                        <td>{{item.prijs}}</td>
                    </tr>
                </tbody>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
                    <!-- DataTables Example -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Boten</div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="aantal_plaatsen">Aantal plaatsen:</label>
                                                <input id="aantal_plaatsen" name="aantal_plaatsen" type="number" class="form-control" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="max_kinds">Max aantal kinderen:</label>
                                                <input id="max_kids" type="number" name="max_kids" class="form-control" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="type">Type:</label>
                                                <input id="type" name="type" type="text" class="form-control" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="prijs">Prijs:</label>
                                                <input id="prijs" name="prijs" type="number" class="form-control" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="aantal_beschikbaar">Aantal beschikbaar:</label>
                                                <input id="aantal_beschikbaar" name="aantal_beschikbaar" type="number" class="form-control" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div id="success"></div>
                                        <!-- For success/fail messages -->
                                        <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="storeNewBoot();">Voeg boot toe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Tijdssloten</div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="control-group form-group">
                                            <p>Dagen:</p>
                                            <div class="controls dagen">

                                                <label for="maandag" class="weekDagen">Maandag
                                                    <input type="checkbox" class="form-control" id="maandag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label class="weekDagen" for="dinsdag">Dinsdag
                                                    <input type="checkbox" class="form-control" id="dinsdag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label for="woensdag" class="weekDagen">Woensdag
                                                    <input type="checkbox" class="form-control" id="woensdag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label class="weekDagen" for="donderdag">Donderdag
                                                    <input type="checkbox" class="form-control" id="donderdag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label class="weekDagen" for="vrijdag">Vrijdag
                                                    <input type="checkbox" class="form-control" id="vrijdag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label class="weekDagen" for="zaterdag">Zaterdag
                                                    <input type="checkbox" class="form-control" id="zaterdag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label class="weekDagen" for="zondag">Zondag
                                                    <input type="checkbox" class="form-control" id="zondag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <p>Dagdeel: </p>
                                            <div class="controls dagen">
                                                <label class="weekDagen" for="voormiddag">Voormiddag
                                                    <input type="checkbox" class="form-control" id="voormiddag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <label class="weekDagen" for="namiddag">Namiddag
                                                    <input type="checkbox" class="form-control" id="namiddag" required data-validation-required-message="Please enter your .">
                                                </label>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="startUur">Start uur:</label>
                                                <input type="time" class="form-control" id="startuur" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="eindUur">Eind uur:</label>
                                                <input type="time" class="form-control" id="eindUur" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div id="success"></div>
                                        <!-- For success/fail messages -->
                                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Voeg tijdslot toe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <i class="fas fa-table"></i>
                                    Gesloten</div>
                                <div class="card-body">
                                    <form action="">
                                        <div class="control-group form-group">
                                            <div class="controls">
                                                <label for="dag">Dag
                                                    <input id="dag" type="checkbox">
                                                </label>
                                                <label for="periode">Periode
                                                    <input id="periode" type="checkbox">
                                                </label>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div id="enkeleDag" class="control-group form-group invisible">
                                            <div class="controls">
                                                <label for="keuzeDag">Keuze dag</label>
                                                <input type="date" class="form-control" id="keuzeDag" required data-validation-required-message="Please enter your name.">
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div id="periodeKeuze" class="control-group form-group invisible">
                                            <div class="controls">
                                                <p>Keuze periode</p>
                                                <label for="startPeriode">Start date
                                                    <input type="date" id="startPeriode">
                                                </label>
                                                <label for="eindPeriode">
                                                    End date
                                                    <input id="eindPeriode" type="date">
                                                </label>
                                                <p class="help-block"></p>
                                            </div>
                                        </div>
                                        <div id="success"></div>
                                        <!-- For success/fail messages -->
                                        <button type="submit" class="btn btn-primary" id="sendMessageButton">Voeg sluitdagen toe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Tijdsloten overzicht</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Maandag</th>
                                            <th>Dinsdag</th>
                                            <th>Woensdag</th>
                                            <th>Donderdag</th>
                                            <th>Vrijdag</th>
                                            <th>Zaterdag</th>
                                            <th>Zondag</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>9u</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>9u30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10u</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>10u30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>11u</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>11u30</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>12u</td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
                    <!-- Sticky Footer -->
                    <footer class="sticky-footer">
                        <div class="container my-auto">
                            <div class="copyright text-center my-auto">
                                <span>Copyright © Dokano 2018</span>
                            </div>
                        </div>
                    </footer>

                </div>
                <!-- /.content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
          return{
            boten: [],
            loggedinUser: {
              'username': '',
              'email': '',
              'roles': []
            },
            newBoot: {
                'aantal_plaatsen': null,
                'max_kids': null,
                'prijs': null,
                'type': null,
                'aantal_beschikbaar': null
            }
          }
        },
        mounted() {
            this.prepareComponent();
        },
        methods: {
          prepareComponent(){
            this.getBoten();
          },
          getBoten(){
            axios.get('/boten')
              .then(response => {
                this.boten = response.data;
                console.log(response.data);
              });
          }
        }
    }
</script>

