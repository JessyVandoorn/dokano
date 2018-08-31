<template>
    <div id="app">
        <div id="wrapper">
            <ul class="sidebar navbar-nav">
                <li class="nav-item">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <router-link to="/">Home</router-link>
                </li>
                <li class="nav-item">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <router-link to="/instellingen">Instellingen</router-link>
                </li>
                <li class="nav-item">
                    <i class="fas fa-fw fa-table"></i>
                    <router-link to="/inkomsten">Inkomsten</router-link>
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
                            <div class="form-group">
                            <input v-model="dateReservaties" type="date" class="form-control" v-on:change="getReservaties();"/>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <td>Naam</td>
                                            <td>Telefoon</td>
                                            <td>Email</td>
                                            <td>Boot</td>
                                            <td>Aanwezig</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="reservatie in list">
                                            <td>{{reservatie.klant.voornaam}} {{reservatie.klant.naam}}</td>
                                            <td>{{reservatie.klant.telefoon}}</td>
                                            <td>{{reservatie.klant.email}}</td>
                                            <td>
                                                <template v-if="reservatie.boten" v-for="boot in reservatie.boten">
                                                    {{ boot.aantal_plaatsen}} plaatsen, nr. {{boot.boten_id}}<br/>
                                                </template>
                                            </td>
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

                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-table"></i>
                            Tijdsloten per dag</div>
                        <div class="card-body">
                            <div class="form-group">
                            <input v-model="dateReservaties" type="date" class="form-control" v-on:change="getReservaties();"/>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>dateReservaties</th>
                                            <th>Boten</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <template v-for="sloten in list" v-if="sloten.klant.datum === dateReservaties">
                                            <tr>
                                                <td>{{sloten.klant.uur_start}} - {{sloten.klant.uur_eind}}</td>
                                                <td>
                                                    <template v-for="boot in sloten.boten">
                                                        nr. {{boot.boten_id}}
                                                        <br/>
                                                    </template>
                                                </td>
                                            </tr>
                                        </template>
                                        
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
                list: [],
                dateNow: '',
                date: '',
                total: null,
                user: [],
                dateReservaties: ''
            }
        },
        mounted() {
            this.prepareComponent();
        },
        methods: {
            prepareComponent() {
                this.dateNow = moment().locale('en-ca').format('L');
                this.date = moment().locale('nl-be').format('ll');
                this.dateReservaties = moment().locale('nl-be').format('YYYY-MM-DD');
                console.log(this.dateReservaties);
                console.log(this.dateNow);
                this.getUser();
                this.getBoten();
                this.getGesloten();
                this.getTijdsloten();
                this.getKlanten();
                this.getReservaties();
                this.getTime();
            },
            getUser() {
                axios.get('/user')
                    .then(response => {
                        this.user = response.data[0];
                        console.log(response.data);
                    });
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
                axios.get('/reservaties/'+this.dateReservaties)
                    .then(response => {
                        this.list = response.data;
                        console.log('list');
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
                axios.get('/companies/'+this.user.company_id+'/tijdsloten')
                    .then(response => {
                        this.tijdsloten = response.data;
                        console.log(response.data);
                    });
            },
            getTime() {
                let self = this;
                this.date = moment().locale('nl-be').format('ll');
            },
            toggleVandaag() {
                this.dateNow = moment().locale('en-ca').format('L');
                this.date = moment().locale('nl-be').format('ll');
                console.log(this.dateNow);
            },
            toggleMorgen() {
                this.dateNow = moment().add(1, 'days').locale('en-ca').format('L');
                this.date = moment().add(1, 'days').locale('nl-be').format('ll');
            }
        }
    }
</script>
