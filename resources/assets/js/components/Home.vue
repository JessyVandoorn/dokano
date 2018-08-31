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
    
                    <!-- Icon Cards-->
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-primary o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-comments"></i>
                                    </div>
                                    <div class="mr-5">26 New Messages!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-warning o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-list"></i>
                                    </div>
                                    <div class="mr-5">11 New Tasks!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-success o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-shopping-cart"></i>
                                    </div>
                                    <div class="mr-5">123 New Orders!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="card text-white bg-danger o-hidden h-100">
                                <div class="card-body">
                                    <div class="card-body-icon">
                                        <i class="fas fa-fw fa-life-ring"></i>
                                    </div>
                                    <div class="mr-5">13 New Tickets!</div>
                                </div>
                                <a class="card-footer text-white clearfix small z-1" href="#">
                                    <span class="float-left">View Details</span>
                                    <span class="float-right">
                                        <i class="fas fa-angle-right"></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
    
                    <!-- Area Chart Example-->
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-chart-area"></i> Dag overzicht personen overzicht</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Naam</td>
                                            <td>Telefoon</td>
                                            <td>Email</td>
                                            <td>Aantal personen</td>
                                            <td>Aantal boten</td>
                                            <td>Aanwezig</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="reservatie in reservaties">
                                            <td>{{reservatie.voornaam}} {{reservatie.naam}}</td>
                                            <td>{{reservatie.telefoon}}</td>
                                            <td>{{reservatie.email}}</td>
                                            <td>10</td>
                                            <td>2</td>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div>
    
                    <!-- DataTables Example -->
                    <!-- <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i> Dag overzicht</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Boot 1</th>
                                            <th>Boot 2</th>
                                            <th>Boot 3</th>
                                            <th>Boot 4</th>
                                            <th>Boot 5</th>
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
                                        </tr>
                                        <tr>
                                            <td>9u30</td>
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
                                        </tr>
                                        <tr>
                                            <td>10u30</td>
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
                                        </tr>
                                        <tr>
                                            <td>11u30</td>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                    </div> -->

                    <div class="card mb-3">
                    <div class="card-header">
                        <i class="fas fa-table"></i>
                        Tijdsloten per dag</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <button @click="toggleVandaag">Vandaag</button>
                            <button @click="toggleMorgen">Morgen</button>
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>{{date}}</th>
                                        <!-- <th>Dinsdag</th>
                                        <th>Woensdag</th>
                                        <th>Donderdag</th>
                                        <th>Vrijdag</th>
                                        <th>Zaterdag</th>
                                        <th>Zondag</th> -->
                                        <th>Boten</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="sloten in reservaties" v-if="sloten.datum === dateNow">
                                        <td >{{sloten.uur_start}} - {{sloten.uur_eind}}</td>
                                        <td>{{sloten.id}}</td>
                                    </tr>
                                    <tr v-else="sloten.datum !== dateNow">
                                        <td v-once>Vandaag zijn we gesloten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
    
                </div>
                <!-- /.container-fluid -->
    
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
    
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
</template>
<script>
import * as moment from 'moment/moment';
    export default {
        data() {
            return {
                boten: [],
                gesloten: [],
                tijdsloten: [],
                klanten: [],
                reservaties: [],
                dateNow: '',
                date: ''
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
                this.getKlanten();
                this.getReservaties();
                this.getTime();
            },
            getBoten() {
                axios.get('/boten')
                    .then(response => {
                        this.boten = response.data;
                        console.log(response.data);
                    });
            },
            getKlanten() {
                axios.get('/klanten')
                    .then(response => {
                        this.klanten = response.data;
                        console.log(response.data);
                    });
            },
            getReservaties() {
                axios.get('/reservaties')
                    .then(response => {
                        this.reservaties = response.data;
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
            getTime(){
                let self = this;
                this.date = moment().locale('nl-be').format('ll');
            },
            toggleVandaag(){
                this.dateNow = moment().locale('en-ca').format('L');
                this.date = moment().locale('nl-be').format('ll');
                console.log(this.dateNow);
            },
            toggleMorgen(){
                this.dateNow = moment().add(1,'days').locale('en-ca').format('L');
                this.date = moment().add(1,'days').locale('nl-bee').format('ll');
            }
        }
    }

</script>