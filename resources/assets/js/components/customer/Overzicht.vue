<template>
    <div id="app">
        <h1>Checkout</h1>
        <div class="container pTekst">
            <div class="row" v-if="showMessages !== true">
                <div class="col-md-8 order-md-1">
                    <section>
                        <h3>Persoonlijke gegevens</h3>
                        <p>Naam:</p>
                        <p>Telefoon:</p>
                        <p>E-mail</p>
                    </section>
                    <!-- <section>
                        <h2>Boot</h2>
                        <p>Naam Boot:</p>
                        <p>Aantal personen:</p>
                    </section> -->
                    
                </div>
                <section class="col-md-4 order-md-2 mb-4">
                    <h4 class="text-muted">Je gekozen boten</h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h5 class="my-0">Boot 1</h5>
                                <small class="text-muted">boot voor 4 personen</small>
                            </div>
                            <span class="text-muted">€10</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    <h5 class="my-0">Boot 2</h5>
                                    <small class="text-muted">boot voor 2 personen</small>
                                </div>
                                <span class="text-muted">€5</span>
                            </li>
                    </ul>
                    <hr>
                    <div class=" d-flex justify-content-between lh-condensed">
                        <div>
                            <h3 class="my-0">Totaal</h3>
                            <small class="text-muted">Btw incl.</small>
                        </div>
                        <span>€15</span>
                    </div>
                </section>
                <div id="success"></div>
                <div class="col-md-4 order-md-2 mb-4">
                    <div class="form-group flexButton">
                       <button type="reset" class="btn btn-secondary" id="sendMessageButton">
                        <router-link to="/persoon">Vorige</router-link>
                    </button>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="showMessage">
                        {{showMessages}}
                        <!-- <router-link to="/overzicht" >Checkout</router-link> -->
                    </button>
                    </div>
                </div>
                
            </div>
            <p v-show="showMessages">Bedankt voor u boeking, je krijgt zo een mail doorgestuurd met alle informatie in verband met je reservering</p>
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
                showMessages: false
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
            showMessage() {
                this.showMessages = true;
            }
        }
    }

</script>

