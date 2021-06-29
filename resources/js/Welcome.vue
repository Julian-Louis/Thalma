<template>

    <div id="wrapper">
        <header id="header">
            <div class="container">
                <div class="logo">
                    <a href="#"><img alt="Image description" src="img/logo1.png"></a>
                </div>
                <a class="nav-opener" href="index-2.html"><span></span></a>
                <nav class="main-nav">
                    <ul>
                        <li><a href="index-2.html">Accueil</a></li>
                        <li class="dropdown">
                            <a class="dropdownbtn" href="faq.html">FAQ</a>
                        </li>
                        <li><a href="index-2.html#contact">Contact</a></li>

                        <li class="signup"><a href="#">Rejoindre</a></li>
                        <li class="signin"><a class="btn" href="#">Dashboard</a></li>

                    </ul>
                </nav>
            </div>
        </header>
        <main id="main">
            <div class="visual">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-12">
                            <div class="new-info">
                                <span class="new"> Nouveau</span>
                                <p>INSCRIPTIONS OUVERTES PROCHAINEMENT! <br> RESTEZ A JOUR, REJOIGNEZ NOS RÉSEAUX.</p>
                            </div>
                            <div class="textblock">
                                <h1>Selwer Group</h1>
                                <p>Selwer est la première communauté Française privée axée sur l'entraide et le gain
                                    d'argent en ligne.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <a class="btn" href="#" style="margin-top: 1rem;">Rejoindre</a>
                                </div>
                            </div>
                        </div>
                        <div class="goro">
                            <div class="col-lg-5 col-md-5 col-12">
                                <div id="mobile-shit"></div>
                                <div class="iphone">
                                    <div class="wow fadeInRight div-image"
                                         style="visibility: visible; animation-name: fadeInRight;">
                                        <img id="removeonphone" class="animation" height="344" src="img/hero.png"
                                             width="498">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="image">
                <img alt="Image Description" src="img/bg-waves.png">
            </div>

            <div id="proxies" class="info-section">
                <div class="container" style="font-size: 12px">
                    <div class="col">
                        <div class="icon-holder">
                            <span><img alt="Image description" src="img/img01.png"></span>
                        </div>
                        <h6>Solutions Légales</h6>
                        <p>Profitez de formations & de suivis 100% légaux et encadrés pénalement par des avocats. </p>
                    </div>
                    <div class="col">
                        <div class="icon-holder">
                            <span><img alt="Image description" src="img/img02.png"></span>
                        </div>
                        <h6>Travail Collaboratif</h6>
                        <p>Accédez aux bénéfices du travail en collaboration et construisez-vous un carnet
                            d'adresses.</p>
                    </div>
                    <div class="col">
                        <div class="icon-holder">
                            <span><img alt="Image description" src="img/img03.png"></span>
                        </div>
                        <h6>Selwer Group</h6>


                        <a class="dropdownbtn btn boxybox-button" href="index-2.html#trailer">Découvrir</a>


                    </div>
                    <div class="col">
                        <div class="icon-holder">
                            <span><img alt="Image description" src="img/img04.png"></span>
                        </div>
                        <h6>Support 24/7</h6>
                        <p>Besoin d'aide ? De conseils ? Nos experts sont à votre écoute et prêts à vous servir.</p>
                    </div>
                    <div class="col">
                        <div class="icon-holder">
                            <span><img alt="Image description" src="img/img05.png"></span>
                        </div>
                        <h6>Notifications Push</h6>
                        <p>Recevez en temps réel nos dernières alertes et ce peut importe votre appareil.</p>
                    </div>
                </div>
            </div>
            <div id="contact" class="connect-block">
                <div class="container">
                    <span class="title">NOS RÉSEAUX</span>
                    <h2>Suivez nous sur Twitter, <br> Rejoignez nous sur Discord!</h2>
                    <div class="btn-holder">
                        <a class="twitter" href="https://twitter.com/selwergroup"><img alt="Image Description"
                                                                                       src="img/icon-twitter.png"></a>
                        <a class="discord" href="https://discord.gg/TM8su7wjNW"><img alt="Image Description"
                                                                                     src="img/icon-discord.png"></a>
                    </div>
                </div>
            </div>


        </main>
        <footer id="footer">
            <div class="container">
                <div class="logo">
                    <a href="#"><img alt="Image description" src="img/logo-footer.png"></a>
                </div>
                <div class="footer-nav">

                    <nav class="nav">
                        <strong class="title">CONTACT</strong>
                        <ul>
                            <li><a href="https://twitter.com/selwergroup">Twitter</a></li>
                            <li><a href="https://discord.com/invite/TM8su7wjNW">Discord</a></li>
                        </ul>
                    </nav>

                    <nav class="nav">
                        <strong class="title">à PROPOS</strong>
                        <ul>
                            <li><a href="privacy-policy.html">Politique de Confidentialité</a></li>
                            <li><a href="tos.html">Conditions d'Utilisation</a></li>
                            <li><a href="remboursement.html">Politique de Remboursement</a></li>
                        </ul>
                    </nav>
                    <nav class="nav">
                        <strong class="title">RÉSEAUX</strong>
                        <ul>
                            <li><a href="https://twitter.com/aloegarteneu">Aloegarten</a></li>
                        </ul>
                    </nav>
                    <nav class="nav">
                        <ul>
                            <strong class="title"> </strong>
                        </ul>
                    </nav>

                </div>
                <span class="copyright">© Selwer Group 2021</span>
            </div>
        </footer>

    </div>
</template>

<style scoped>

</style>

<script>
import DiscordButton from '@/Components/DiscordButton';
import RightImg from '@/Components/RightImg';
import NProgress from "nprogress";

export default {

    components: {
        DiscordButton,
        RightImg
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
    },

    data() {
        return {
            info: {}
        }
    },

    created() {
        axios.get('/api/info')
            .then(response => {
                this.info = response.data;
                NProgress.done()
            })
            .catch(error => console.log(error));
    },
}
</script>
