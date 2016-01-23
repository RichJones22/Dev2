@extends('PremiseTemplate')

@section('content')
<div class="inner cover">
    <div>
        <h2>Projects</h2>
        <hr/>
        <div class="row">
            <div id="projects" class="carousel slide">
                <div class="carousel-inner">
                    <div class="item active">
                        <div style="color: #e6e6f1" class="col-sm-6">
                            <h3>TimeTrax</h3>
                            <p>Developing a task based, non-traditional, Time Card reporting application</p></br>
                            <p class="lead">
                                <a href="http://timetrax.premisesoftware.com/timeCard/2015-11-12" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/TimeTrax" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div style="color: #e6e6f1;" class="col-sm-6">
                            <h3>Free consulting day survey</h3>
                            <p>A quick prototype app for a client to promote their consulting services</p></br>
                            <p class="lead">
                                <a href="http://bullcreekdata.premisesoftware.com/" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/bullCreekDataSurvey" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div style="color: #e6e6f1" class="col-sm-6">
                            <h3>Photo Gallery</h3>
                            <p>A traditional use of http and single page submission, using OOP design patterns, with a MySql database</p>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div style="color: #e6e6f1;" class="col-sm-6">
                            <h3>DMCA Take Down</h3>
                            <p>implementation of a Laravel video removal request apps</p></br>
                            <p class="lead">
                                <a href="http://dmca.premisesoftware.com" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/DMCA-APP.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                    </div>
                </div>
                <a class="left carousel-control" href="#projects" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#projects" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div>
        <h2>Design Patterns</h2>
        <hr/>
        <p>Design Patterns implemented in different languages viewable via GitHub</p>
        <div class="row">
            <div style="color: #e6e6f1" class="col-sm-6">
                <h3>Chain of Responsibility</h3>
                <p class="lead">
                    <a href="https://github.com/RichJones22/chainOfResponsibility_cpp.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">C++</a>
                    &nbsp;
                    <a href="https://github.com/RichJones22/chainOfResponsibility_java.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Java</a>
                    &nbsp;
                    <a href="https://github.com/RichJones22/chainOfResponsibility_php.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">PHP</a>
                </p>
            </div>
            <div style="color: #e6e6f1;" class="col-sm-6">
                <h3>Strategy</h3>
                <p class="lead">
                    <a href="https://github.com/RichJones22/strategy_cpp.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">C++</a>
                    &nbsp;
                    <a href="https://github.com/RichJones22/strategy_java.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Java</a>
                    &nbsp;
                    <a href="https://github.com/RichJones22/strategy_php.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">PHP</a>
                </p>
            </div>
        </div>
    </div>
</div>
@stop