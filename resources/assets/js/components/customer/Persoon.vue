<template>
    <div id="app">
        <h1>persoonsgegevens</h1>
        <div class="container">
            <p class="pTekst">Om te zorgen dat de boten ook bij jou terecht komen, vragen we enkele persoonlijke gegevens om de reservatie te volbrengen!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
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
                <br>
                <div id="success"></div>
                <div class="form-group flexButton">
                    <button type="reset" class="btn btn-secondary" id="sendMessageButton">
                        <router-link to="/boeken">Vorige</router-link>
                    </button>
                    <button type="submit" class="btn btn-primary" id="sendMessageButton" @click="storeNewKlanten">
                        <router-link to="/overzicht" >Volgende</router-link>
                    </button>
                </div>
            </form>
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
                klanten: [],
                loggedinUser: {
                    'username': '',
                    'email': '',
                    'roles': []
                },
                newKlanten: {
                    'aanvoornaam': '',
                    'naam': '',
                    'email': '',
                    'telefoon': '',
                    'companies_id': 1
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
                this.getKlanten();
            },
            getKlanten() {
                axios.get('/klanten')
                    .then(response => {
                        this.klanten = response.data;
                        console.log(response.data);
                    });
            },
            storeNewKlanten(){
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
            }
        }
    }
</script>
