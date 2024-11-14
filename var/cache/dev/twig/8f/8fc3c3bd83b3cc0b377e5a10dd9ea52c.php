<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_daa0b547cd44608b66bd290b3ac8dac3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "
        ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </head>
    <body>

        ";
        // line 81
        $this->displayBlock('header', $context, $blocks);
        // line 453
        echo "



        ";
        // line 457
        $this->displayBlock('body', $context, $blocks);
        // line 461
        echo "
        ";
        // line 462
        $this->displayBlock('footer', $context, $blocks);
        // line 571
        echo "



    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "
            <link href=\"https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">


            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/magnific-popup.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fontawesome.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery.fancybox.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/jquery-ui.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/themify-icons.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flaticon.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/niceselect.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/flex-slider.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/owl-carousel.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/slicknav.min.css"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/default.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\">
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 42
        echo "

            <script data-cfasync=\"false\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-3.6.0.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/slicknav.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/owl-carousel.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/magnific-popup.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/facnybox.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/waypoints.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/finalcountdown.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/nicesellect.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/ytplayer.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/flex-slider.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scrollup.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/onepage-nav.min.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/easing.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 81
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 82
        echo "            <header class=\"header shop\">

                <div class=\"topbar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-12 col-12\">

                                <div class=\"top-left\">
                                    <ul class=\"list-main\">
                                        <li><i class=\"ti-headphone-alt\"></i> +070 (460) 532-654</li>
                                        <li><i class=\"ti-email\"></i> <a href=\"https://themes.themewild.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"42313732322d303602273a232f322e276c212d2f\">[email&#160;protected]</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"col-lg-6 col-md-12 col-12\">

                                <div class=\"right-content\">
                                    <ul class=\"list-main\">
                                        <li><i class=\"ti-alarm-clock\"></i> <a href=\"#\">Daily deal</a></li>
                                        <li><i class=\"ti-user\"></i> <a href=\"#\">My account</a></li>
                                        <li><i class=\"ti-power-off\"></i><a href=\"login.html\">Login</a></li>
                                        <li>
                                            <div class=\"dropdown top-dropdown\">
                                                <a href=\"#\" id=\"lang\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <i class=\"ti-world\"></i> EN <i class=\"fal fa-angle-down\"></i>
                                                </a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"lang\">
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> EN</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> RU</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> GE</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> HK</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"dropdown top-dropdown\">
                                                <a href=\"#\" id=\"payment\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <i class=\"fal fa-dollar-sign\"></i> USD <i class=\"fal fa-angle-down\"></i>
                                                </a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"payment\">
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"fal fa-dollar-sign\"></i> USD</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"fal fa-euro-sign\"></i> EUR</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"middle-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-12\">

                                <div class=\"logo\">
                                    <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"logo\"></a>
                                </div>


                                <div class=\"search-top\">
                                    <div class=\"top-search\"><a href=\"#0\"><i class=\"far fa-search\"></i></a></div>

                                    <div class=\"search-top\">
                                        <form class=\"search-form\">
                                            <input type=\"text\" placeholder=\"Search here...\" name=\"search\">
                                            <button value=\"search\" type=\"submit\"><i class=\"far fa-search\"></i></button>
                                        </form>
                                    </div>

                                </div>

                                <div class=\"mobile-nav\"></div>
                            </div>
                            <div class=\"col-lg-7 col-md-6 col-12\">
                                <div class=\"search-bar-top\">
                                    <div class=\"search-bar\">
                                        <select>
                                            <option selected=\"selected\">All Category</option>
                                            <option>Fashion</option>
                                            <option>Electronics</option>
                                            <option>Bikes</option>
                                            <option>Laptop</option>
                                            <option>Camera</option>
                                            <option>Health & Beauty</option>
                                        </select>
                                        <form>
                                            <input name=\"search\" placeholder=\"Search Products Here.....\" type=\"search\">
                                            <button class=\"btnn\"><i class=\"far fa-search\"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-2 col-md-3 col-12\">
                                <div class=\"right-bar\">

                                    <div class=\"sinlge-bar\">
                                        <a href=\"#\" class=\"single-icon\"><i class=\"fal fa-heart\" aria-hidden=\"true\"></i></a>
                                    </div>
                                    <div class=\"sinlge-bar\">
                                        <a href=\"#\" class=\"single-icon\"><i class=\"fal fa-user-circle\" aria-hidden=\"true\"></i></a>
                                    </div>
                                    <div class=\"sinlge-bar shopping\">
                                        <a href=\"#\" class=\"single-icon\"><i class=\"fal fa-shopping-cart\"></i> <span class=\"total-count\">2</span></a>

                                        <div class=\"shopping-item\">
                                            <div class=\"dropdown-cart-header\">
                                                <span>2 Items</span>
                                                <a href=\"#\">View Cart</a>
                                            </div>
                                            <ul class=\"shopping-list\">
                                                <li>
                                                    <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fal fa-times-circle\"></i></a>
                                                    <a class=\"cart-img\" href=\"#\"><img src=\"assets/img/products/p22.png\" alt=\"#\"></a>
                                                    <h4><a href=\"#\">Xamaha R15 Blue</a></h4>
                                                    <p class=\"quantity\">1x - <span class=\"amount\">\$200.00</span></p>
                                                </li>
                                                <li>
                                                    <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fal fa-times-circle\"></i></a>
                                                    <a class=\"cart-img\" href=\"#\"><img src=\"assets/img/products/p3.png\" alt=\"#\"></a>
                                                    <h4><a href=\"#\">Apple Earphones</a></h4>
                                                    <p class=\"quantity\">1x - <span class=\"amount\">\$150.00</span></p>
                                                </li>
                                            </ul>
                                            <div class=\"bottom\">
                                                <div class=\"total\">
                                                    <span>Total</span>
                                                    <span class=\"total-amount\">\$350.00</span>
                                                </div>
                                                <a href=\"checkout.html\" class=\"btn animate\">Checkout</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"header-inner  shadow\">
                    <div class=\"container\">
                        <div class=\"cat-nav-head\">
                            <div class=\"row\">
                                <div class=\"col-lg-3\">
                                    <div class=\"all-category\">
                                        <div class=\"d-flex\">
                                            <i class=\"flaticon-menu cat-heading-icon\"></i>
                                            <h3 class=\"cat-heading\">CATEGORIES</h3>
                                        </div>
                                        <ul class=\"main-category\">
                                            <li><a href=\"#\"> <i class=\"flaticon-shopping-bag category-icon\"></i> New Arrivals <i class=\"fal fa-angle-right\" aria-hidden=\"true\"></i></a>
                                                <ul class=\"sub-category\">
                                                    <li><a href=\"#\"><i class=\"flaticon-dress category-icon\"></i> Fashion</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-bags category-icon\"></i> Accessories</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-laptop category-icon\"></i> Electronics</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-toys category-icon\"></i> Baby Toys</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-home category-icon\"></i> Home & Garden</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-gift-box category-icon\"></i> Gifts</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-beauty category-icon\"></i> Health & Beauty</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-music-notes category-icon\"></i> Music</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-groceries category-icon\"></i> Groceries </a></li>
                                                </ul>
                                            </li>
                                            <li class=\"main-mega\"><a href=\"#\"><i class=\"flaticon-dress category-icon\"></i> Fashion <i class=\"fal fa-angle-right\" aria-hidden=\"true\"></i></a>
                                                <ul class=\"mega-menu\">
                                                    <li class=\"single-menu\">
                                                        <a href=\"#\" class=\"title-link\">Shop Kid's</a>
                                                        <div class=\"image\">
                                                            <img src=\"assets/img/mega-menu/3.jpg\" alt=\"#\">
                                                        </div>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Kids Toys</a>
                                                            <a href=\"#\">Kids Color Shape</a>
                                                            <a href=\"#\">Kids Travel Car</a>
                                                            <a href=\"#\">Kids Tent</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <a href=\"#\" class=\"title-link\">Shop Men's</a>
                                                        <div class=\"image\">
                                                            <img src=\"assets/img/mega-menu/1.jpg\" alt=\"#\">
                                                        </div>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Watch</a>
                                                            <a href=\"#\">Hoodies</a>
                                                            <a href=\"#\">T-shirt</a>
                                                            <a href=\"#\">Formal Pant</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <a href=\"#\" class=\"title-link\">Shop Women's</a>
                                                        <div class=\"image\">
                                                            <img src=\"assets/img/mega-menu/2.jpg\" alt=\"#\">
                                                        </div>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\"><i class=\"flaticon-bags category-icon\"></i> Accessories</a></li>
                                            <li class=\"main-mega\"><a href=\"#\"><i class=\"flaticon-laptop category-icon\"></i> Electronics <i class=\"fal fa-angle-right\" aria-hidden=\"true\"></i></a>
                                                <ul class=\"mega-menu\">
                                                    <li class=\"single-menu\">
                                                        <h6 class=\"text-dark\">Man Cloths</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Kids Toys</a>
                                                            <a href=\"#\">Kids Color Shape</a>
                                                            <a href=\"#\">Kids Travel Car</a>
                                                            <a href=\"#\">Kids Tent</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <h6 class=\"text-dark\">Shoes</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Watch</a>
                                                            <a href=\"#\">Hoodies</a>
                                                            <a href=\"#\">T-shirt</a>
                                                            <a href=\"#\">Formal Pant</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <h6 class=\"text-dark\">Bags</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu mt-4\">
                                                        <h6 class=\"text-dark\">Women Cloths</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu mt-4\">
                                                        <h6 class=\"text-dark\">Shoes</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu mt-4\">
                                                        <h6 class=\"text-dark\">Bags</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\"><i class=\"flaticon-toys category-icon\"></i> Baby Toys</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-home category-icon\"></i> Home & Garden</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-gift-box category-icon\"></i> Gifts</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-beauty category-icon\"></i> Health & Beauty</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-music-notes category-icon\"></i> Music</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-groceries category-icon\"></i> Groceries </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-lg-9 col-12\">
                                    <div class=\"menu-area\">

                                        <nav class=\"navbar navbar-expand-lg\">
                                            <div class=\"navbar-collapse\">
                                                <div class=\"nav-inner\">
                                                    <ul class=\"nav main-menu menu navbar-nav\">
                                                        <li class=\"active\"><a href=\"#\">Home<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"index.html\">Home Demo One</a></li>
                                                                <li><a href=\"index2.html\">Home Demo Two</a></li>
                                                                <li><a href=\"index3.html\">Home Demo Three</a></li>
                                                                <li><a href=\"index4.html\">Home Demo Four</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">User Account<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"order-list.html\">Order List</a></li>
                                                                <li><a href=\"order-detail.html\">Order Details</a></li>
                                                                <li><a href=\"add-address.html\">Add Address</a></li>
                                                                <li><a href=\"address-list.html\">Address List</a></li>
                                                                <li><a href=\"profile.html\">Profile</a></li>
                                                                <li><a href=\"edit-profile.html\">Edit Profile</a></li>
                                                                <li><a href=\"support-ticket.html\">Support Tickets</a></li>
                                                                <li><a href=\"ticket-detail.html\">Ticket Details</a></li>
                                                                <li><a href=\"wishlist.html\">Wishlist</a></li>
                                                                <li><a href=\"track-order.html\">Track Order</a></li>
                                                                <li><a href=\"payment-method.html\">Payment Methods</a></li>
                                                                <li><a href=\"add-payment.html\">Add Payment</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Vendor<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"dashboard.html\">Dashboard</a></li>
                                                                <li><a href=\"product.html\">Products</a></li>
                                                                <li><a href=\"add-product.html\">Add Product</a></li>
                                                                <li><a href=\"all-order.html\">All Orders</a></li>
                                                                <li><a href=\"order-detail.html\">Order Details</a></li>
                                                                <li><a href=\"all-vendor.html\">All Vendors</a></li>
                                                                <li><a href=\"vendor-store.html\">Vendor Store</a></li>
                                                                <li><a href=\"vendor-profile.html\">Vendor Profile</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Shop<i class=\"ti-angle-down\"></i><span class=\"new\">New</span></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                                                <li><a href=\"shop-list.html\">Shop List</a></li>
                                                                <li><a href=\"shop-single.html\">Shop Single</a></li>
                                                                <li><a href=\"shop-search.html\">Shop Search</a></li>
                                                                <li><a href=\"cart.html\">Cart</a></li>
                                                                <li><a href=\"checkout.html\">Checkout</a></li>
                                                                <li><a href=\"compare.html\">Shop Compare</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Pages<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"about-us.html\">About Us</a></li>
                                                                <li><a href=\"team.html\">Team</a></li>
                                                                <li><a href=\"login.html\">Login</a></li>
                                                                <li><a href=\"register.html\">Register</a></li>
                                                                <li><a href=\"forgot-password.html\">Forgot Password</a></li>
                                                                <li><a href=\"faq.html\">Faq</a></li>
                                                                <li><a href=\"term-condition.html\">Terms & Conditions</a></li>
                                                                <li><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                                                                <li><a href=\"return-policy.html\">Return Policy</a></li>
                                                                <li><a href=\"mail-success.html\">Mail Success</a></li>
                                                                <li><a href=\"404.html\">404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Blog<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                                                <li><a href=\"blog-grid-sidebar.html\">Blog Grid Sidebar</a></li>
                                                                <li><a href=\"blog-single.html\">Blog Single</a></li>
                                                                <li><a href=\"blog-single-sidebar.html\">Blog Single Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"contact.html\">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>



        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 457
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 458
        echo "

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 462
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 463
        echo "            <footer class=\"footer\">

                <div class=\"footer-top section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-5 col-md-6 col-12\">

                                <div class=\"single-footer about\">
                                    <div class=\"logo\">
                                        <a href=\"index.html\"><img width=\"250\" src=\"assets/img/logo-white.png\" alt=\"#\"></a>
                                    </div>
                                    <p class=\"text\">We are many variations of passages available but the majority have suffered alteration in some form by the andomised words which injected humour.</p>
                                    <p class=\"call\">Have Any Question? Call Us 24/7<span><a href=\"tel:(+1)1234565555\">(+1) 123 456 5555</a></span></p>
                                    <div class=\"footer-download\">
                                        <a href=\"#\">
                                            <img src=\"assets/img/download/play-store.png\" alt=\"\">
                                        </a>
                                        <a href=\"#\">
                                            <img src=\"assets/img/download/app-store.png\" alt=\"\">
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col-lg-2 col-md-6 col-12\">

                                <div class=\"single-footer links\">
                                    <h4>Information</h4>
                                    <ul>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Contact Us</a></li>
                                        <li><a href=\"#\">Terms & Conditions</a></li>
                                        <li><a href=\"#\">Faq</a></li>
                                        <li><a href=\"#\">Careers</a></li>
                                        <li><a href=\"#\">Our Stores</a></li>
                                        <li><a href=\"#\">Our Cares</a></li>
                                        <li><a href=\"#\">Help</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"col-lg-2 col-md-6 col-12\">

                                <div class=\"single-footer links\">
                                    <h4>Customer Service</h4>
                                    <ul>
                                        <li><a href=\"#\">Payment Methods</a></li>
                                        <li><a href=\"#\">Money-back</a></li>
                                        <li><a href=\"#\">Returns</a></li>
                                        <li><a href=\"#\">Shipping</a></li>
                                        <li><a href=\"#\">Privacy Policy</a></li>
                                        <li><a href=\"#\">Support Center</a></li>
                                        <li><a href=\"#\">How to Buy</a></li>
                                        <li><a href=\"#\">Track Your Order</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"col-lg-3 col-md-6 col-12\">

                                <div class=\"single-footer social\">
                                    <h4>Get In Tuch</h4>

                                    <div class=\"contact\">
                                        <ul>
                                            <li> <i class=\"fal fa-map-marker-alt\"></i> 1503 Kovar Road, New York, USA</li>
                                            <li> <i class=\"fal fa-envelope\"></i> <a href=\"https://themes.themewild.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7102101d1402311409101c011d145f121e1c\">[email&#160;protected]</a></li>
                                            <li> <i class=\"fal fa-phone\"></i> (+1) 123 456 5657</li>
                                        </ul>
                                    </div>

                                    <ul>
                                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fab fa-whatsapp\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"copyright\">
                    <div class=\"container\">
                        <div class=\"inner\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-12\">
                                    <div class=\"left\">
                                        <p>Copyright © 2021 <a href=\"#\">SMARTSHOP</a> - All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-12\">
                                    <div class=\"right payment\">
                                        <i class=\"fab fa-cc-mastercard\"></i>
                                        <i class=\"fab fa-cc-visa\"></i>
                                        <i class=\"fab fa-cc-paypal\"></i>
                                        <i class=\"fab fa-cc-amex\"></i>
                                        <i class=\"fab fa-cc-discover\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  746 => 463,  736 => 462,  724 => 458,  714 => 457,  334 => 82,  324 => 81,  312 => 76,  307 => 74,  302 => 72,  297 => 70,  292 => 68,  287 => 66,  282 => 64,  277 => 62,  272 => 60,  267 => 58,  262 => 56,  257 => 54,  252 => 52,  247 => 50,  242 => 48,  237 => 46,  232 => 44,  228 => 42,  218 => 41,  206 => 38,  202 => 37,  198 => 36,  193 => 34,  188 => 32,  183 => 30,  178 => 28,  173 => 26,  168 => 24,  163 => 22,  158 => 20,  153 => 18,  148 => 16,  143 => 14,  138 => 12,  132 => 8,  122 => 7,  103 => 5,  87 => 571,  85 => 462,  82 => 461,  80 => 457,  74 => 453,  72 => 81,  67 => 78,  65 => 41,  62 => 40,  60 => 7,  55 => 5,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
        {% block stylesheets %}

            <link href=\"https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap\" rel=\"stylesheet\">


            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/bootstrap.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/magnific-popup.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/fontawesome.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery.fancybox.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/jquery-ui.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/themify-icons.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flaticon.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/niceselect.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/flex-slider.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/owl-carousel.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/slicknav.min.css') }}\">

            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/default.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('assets/css/responsive.css') }}\">
        {% endblock %}

        {% block javascripts %}


            <script data-cfasync=\"false\" src=\"{{ asset('../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/jquery-3.6.0.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/jquery-ui.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/bootstrap.bundle.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/slicknav.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/owl-carousel.js') }}\"></script>

            <script src=\"{{ asset('assets/js/magnific-popup.js') }}\"></script>

            <script src=\"{{ asset('assets/js/facnybox.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/waypoints.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/finalcountdown.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/nicesellect.js') }}\"></script>

            <script src=\"{{ asset('assets/js/ytplayer.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/flex-slider.js') }}\"></script>

            <script src=\"{{ asset('assets/js/scrollup.js') }}\"></script>

            <script src=\"{{ asset('assets/js/onepage-nav.min.js') }}\"></script>

            <script src=\"{{ asset('assets/js/easing.js') }}\"></script>

            <script src=\"{{ asset('assets/js/main.js') }}\"></script>
        {% endblock %}
    </head>
    <body>

        {% block header %}
            <header class=\"header shop\">

                <div class=\"topbar\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-6 col-md-12 col-12\">

                                <div class=\"top-left\">
                                    <ul class=\"list-main\">
                                        <li><i class=\"ti-headphone-alt\"></i> +070 (460) 532-654</li>
                                        <li><i class=\"ti-email\"></i> <a href=\"https://themes.themewild.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"42313732322d303602273a232f322e276c212d2f\">[email&#160;protected]</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"col-lg-6 col-md-12 col-12\">

                                <div class=\"right-content\">
                                    <ul class=\"list-main\">
                                        <li><i class=\"ti-alarm-clock\"></i> <a href=\"#\">Daily deal</a></li>
                                        <li><i class=\"ti-user\"></i> <a href=\"#\">My account</a></li>
                                        <li><i class=\"ti-power-off\"></i><a href=\"login.html\">Login</a></li>
                                        <li>
                                            <div class=\"dropdown top-dropdown\">
                                                <a href=\"#\" id=\"lang\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <i class=\"ti-world\"></i> EN <i class=\"fal fa-angle-down\"></i>
                                                </a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"lang\">
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> EN</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> RU</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> GE</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"ti-world\"></i> HK</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class=\"dropdown top-dropdown\">
                                                <a href=\"#\" id=\"payment\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                                    <i class=\"fal fa-dollar-sign\"></i> USD <i class=\"fal fa-angle-down\"></i>
                                                </a>
                                                <div class=\"dropdown-menu\" aria-labelledby=\"payment\">
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"fal fa-dollar-sign\"></i> USD</a>
                                                    <a class=\"dropdown-item\" href=\"#\"><i class=\"fal fa-euro-sign\"></i> EUR</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"middle-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-3 col-md-3 col-12\">

                                <div class=\"logo\">
                                    <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"logo\"></a>
                                </div>


                                <div class=\"search-top\">
                                    <div class=\"top-search\"><a href=\"#0\"><i class=\"far fa-search\"></i></a></div>

                                    <div class=\"search-top\">
                                        <form class=\"search-form\">
                                            <input type=\"text\" placeholder=\"Search here...\" name=\"search\">
                                            <button value=\"search\" type=\"submit\"><i class=\"far fa-search\"></i></button>
                                        </form>
                                    </div>

                                </div>

                                <div class=\"mobile-nav\"></div>
                            </div>
                            <div class=\"col-lg-7 col-md-6 col-12\">
                                <div class=\"search-bar-top\">
                                    <div class=\"search-bar\">
                                        <select>
                                            <option selected=\"selected\">All Category</option>
                                            <option>Fashion</option>
                                            <option>Electronics</option>
                                            <option>Bikes</option>
                                            <option>Laptop</option>
                                            <option>Camera</option>
                                            <option>Health & Beauty</option>
                                        </select>
                                        <form>
                                            <input name=\"search\" placeholder=\"Search Products Here.....\" type=\"search\">
                                            <button class=\"btnn\"><i class=\"far fa-search\"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-2 col-md-3 col-12\">
                                <div class=\"right-bar\">

                                    <div class=\"sinlge-bar\">
                                        <a href=\"#\" class=\"single-icon\"><i class=\"fal fa-heart\" aria-hidden=\"true\"></i></a>
                                    </div>
                                    <div class=\"sinlge-bar\">
                                        <a href=\"#\" class=\"single-icon\"><i class=\"fal fa-user-circle\" aria-hidden=\"true\"></i></a>
                                    </div>
                                    <div class=\"sinlge-bar shopping\">
                                        <a href=\"#\" class=\"single-icon\"><i class=\"fal fa-shopping-cart\"></i> <span class=\"total-count\">2</span></a>

                                        <div class=\"shopping-item\">
                                            <div class=\"dropdown-cart-header\">
                                                <span>2 Items</span>
                                                <a href=\"#\">View Cart</a>
                                            </div>
                                            <ul class=\"shopping-list\">
                                                <li>
                                                    <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fal fa-times-circle\"></i></a>
                                                    <a class=\"cart-img\" href=\"#\"><img src=\"assets/img/products/p22.png\" alt=\"#\"></a>
                                                    <h4><a href=\"#\">Xamaha R15 Blue</a></h4>
                                                    <p class=\"quantity\">1x - <span class=\"amount\">\$200.00</span></p>
                                                </li>
                                                <li>
                                                    <a href=\"#\" class=\"remove\" title=\"Remove this item\"><i class=\"fal fa-times-circle\"></i></a>
                                                    <a class=\"cart-img\" href=\"#\"><img src=\"assets/img/products/p3.png\" alt=\"#\"></a>
                                                    <h4><a href=\"#\">Apple Earphones</a></h4>
                                                    <p class=\"quantity\">1x - <span class=\"amount\">\$150.00</span></p>
                                                </li>
                                            </ul>
                                            <div class=\"bottom\">
                                                <div class=\"total\">
                                                    <span>Total</span>
                                                    <span class=\"total-amount\">\$350.00</span>
                                                </div>
                                                <a href=\"checkout.html\" class=\"btn animate\">Checkout</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"header-inner  shadow\">
                    <div class=\"container\">
                        <div class=\"cat-nav-head\">
                            <div class=\"row\">
                                <div class=\"col-lg-3\">
                                    <div class=\"all-category\">
                                        <div class=\"d-flex\">
                                            <i class=\"flaticon-menu cat-heading-icon\"></i>
                                            <h3 class=\"cat-heading\">CATEGORIES</h3>
                                        </div>
                                        <ul class=\"main-category\">
                                            <li><a href=\"#\"> <i class=\"flaticon-shopping-bag category-icon\"></i> New Arrivals <i class=\"fal fa-angle-right\" aria-hidden=\"true\"></i></a>
                                                <ul class=\"sub-category\">
                                                    <li><a href=\"#\"><i class=\"flaticon-dress category-icon\"></i> Fashion</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-bags category-icon\"></i> Accessories</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-laptop category-icon\"></i> Electronics</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-toys category-icon\"></i> Baby Toys</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-home category-icon\"></i> Home & Garden</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-gift-box category-icon\"></i> Gifts</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-beauty category-icon\"></i> Health & Beauty</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-music-notes category-icon\"></i> Music</a></li>
                                                    <li><a href=\"#\"><i class=\"flaticon-groceries category-icon\"></i> Groceries </a></li>
                                                </ul>
                                            </li>
                                            <li class=\"main-mega\"><a href=\"#\"><i class=\"flaticon-dress category-icon\"></i> Fashion <i class=\"fal fa-angle-right\" aria-hidden=\"true\"></i></a>
                                                <ul class=\"mega-menu\">
                                                    <li class=\"single-menu\">
                                                        <a href=\"#\" class=\"title-link\">Shop Kid's</a>
                                                        <div class=\"image\">
                                                            <img src=\"assets/img/mega-menu/3.jpg\" alt=\"#\">
                                                        </div>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Kids Toys</a>
                                                            <a href=\"#\">Kids Color Shape</a>
                                                            <a href=\"#\">Kids Travel Car</a>
                                                            <a href=\"#\">Kids Tent</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <a href=\"#\" class=\"title-link\">Shop Men's</a>
                                                        <div class=\"image\">
                                                            <img src=\"assets/img/mega-menu/1.jpg\" alt=\"#\">
                                                        </div>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Watch</a>
                                                            <a href=\"#\">Hoodies</a>
                                                            <a href=\"#\">T-shirt</a>
                                                            <a href=\"#\">Formal Pant</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <a href=\"#\" class=\"title-link\">Shop Women's</a>
                                                        <div class=\"image\">
                                                            <img src=\"assets/img/mega-menu/2.jpg\" alt=\"#\">
                                                        </div>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\"><i class=\"flaticon-bags category-icon\"></i> Accessories</a></li>
                                            <li class=\"main-mega\"><a href=\"#\"><i class=\"flaticon-laptop category-icon\"></i> Electronics <i class=\"fal fa-angle-right\" aria-hidden=\"true\"></i></a>
                                                <ul class=\"mega-menu\">
                                                    <li class=\"single-menu\">
                                                        <h6 class=\"text-dark\">Man Cloths</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Kids Toys</a>
                                                            <a href=\"#\">Kids Color Shape</a>
                                                            <a href=\"#\">Kids Travel Car</a>
                                                            <a href=\"#\">Kids Tent</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <h6 class=\"text-dark\">Shoes</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Watch</a>
                                                            <a href=\"#\">Hoodies</a>
                                                            <a href=\"#\">T-shirt</a>
                                                            <a href=\"#\">Formal Pant</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu\">
                                                        <h6 class=\"text-dark\">Bags</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu mt-4\">
                                                        <h6 class=\"text-dark\">Women Cloths</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu mt-4\">
                                                        <h6 class=\"text-dark\">Shoes</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                    <li class=\"single-menu mt-4\">
                                                        <h6 class=\"text-dark\">Bags</h6>
                                                        <div class=\"inner-link\">
                                                            <a href=\"#\">Ladies Shirt</a>
                                                            <a href=\"#\">Ladies Sun Glass</a>
                                                            <a href=\"#\">Ladies Frog</a>
                                                            <a href=\"#\">Ladies Watch</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href=\"#\"><i class=\"flaticon-toys category-icon\"></i> Baby Toys</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-home category-icon\"></i> Home & Garden</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-gift-box category-icon\"></i> Gifts</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-beauty category-icon\"></i> Health & Beauty</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-music-notes category-icon\"></i> Music</a></li>
                                            <li><a href=\"#\"><i class=\"flaticon-groceries category-icon\"></i> Groceries </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-lg-9 col-12\">
                                    <div class=\"menu-area\">

                                        <nav class=\"navbar navbar-expand-lg\">
                                            <div class=\"navbar-collapse\">
                                                <div class=\"nav-inner\">
                                                    <ul class=\"nav main-menu menu navbar-nav\">
                                                        <li class=\"active\"><a href=\"#\">Home<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"index.html\">Home Demo One</a></li>
                                                                <li><a href=\"index2.html\">Home Demo Two</a></li>
                                                                <li><a href=\"index3.html\">Home Demo Three</a></li>
                                                                <li><a href=\"index4.html\">Home Demo Four</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">User Account<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"order-list.html\">Order List</a></li>
                                                                <li><a href=\"order-detail.html\">Order Details</a></li>
                                                                <li><a href=\"add-address.html\">Add Address</a></li>
                                                                <li><a href=\"address-list.html\">Address List</a></li>
                                                                <li><a href=\"profile.html\">Profile</a></li>
                                                                <li><a href=\"edit-profile.html\">Edit Profile</a></li>
                                                                <li><a href=\"support-ticket.html\">Support Tickets</a></li>
                                                                <li><a href=\"ticket-detail.html\">Ticket Details</a></li>
                                                                <li><a href=\"wishlist.html\">Wishlist</a></li>
                                                                <li><a href=\"track-order.html\">Track Order</a></li>
                                                                <li><a href=\"payment-method.html\">Payment Methods</a></li>
                                                                <li><a href=\"add-payment.html\">Add Payment</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Vendor<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"dashboard.html\">Dashboard</a></li>
                                                                <li><a href=\"product.html\">Products</a></li>
                                                                <li><a href=\"add-product.html\">Add Product</a></li>
                                                                <li><a href=\"all-order.html\">All Orders</a></li>
                                                                <li><a href=\"order-detail.html\">Order Details</a></li>
                                                                <li><a href=\"all-vendor.html\">All Vendors</a></li>
                                                                <li><a href=\"vendor-store.html\">Vendor Store</a></li>
                                                                <li><a href=\"vendor-profile.html\">Vendor Profile</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Shop<i class=\"ti-angle-down\"></i><span class=\"new\">New</span></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"shop-grid.html\">Shop Grid</a></li>
                                                                <li><a href=\"shop-list.html\">Shop List</a></li>
                                                                <li><a href=\"shop-single.html\">Shop Single</a></li>
                                                                <li><a href=\"shop-search.html\">Shop Search</a></li>
                                                                <li><a href=\"cart.html\">Cart</a></li>
                                                                <li><a href=\"checkout.html\">Checkout</a></li>
                                                                <li><a href=\"compare.html\">Shop Compare</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Pages<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"about-us.html\">About Us</a></li>
                                                                <li><a href=\"team.html\">Team</a></li>
                                                                <li><a href=\"login.html\">Login</a></li>
                                                                <li><a href=\"register.html\">Register</a></li>
                                                                <li><a href=\"forgot-password.html\">Forgot Password</a></li>
                                                                <li><a href=\"faq.html\">Faq</a></li>
                                                                <li><a href=\"term-condition.html\">Terms & Conditions</a></li>
                                                                <li><a href=\"privacy-policy.html\">Privacy Policy</a></li>
                                                                <li><a href=\"return-policy.html\">Return Policy</a></li>
                                                                <li><a href=\"mail-success.html\">Mail Success</a></li>
                                                                <li><a href=\"404.html\">404</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"#\">Blog<i class=\"ti-angle-down\"></i></a>
                                                            <ul class=\"dropdown\">
                                                                <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                                                <li><a href=\"blog-grid-sidebar.html\">Blog Grid Sidebar</a></li>
                                                                <li><a href=\"blog-single.html\">Blog Single</a></li>
                                                                <li><a href=\"blog-single-sidebar.html\">Blog Single Sidebar</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a href=\"contact.html\">Contact Us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>



        {% endblock %}




        {% block body %}


        {% endblock %}

        {% block footer %}
            <footer class=\"footer\">

                <div class=\"footer-top section\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-lg-5 col-md-6 col-12\">

                                <div class=\"single-footer about\">
                                    <div class=\"logo\">
                                        <a href=\"index.html\"><img width=\"250\" src=\"assets/img/logo-white.png\" alt=\"#\"></a>
                                    </div>
                                    <p class=\"text\">We are many variations of passages available but the majority have suffered alteration in some form by the andomised words which injected humour.</p>
                                    <p class=\"call\">Have Any Question? Call Us 24/7<span><a href=\"tel:(+1)1234565555\">(+1) 123 456 5555</a></span></p>
                                    <div class=\"footer-download\">
                                        <a href=\"#\">
                                            <img src=\"assets/img/download/play-store.png\" alt=\"\">
                                        </a>
                                        <a href=\"#\">
                                            <img src=\"assets/img/download/app-store.png\" alt=\"\">
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class=\"col-lg-2 col-md-6 col-12\">

                                <div class=\"single-footer links\">
                                    <h4>Information</h4>
                                    <ul>
                                        <li><a href=\"#\">About Us</a></li>
                                        <li><a href=\"#\">Contact Us</a></li>
                                        <li><a href=\"#\">Terms & Conditions</a></li>
                                        <li><a href=\"#\">Faq</a></li>
                                        <li><a href=\"#\">Careers</a></li>
                                        <li><a href=\"#\">Our Stores</a></li>
                                        <li><a href=\"#\">Our Cares</a></li>
                                        <li><a href=\"#\">Help</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"col-lg-2 col-md-6 col-12\">

                                <div class=\"single-footer links\">
                                    <h4>Customer Service</h4>
                                    <ul>
                                        <li><a href=\"#\">Payment Methods</a></li>
                                        <li><a href=\"#\">Money-back</a></li>
                                        <li><a href=\"#\">Returns</a></li>
                                        <li><a href=\"#\">Shipping</a></li>
                                        <li><a href=\"#\">Privacy Policy</a></li>
                                        <li><a href=\"#\">Support Center</a></li>
                                        <li><a href=\"#\">How to Buy</a></li>
                                        <li><a href=\"#\">Track Your Order</a></li>
                                    </ul>
                                </div>

                            </div>
                            <div class=\"col-lg-3 col-md-6 col-12\">

                                <div class=\"single-footer social\">
                                    <h4>Get In Tuch</h4>

                                    <div class=\"contact\">
                                        <ul>
                                            <li> <i class=\"fal fa-map-marker-alt\"></i> 1503 Kovar Road, New York, USA</li>
                                            <li> <i class=\"fal fa-envelope\"></i> <a href=\"https://themes.themewild.com/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"7102101d1402311409101c011d145f121e1c\">[email&#160;protected]</a></li>
                                            <li> <i class=\"fal fa-phone\"></i> (+1) 123 456 5657</li>
                                        </ul>
                                    </div>

                                    <ul>
                                        <li><a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fab fa-twitter\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fab fa-whatsapp\"></i></a></li>
                                        <li><a href=\"#\"><i class=\"fab fa-instagram\"></i></a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"copyright\">
                    <div class=\"container\">
                        <div class=\"inner\">
                            <div class=\"row\">
                                <div class=\"col-lg-6 col-12\">
                                    <div class=\"left\">
                                        <p>Copyright © 2021 <a href=\"#\">SMARTSHOP</a> - All Rights Reserved.</p>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-12\">
                                    <div class=\"right payment\">
                                        <i class=\"fab fa-cc-mastercard\"></i>
                                        <i class=\"fab fa-cc-visa\"></i>
                                        <i class=\"fab fa-cc-paypal\"></i>
                                        <i class=\"fab fa-cc-amex\"></i>
                                        <i class=\"fab fa-cc-discover\"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        {% endblock %}




    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\untitled\\templates\\base.html.twig");
    }
}
