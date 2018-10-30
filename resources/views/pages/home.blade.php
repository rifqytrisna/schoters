@extends('layouts.default')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Profile</a></li>
            <li class="breadcrumb-item active" aria-current="page">Preference</li>
        </ol>
    </nav>
</div>

<div class="container card-wrap"style="padding-left: 50px">
    <div class="card" style="width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Scholarships catergories
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </h5>
            <hr>
            <div>
                <ul id="notSelectable">
                    <li>S1/Bachelor</li>
                    <li>S2/Master</li>
                    <li>S3/Ph.D</li>
                    <li>Short Course</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container card-wrap"style="padding-left: 50px">
    <div class="card" style="width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Scholarships catergories
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </h5>
            <hr>
            <div>
                <ul id="notSelectable">
                    <li>S1/Bachelor</li>
                    <li>S2/Master</li>
                    <li>S3/Ph.D</li>
                    <li>Short Course</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="container card-wrap"style="padding-left: 50px">
    <div class="card" style="width: 500px;">
        <div class="card-body">
            <h5 class="card-title">Scholarships catergories
                <a href="#" data-toggle="modal" data-target="#exampleModalCenter">
                    <i class="fas fa-pencil-alt"></i>
                </a>
            </h5>
            <hr>
            <div>
                <ul id="notSelectable">
                    <li>S1/Bachelor</li>
                    <li>S2/Master</li>
                    <li>S3/Ph.D</li>
                    <li>Short Course</li>
                    <li>5</li>
                    <li>6</li>
                    <li>7</li>
                    <li>8</li>
                    <li>9</li>
                    <li>10</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><strong>Personalize your Schoters homepage</strong></h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>pick 5 top scholarships categories that you are interested to help us deliver the most relevant information with your preferences </p>
                <div id="" class="">
                    <section>
                        <div>
                            <ul id="easySelectable">
                                <li>S1/Bachelor</li>
                                <li>S2/Master</li>
                                <li>S3/Ph.D</li>
                                <li>Short Course</li>
                                <li>5</li>
                                <li>6</li>
                                <li>7</li>
                                <li>8</li>
                                <li>9</li>
                                <li>10</li>
                            </ul>
                        </div>
                    </section>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-close" data-dismiss="modal">Close</button>&nbsp;
                <button type="button" class="btn btn-primary btn-done">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-10 col-sm-10"></div>
        <div class="col-md-2 col-sm-2  chat-icon" style="transform: translateY(350px)">
            <button type="button" class="btn btn-primary bmd-btn-fab btn-chat" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                <i class="fas fa-comments"></i>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 offset-md-6">
            <div class="panel-collapse collapse" id="collapseOne">
                <div class="panel-body">
                    <ul class="chat">
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Lorem ipsum 1</strong> <small class="pull-right text-muted">
                                        <i class="fas fa-clock"></i></span>12 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="right clearfix"><span class="chat-img pull-right">
                            <img src="http://placehold.it/50/FA6F57/fff&text=ME" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <small class=" text-muted"><i class="fas fa-clock"></i>13 mins ago</small>
                                    <strong class="pull-right primary-font">Lorem ipsum 2</strong>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                        <li class="left clearfix"><span class="chat-img pull-left">
                            <img src="http://placehold.it/50/55C1E7/fff&text=U" alt="User Avatar" class="img-circle" />
                        </span>
                            <div class="chat-body clearfix">
                                <div class="header">
                                    <strong class="primary-font">Lorem ipsum 1</strong> <small class="pull-right text-muted">
                                        <i class="fas fa-clock"></i>14 mins ago</small>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
                                    dolor, quis ullamcorper ligula sodales.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="panel-footer">
                    <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                        <span class="input-group-btn">
                            <button class="btn btn-raised btn-secondary btn-sm" id="btn-chat">
                                Send</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
