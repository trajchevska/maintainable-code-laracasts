
<div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-labelledby="deleteAccountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteAccountModalLabel">Account Deactivation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="p-0" method="POST" action="https://app.adevait.com/account/deactivate">
                <input type="hidden" name="_token" value="aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw">                <div class="modal-body" id="invitationModalBody">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <p>Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                            <textarea class="form-control" name="deactivation_reason" id="deactivation_reason" placeholder="We’re always looking for ways to improve Adeva. Please share your main reason for deactivating your account."></textarea>
                        </div>
                    </div>

                    <div class="form-group row mt-4 mb-0">
                        <div class="col-md-12 text-right">
                            <button type="button" class="btn-action btn-text btn-transparent" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn-action btn-text btn-danger m-0" id="confirmationButton">Delete my account</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteConfirmationModalLabel">Are you sure you want to delete this record?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" id="deleteForm">
                <input type="hidden" name="_token" value="aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw">                <input type="hidden" name="_method" value="DELETE">                <div class="modal-body" id="deleteConfirmationModalBody">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="deleteConfirmationButton">Proceed</button>
                </div>
            </form>

        </div>
    </div>
</div>
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmModalLabel">Are you sure you want to proceed with this action?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" id="confirmForm">
                <input type="hidden" name="_token" value="aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw">
                <div class="modal-body" id="confirmModalBody">

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger" id="confirmButton">Proceed</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Are you sure you want to proceed with this action?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="confirmationModalBody">
                This action can not be undone. Are you sure you want to proceed?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <a href="" class="btn btn-danger" id="confirmationButton">Proceed</a>
            </div>
        </div>
    </div>
</div>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="msapplication-config" content="/favicon/browserconfig.xml">

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="apple-touch-icon" sizes="180x180" href="https://app.adevait.com/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://app.adevait.com/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://app.adevait.com/favicon/favicon-16x16.png">
<link rel="mask-icon" href="https://app.adevait.com/favicon/safari-pinned-tab.svg" color="#5bbad5">
<link rel="manifest" href="https://app.adevait.com/manifest.json">
<link rel="shortcut icon" href="https://app.adevait.com/favicon/favicon.ico">
<link rel="mask-icon" href="https://app.adevait.com/favicon/safari-pinned-tab.svg" color="#5bbad5">

<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link rel="alternate" type="application/rss+xml" title="Adeva Insights" href="https://app.adevait.com/feed.xml" />

<title>Work Without Boundaries - Adeva</title>
<meta property="description" content="Adeva is a global talent network that enables work without boundaries by connecting organizations with distributed tech talent across the world." />

<meta property="og:locale" content="en" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Work Without Boundaries - Adeva" />
<meta property="og:description" content="Adeva is a global talent network that enables work without boundaries by connecting organizations with distributed tech talent across the world." />
<meta property="og:url" content="https://adevait.com/" />
<meta property="og:site_name" content="Adeva" />
<meta property="og:image" content="https://static.adevait.com/meta/og-social-image.png" />
<meta property="og:image:secure_url" content="https://static.adevait.com/meta/og-social-image.png" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="300" />

<meta name="twitter:title" content="Work Without Boundaries - Adeva" />
<meta name="twitter:description" content="Adeva is a global talent network that enables work without boundaries by connecting organizations with distributed tech talent across the world." />
<meta name="twitter:site" content="@ExploreAdeva" />
<meta name="twitter:image" content="https://static.adevait.com/meta/og-social-image.png" />
<meta name="twitter:card" content="summary_large_image" />


    <style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>

    <!-- Styles -->
    <link href="https://app.adevait.com/css/portal.css?id=5030abe62580942671e2" rel="stylesheet">
    <link rel="stylesheet" href="https://app.adevait.com/css/components/fallback-avatar.css?id=99673fa400647c494a5b">

            <script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
        h.end=i=function(){s.className=s.className.replace(RegExp(' ?'+y),'')};
        (a[n]=a[n]||[]).hide=h;setTimeout(function(){i();h.end=null},c);h.timeout=c;
        })(window,document.documentElement,'async-hide','dataLayer',4000,
        {'GTM-M73VJNK':true});</script>
    
    </head>

