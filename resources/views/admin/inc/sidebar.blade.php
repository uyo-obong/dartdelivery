<div class="sidebar" data-color="brown" data-active-color="danger">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
-->
<div class="logo">
    <a href="{{ route('cpanel') }}" class="simple-text logo-mini">
        <div class="logo-image-small">
            <img src="{{ URL::to('images/logo1.png') }}">
        </div>
    </a>
    <a href="/cpanel" class="simple-text logo-normal">
        <div style="padding-right: 23%;" class="logo-image-big">
            <img src="{{ URL::to('images/logo1.png') }}">
        </div>
    </a>
</div>
<div class="sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="{{ URL::to('admin/img/default-avatar.png') }}" />
        </div>
        <div class="info">
            <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                <span>
                 {{ Auth::user()->name }}
                 <b class="caret"></b>
             </span>
         </a>
         <div class="clearfix"></div>
         <div class="collapse" id="collapseExample">
            <ul class="nav">
                {{--<li>--}}
                    {{--<a href="#">--}}
                        {{--<span class="sidebar-mini-icon">MP</span>--}}
                        {{--<span class="sidebar-normal">My Profile</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li>
                    <a href="{{ route('adminprofile', Auth::user()->id) }}">
                        <span class="sidebar-mini-icon">EP</span>
                        <span class="sidebar-normal">Edit Profile</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<ul class="nav">
    <li class="{{ request()->is('cpanel') ? 'active' : '' }}">
        <a href="/cpanel">
            <i class="nc-icon nc-bank"></i>
            <p>Dashboard</p>
        </a>
    </li>
    <li class="{{ request()->is('shipment') ? 'active' : '' }}">
        <a  href="{{ route('shipment') }}">
            <i class="nc-icon nc-book-bookmark"></i>
            <p>
                Book Shipments
            </p>
        </a>
    </li>

    <li class="{{ request()->is('tracking') || request()->is('client-list') || 
                  request()->is('tracking-number') ? 'active' : '' }}">
        <a data-toggle="collapse" href="#componentsExamples">
            <i class="nc-icon nc-pin-3"></i>
            <p>
                Tracking
                <b class="caret"></b>
            </p>
        </a>
        <div class="collapse " id="componentsExamples">
            <ul class="nav">
                <li class="{{ request()->is('client-list') ? 'active' : '' }}">
                    <a href="{{ route('client') }}">
                        <span class="sidebar-mini-icon">QP</span>
                        <span class="sidebar-normal"> Quote Price </span>
                    </a>
                </li>
                <li class="{{ request()->is('tracking') ? 'active' : '' }}">
                    <a href="{{ route('view.tracking') }}">
                        <span class="sidebar-mini-icon">UT</span>
                        <span class="sidebar-normal"> Update Tracking </span>
                    </a>
                </li>
                
                <li class="{{ request()->is('tracking-number') ? 'active' : '' }}">
                    <a href="{{ route('sendIndex') }}">
                        <span class="sidebar-mini-icon">STN</span>
                        <span class="sidebar-normal"> Send Tracking No. </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="{{ request()->is('add-transport-mode') || request()->is('list-transport-mode') ? 'active' : '' }}">
        <a data-toggle="collapse" href="#tablesExamples">
            <i class="nc-icon nc-user-run"></i>
            <p>
                Transport Mode
                <b class="caret"></b>
            </p>
        </a>
        <div class="collapse " id="tablesExamples">
            <ul class="nav">
                <li class="{{ request()->is('add-transport-mode') ? 'active' : '' }}">
                    <a href="{{ route('addTransport') }}">
                        <span class="sidebar-mini-icon">AN</span>
                        <span class="sidebar-normal"> Add New </span>
                    </a>
                </li>
                <li class="{{ request()->is('list-transport-mode') ? 'active' : '' }}">
                    <a href="{{ route('listTransport') }}">
                        <span class="sidebar-mini-icon">VA</span>
                        <span class="sidebar-normal"> View All </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="{{ request()->is('add-shipping-type') || request()->is('list-shipping-type') ? 'active' : '' }}" >
        <a data-toggle="collapse" href="#mapsExamples">
            <i class="nc-icon nc-spaceship"></i>
            <p>
                Shipping Type
                <b class="caret"></b>
            </p>
        </a>
        <div class="collapse " id="mapsExamples">
            <ul class="nav">
                <li class="{{ request()->is('add-shipping-type') ? 'active' : '' }}">
                    <a href="{{ route('shippingType') }}">
                        <span class="sidebar-mini-icon">AN</span>
                        <span class="sidebar-normal"> Add New </span>
                    </a>
                </li>
                <li class="{{ request()->is('list-shipping-type') ? 'active' : '' }}">
                    <a href="{{ route('shippinglist') }}">
                        <span class="sidebar-mini-icon">VA</span>
                        <span class="sidebar-normal"> View All </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @can('view', Auth::user())
    <li class="{{ request()->is('add-new-admin') || request()->is('admin-list') ? 'active' : '' }}">
        <a data-toggle="collapse" href="#formsExamples">
            <i class="nc-icon nc-single-02"></i>
            <p>
                Admins
                <b class="caret"></b>
            </p>
        </a>
        <div class="collapse " id="formsExamples">
            <ul class="nav">
                <li class="{{ request()->is('add-new-admin') ? 'active' : '' }}">
                    <a href="{{ route('viewAdmin') }}">
                        <span class="sidebar-mini-icon">AN</span>
                        <span class="sidebar-normal"> Add New </span>
                    </a>
                </li>
                <li class="{{ request()->is('admin-list') ? 'active' : '' }}">
                    <a href="{{ route('adminList') }}">
                        <span class="sidebar-mini-icon">UA</span>
                        <span class="sidebar-normal"> Update Admin </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    @endcan

</ul>
</div>
</div>

