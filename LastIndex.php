
<!DOCTYPE html>
<html>
<head>
    
   <head>
    
    <title>Hackathon on Question Answering based on automatically generated grammars</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>QueGG</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" integrity="sha512-aQX0wElRuvqZ1bVvsknO9jDXwvVI71vwYLuEDZ8QqMJxPozZPPCCmylpHx4ngmeIz7Bg6FfE4Ay+CfDVFqjy+A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/js/style.css"/>



<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
    <div class="navbar-logo col-sm-2">
        <a href="https://pret-a-llod.github.io/">
	<img src="https://scdemo.techfak.uni-bielefeld.de/qahackathon/images/pal-logo.png" align="left" class="navbar-logo" width="200" height="600"/>
        </a>
    </div>
    <a class="navbar-brand col-sm" align="center" id="sidebar-brandlink" href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/index.php">Hackathon on Question Answering based on automatically generated grammars (5-9 July 2021)</a>              
     <div class="navbar-logo col-sm-2" >
         <a href="https://nexuslinguarum.eu/">
         <img src="https://scdemo.techfak.uni-bielefeld.de/qahackathon/images/nexus-logo.png" align="right" class="navbar-logo" />
      </div-->
    
    <!--input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>

<!--div id="kopfbereich_gesamt">
<div id="kopfbereich_folgeseite">
<a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/index.php">Home</a>&nbsp;&nbsp;|&nbsp;
<a href="https://forms.gle/rTYj75FFUekWcWfM9">Registration</a>&nbsp;&nbsp;|&nbsp;
<a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/coverage.php" target=top>Recipe</a></div></div-->

</head>

<body onload="document.getElementById('statusdisplay').innerHTML = ''" id="top">

<div id="kopfbereich_gesamt">
<div id="kopfbereich_folgeseite">
<a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/index.php">Home</a>&nbsp;&nbsp;|&nbsp;
<a href="https://forms.gle/rTYj75FFUekWcWfM9">Registration</a>&nbsp;&nbsp;|&nbsp;
<a href="https://docs.google.com/document/d/14FRDHF-9kxpyOvBQKJX1KTubmxvLdfLli1UQ7L8wGYo/edit?usp=sharing">Schedule</a>&nbsp;&nbsp;|&nbsp;
<a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/coverage.php" target="top">Recipe</a></div></div>
	

        <div align="justify">
	<!--h3>Hackthon on multilingual Question Answering over linked data (QueGG)</h3-->

	<p> The hackathon will be held virtually from <strong>5-9 July, 2021</strong></p>	
	<p><strong>Hackathon description</strong></p>
        <p>Many question answering systems over RDF that are induced from pairs of questions and answers using some machine learning technique suffer from a lack of controllability, making the governance and incremental improvement of the system challenging, not to mention the initial effort of collecting and providing training data. As an alternative, we present a model-based approach to question answering that uses an ontology lexicon in lemon format and automatically generates a lexicalized grammar that can be used to interpret and parse questions into SPARQL queries. The approach gives maximum control over the QA system to the developer of the system as every lexicon entry added to the lexicon increases the coverage of the grammar, and thus of the QA system, in a predictable way. </p>	
        <p>The hackathon aims to improve the QA system on the combination of semantic web and language technologies. There are several possibilities to extend the system such as: <p>
        <ul>
	    <li><a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/coverage.php#coverage">Extending the coverage of the grammar</a></li>
	    <li><a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/coverage.php#new-language">Adding support for a further language</a></li>
            <li><a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/coverage.php">Porting the system to a new dataset</a></li>
	    <li><a href="https://scdemo.techfak.uni-bielefeld.de/qahackathon/tutorial/coverage.php">Improve the user experience/interface</a></li>
	</ul>

        <p> These are to be understood as suggestions from our side. We are also open to other directions or tasks participants are interested to work on.</p>
        <p>The hackathon is supported by the project <a href="https://pret-a-llod.github.io/">Pret-A-LLOD</a> as well as by <a href="https://nexuslinguarum.eu/">Nexus Linguarum Cost Action</a>. We welcome cross-disciplinary collaborations of computer scientists, computational linguistics and related fields to participate and contribute any level of their interest. Please <a href="https://forms.gle/rTYj75FFUekWcWfM9">register</a> the hackathon for participation until <strong>28 June 2021</strong></p>
	
	 <p><strong>prerequisites</strong></p>
   
         <ul>
            <li>basic understanding of semantic technologies (RDF, linked data, SPARQL, etc)</li>
	    <li>knowledge of Java</li>
         </ul>


         <p><strong>important links</strong></p>

        <ul>
	    <li>online demo <a href="https://scdemo.techfak.uni-bielefeld.de/quegg/" data-type="URL" data-id="https://scdemo.techfak.uni-bielefeld.de/quegg/">QA system user interface</a></li>
	    <li>source code <a href="https://github.com/fazleh2010/question-grammar-generator/">grammar generator</a></li>
	    <li>method <a href="http://ceur-ws.org/Vol-2722/nliwod2020-paper-2.pdf" data-type="URL" data-id="http://ceur-ws.org/Vol-2722/nliwod2020-paper-2.pdf">Generating Grammars from lemon lexica for QA system</a></li>
	</ul>

   

	<p><strong>Organizing team</strong></p>
        <p>Philipp Cimiano (CITEC - University Bielefeld, Germany), Chair<br>Mohammad Fazleh Elahi (CITEC - University Bielefeld, Germany)<br>Frank Grimm (CITEC - University Bielefeld, Germany)<br>Basil Ell (CITEC - University Bielefeld, Germany and Department of Informatics, University of Oslo, Norway)<br></p>

	<p><strong>References:</strong></p>
	<p><strong>Main reading:</strong> Benz, V., Cimiano, P., Elahi, M.F., Ell, B. (2020), <a href="http://ceur-ws.org/Vol-2722/nliwod2020-paper-2.pdf"> Generating Grammars from lemon lexica for Questions Answering over Linked Data: a Preliminary Analysis</a>. In: NLIWOD workshop at ISWC. vol. 2722, pp. 40–55. CEUR-WS.org (2020).</p>

       <p>Philipp Cimiano, Paul Buitelaar, John McCrae, Michael Sintek. <a href="https://www.dropbox.com/s/7yio7d9bj0wh32d/LexInfopdf?dl=0">LexInfo: A Declarative Model for the Lexicon-Ontology Interface</a> </p>

       <p>Ricardo Usbeck, Axel-Cyrille Ngonga Ngomo, Bastian Haarmann,Anastasia Krithara, Michael R¨oder, and Giulio Napolitano. <a href="https://www.dropbox.com/s/4wxo2iei5adadck/qald-7.pdf?dl=0">7th Open Challenge on Question Answering over Linked Data (QALD-7) </a>. </p>
        <p>John P. McCrae, Francesca Quattri, Christina Unger, Philipp Cimiano. <a href="https://www.aclweb.org/anthology/W14-4724.pdf">Modelling the Semantics of Adjectives in the Ontology-Lexicon Interface</a>. Proceedings of the 4th Workshop on Cognitive Aspects of the Lexicon CogALex(2014). </p>


        <p><strong>Contact Information</strong></p>
        <p>Mohammad Fazleh Elahi <br>
        e-mail: melahi[at sign]techfak.uni-bielefeld.de</p>


</div></div>
</body> 



</html>

