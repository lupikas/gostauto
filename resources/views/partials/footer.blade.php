<footer class="section-footer text-gray-450">
    <div class="bg-gray-100 py-50px">
        <div class="container flex flex-col-reverse lg:flex-row lg:space-x-32 xl:space-x-8">
            <div class="flex-none xl:max-w-812px">
                <div class="grid grid-cols-1 xl:grid-cols-2 gap-x-4 xxl:gap-x-70px">
                    <div>
                        <div>
                            <h4 class="section-footer-heading">Klinikos kontaktai</h4>
                            <div class="text-17px lg:text-20px">
                                <div>
                                    <strong>Adresas:</strong> a. Goštauto g. 4-10,
                                    Lt-01106, vilnius
                                </div>
                                <div>
                                    <strong>Telefonas:</strong> <a href="tel:+37065069100">+370 650 69 100</a>
                                </div>
                                <div>
                                    <strong>El. paštas:</strong> <a href="mailto:info@gostautoklinika.com">info@gostautoklinika.com</a>
                                </div>
                                <div>
                                    <strong>UAB ,,ŽRLM"</strong>
                                </div>
                                <div>
                                    <strong>Įm. kodas:</strong> 124894517
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="section-footer-heading">Greitoji navigacija</h4>
                        <div class="grid grid-cols-2 text-17px lg:text-20px gap-y-1">
                            <a href="{{ route('doctors') }}">Gydytojai</a>
                            <a href="{{ route('contacts') }}">Kontaktai</a>
                            <a href="{{ route('procedures') }}">Paslaugos</a>
                            <!--<a href="#">Apie mus</a>-->
                            <a href="{{ route('prices') }}">Kainos</a>
                            <!--<a href="#">Mokėjimo atidėjimas</a>-->
                            @if(nova_get_setting('show_feedback'))
                                <a href="{{ route('feedback') }}">Atsiliepimai</a>
                            @endif
                            <!--<a href="#">Sveikatos draudimas</a>-->
                            <a href="{{ route('posts') }}">Informatyvu</a>
                            
                            
                            @foreach($pages as $page)
                            @if($page->in_menu == 1)
                            <a href="/{{$page->slug}}">{{$page->name}}</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div>
                        <h4 class="section-footer-heading">Darbo laikas</h4>
                        <div class="text-17px lg:text-20px">
                            <div>
                                <strong>I-V</strong> 09:00 - 18:00
                            </div>
                            <div>
                                <strong>VI-VII</strong> NEDIRBAME
                            </div>
                        </div>
                    </div>
                    <div>
                        <h4 class="section-footer-heading mb-9">Registracija</h4>
                        <div>
                            @include('partials.register-buttons')
                            <div class="flex space-x-8 mt-6">
                                <a href="#">
                                    <svg class="fill-current text-gray-450 transition-colors duration-200 hover:text-blue-850" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><g><g><g><path d="M15.685.438C7.126.438.187 7.375.187 15.934c0 7.677 5.588 14.034 12.914 15.265V19.17H9.362v-4.33h3.739v-3.193c0-3.704 2.262-5.723 5.567-5.723 1.583 0 2.943.118 3.338.17v3.872l-2.292.001c-1.797 0-2.144.854-2.144 2.107v2.764h4.288l-.559 4.33H17.57v12.137c7.668-.933 13.613-7.453 13.613-15.373 0-8.555-6.939-15.494-15.498-15.494z"/></g></g></g></svg>
                                </a>
                                <a href="#">
                                    <svg class="fill-current text-gray-450 transition-colors duration-200 hover:text-blue-850" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"><g><g><g><path d="M14.146 18.865l5.049-2.907-5.049-2.908z"/></g><g><path d="M25.777 15.974s0 3.147-.4 4.665a2.43 2.43 0 0 1-1.709 1.71c-1.518.399-7.589.399-7.589.399s-6.055 0-7.589-.416a2.43 2.43 0 0 1-1.71-1.71c-.399-1.5-.399-4.664-.399-4.664s0-3.148.4-4.665a2.48 2.48 0 0 1 1.71-1.726c1.517-.4 7.588-.4 7.588-.4s6.072 0 7.59.416a2.43 2.43 0 0 1 1.709 1.71c.415 1.517.4 4.68.4 4.68zM16.08.437C7.51.438.56 7.388.56 15.957c0 8.571 6.95 15.52 15.52 15.52s15.52-6.949 15.52-15.52c0-8.57-6.95-15.52-15.52-15.52z"/></g></g></g></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 mb-8 lg:mb-0">
                <div id="footer_map" class="h-400px rounded-30px shadow-2xl"></div>
            </div>
        </div>
    </div>
    <div class="section-footer-bottom text-white bg-blue-850 font-light text-15px text-center p-3">
        Visos teisės saugomos © 2020 gostauto klinika
    </div>
</footer>
