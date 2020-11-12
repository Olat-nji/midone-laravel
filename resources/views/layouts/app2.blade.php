<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Skylevel&mdash;Concepts</title>

    <meta name="keyword" content="sky, skylevel, skylevel-concepts, conepts, concpets,Fiyin,samuel, ogunsola samuel, ogunsola samuel fiyin, ogunsola fiyinfoluwa samuel, Damilola, level, concept, concepts, skylevelconcepts, fiyinfoluwa, ogunsola, phyyeen001, phyyeen, blog, websitedesgin, marketing, cheap website design, free website design, unilag, lasu, ui, bbn, bet9ja, bb9ja, bbnigeria, happynewyear, ikeja lagos, company in ikeja, website company, 2020" />
    <meta name="description" content="Skylevel-Concepts is a Nigeria based IT company, where creative minds provide solutions and help to move businesses to the next level. We are built on a great level of integrity, principle and excellence out put." />
    <meta name="author" content="skylevelconcepts.com.ng">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{asset('public/img/favicon.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="public/img/apple-touch-icon.png">
    {{-- <link rel="stylesheet" href="{{ asset('public/css/app2.css') }}" > --}}
    <link rel="stylesheet" href="{{asset('public/css/main.css')}}">
    <script src="{{ asset('public/js/app.js') }}" defer></script>
    <script src="{{ asset('public/js/alpine.js') }}" defer></script>

    <title>SkyLevel Concepts</title>
    @livewireStyles
    @livewireScripts
</head>

<body>

    {{-- <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="spinner">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                    <div class="rect4"></div>
                    <div class="rect5"></div>
                </div>
            </div>
        </div>
    </div> --}}


    @include('main.includes.header2')


    {{$slot}}


    @include('main.includes.footer')
    <script src="public/js/main.js"></script>
    <script type="text/javascript">
        (function() {
            var options = {
                whatsapp: "+234 09077010153", // WhatsApp number
                call_to_action: "Message us", // Call to action
                position: "left", // Position may be 'right' or 'left'
            };
            var proto = document.location.protocol
                , host = "getbutton.io"
                , url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

    </script>

    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o)
                , m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-42715764-5', 'auto');
        ga('send', 'pageview');

    </script>
</body>

</html>