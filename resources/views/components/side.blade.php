<div class="sidebar" data-color="white" data-active-color="danger">
    <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
                <img src="../assets/img/logo-small.png">
            </div>
            <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
            <!-- <div class="logo-image-big">
          <img src="../assets/img/logo-big.png">
        </div> -->
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ in_array($curr_url, ['dashboard'])?'active':'' }}">
                <a href="{{ route('dashboard') }}">
                    <i class="nc-icon nc-bank"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            {{-- <li class="{{ in_array($curr_url, ['items.all','items.new','items.edit'])?'active':'' }}">
                <a href="{{ route('items.all') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Items</p>
                </a>
            </li>
            <li class="{{ in_array($curr_url, ['invoice.new'])?'active':'' }}">
                <a href="{{ route('invoice.new') }}">
                    <i class="nc-icon nc-diamond"></i>
                    <p>Invoice</p>
                </a>
            </li> --}}

            <li class="{{ in_array($curr_url, ['items.all','items.new','items.edit','invoice.new'])?'active':'' }}">
                <a data-toggle="collapse" href="#dashboardOverview" aria-expanded="true">
                    <i class="nc-icon nc-bank"></i>
                    <p>Master
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse in" id="dashboardOverview">
                    <ul class="nav">
                        <li  class="{{ in_array($curr_url, ['items.all','items.new','items.edit'])?'active':'' }}">
                            <a href="{{ route('items.all') }}">
                                <i class="nc-icon nc-diamond"></i>
                                <p>Items</p>
                            </a>
                        </li>
                        <li class="{{ in_array($curr_url, ['invoice.new'])?'active':'' }}">
                            <a href="{{ route('invoice.new') }}">
                                <i class="nc-icon nc-diamond"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
