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
                                        <td>{{item.types_id}}</td>
                                        <td>{{item.prijs}}</td>
                                    </tr>
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
                                <form>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="aantal_plaatsen">Aantal plaatsen:</label>
                                            <input id="aantal_plaatsen" v-model="newBoot.aantal_plaatsen" name="aantal_plaatsen" type="number" class="form-control" required
                                                data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="max_kinds">Max aantal kinderen:</label>
                                            <input id="max_kids" type="number" v-model="newBoot.max_kids" name="max_kids" class="form-control" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="types_id">Type:</label>
                                            <input id="types_id" name="types_id" type="number" v-model="newBoot.types_id" class="form-control" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="prijs">Prijs:</label>
                                            <input id="prijs" name="prijs" type="number" v-model="newBoot.prijs" class="form-control" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="aantal_beschikbaar">Aantal beschikbaar:</label>
                                            <input id="aantal_beschikbaar" v-model="newBoot.aantal_beschikbaar" name="aantal_beschikbaar" type="number" class="form-control"
                                                required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div id="success"></div>
                                    <!-- For success/fail messages -->
                                    <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="storeNewBoot">Voeg boot toe</button>
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
                                                <input type="checkbox" class="form-control" v-model="newTijdsloten.dagen" id="maandag" value="maandag">
                                            </label>
                                            <label class="weekDagen" for="dinsdag">Dinsdag
                                                <input type="checkbox" class="form-control" id="dinsdag" v-model="newTijdsloten.dagen" value="dinsdag">
                                            </label>
                                            <label for="woensdag" class="weekDagen">Woensdag
                                                <input type="checkbox" class="form-control" id="woensdag"  v-model="newTijdsloten.dagen" value="woensdag">
                                            </label>
                                            <label class="weekDagen" for="donderdag">Donderdag
                                                <input type="checkbox" class="form-control" id="donderdag" v-model="newTijdsloten.dagen" value="donderdag">
                                            </label>
                                            <label class="weekDagen" for="vrijdag">Vrijdag
                                                <input type="checkbox" class="form-control" id="vrijdag" v-model="newTijdsloten.dagen" value="vrijdag">
                                            </label>
                                            <label class="weekDagen" for="zaterdag">Zaterdag
                                                <input type="checkbox" class="form-control" id="zaterdag" v-model="newTijdsloten.dagen" value="zaterdag">
                                            </label>
                                            <label class="weekDagen" for="zondag">Zondag
                                                <input type="checkbox" class="form-control" id="zondag" v-model="newTijdsloten.dagen" value="zondag">
                                            </label>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="startUur">Start uur:</label>
                                            <input type="time" class="form-control" v-model="newTijdsloten.uur_start" id="startuur" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div class="control-group form-group">
                                        <div class="controls">
                                            <label for="eindUur">Eind uur:</label>
                                            <input type="time" class="form-control" v-model="newTijdsloten.uur_eind" id="eindUur" required data-validation-required-message="Please enter your name.">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div id="success"></div>
                                    <!-- For success/fail messages -->
                                    <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="storeNewTijdsloten">Voeg tijdslot toe</button>
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
                                                <input id="dag" type="checkbox" @click="checkBoxToggle" v-model="newGesloten.dag">
                                            </label>
                                            <label for="periode">Periode
                                                <input id="periode" type="checkbox"  @click="checkBoxToggle" v-model="newGesloten.periode">
                                            </label>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div id="enkeleDag" class="control-group form-group" v-if="newGesloten.dag">
                                        <div class="controls">
                                            <label for="keuzeDag">Keuze dag</label>
                                            <input type="date" class="form-control" id="keuzeDag" required data-validation-required-message="Please enter your name." v-model="newGesloten.date1">
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div id="periodeKeuze" class="control-group form-group" v-if="newGesloten.periode">
                                        <div class="controls">
                                            <p>Keuze periode</p>
                                            <label for="startPeriode">Start date
                                                <input type="date" id="startPeriode" v-model="newGesloten.date2">
                                            </label>
                                            <label for="eindPeriode">
                                                End date
                                                <input id="eindPeriode" type="date" v-model="newGesloten.date3">
                                            </label>
                                            <p class="help-block"></p>
                                        </div>
                                    </div>
                                    <div id="success"></div>
                                    <!-- For success/fail messages -->
                                    <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="storeNewGesloten">Voeg sluitdagen toe</button>
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
                            <button v-for="dag in weekdag" @click="toggleDag(dag)">{{dag}}</button>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th v-model="weekdagSelected">{{weekdagSelected}}</th>
                                        <!-- <th>Dinsdag</th>
                                        <th>Woensdag</th>
                                        <th>Donderdag</th>
                                        <th>Vrijdag</th>
                                        <th>Zaterdag</th>
                                        <th>Zondag</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="dag in tijdsloten" v-if="dag.dagen === weekdagSelected">
                                        <td >{{dag.uur_start}} - {{dag.uur_eind}}</td>
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
        data() {
            return {
                boten: [],
                gesloten: [],
                tijdsloten: [],
                loggedinUser: {
                    'username': '',
                    'email': '',
                    'roles': []
                },
                newBoot: {
                    'aantal_plaatsen': '',
                    'max_kids': '',
                    'prijs': '',
                    'types_id': '',
                    'aantal_beschikbaar': ''
                },
                newGesloten: {
                    'dag': null,
                    'periode': null,
                    'date1': null,
                    'date2': null,
                    'date3': null,
                },
                newTijdsloten: {
                    'dagen': [],
                    'dagdeel': [],
                    'uur_start': null,
                    'uur_eind': null,
                    'companies_id': '1'

                },
                weekdag: [
                    'zondag', 'maandag', 'dinsdag', 'woensdag', 'donderdag', 'vrijdag', 'zaterdag'
                ],
                weekdagSelected: 'maandag'
            }
        },
        mounted() {
            this.prepareComponent();
        },
        methods: {
            prepareComponent() {
                this.getBoten();
                this.getGesloten();
                this.getTijdsloten();
            },
            getBoten() {
                axios.get('/boten')
                    .then(response => {
                        this.boten = response.data;
                        console.log(response.data);
                    });
            },
             getGesloten() {
                axios.get('/gesloten')
                    .then(response => {
                        this.gesloten = response.data;
                        console.log(response.data);
                    });
            },
            getTijdsloten() {
                axios.get('/tijdsloten')
                    .then(response => {
                        this.tijdsloten = response.data;
                        console.log(response.data);
                    });
            },
            storeNewBoot() {
                this.persistStoreNewBoot(
                    'post', '/boten', this.newBoot
                );
            },
            persistStoreNewBoot(method, uri, form) {
                axios[method](uri, form)
                    .then(response => {
                        this.getBoten();
                    })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            console.log(_.flatten(_.toArray(error.response.data)));
                        } else {
                            console.log(['Something went wrong, please try again']);
                        }
                    })
            },
            storeNewTijdsloten() {
                this.persistStoreNewBoot(
                    'post', '/tijdsloten', this.newTijdsloten
                );
            },
            persistStoreNewTijdsloten(method, uri, form) {
                axios[method](uri, form)
                    .then(response => {
                        this.getTijdsloten();
                    })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            console.log(_.flatten(_.toArray(error.response.data)));
                        } else {
                            console.log(['Something went wrong, please try again']);
                        }
                    })
            },
            storeNewGesloten(){
                this.persistStoreNewGesloten(
                    'post', '/gesloten', this.newGesloten
                );
            },
            persistStoreNewGesloten(method, uri, form) {
                axios[method](uri, form)
                    .then(response => {
                        this.getGesloten();
                    })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            console.log(_.flatten(_.toArray(error.response.data)));
                        } else {
                            console.log(['Something went wrong, please try again']);
                        }
                    })
            },
            checkBoxToggle(event) {
                console.log(event.target);
                this.$emit("input", event.target.checked)
            },
            toggleDag(dag){
                this.weekdagSelected = dag;
                console.log(dag);
            }
        }
    }
</script>
