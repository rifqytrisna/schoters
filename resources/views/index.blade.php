<!-- * Created by IntelliJ IDEA.-->
<!-- * User: rfq-->
<!-- * Date: 19/10/18-->
<!-- * Time: 23.29-->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
<!--    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
<!--    <link rel="stylesheet" type="text/css" href="../../public/css/style.css" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

    <title>Schoters</title>
    <style>
        html, body {
            height: 100%;
            width: 100%;
            font-family: 'Open Sans', sans-serif;
        }
    </style>
</head>
<body>
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">

        <div id="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
            <h3>Schoters</h3>
        </div>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">Home</a>
            </li>
            <li>
                <a href="#">Our Service</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <!-- Page Content -->
    <div id="content">

        <nav class="navbar navbar-expand-md navbar-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-align-left"></i>
                </button>
                <a class="navbar-brand" href="#">Schoters</a>
                <form class="form-inline">
                    <input class="form-control search-box" type="search" placeholder="Cari beasiswa apa?" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit"><i class="fa fa-search"></i></button>
                </form>
                <a class="navbar-item" href="#">Login</a>
                <a class="navbar-item" href="#"><i class="fas fa-user-circle"></i></a>
                <a class="navbar-item" href="#"><i class="fa fa-bell"></i></a>
            </div>
        </nav>

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
    </div>

    <!-- Dark Overlay element -->
    <div class="overlay"></div>

</div>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            // hide sidebar
            $('#sidebar').removeClass('active');
            // hide overlay
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            // open sidebar
            $('#sidebar').addClass('active');
            // fade in the overlay
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
<script>
    $(function() {
        $('#search').on('keyup', function() {
            var pattern = $(this).val();
            $('.searchable-container .items').hide();
            $('.searchable-container .items').filter(function() {
                return $(this).text().match(new RegExp(pattern, 'i'));
            }).show();
        });
    });
</script>
<script>
    $(function(){
        $('#easySelectable').easySelectable();
    })
</script>
<script>

    (function($){
        //selectable html elements
        $.fn.easySelectable = function(options){
            var el = $(this);
            var options = $.extend({
                'item': 'li',
                'state': true,
                onSelecting: function(el){

                },
                onSelected: function(el){

                },
                onUnSelected: function(el){

                }
            }, options);
            el.on('dragstart', function(event) { event.preventDefault(); });
            el.off('mouseover');
            el.addClass('easySelectable');
            if(options.state){
                el.find(options.item).addClass('es-selectable');
                el.on('mousedown', options.item, function(e){
                    $(this).trigger('start_select');
                    var offset = $(this).offset();
                    var hasClass = $(this).hasClass('es-selected');
                    var prev_el = false;
                    el.on('mouseover', options.item, function(e){
                        if(prev_el==$(this).index()) return true;
                        prev_el = $(this).index();
                        var hasClass2 = $(this).hasClass('es-selected');
                        if(!hasClass2){
                            $(this).addClass('es-selected').trigger('selected');
                            el.trigger('selected');
                            options.onSelecting($(this));
                            options.onSelected($(this));
                        }
                        else{
                            $(this).removeClass('es-selected').trigger('unselected');
                            el.trigger('unselected');
                            options.onSelecting($(this))
                            options.onUnSelected($(this));
                        }
                    });
                    if(!hasClass){
                        $(this).addClass('es-selected').trigger('selected');
                        el.trigger('selected');
                        options.onSelecting($(this));
                        options.onSelected($(this));
                    }
                    else{
                        $(this).removeClass('es-selected').trigger('unselected');
                        el.trigger('unselected');
                        options.onSelecting($(this));
                        options.onUnSelected($(this));
                    }
                    var relativeX = (e.pageX - offset.left);
                    var relativeY = (e.pageY - offset.top);
                });
                $(document).on('mouseup', function(){
                    el.off('mouseover');
                });
            }
            else{
                el.off('mousedown');
            }
        };
    })(jQuery);

</script>
</body>
</html>