<body class="settings ">
            <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M73VJNK');</script>
    
    <div id="wrapper" class="tippy-selector">
        <header id="header-container" class="fullwidth dashboard-header not-sticky">
    <div id="header">
        <div class="container">
            <div class="left-side">
                <div id="logo">
                                        <a href="https://app.adevait.com">
                        <img src="https://app.adevait.com/svg/logo.svg" alt="Logo">
                    </a>
                </div>
                <nav id="navigation">
                    <h3>Hello, Katerina!</h3>
                </nav>
                <div class="clearfix"></div>
            </div>

            <div class="right-side">
                <div class="header-widget">

                    <div class="header-notifications user-menu">
                        <div class="header-notifications-trigger">
                            <a href="#">
                                <div class="user-avatar">
                                    <div wire:id="sZFQo23Jr0XMY9Px2zn0" wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;sZFQo23Jr0XMY9Px2zn0&quot;,&quot;name&quot;:&quot;fallback-avatar&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;settings&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;921f9f58&quot;,&quot;data&quot;:{&quot;src&quot;:&quot;https:\/\/app.adevait.com\/storage\/media\/617\/conversions\/1PiETHk0RXkTkWHFs3DMv4Pqj3eeBWYE8q2EoBOY-thumb.jpg&quot;,&quot;alt&quot;:&quot;Katerina Trajchevska&quot;,&quot;size&quot;:&quot;md&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;9ac00f45ea6356914cf7382d102c326c859f8290c104531dc9c7110181e7884e&quot;}}" class="livewire-fallback-avatar-wrapper md">
    <img src="https://app.adevait.com/storage/media/617/conversions/1PiETHk0RXkTkWHFs3DMv4Pqj3eeBWYE8q2EoBOY-thumb.jpg" alt="Katerina Trajchevska" class="livewire-fallback-avatar" />
    <div class="livewire-fallback-avatar-overlay"></div>
</div>

<!-- Livewire Component wire-end:sZFQo23Jr0XMY9Px2zn0 -->                                </div>
                            </a>
                        </div>

                        <div class="header-notifications-dropdown">
                            <ul class="user-menu-small-nav">
                                                                    <li><a href="https://app.adevait.com/admin">Admin Dashboard</a></li>
                                    <hr class="mt-2 mb-2">
                                                                                                    <li><a href="https://app.adevait.com/account">Edit Profile</a></li>
                                    <li><a href="https://app.adevait.com/settings">Account Settings</a></li>
                                
                                                                <li><a href="https://app.adevait.com/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                                            </ul>
                            <form id="logout-form" action="https://app.adevait.com/logout" method="POST" style="display: none;">
                                <input type="hidden" name="_token" value="aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw">                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="clearfix"></div>
        <div class="dashboard-container" id="hours" v-cloak>
            <div class="dashboard-sidebar">
                <div class="dashboard-sidebar-inner" data-simplebar>
                    <div class="dashboard-nav-container">
                        <a href="#" class="dashboard-responsive-nav-trigger">
                            <span class="hamburger hamburger--collapse">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </span>
                            <span class="trigger-title">Menu</span>
                        </a>
                        <div class="dashboard-nav">
                            <div class="dashboard-nav-inner sidebar-wrapper">
                                <div>
                                    <ul data-submenu-title="Navigation" >
                                        <li >
                                            <a href="https://app.adevait.com/home">
                                                <i class="icon-overview "></i> Overview
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/positions">
                                                <i class="icon-hiring-now"></i>
                                                Open Positions
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/contracts">
                                                <i class="icon-contracts"></i>
                                                Contracts
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/logs/time-logs">
                                                <i class="icon-timelogs"></i>
                                                Time management
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/payments">
                                                <i class="icon-payments-nav"></i>
                                                Payments
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://dashboard.adevait.com/talent/health-insurance">
                                                <i class="icon-health-insurance-nav"></i>
                                                Health Insurance
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/community/writter" class="has-children">
                                                <i class="icon-community"></i>
                                                Community
                                            </a>
                                            <ul class="submenu">
                                                <li ><a
                                                        href="https://app.adevait.com/community/writter">Write</a></li>
                                                <li ><a
                                                        href="https://app.adevait.com/community/speaker">Speak</a></li>
                                                <li ><a
                                                        href="https://app.adevait.com/community/interviews">Interviews</a></li>
                                            </ul>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/referral/developers">
                                                <i class="icon-referrals-nav"></i> Referrals
                                            </a>
                                        </li>
                                        <li >
                                            <a href="https://app.adevait.com/support">
                                                <i class="icon-faq"></i> Support
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="roles-toggle-wrapper">
                                                                        <ul data-submenu-title="Switch Role">
                                        <div class="switch-roles">
                                            <li style="border: none" class="active"><a href="https://app.adevait.com/home"><i
                                                        class="icon-talent"></i> Talent</a></li>
                                            <li style="border: none"><a
                                                    href="https://dashboard.adevait.com"><i
                                                        class="icon-company"></i> Company</a></li>
                                        </div>
                                    </ul>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="dashboard-content-container">@yield('content')</div>

