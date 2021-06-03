
<!DOCTYPE html>
<html>
<head>
    
    <title>QueGG Question Answering - QA</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QueGG</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" integrity="sha512-aQX0wElRuvqZ1bVvsknO9jDXwvVI71vwYLuEDZ8QqMJxPozZPPCCmylpHx4ngmeIz7Bg6FfE4Ay+CfDVFqjy+A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="/quegg/style.css"/>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>
<title>Hackthon on multilingual Question Answering over linked data (QueGG) &#8211; EMBEDDIA</title>
<style>
#wpadminbar #wp-admin-bar-vtrts_free_top_button .ab-icon:before {
        content: "\f185";
        color: #1DAE22;
        top: 3px;
}
</style>
<meta name='robots' content='max-image-preview:large' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link href='https://fonts.gstatic.com' crossorigin rel='preconnect' />
<!--link rel="alternate" type="application/rss+xml" title="EMBEDDIA &raquo; Feed" href="http://embeddia.eu/feed/" /-->
                <script>
                        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.1\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/embeddia.eu\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.7.2"}};
                        !function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
                </script>
                <style>
img.wp-smiley,
img.emoji {
        display: inline !important;
        border: none !important;
        box-shadow: none !important;
        height: 1em !important;
        width: 1em !important;
        margin: 0 .07em !important;
        vertical-align: -0.1em !important;
        background: none !important;
        padding: 0 !important;
}
</style>






</head>
<body>
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <div class="navbar-logo col-sm-2">
        <img src="images/pal-logo.png" class="navbar-logo" />
    </div>
    <a class="navbar-brand col-sm" id="sidebar-brandlink" href="/quegg/">QueGG Question Answering</a>
    <!--input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav navbar-nav nav-flex-icons ml-auto px-3">
            <li class="nav-item active">
                <a class="nav-link" href="/quegg/">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container-lg">
<div id="maincontent" class="container-fluid">

        <form id="query-form" action="/quegg/" method="get" class="row">
            <div class="ac_inputgroup input-group input-group-lg">
                <div class="form-outline form-control">
                    <input id="q" name="q" type="search" class="form-control" autocomplete="off" />
                    <label class="form-label" for="q">Query</label>
                </div>
                <div id="answer-spinner" class="btn btn-light btn-sm">
                    <div class="spinner-border text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <button id="query-button" type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="ac_suggestions list-group">
            </div>


            <div class="row questionrow">
                <div class="qalabel col-1" style="display:none; border-bottom: 1px solid gray;">Q</div>
                <div id="question" class="col-9">

            </div></div>
            <div class="row">
                <span class="qalabel col-1" style="display:none">A</span>
                <div id="answer" class="col row">

                </div>
            </div>

            <div id="sparql-container" class="row">
                <a id="sparql-toggle" class="btn btn-light btn-sm col-2" data-mdb-toggle="collapse" href="#sparql"
                        role="button" aria-expanded="false" aria-controls="collapseExample">
                    Show SPARQL
                </a>
            <pre id="sparql" class="collapse">
            </pre>
            </div>
        </form>
    </div>
</div>

<footer class="container-fluid">
    <div class="row">
        <div class="col-md">
            <p class="text-muted">
                &copy; 2021 <a href="http://www.sc.cit-ec.uni-bielefeld.de/home/">Semantic Computing Group @ CITEC</a>. All rights reserved.
            </p>
        </div>
    </div>
</footer>

<script type="text/javascript">
/*<![CDATA[*/
    window.QUERY_URI = "\/quegg\/";
    console.log("[query] endpoint:", window.QUERY_URI);
 /*]]>*/
</script>
<script src="/quegg/webjars/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js" integrity="sha512-Bbn2GxMX2ePx4if/heU6eS4avbu2ac+V1q2jb4mlh1WofyrKV/vm6/mMWmuzgoHQlxvgg7dPuyTtTZSX/Zgk3Q==" crossorigin="anonymous"></script>
<script src="/quegg/main.js"></script>
</body>
</html>
