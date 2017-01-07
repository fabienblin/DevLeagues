<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_09b27541a4b1c4ed62088c71d3fe54c2394cfb76d59751cc8dd050815014227b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'avanzu_admin_header' => array($this, 'block_avanzu_admin_header'),
            'avanzu_logo' => array($this, 'block_avanzu_logo'),
            'avanzu_navbar' => array($this, 'block_avanzu_navbar'),
            'avanzu_sidebar' => array($this, 'block_avanzu_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'avanzu_breadcrumb' => array($this, 'block_avanzu_breadcrumb'),
            'page_content' => array($this, 'block_page_content'),
            'avanzu_admin_footer' => array($this, 'block_avanzu_admin_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f1f5b1c7f9cace8ba14e709ec954b08bda7a89f5c0196ef026962a97e6a84abf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f5b1c7f9cace8ba14e709ec954b08bda7a89f5c0196ef026962a97e6a84abf->enter($__internal_f1f5b1c7f9cace8ba14e709ec954b08bda7a89f5c0196ef026962a97e6a84abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_eef65d8edf30833e6e694a56557b0b75a0274510f089c430cce9d007219559ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eef65d8edf30833e6e694a56557b0b75a0274510f089c430cce9d007219559ea->enter($__internal_eef65d8edf30833e6e694a56557b0b75a0274510f089c430cce9d007219559ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", 1);
        // line 2
        echo "<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 16
        echo "    ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "

\t    <!-- Custom styles for this template -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


    ";
        // line 27
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 34
        echo "
</head>
<body class=\"";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter((isset($context["admin_skin"]) ? $context["admin_skin"] : $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
    <div class=\"wrapper\">


    ";
        // line 40
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 70
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 75
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 82
        echo "            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <nav class=\"navbar DL_second_navbar\">
              <div class=\"container-fluid\">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 93
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a></li>
                    <li><a href=\"";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news");
        echo "\">News</a></li>
                    <li><a href=\"";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("community");
        echo "\">Community</a></li>
                    <li><a href=\"";
        // line 97
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("challenge");
        echo "\">Challenges</a></li>
                    <li><a href=\"";
        // line 98
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("league");
        echo "\">Leagues</a></li>
                    <li><a href=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("contact");
        echo "\">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    ";
        // line 107
        $this->displayBlock('page_title', $context, $blocks);
        // line 108
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 110
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 113
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 117
        $this->displayBlock('page_content', $context, $blocks);
        // line 118
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 123
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 131
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 136
        $this->displayBlock('javascripts', $context, $blocks);
        // line 141
        echo "
";
        // line 143
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 145
        echo "</body>
</html>
";
        
        $__internal_f1f5b1c7f9cace8ba14e709ec954b08bda7a89f5c0196ef026962a97e6a84abf->leave($__internal_f1f5b1c7f9cace8ba14e709ec954b08bda7a89f5c0196ef026962a97e6a84abf_prof);

        
        $__internal_eef65d8edf30833e6e694a56557b0b75a0274510f089c430cce9d007219559ea->leave($__internal_eef65d8edf30833e6e694a56557b0b75a0274510f089c430cce9d007219559ea_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_59112d9b114214cd43ebed67f44452640a1f1b971c90c188948a8d8499c13658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59112d9b114214cd43ebed67f44452640a1f1b971c90c188948a8d8499c13658->enter($__internal_59112d9b114214cd43ebed67f44452640a1f1b971c90c188948a8d8499c13658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_55954aabfc303d35e3648803356eae8abaf18a9dbc47b6ff68dae68964c4eebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55954aabfc303d35e3648803356eae8abaf18a9dbc47b6ff68dae68964c4eebd->enter($__internal_55954aabfc303d35e3648803356eae8abaf18a9dbc47b6ff68dae68964c4eebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_55954aabfc303d35e3648803356eae8abaf18a9dbc47b6ff68dae68964c4eebd->leave($__internal_55954aabfc303d35e3648803356eae8abaf18a9dbc47b6ff68dae68964c4eebd_prof);

        
        $__internal_59112d9b114214cd43ebed67f44452640a1f1b971c90c188948a8d8499c13658->leave($__internal_59112d9b114214cd43ebed67f44452640a1f1b971c90c188948a8d8499c13658_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1403311924c7048d3b4a20b059419f7aab3b3a11c027175ae109bda18e7311b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1403311924c7048d3b4a20b059419f7aab3b3a11c027175ae109bda18e7311b1->enter($__internal_1403311924c7048d3b4a20b059419f7aab3b3a11c027175ae109bda18e7311b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_44c58d6bbf015a700aac13a0ab28d715d5213a297cef9455bb5cb1d00c50870f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44c58d6bbf015a700aac13a0ab28d715d5213a297cef9455bb5cb1d00c50870f->enter($__internal_44c58d6bbf015a700aac13a0ab28d715d5213a297cef9455bb5cb1d00c50870f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_44c58d6bbf015a700aac13a0ab28d715d5213a297cef9455bb5cb1d00c50870f->leave($__internal_44c58d6bbf015a700aac13a0ab28d715d5213a297cef9455bb5cb1d00c50870f_prof);

        
        $__internal_1403311924c7048d3b4a20b059419f7aab3b3a11c027175ae109bda18e7311b1->leave($__internal_1403311924c7048d3b4a20b059419f7aab3b3a11c027175ae109bda18e7311b1_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_36c083e82e1c05e9cdb37067493877b914da14b4e25eceab22461b4dd572345f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36c083e82e1c05e9cdb37067493877b914da14b4e25eceab22461b4dd572345f->enter($__internal_36c083e82e1c05e9cdb37067493877b914da14b4e25eceab22461b4dd572345f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_73cf3755c0874ba2bb9401f34062e9316b0f6ae3d0df6bc56b4fa4bb520d26df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73cf3755c0874ba2bb9401f34062e9316b0f6ae3d0df6bc56b4fa4bb520d26df->enter($__internal_73cf3755c0874ba2bb9401f34062e9316b0f6ae3d0df6bc56b4fa4bb520d26df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_73cf3755c0874ba2bb9401f34062e9316b0f6ae3d0df6bc56b4fa4bb520d26df->leave($__internal_73cf3755c0874ba2bb9401f34062e9316b0f6ae3d0df6bc56b4fa4bb520d26df_prof);

        
        $__internal_36c083e82e1c05e9cdb37067493877b914da14b4e25eceab22461b4dd572345f->leave($__internal_36c083e82e1c05e9cdb37067493877b914da14b4e25eceab22461b4dd572345f_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_e95b6b773aab2f282b8ceca93e92390f51c91d453649070357a5aa0fc2708666 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95b6b773aab2f282b8ceca93e92390f51c91d453649070357a5aa0fc2708666->enter($__internal_e95b6b773aab2f282b8ceca93e92390f51c91d453649070357a5aa0fc2708666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_9f770be0af0181959c9c690b60d5281680c2ac4a28ace0b1d4da1878efbf4c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f770be0af0181959c9c690b60d5281680c2ac4a28ace0b1d4da1878efbf4c7a->enter($__internal_9f770be0af0181959c9c690b60d5281680c2ac4a28ace0b1d4da1878efbf4c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 41
        echo "        <header class=\"main-header\">
            ";
        // line 42
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 48
        echo "            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                ";
        // line 54
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 55
            echo "                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            ";
            // line 57
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 63
            echo "                        </ul>
                    </div>
                ";
        }
        // line 66
        echo "            </nav>
          </header>

    ";
        
        $__internal_9f770be0af0181959c9c690b60d5281680c2ac4a28ace0b1d4da1878efbf4c7a->leave($__internal_9f770be0af0181959c9c690b60d5281680c2ac4a28ace0b1d4da1878efbf4c7a_prof);

        
        $__internal_e95b6b773aab2f282b8ceca93e92390f51c91d453649070357a5aa0fc2708666->leave($__internal_e95b6b773aab2f282b8ceca93e92390f51c91d453649070357a5aa0fc2708666_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_b34d039bce6d4f01c7c977570507c899224830874a7b1ab02d10ac6b07ce1002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34d039bce6d4f01c7c977570507c899224830874a7b1ab02d10ac6b07ce1002->enter($__internal_b34d039bce6d4f01c7c977570507c899224830874a7b1ab02d10ac6b07ce1002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_468160a30637c00c865248cc4079e0cba82ed0df40d160d2f24df8ad8150aa00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468160a30637c00c865248cc4079e0cba82ed0df40d160d2f24df8ad8150aa00->enter($__internal_468160a30637c00c865248cc4079e0cba82ed0df40d160d2f24df8ad8150aa00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_468160a30637c00c865248cc4079e0cba82ed0df40d160d2f24df8ad8150aa00->leave($__internal_468160a30637c00c865248cc4079e0cba82ed0df40d160d2f24df8ad8150aa00_prof);

        
        $__internal_b34d039bce6d4f01c7c977570507c899224830874a7b1ab02d10ac6b07ce1002->leave($__internal_b34d039bce6d4f01c7c977570507c899224830874a7b1ab02d10ac6b07ce1002_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_848bafe405cfe0ffcc483a29371b12065fdc58964b46400308246a13afd299bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_848bafe405cfe0ffcc483a29371b12065fdc58964b46400308246a13afd299bd->enter($__internal_848bafe405cfe0ffcc483a29371b12065fdc58964b46400308246a13afd299bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_693cf9e075bb34e9280d3bd039a8b01cca602acdc08d9bad33b5252cc03f00c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_693cf9e075bb34e9280d3bd039a8b01cca602acdc08d9bad33b5252cc03f00c4->enter($__internal_693cf9e075bb34e9280d3bd039a8b01cca602acdc08d9bad33b5252cc03f00c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 58
        echo "                                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:user"));
        echo "
                            ";
        
        $__internal_693cf9e075bb34e9280d3bd039a8b01cca602acdc08d9bad33b5252cc03f00c4->leave($__internal_693cf9e075bb34e9280d3bd039a8b01cca602acdc08d9bad33b5252cc03f00c4_prof);

        
        $__internal_848bafe405cfe0ffcc483a29371b12065fdc58964b46400308246a13afd299bd->leave($__internal_848bafe405cfe0ffcc483a29371b12065fdc58964b46400308246a13afd299bd_prof);

    }

    // line 75
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_19d9f728a72156ff06922ed7e18c7d3677d306b08ed799c44bb058d69d69a28f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d9f728a72156ff06922ed7e18c7d3677d306b08ed799c44bb058d69d69a28f->enter($__internal_19d9f728a72156ff06922ed7e18c7d3677d306b08ed799c44bb058d69d69a28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_addb94f354a0d7d2028f3f7ae0d3943087278eb2acbc7f2eb7e28fa1c5876924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_addb94f354a0d7d2028f3f7ae0d3943087278eb2acbc7f2eb7e28fa1c5876924->enter($__internal_addb94f354a0d7d2028f3f7ae0d3943087278eb2acbc7f2eb7e28fa1c5876924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 76
        echo "                    ";
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 77
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                    ";
        }
        // line 80
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_addb94f354a0d7d2028f3f7ae0d3943087278eb2acbc7f2eb7e28fa1c5876924->leave($__internal_addb94f354a0d7d2028f3f7ae0d3943087278eb2acbc7f2eb7e28fa1c5876924_prof);

        
        $__internal_19d9f728a72156ff06922ed7e18c7d3677d306b08ed799c44bb058d69d69a28f->leave($__internal_19d9f728a72156ff06922ed7e18c7d3677d306b08ed799c44bb058d69d69a28f_prof);

    }

    // line 107
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_b27db3f6efa87b21d5d96eb61f4050fb3b5e2fc06a05438db7e681175cdda65c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27db3f6efa87b21d5d96eb61f4050fb3b5e2fc06a05438db7e681175cdda65c->enter($__internal_b27db3f6efa87b21d5d96eb61f4050fb3b5e2fc06a05438db7e681175cdda65c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_e2e08cf8f11a265e248e646fb5ae1bc3339c76189a99e8707fa83df74c96bf7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e08cf8f11a265e248e646fb5ae1bc3339c76189a99e8707fa83df74c96bf7d->enter($__internal_e2e08cf8f11a265e248e646fb5ae1bc3339c76189a99e8707fa83df74c96bf7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_e2e08cf8f11a265e248e646fb5ae1bc3339c76189a99e8707fa83df74c96bf7d->leave($__internal_e2e08cf8f11a265e248e646fb5ae1bc3339c76189a99e8707fa83df74c96bf7d_prof);

        
        $__internal_b27db3f6efa87b21d5d96eb61f4050fb3b5e2fc06a05438db7e681175cdda65c->leave($__internal_b27db3f6efa87b21d5d96eb61f4050fb3b5e2fc06a05438db7e681175cdda65c_prof);

    }

    // line 108
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_195dee64a50affa4aaf54a46486f4717c23af607d919027716d1aac8362558e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_195dee64a50affa4aaf54a46486f4717c23af607d919027716d1aac8362558e8->enter($__internal_195dee64a50affa4aaf54a46486f4717c23af607d919027716d1aac8362558e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_14e56174b009dc4dcdf1b3dbce0ad736a7b7f2f6f562cd7cd0287209f186bf8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e56174b009dc4dcdf1b3dbce0ad736a7b7f2f6f562cd7cd0287209f186bf8b->enter($__internal_14e56174b009dc4dcdf1b3dbce0ad736a7b7f2f6f562cd7cd0287209f186bf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_14e56174b009dc4dcdf1b3dbce0ad736a7b7f2f6f562cd7cd0287209f186bf8b->leave($__internal_14e56174b009dc4dcdf1b3dbce0ad736a7b7f2f6f562cd7cd0287209f186bf8b_prof);

        
        $__internal_195dee64a50affa4aaf54a46486f4717c23af607d919027716d1aac8362558e8->leave($__internal_195dee64a50affa4aaf54a46486f4717c23af607d919027716d1aac8362558e8_prof);

    }

    // line 110
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_63806fac306423f50fb817dcc156febda4a2f8861674f05be461e509b5a47cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63806fac306423f50fb817dcc156febda4a2f8861674f05be461e509b5a47cef->enter($__internal_63806fac306423f50fb817dcc156febda4a2f8861674f05be461e509b5a47cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_36852847303d2a739ef16ba17e360cf209fb3cb52c9af3465d268c84c890606d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36852847303d2a739ef16ba17e360cf209fb3cb52c9af3465d268c84c890606d->enter($__internal_36852847303d2a739ef16ba17e360cf209fb3cb52c9af3465d268c84c890606d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 111
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_36852847303d2a739ef16ba17e360cf209fb3cb52c9af3465d268c84c890606d->leave($__internal_36852847303d2a739ef16ba17e360cf209fb3cb52c9af3465d268c84c890606d_prof);

        
        $__internal_63806fac306423f50fb817dcc156febda4a2f8861674f05be461e509b5a47cef->leave($__internal_63806fac306423f50fb817dcc156febda4a2f8861674f05be461e509b5a47cef_prof);

    }

    // line 117
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_05cada38da80134e4dddab027c6292af7dd05670032409427ba511282e0265b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05cada38da80134e4dddab027c6292af7dd05670032409427ba511282e0265b5->enter($__internal_05cada38da80134e4dddab027c6292af7dd05670032409427ba511282e0265b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e2ec6a40cb5e6499975f678bd64871331eafd1cc6e25807b533492087edf4fab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2ec6a40cb5e6499975f678bd64871331eafd1cc6e25807b533492087edf4fab->enter($__internal_e2ec6a40cb5e6499975f678bd64871331eafd1cc6e25807b533492087edf4fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_e2ec6a40cb5e6499975f678bd64871331eafd1cc6e25807b533492087edf4fab->leave($__internal_e2ec6a40cb5e6499975f678bd64871331eafd1cc6e25807b533492087edf4fab_prof);

        
        $__internal_05cada38da80134e4dddab027c6292af7dd05670032409427ba511282e0265b5->leave($__internal_05cada38da80134e4dddab027c6292af7dd05670032409427ba511282e0265b5_prof);

    }

    // line 123
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_ddf8cf6235751e3a9853971a4e2c7c9ca02163aae9267087d0088b17a4249133 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf8cf6235751e3a9853971a4e2c7c9ca02163aae9267087d0088b17a4249133->enter($__internal_ddf8cf6235751e3a9853971a4e2c7c9ca02163aae9267087d0088b17a4249133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_f89942407eef26fbe6cc49e6f58d490da6555e52165742b1e95f7a659ca26d73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f89942407eef26fbe6cc49e6f58d490da6555e52165742b1e95f7a659ca26d73->enter($__internal_f89942407eef26fbe6cc49e6f58d490da6555e52165742b1e95f7a659ca26d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 124
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_f89942407eef26fbe6cc49e6f58d490da6555e52165742b1e95f7a659ca26d73->leave($__internal_f89942407eef26fbe6cc49e6f58d490da6555e52165742b1e95f7a659ca26d73_prof);

        
        $__internal_ddf8cf6235751e3a9853971a4e2c7c9ca02163aae9267087d0088b17a4249133->leave($__internal_ddf8cf6235751e3a9853971a4e2c7c9ca02163aae9267087d0088b17a4249133_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_41806027bd8ca7ec21229ad5fe9381a6073347c043e7bcc27ebff09b00af63ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41806027bd8ca7ec21229ad5fe9381a6073347c043e7bcc27ebff09b00af63ca->enter($__internal_41806027bd8ca7ec21229ad5fe9381a6073347c043e7bcc27ebff09b00af63ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_089b496c1c92e1dd26b7c57352a020479ef2f89d82dd66a2a5eec7b10b5317a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089b496c1c92e1dd26b7c57352a020479ef2f89d82dd66a2a5eec7b10b5317a6->enter($__internal_089b496c1c92e1dd26b7c57352a020479ef2f89d82dd66a2a5eec7b10b5317a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_089b496c1c92e1dd26b7c57352a020479ef2f89d82dd66a2a5eec7b10b5317a6->leave($__internal_089b496c1c92e1dd26b7c57352a020479ef2f89d82dd66a2a5eec7b10b5317a6_prof);

        
        $__internal_41806027bd8ca7ec21229ad5fe9381a6073347c043e7bcc27ebff09b00af63ca->leave($__internal_41806027bd8ca7ec21229ad5fe9381a6073347c043e7bcc27ebff09b00af63ca_prof);

    }

    // line 143
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_05bbb6aa0f9bda1b3e8c1abe33c9410795bb30edb5417333f8006a0b4c87a372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05bbb6aa0f9bda1b3e8c1abe33c9410795bb30edb5417333f8006a0b4c87a372->enter($__internal_05bbb6aa0f9bda1b3e8c1abe33c9410795bb30edb5417333f8006a0b4c87a372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_e3de61f6add4ad5bb28d8a4e6bcce800e7658fdc1070fa2809d7b6546870227e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3de61f6add4ad5bb28d8a4e6bcce800e7658fdc1070fa2809d7b6546870227e->enter($__internal_e3de61f6add4ad5bb28d8a4e6bcce800e7658fdc1070fa2809d7b6546870227e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_e3de61f6add4ad5bb28d8a4e6bcce800e7658fdc1070fa2809d7b6546870227e->leave($__internal_e3de61f6add4ad5bb28d8a4e6bcce800e7658fdc1070fa2809d7b6546870227e_prof);

        
        $__internal_05bbb6aa0f9bda1b3e8c1abe33c9410795bb30edb5417333f8006a0b4c87a372->leave($__internal_05bbb6aa0f9bda1b3e8c1abe33c9410795bb30edb5417333f8006a0b4c87a372_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  536 => 143,  523 => 138,  520 => 137,  511 => 136,  495 => 124,  486 => 123,  469 => 117,  456 => 111,  447 => 110,  429 => 108,  411 => 107,  398 => 80,  393 => 78,  388 => 77,  385 => 76,  376 => 75,  364 => 61,  360 => 60,  356 => 59,  351 => 58,  342 => 57,  329 => 45,  325 => 43,  316 => 42,  303 => 66,  298 => 63,  296 => 57,  292 => 55,  290 => 54,  282 => 48,  280 => 42,  277 => 41,  268 => 40,  251 => 28,  242 => 27,  230 => 18,  225 => 17,  216 => 16,  198 => 13,  186 => 145,  184 => 143,  181 => 141,  179 => 136,  173 => 131,  171 => 123,  164 => 118,  162 => 117,  156 => 113,  154 => 110,  148 => 108,  146 => 107,  135 => 99,  131 => 98,  127 => 97,  123 => 96,  119 => 95,  115 => 94,  111 => 93,  98 => 82,  96 => 75,  89 => 70,  87 => 40,  80 => 36,  76 => 34,  73 => 27,  67 => 23,  62 => 20,  59 => 16,  54 => 13,  41 => 2,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"AvanzuAdminThemeBundle:layout:macros.html.twig\" as macro %}
<!doctype html>
<!--[if lt IE 7 ]><html lang=\"en\" class=\"no-js ie6\"> <![endif]-->
<!--[if IE 7 ]><html lang=\"en\" class=\"no-js ie7\"> <![endif]-->
<!--[if IE 8 ]><html lang=\"en\" class=\"no-js ie8\"> <![endif]-->
<!--[if IE 9 ]><html lang=\"en\" class=\"no-js ie9\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"en\" class=\"no-js\"> <!--<![endif]-->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"author\" content=\"\">
    <meta name=\"keywords\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
    <title>{% block title %}Avanzu Admin!{% endblock %}</title>

    {# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
        <link href=\"{{ asset('bundles/devleagues/css/main.css') }}\" rel=\"stylesheet\">
    {% endblock %}


\t    <!-- Custom styles for this template -->
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"{{ admin_skin|default('skin-blue')}}\">
    <div class=\"wrapper\">


    {% block avanzu_admin_header %}
        <header class=\"main-header\">
            {% block avanzu_logo %}
                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    {{ block('title') }}
                </a>
            {% endblock %}
            <!-- Header Navbar: style can be found in header.less -->
            <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                <!-- Sidebar toggle button-->
                <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </a>
                {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                    <div class=\"navbar-custom-menu\">
                        <ul class=\"nav navbar-nav\">
                            {% block avanzu_navbar %}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
                                {{ render(controller('AvanzuAdminThemeBundle:Navbar:user')) }}
                            {% endblock %}
                        </ul>
                    </div>
                {% endif %}
            </nav>
          </header>

    {% endblock %}

        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                {% block avanzu_sidebar %}
                    {% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}
                        {{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
                    {% endif %}
                    {{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
                {% endblock %}
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <nav class=\"navbar DL_second_navbar\">
              <div class=\"container-fluid\">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"{{ path(\"home\") }}\">Home</a></li>
                    <li><a href=\"{{ path(\"about\") }}\">About</a></li>
                    <li><a href=\"{{ path(\"news\") }}\">News</a></li>
                    <li><a href=\"{{ path(\"community\") }}\">Community</a></li>
                    <li><a href=\"{{ path(\"challenge\") }}\">Challenges</a></li>
                    <li><a href=\"{{ path(\"league\") }}\">Leagues</a></li>
                    <li><a href=\"{{ path(\"contact\") }}\">Contact</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <!-- Content Header (Page header) -->
            <section class=\"content-header\">
                <h1>
                    {% block page_title %}Blank page{% endblock %}
                    <small>{% block page_subtitle %}Control panel{% endblock %}</small>
                </h1>
                {% block avanzu_breadcrumb %}
                    {{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
                {% endblock %}
            </section>

            <!-- Main content -->
            <section class=\"content\">
                {% block page_content %}{% endblock %}
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    {% block avanzu_admin_footer %}
        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    {% endblock %}

    </div>
<!-- ./wrapper -->

{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}

    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/admin-lte-all.js') }}\"></script>

{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/ubuntu/workspace/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
