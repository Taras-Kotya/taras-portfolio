<body class="u-body u-xxl-mode">
    <header class="u-clearfix u-grey-90 u-header u-header" id="sec-ab9d">
        <div class="u-clearfix u-sheet u-sheet-1">
            <a href="/" class="u-align-left-xs u-image u-logo u-image-1" data-image-width="152" data-image-height="134">
                <img src="/images/Untitled-2.png" class="u-logo-image u-logo-image-1">
            </a>
            <nav class="u-align-left-lg u-align-left-md u-align-left-sm u-align-left-xl u-align-left-xxl u-align-right-xs u-menu u-menu-dropdown u-nav-spacing-25 u-offcanvas u-menu-1" data-responsive-from="MD">
                <div class="menu-collapse u-custom-font u-font-raleway" style="font-size: 1.125rem; letter-spacing: 0px;">
                    <a class="u-button-style u-custom-border u-custom-border-color u-custom-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link" href="#" style="padding: 4px 0px; font-size: calc(1em + 8px);">
                        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302" style="">
                            <use xlink:href="#svg-7b92"></use>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;" xml:space="preserve" class="u-svg-content">
                            <g>
                                <rect y="36" width="302" height="30"></rect>
                                <rect y="236" width="302" height="30"></rect>
                                <rect y="136" width="302" height="30"></rect>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg>
                    </a>
                </div>
                <div class="u-custom-menu u-nav-container">
                    <ul class="u-custom-font u-font-raleway u-nav u-spacing-20 u-unstyled u-nav-1">
                        <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="/" style="padding: 10px;">??????????????</a>
                        </li>
                        <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="/admin" style="padding: 10px;">??????????-????????????</a>
                        </li>
                        <?php if (session('is_auth')) : ?>
                            <li class="u-nav-item"><a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-text-white" href="/admin/logout" style="padding: 10px;">??????????</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="u-custom-menu u-nav-container-collapse">
                    <div class="u-align-center u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                        <div class="u-inner-container-layout u-sidenav-overflow">
                            <div class="u-menu-close"></div>
                            <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/" style="padding: 10px;">??????????????</a>
                                </li>
                                <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/admin" style="padding: 10px;">??????????-????????????</a>
                                </li>
                                <?php if (session('is_auth')) : ?>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="/admin/logout" style="padding: 10px;">??????????</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                </div>
            </nav>
        </div>
    </header>