<style>
    .payment-option-selector {
        padding: 0 1rem;
        border: 1px solid #EEE;
        margin: 0;
        width: 100%;
        cursor: pointer;
    }

    .payment-option-selector.disabled {
        background: #e9ecef;
        pointer-events: none;
    }

    .payment-option-selector.disabled .form-check-label {
        color: #AAA !important;
    }

    .payment-option-selector .form-check-label {
        width: 100%;
        padding: 1rem 0;
        margin-left: 0.5rem;
        cursor: pointer;
    }

    select:disabled {
        background-color: #e9ecef !important;
        border: 1px solid #E1E3EB;
    }

</style>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>

    <div class="modal talent-feedback-modal" id="talentFeedbackModal" tabindex="-1" role="dialog" aria-labelledby="talentFeedbackModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form action="https://app.adevait.com/account/submitFeedback" method="POST" class="p-0">
                <input type="hidden" name="_token" value="aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw">                <div class="modal-header pl-4">
                    <h5 class="modal-title" id="talentFeedbackModalLabel">Help Us Improve the Platform</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body p-4" id="talentFeedbackModalBody">
                    <label for="comment">Questions, bug reports, feedback — we’re here for it all.</label>
                    <textarea name="comment" id="comment" placeholder="Have feedback? We’d love to hear it." class="form-control" id="" cols="30" rows="5"></textarea>
                </div>
                <div class="modal-footer border-0 p-4">
                    <button type="button" class="btn-action btn-text btn-transparent" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn-action btn-text btn-green mr-0" id="confirmationButton">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="https://app.adevait.com/js/vendor/tippy/tippy.all.min.js" defer></script>
    <script src="https://app.adevait.com/js/app.js?id=ac159ab4f15739306db6" defer></script>
    <script src="https://app.adevait.com/js/portal.js?id=10790a844cd59128308e" defer></script>
    <script src="https://app.adevait.com/js/vendor/snackbar/snackbar.js" defer></script>
    <script src="https://app.adevait.com/js/components/fallback-avatar.js?id=caf466f3ae189b560340"></script>

    <script src="https://app.adevait.com/livewire/livewire.js?id=90730a3b0e7144480175" data-turbo-eval="false" data-turbolinks-eval="false" ></script><script data-turbo-eval="false" data-turbolinks-eval="false" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = 'aomQqwZpbjdkfbk7eRi751EGqXKz3jBjZdvlTvkw';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener("DOMContentLoaded", function () {if (! started) {window.livewire.start();started = true;}});</script>

    
    
    
    </body>
</html>
