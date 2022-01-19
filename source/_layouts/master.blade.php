<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->meta_description ?? $page->siteDescription }}">
        @stack('meta')
        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>
        <link rel="home" href="{{ $page->baseUrl }}">
	<link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png?v=yy4L6R3MP3">
	<link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png?v=yy4L6R3MP3">
	<link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png?v=yy4L6R3MP3">
	<link rel="manifest" href="/assets/images/site.webmanifest?v=yy4L6R3MP3">
	<link rel="mask-icon" href="/assets/images/safari-pinned-tab.svg?v=yy4L6R3MP3" color="#5bbad5">
	<link rel="shortcut icon" href="/assets/images/favicon.ico?v=yy4L6R3MP3">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="msapplication-config" content="/assets/images/browserconfig.xml?v=yy4L6R3MP3">
	<meta name="theme-color" content="#ffffff">
        <link href="/feed/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">
        <!--begin::Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
        <script>
            WebFont.load({
                google: {"families": ["Poppins:300,400,500,600,700"]},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!--end::Fonts -->
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8880749208215381"
        crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>


    <body>
        <div class="theme-light bg-primary text-dark font-body">

            <!--Nav-->
            @include('_layouts.partials.navigation')
            <!-- // Nav !-->

            <!-- Content !-->
            <div class="pt-16">

                <!-- Article/Featured Header !-->
                @stack('header')
                <!-- // Article/Featured Header !-->

                <div class="flex flex-col lg:flex-row">
                    @include('_layouts.partials.sidebar')
                    <div class="w-full lg:w-3/5 flex flex-1 flex-col lg:px-6 pt-4" id="content">
                        @yield('body')
                    </div>
                    @include('_layouts.partials.related')
                </div>
            </div>
            <!-- // Content !-->

            <!--Footer-->
            @include('_layouts.partials.footer')
            <!-- // Footer-->

        </div>

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8880749208215381"
        crossorigin="anonymous"></script>
        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
        @stack('scripts')
    </body>
</html>
