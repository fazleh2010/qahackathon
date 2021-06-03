
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
