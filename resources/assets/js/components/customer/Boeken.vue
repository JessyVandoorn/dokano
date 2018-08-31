<template>
    <div id="app">
        <h1>form</h1>
        <div v-if="firstPage">
            <p class="pTekst">Kies je dag, vervolgens je uur en kies dan de boot die voor jou gepast is en bij je gezelschap past!</p>
            <form action="" id="contactForm">
                <fieldset class="control-group">
                    <legend>Stap 1</legend>
                    <label for="" class="col-12 col-md-9 mb-2 mb-md-0">Kies je dag
                                    <input class="form-control form-control-lg buttonDag" type="date" id="datePicker" v-model="newReservaties.datum" @change="moment">
                                </label>
    
                </fieldset>
                <hr>
                <fieldset class="control-group" v-show="pickedDate !== false">
                    <legend>Stap 2</legend>
    
                    <label for="" class="col-12 col-md-9 mb-2 mb-md-0">
                                    Kies je uur{{selectedButton}}
                                    <div class="buttons">
                                        <label for="" v-for="slot in tijdsloten" v-if="dayOfWeek === slot.dagen">{{slot.uur_start}}-{{slot.uur_eind}}
                                            <input type="radio" v-model="newReservaties.tijdsloten_id" :key="slot.id" :value="slot.id">
                                        </label>
        </div>
        </label>
        </fieldset>
        </form>
        <div class="table-responsive" v-if="newReservaties.tijdsloten_id !== null">
            <hr>
            <legend>Stap 3</legend>
            <p class="col-md-9 mb-2 mb-md-0">Kies je boot</p>
            <table class="table table-bordered mb-2 mb-md-0">
                <thead>
                    <th>Naam Boot</th>
                    <th>Aantal personen</th>
                    <th>Max aantal kinderen</th>
                    <th>Prijs in €</th>
                    <th>Kies deze boot</th>
                </thead>
                <tbody>
                    <tr v-for="boot in boten" :key="boot.id">
                        <td>boot {{boot.id}}</td>
                        <td>{{boot.aantal_plaatsen}}</td>
                        <td>{{boot.max_kids}}</td>
                        <td>{{boot.prijs}}</td>
                        <td>Kies
                            <input type="checkbox" class="btn btn btn-outline-primary bootKnop" @click="chooseBoat" :value="boot.id" v-model="newReservaties.boten_id" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="form-group flexButton">
            <button type="reset" class="btn btn-secondary" id="sendMessageButton">Reset</button>
            <button type="submit" class="btn btn-primary buttonUur buttonTekst" id="sendMessageButton" @click="next">Volgende</button>
        </div>
    </div>
    <form name="sentMessage" id="contactForm" novalidate v-if="nextPage">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls col-md-6">
                <label>Voornaam</label>
                <input type="text" class="form-control" placeholder="John" id="name" v-model="newKlanten.voornaam" required data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls col-md-6">
                <label>Naam</label>
                <input type="text" class="form-control" placeholder="Doe" id="naam" v-model="newKlanten.naam" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls col-md-6">
                <label>Telefoon nummer</label>
                <input type="tel" class="form-control" placeholder="0458 49 39 49" id="phone" v-model="newKlanten.telefoon" required data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls col-md-6">
                <label>E-mail</label>
                <input type="email" class="form-control " placeholder="johndoe@example.com" id="email" v-model="newKlanten.email" required data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls col-md-6">
                <label>Opmerkingen</label>
                <textarea class="form-control " placeholder="Typ hier je opmerkingen" id="opmerkingen" v-model="newKlanten.opmerkingen" required data-validation-required-message="Please enter your email address."></textarea>
                <p class="help-block text-danger"></p>
            </div>
            <div class="control-group">
                <label for="">Factuur
                    <input type="checkbox" v-model="factuurCheck">
                </label>
            </div>
            <div v-show="factuurCheck">
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">VAT-nummer
                        <input class="form-control " type="number" v-model="newKlanten.vat">
                    </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">Bedrijfsnaam
                        <input class="form-control " type="text" v-model="newKlanten.company_name">
                    </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">Straat
                        <input class="form-control " type="text" v-model="newKlanten.street">
                    </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">Nummer
                        <input class="form-control " type="number" v-model="newKlanten.number">
                    </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">Postcode
                        <input class="form-control " type="number" v-model="newKlanten.zip">
                    </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">Stad
                        <input class="form-control " type="text" v-model="newKlanten.city">
                    </label>
                    </div>
                </div>
                <div class="control-group">
                    <div class="form-group floating-label-form-group controls col-md-6">
                        <label for="">Land
                        <input class="form-control " type="text" v-model="newKlanten.country">
                    </label>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="success"></div>
        <div class="form-group flexButton">
            <button type="reset" class="btn btn-secondary" id="sendMessageButton">Vorige
                            </button>
            <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="volgende">Volgende
                            </button>
        </div>
    </form>
    <div class="container pTekst" v-if="pageNext">
        <div class="row" v-if="showMessages !== true">
            <div class="col-md-8 order-md-1">
                <section>
                    <h3>Persoonlijke gegevens</h3>
                    <p>Naam: {{newKlanten.voornaam}}{{newKlanten.naam}}</p>
                    <p>Telefoon: {{newKlanten.telefoon}}</p>
                    <p>E-mail: {{newKlanten.email}}</p>
                    <p>Opmerkingen: {{newKlanten.opmerkingen}}</p>
                </section>
            </div>
            <section class="col-md-4 order-md-2 mb-4">
                <h4 class="text-muted">Je gekozen boten</h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed" v-for="number in newReservaties.boten_id">
                        <div>
                            <h5 class="my-0">Boot {{boten[number-1].id}}</h5>
                            <small class="text-muted">boot voor {{boten[number-1].aantal_plaatsen}} personen</small>
                        </div>
                        <span class="text-muted">€{{boten[number-1].prijs}}</span>
                    </li>
                </ul>
                <hr>
                <div class=" d-flex justify-content-between lh-condensed">
                    <div>
                        <h3 class="my-0">Totaal</h3>
                        <small class="text-muted">Btw incl.</small>
                    </div>
                    <span>{{total}}</span>
                </div>
            </section>
            <div id="success"></div>
            <div class="col-md-4 order-md-2 mb-4">
                <div class="form-group flexButton">
                    <button type="reset" class="btn btn-secondary" id="sendMessageButton">
                                        <router-link to="/persoon">Vorige</router-link>
                                    </button>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="showMessage">
                                        Verzenden
                                    </button>
                </div>
            </div>
    
        </div>
        <p v-show="showMessages">Bedankt voor u boeking, je krijgt zo een mail doorgestuurd met alle informatie in verband met je reservering</p>
    </div>
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
                newKlanten: {
                    'voornaam': '',
                    'naam': '',
                    'email': '',
                    'telefoon': '',
                    'companies_id': 1,
                    'opmerkingen': '',
                    'vat': null,
                    'number': null,
                    'city': null,
                    'company_name': null,
                    'street': null,
                    'zip': null,
                    'country': null
                },
                newReservaties: {
                    'boten_id': [],
                    'tijdsloten_id': null,
                    'klanten_id': null,
                    'datum': null
                },
                pickedDate: false,
                dayOfWeek: null,
                selectedButton: false,
                showMessages: false,
                nextPage: false,
                pageNext: false,
                firstPage: true,
                clickedBoats: null,
                klant_id: null,
                totaalPrijs: null,
                factuurCheck: false
            }
        },
        mounted() {
            this.prepareComponent();
        },
        computed: {
            total() {
                this.newReservaties.boten_id.forEach(boot => {
                    const prijs = this.boten[boot - 1].prijs;
                    this.totaalPrijs += prijs;
                    console.log(prijs);
                })
    
                return this.totaalPrijs;
            }
        },
        methods: {
            prepareComponent() {
                this.getBoten();
                this.getGesloten();
                this.getTijdsloten();
                this.getKlanten();
                this.getReservaties();
            },
            getBoten() {
                axios.get('/boten')
                    .then(response => {
                        this.boten = response.data;
                    });
            },
            getKlanten() {
                axios.get('/klanten')
                    .then(response => {
                        this.klanten = response.data;
                    });
            },
            getReservaties() {
                axios.get('/reservaties')
                    .then(response => {
                        this.reservaties = response.data;
                    });
            },
            getGesloten() {
                axios.get('/gesloten')
                    .then(response => {
                        this.gesloten = response.data;
                    });
            },
            getTijdsloten() {
                axios.get('/tijdsloten')
                    .then(response => {
                        this.tijdsloten = response.data;
                    });
            },
            storeNewKlanten() {
                this.persistStoreNewKlanten(
                    'post', '/klanten', this.newKlanten
                );
            },
            persistStoreNewKlanten(method, uri, form) {
                axios[method](uri, form)
                    .then(response => {
                        this.getKlanten();
                    })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            console.log(_.flatten(_.toArray(error.response.data)));
                        } else {
                            console.log(['Something went wrong, please try again']);
                        }
                    })
            },
            storeNewReservaties() {
                this.persistStoreNewKlanten(
                    'post', '/reservaties', this.newReservaties
                );
            },
            persistStoreNewKlanten(method, uri, form) {
                axios[method](uri, form)
                    .then(response => {
                        this.getReservaties();
                    })
                    .catch(error => {
                        if (typeof error.response.data === 'object') {
                            console.log(_.flatten(_.toArray(error.response.data)));
                        } else {
                            console.log(['Something went wrong, please try again']);
                        }
                    })
            },
            showMessage() {
                this.showMessages = true;
                this.storeNewReservaties();
            },
            next() {
                this.nextPage = true;
                this.firstPage = false;
            },
            volgende() {
                this.pageNext = true;
                this.storeNewKlanten();
                this.klant_id = this.klanten[this.klanten.length - 1].id;
                this.nextPage = false;
            },
            chooseBoat(event) {
                this.clickedBoats = event.srcElement.id;
            },
            moment() {
                this.pickedDate = true;
                this.dayOfWeek = moment(moment(this.newReservaties.datum)).locale('nl-be').format('dddd');
                // this.newReservaties.datum = moment().locale('en-ca').format('L');
            }
        }
    }
</script>
