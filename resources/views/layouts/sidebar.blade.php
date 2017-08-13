<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div class="profile-sidebar">

        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name">K.Yahia</div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>

    </div>


    <div class="divider"></div>

    <form role="search">
        <div class="form-group">
            <input type="hidden" id="search" class="form-control" onkeyup="mySearch(this);" placeholder="Search">
        </div>
    </form>

    <ul class="nav menu">
        <li id="btn-dash"><a href="/"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
        <li id="btn-rep"><a href="/reports"><em class="fa fa-calendar">&nbsp;</em> Reports</a></li>
        <li class="disabled"><a href="#"><em class="fa fa-bar-chart">&nbsp;</em> Statistics</a></li>
        <li class="parent "><a data-toggle="collapse" href="#sub-item-1">
                <em class="fa fa-navicon">&nbsp;</em> Notes <span data-toggle="collapse" href="#sub-item-1"
                                                                  class="icon pull-right"><em
                            class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="/notes/1">
                        <span class="fa fa-arrow-right">&nbsp;</span> Achieved
                    </a></li>
                <li><a class="" href="/notes/0">
                        <span class="fa fa-arrow-right">&nbsp;</span> Discussed
                    </a></li>
            </ul>
        </li>
    </ul>

</div><!--/.sidebar-->
