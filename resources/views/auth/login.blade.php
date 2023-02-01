@extends('layouts.main')

@section('pagetitle')
    Registreren
@endsection

@section('content')

    <div class="container main-content">
        <div class="row first-row">
            <div class="col s6 push-s3">

                <!-- BEGIN LOGIN FORMULIER -->
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <form class="col s12" method="POST" action="{{ Route('login') }}">
                                @csrf
                                <h1 class="title">Aanmelden</h1>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Email" name="email" type="text" class="validate" value="{{old('email')}}">
                                        <label for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="Password" type="password" name="password" class="validate">
                                        <label for="Password">Wachtwoord</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <button class="btn waves-effect waves-light right" type="submit" name="action">
                                            Aanmelden
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- EINDE LOGIN FORMULIER -->

            </div>
        </div>
    </div>
    <!-- EINDE PAGINA CONTAINER -->

    <!-- BEGIN FOOTER -->
    <footer class="page-footer white">
        <div class="container">
            <div class="row last-row">
                <div class="col s4">
                    <p>Copyright &copy; by Alfa-college AO, All rights reserved</p>
                </div>
                <div class="col s8">
                    <div class="footer-nav white">
                        <ul class="right">
                            <li><a href="rules.html">Regels</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="disclaimer.html">Disclaimer</a></li>
                            <li><a href="privacy.html">Privacy verklaring</a></li>
                            <li><a href="cookies.html">Cookie-beleid</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- EINDE FOOTER -->

    <script type="text/javascript" src="js/ckeditor/plugins/prism/lib/prism/prism_patched.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/forum.js"></script>

@endsection

