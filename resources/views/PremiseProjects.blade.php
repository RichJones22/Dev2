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
                        <div style="color: #e6e6f1;" class="col-sm-6">
                            <h3>Swing Low Option Trading</h3>
                            <p>An app for managing trades for option sellers</p></br>
                            <p class="lead">
                                <a href="https://www.swinglowoptiontrading.com//" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/ezslot" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div style="color: #e6e6f1" class="col-sm-6">
                            <h3>TimeTrax</h3>
                            <p>An app for a time card reporting application</p></br>
                            <p class="lead">
                                <a href="http://www.premisesoftwaresolutions.com/timeCard/2015-11-09" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/TimeTrax" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                    </div>
                    <div class="item">
                        <div style="color: #e6e6f1" class="col-sm-6">
                            <h3>Photo Gallery</h3>
                            <p>None framework php app, with mysql and OOP</p></br>
                            <p class="lead">
                                <a href="http://photoGallery.premisesoftware.com" target="_blank" class="btn btn-lg btn-primary" target="_blank" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/photo_gallery.git" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
                            </p>
                        </div>
                        <div style="color: #e6e6f1;" class="col-sm-6">
                            <h3>Free consulting day survey</h3>
                            <p>Simple single page app with admin access</p></br>
                            <p class="lead">
                                <a href="http://bullcreekdata.premisesoftware.com/" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Demo</a>
                                &nbsp;
                                <a href="https://github.com/RichJones22/bullCreekDataSurvey" target="_blank" class="btn btn-lg btn-primary" style="color: #e6e6f1">Github</a>
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