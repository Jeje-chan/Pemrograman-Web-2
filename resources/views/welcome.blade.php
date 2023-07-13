<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        {{-- <style> --}}
            {{-- /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}} --}}
        {{-- </style> --}}
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{ asset('front/css/linearicons.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/jquery-ui.css') }}">				
        <link rel="stylesheet" href="{{ asset('front/css/nice-select.css') }}">							
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.css') }}">				
        <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <section class="banner-area relative">
                <div class="overlay overlay-bg"></div>				
                <div class="container">
                    <div class="row fullscreen align-items-center justify-content-between">
                        <div class="col-lg-6 col-md-6 banner-left">
                            <h6 class="text-white">Away from monotonous life</h6>
                            <h1 class="text-white">Magical Travel</h1>
                            <p class="text-white">
                                If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">Get Started</a>
                        </div>
                        <div class="col-lg-4 col-md-6 banner-right">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                              <li class="nav-item">
                                <a class="nav-link active" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="true">Flights</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="hotel-tab" data-toggle="tab" href="#hotel" role="tab" aria-controls="hotel" aria-selected="false">Hotels</a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" id="holiday-tab" data-toggle="tab" href="#holiday" role="tab" aria-controls="holiday" aria-selected="false">Holidays</a>
                              </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                              <div class="tab-pane fade show active" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
                                    <a href="#" class="primary-btn text-uppercase">Search flights</a>									
                                </form>
                              </div>
                              <div class="tab-pane fade" id="hotel" role="tabpanel" aria-labelledby="hotel-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">						
                                    <a href="#" class="primary-btn text-uppercase">Search Hotels</a>									
                                </form>							  	
                              </div>
                              <div class="tab-pane fade" id="holiday" role="tabpanel" aria-labelledby="holiday-tab">
                                <form class="form-wrap">
                                    <input type="text" class="form-control" name="name" placeholder="From " onfocus="this.placeholder = ''" onblur="this.placeholder = 'From '">									
                                    <input type="text" class="form-control" name="to" placeholder="To " onfocus="this.placeholder = ''" onblur="this.placeholder = 'To '">
                                    <input type="text" class="form-control date-picker" name="start" placeholder="Start " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Start '">
                                    <input type="text" class="form-control date-picker" name="return" placeholder="Return " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Return '">
                                    <input type="number" min="1" max="20" class="form-control" name="adults" placeholder="Adults " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Adults '">
                                    <input type="number" min="1" max="20" class="form-control" name="child" placeholder="Child " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Child '">							
                                    <a href="#" class="primary-btn text-uppercase">Search Holidays</a>									
                                </form>							  	
                              </div>
                            </div>
                        </div>
                    </div>
                </div>					
            </section>
            <!-- End banner Area -->
            
            <!-- Start popular-destination Area -->
            <section class="popular-destination-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Popular Destinations</h1>
                                <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast, day.</p>
                            </div>
                        </div>
                    </div>						
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-destination relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/d1.jpg" alt="">
                                </div>
                                <div class="desc">	
                                    <a href="#" class="price-btn">$150</a>			
                                    <h4>Mountain River</h4>
                                    <p>Paraguay</p>			
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-destination relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/d2.jpg" alt="">
                                </div>
                                <div class="desc">	
                                    <a href="#" class="price-btn">$250</a>			
                                    <h4>Dream City</h4>
                                    <p>Paris</p>			
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-destination relative">
                                <div class="thumb relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/d3.jpg" alt="">
                                </div>
                                <div class="desc">	
                                    <a href="#" class="price-btn">$350</a>			
                                    <h4>Cloud Mountain</h4>
                                    <p>Sri Lanka</p>			
                                </div>
                            </div>
                        </div>												
                    </div>
                </div>	
            </section>
            <!-- End popular-destination Area -->
            
            
            <!-- Start price Area -->
            <section class="price-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">We Provide Affordable Prices</h1>
                                <p>Well educated, intellectual people, especially scientists at all times demonstrate considerably.</p>
                            </div>
                        </div>
                    </div>						
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="single-price">
                                <h4>Cheap Packages</h4>
                                <ul class="price-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>New York</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Maldives</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Sri Lanka</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Nepal</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Thiland</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>	
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Singapore</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>														
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price">
                                <h4>Luxury Packages</h4>
                                <ul class="price-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>New York</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Maldives</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Sri Lanka</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Nepal</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Thiland</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>	
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Singapore</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>														
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="single-price">
                                <h4>Camping Packages</h4>
                                <ul class="price-list">
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>New York</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Maldives</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Sri Lanka</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Nepal</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Thiland</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>	
                                    <li class="d-flex justify-content-between align-items-center">
                                        <span>Singapore</span>
                                        <a href="#" class="price-btn">$1500</a>
                                    </li>														
                                </ul>
                            </div>
                        </div>												
                    </div>
                </div>	
            </section>
            <!-- End price Area -->
            
            
            <!-- Start other-issue Area -->
            <section class="other-issue-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-9">
                            <div class="title text-center">
                                <h1 class="mb-10">Other issues we can help you with</h1>
                                <p>We all live in an age that belongs to the young at heart. Life that is.</p>
                            </div>
                        </div>
                    </div>					
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/o1.jpg" alt="">					
                                </div>
                                <a href="#">
                                    <h4>Rent a Car</h4>
                                </a>
                                <p>
                                    The preservation of human life is the ultimate value, a pillar of ethics and the foundation.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/o2.jpg" alt="">					
                                </div>
                                <a href="#">
                                    <h4>Cruise Booking</h4>
                                </a>
                                <p>
                                    I was always somebody who felt quite sorry for myself, what I had not got compared.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/o3.jpg" alt="">					
                                </div>
                                <a href="#">
                                    <h4>To Do List</h4>
                                </a>
                                <p>
                                    The following article covers a topic that has recently moved to center stage–at least it seems.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="single-other-issue">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/o4.jpg" alt="">					
                                </div>
                                <a href="#">
                                    <h4>Food Features</h4>
                                </a>
                                <p>
                                    There are many kinds of narratives and organizing principles. Science is driven by evidence.
                                </p>
                            </div>
                        </div>																		
                    </div>
                </div>	
            </section>
            <!-- End other-issue Area -->
            
            
            <!-- Start testimonial Area -->
            <section class="testimonial-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-70 col-lg-8">
                            <div class="title text-center">
                                <h1 class="mb-10">Testimonial from our Clients</h1>
                                <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="active-testimonial">
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/elements/user1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                                    </p>
                                    <h4>Harriet Maxwell</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>				
                                    </div>	
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/elements/user2.png" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                    </p>
                                    <h4>Carolyn Craig</h4>
                                       <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>			
                                    </div>	
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/elements/user1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                                    </p>
                                    <h4>Harriet Maxwell</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>				
                                    </div>	
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/elements/user2.png" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                    </p>
                                    <h4>Carolyn Craig</h4>
                                       <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>			
                                    </div>	
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/elements/user1.png" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.		     
                                    </p>
                                    <h4>Harriet Maxwell</h4>
                                    <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>				
                                    </div>	
                                </div>
                            </div>
                            <div class="single-testimonial item d-flex flex-row">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/elements/user2.png" alt="">
                                </div>
                                <div class="desc">
                                    <p>
                                        A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
                                    </p>
                                    <h4>Carolyn Craig</h4>
                                       <div class="star">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>			
                                    </div>	
                                </div>
                            </div>		                    		                    
                        </div>
                    </div>
                </div>
            </section>
            <!-- End testimonial Area -->
            
            <!-- Start home-about Area -->
            <section class="home-about-area">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-end">
                        <div class="col-lg-6 col-md-12 home-about-left">
                            <h1>
                                Did not find your Package? <br>
                                Feel free to ask us. <br>
                                We‘ll make it for you
                            </h1>
                            <p>
                                inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.
                            </p>
                            <a href="#" class="primary-btn text-uppercase">request custom price</a>
                        </div>
                        <div class="col-lg-6 col-md-12 home-about-right no-padding">
                            <img class="img-fluid" src="img/about-img.jpg" alt="">
                        </div>
                    </div>
                </div>	
            </section>
            <!-- End home-about Area -->
            
            
            <!-- Start blog Area -->
            <section class="recent-blog-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-9">
                            <div class="title text-center">
                                <h1 class="mb-10">Latest from Our Blog</h1>
                                <p>With the exception of Nietzsche, no other madman has contributed so much to human sanity as has.</p>
                            </div>
                        </div>
                    </div>							
                    <div class="row">
                        <div class="active-recent-blog-carusel">
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/b1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>											
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>	
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/b2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>											
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>	
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/b3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>											
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>	
                            </div>	
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/b1.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>											
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Low Cost Advertising</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>	
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/b2.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>											
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">Creative Outdoor Ads</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>	
                            </div>
                            <div class="single-recent-blog-post item">
                                <div class="thumb">
                                    <img class="img-fluid" src="img/b3.jpg" alt="">
                                </div>
                                <div class="details">
                                    <div class="tags">
                                        <ul>
                                            <li>
                                                <a href="#">Travel</a>
                                            </li>
                                            <li>
                                                <a href="#">Life Style</a>
                                            </li>											
                                        </ul>
                                    </div>
                                    <a href="#"><h4 class="title">It's Classified How To Utilize Free</h4></a>
                                    <p>
                                        Acres of Diamonds… you’ve read the famous story, or at least had it related to you. A farmer.
                                    </p>
                                    <h6 class="date">31st January,2018</h6>
                                </div>	
                            </div>														
            
                        </div>
                    </div>
                </div>	
            </section>
        </div>
        <script src="{{ asset('front/js/vendor/jquery-2.2.4.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/vendor/bootstrap.min.js') }}"></script>			
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>		
 <script src="{{ asset('front/js/jquery-ui.js') }}"></script>					
  <script src="{{ asset('front/js/easing.min.js') }}"></script>			
<script src="{{ asset('front/js/hoverIntent.js') }}"></script>
<script src="{{ asset('front/js/superfish.min.js') }}"></script>	
<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.min.js') }}"></script>						
<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>					
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>							
<script src="{{ asset('front/js/mail-script.js') }}"></script>	
<script src="{{ asset('front/js/main.js') }}"></script>	
    </body>
</html>
