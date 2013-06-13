<!-- BEGIN HEADER.head -->
<header class="head">
    <div class="search-bar">
        <div class="row-fluid">
            <div class="span12">
                <div class="search-bar-inner">
                    <a id="menu-toggle" href="#menu" data-toggle="collapse"
                       class="accordion-toggle btn btn-inverse visible-phone"
                       rel="tooltip" data-placement="bottom" data-original-title="Show/Hide Menu">
                        <i class="icon-sort"></i>
                    </a>

                    <form class="main-search">
                        <input class="input-block-level" type="text" placeholder="Live search...">
                        <button id="searchBtn" type="submit" class="btn btn-inverse"><i class="icon-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- ."main-bar -->
    <div class="main-bar">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3><i class="icon-<?php if(!empty($icon)): echo $icon; else: echo 'home'; endif ?>"></i> <?php if(!empty($title)): echo $title; endif ?></h3>
                </div>
            </div>
            <!-- /.row-fluid -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.main-bar -->
</header>
<!-- END HEADER.head -->