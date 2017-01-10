<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_0361985bdaacc7a0e6d8fe6eba3f0396e7758c9fb35596fff993959a28d929c5 extends Twig_Template
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
        $__internal_2ffce39bf58e2e93d75f81afd45dbd8c651cf1bbe0052dcff3958f8b4b57b2a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ffce39bf58e2e93d75f81afd45dbd8c651cf1bbe0052dcff3958f8b4b57b2a8->enter($__internal_2ffce39bf58e2e93d75f81afd45dbd8c651cf1bbe0052dcff3958f8b4b57b2a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_0bfbd37e5c8e5fc470998eddb9cd7bd1d84e7502f71d96a2d6251bb4fbc9cc5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bfbd37e5c8e5fc470998eddb9cd7bd1d84e7502f71d96a2d6251bb4fbc9cc5f->enter($__internal_0bfbd37e5c8e5fc470998eddb9cd7bd1d84e7502f71d96a2d6251bb4fbc9cc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter(($context["admin_skin"] ?? $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
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
        
        $__internal_2ffce39bf58e2e93d75f81afd45dbd8c651cf1bbe0052dcff3958f8b4b57b2a8->leave($__internal_2ffce39bf58e2e93d75f81afd45dbd8c651cf1bbe0052dcff3958f8b4b57b2a8_prof);

        
        $__internal_0bfbd37e5c8e5fc470998eddb9cd7bd1d84e7502f71d96a2d6251bb4fbc9cc5f->leave($__internal_0bfbd37e5c8e5fc470998eddb9cd7bd1d84e7502f71d96a2d6251bb4fbc9cc5f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4b6f1460c43d6d352f67f0846de8c9ef022303aa05d65a64ee67ea3ab27c6a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b6f1460c43d6d352f67f0846de8c9ef022303aa05d65a64ee67ea3ab27c6a3->enter($__internal_d4b6f1460c43d6d352f67f0846de8c9ef022303aa05d65a64ee67ea3ab27c6a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9b6523c99a51f886496114656b881ca30213f9999a1b17e89fbc21d25ba24162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b6523c99a51f886496114656b881ca30213f9999a1b17e89fbc21d25ba24162->enter($__internal_9b6523c99a51f886496114656b881ca30213f9999a1b17e89fbc21d25ba24162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_9b6523c99a51f886496114656b881ca30213f9999a1b17e89fbc21d25ba24162->leave($__internal_9b6523c99a51f886496114656b881ca30213f9999a1b17e89fbc21d25ba24162_prof);

        
        $__internal_d4b6f1460c43d6d352f67f0846de8c9ef022303aa05d65a64ee67ea3ab27c6a3->leave($__internal_d4b6f1460c43d6d352f67f0846de8c9ef022303aa05d65a64ee67ea3ab27c6a3_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_22ac5f2b5685ee4ac01bd8acf615be5790038f8ffcd125f54b91352ac9f5a823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22ac5f2b5685ee4ac01bd8acf615be5790038f8ffcd125f54b91352ac9f5a823->enter($__internal_22ac5f2b5685ee4ac01bd8acf615be5790038f8ffcd125f54b91352ac9f5a823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ee71f81e1647690db73fc28f24f0dcd24c5f2b69fe8c43c56362c19943f83010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee71f81e1647690db73fc28f24f0dcd24c5f2b69fe8c43c56362c19943f83010->enter($__internal_ee71f81e1647690db73fc28f24f0dcd24c5f2b69fe8c43c56362c19943f83010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_ee71f81e1647690db73fc28f24f0dcd24c5f2b69fe8c43c56362c19943f83010->leave($__internal_ee71f81e1647690db73fc28f24f0dcd24c5f2b69fe8c43c56362c19943f83010_prof);

        
        $__internal_22ac5f2b5685ee4ac01bd8acf615be5790038f8ffcd125f54b91352ac9f5a823->leave($__internal_22ac5f2b5685ee4ac01bd8acf615be5790038f8ffcd125f54b91352ac9f5a823_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_3a2a6462ccb28695093267148c29b9601e44c0e120b1e1106137183ae31db157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2a6462ccb28695093267148c29b9601e44c0e120b1e1106137183ae31db157->enter($__internal_3a2a6462ccb28695093267148c29b9601e44c0e120b1e1106137183ae31db157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_cfd4e30ec4d1dc63618a09518fdb37b43684e3c7b2a0a7cb5f3aaa3486df6f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd4e30ec4d1dc63618a09518fdb37b43684e3c7b2a0a7cb5f3aaa3486df6f84->enter($__internal_cfd4e30ec4d1dc63618a09518fdb37b43684e3c7b2a0a7cb5f3aaa3486df6f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_cfd4e30ec4d1dc63618a09518fdb37b43684e3c7b2a0a7cb5f3aaa3486df6f84->leave($__internal_cfd4e30ec4d1dc63618a09518fdb37b43684e3c7b2a0a7cb5f3aaa3486df6f84_prof);

        
        $__internal_3a2a6462ccb28695093267148c29b9601e44c0e120b1e1106137183ae31db157->leave($__internal_3a2a6462ccb28695093267148c29b9601e44c0e120b1e1106137183ae31db157_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_69a178c9595c455c302e968102156eb288615ed810da1bdfa50bf1e1df70320b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69a178c9595c455c302e968102156eb288615ed810da1bdfa50bf1e1df70320b->enter($__internal_69a178c9595c455c302e968102156eb288615ed810da1bdfa50bf1e1df70320b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_cf097428dbab32f6db7fa5d734a443b487e6a62c2abf6f0d0ff6b797fcbb7005 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf097428dbab32f6db7fa5d734a443b487e6a62c2abf6f0d0ff6b797fcbb7005->enter($__internal_cf097428dbab32f6db7fa5d734a443b487e6a62c2abf6f0d0ff6b797fcbb7005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
        
        $__internal_cf097428dbab32f6db7fa5d734a443b487e6a62c2abf6f0d0ff6b797fcbb7005->leave($__internal_cf097428dbab32f6db7fa5d734a443b487e6a62c2abf6f0d0ff6b797fcbb7005_prof);

        
        $__internal_69a178c9595c455c302e968102156eb288615ed810da1bdfa50bf1e1df70320b->leave($__internal_69a178c9595c455c302e968102156eb288615ed810da1bdfa50bf1e1df70320b_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_582e5977bbe213fb24cbcc3496e69665a9feca06682a5dd19ef2ad9ae734ec56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582e5977bbe213fb24cbcc3496e69665a9feca06682a5dd19ef2ad9ae734ec56->enter($__internal_582e5977bbe213fb24cbcc3496e69665a9feca06682a5dd19ef2ad9ae734ec56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_1bf776adf6dd9f08d65ed43adbc92e05abc2b29442f86c5b8f29d7284fa9d735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf776adf6dd9f08d65ed43adbc92e05abc2b29442f86c5b8f29d7284fa9d735->enter($__internal_1bf776adf6dd9f08d65ed43adbc92e05abc2b29442f86c5b8f29d7284fa9d735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_1bf776adf6dd9f08d65ed43adbc92e05abc2b29442f86c5b8f29d7284fa9d735->leave($__internal_1bf776adf6dd9f08d65ed43adbc92e05abc2b29442f86c5b8f29d7284fa9d735_prof);

        
        $__internal_582e5977bbe213fb24cbcc3496e69665a9feca06682a5dd19ef2ad9ae734ec56->leave($__internal_582e5977bbe213fb24cbcc3496e69665a9feca06682a5dd19ef2ad9ae734ec56_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_82543e98801bf7e07b8b6d98c78f67e2e6f90e852dadb7f03673fd21a6d40967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82543e98801bf7e07b8b6d98c78f67e2e6f90e852dadb7f03673fd21a6d40967->enter($__internal_82543e98801bf7e07b8b6d98c78f67e2e6f90e852dadb7f03673fd21a6d40967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_14a31e6e9902a58c012dce93e5a7831031157230837ae562f83185f9b9ca1a31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a31e6e9902a58c012dce93e5a7831031157230837ae562f83185f9b9ca1a31->enter($__internal_14a31e6e9902a58c012dce93e5a7831031157230837ae562f83185f9b9ca1a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_14a31e6e9902a58c012dce93e5a7831031157230837ae562f83185f9b9ca1a31->leave($__internal_14a31e6e9902a58c012dce93e5a7831031157230837ae562f83185f9b9ca1a31_prof);

        
        $__internal_82543e98801bf7e07b8b6d98c78f67e2e6f90e852dadb7f03673fd21a6d40967->leave($__internal_82543e98801bf7e07b8b6d98c78f67e2e6f90e852dadb7f03673fd21a6d40967_prof);

    }

    // line 75
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_2e8ca45e868b2c9bca10878c6b35c462244a87b98bd4115ccaac21851eee79c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8ca45e868b2c9bca10878c6b35c462244a87b98bd4115ccaac21851eee79c1->enter($__internal_2e8ca45e868b2c9bca10878c6b35c462244a87b98bd4115ccaac21851eee79c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_e00486d65f2b08615c1c37e2e547e3d246dfb4af42c739ac9de9c2fea984e7ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e00486d65f2b08615c1c37e2e547e3d246dfb4af42c739ac9de9c2fea984e7ba->enter($__internal_e00486d65f2b08615c1c37e2e547e3d246dfb4af42c739ac9de9c2fea984e7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 76
        echo "                    ";
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_e00486d65f2b08615c1c37e2e547e3d246dfb4af42c739ac9de9c2fea984e7ba->leave($__internal_e00486d65f2b08615c1c37e2e547e3d246dfb4af42c739ac9de9c2fea984e7ba_prof);

        
        $__internal_2e8ca45e868b2c9bca10878c6b35c462244a87b98bd4115ccaac21851eee79c1->leave($__internal_2e8ca45e868b2c9bca10878c6b35c462244a87b98bd4115ccaac21851eee79c1_prof);

    }

    // line 107
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_fec94e3c8eb89c5e791846440c7c957c2d128bad2c0b9d720bdda484b5ca0ef9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fec94e3c8eb89c5e791846440c7c957c2d128bad2c0b9d720bdda484b5ca0ef9->enter($__internal_fec94e3c8eb89c5e791846440c7c957c2d128bad2c0b9d720bdda484b5ca0ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_7b5ef31901e115598c1b27dd814668d7b223ebfd15cdd8de87a97d683cd7191d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b5ef31901e115598c1b27dd814668d7b223ebfd15cdd8de87a97d683cd7191d->enter($__internal_7b5ef31901e115598c1b27dd814668d7b223ebfd15cdd8de87a97d683cd7191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_7b5ef31901e115598c1b27dd814668d7b223ebfd15cdd8de87a97d683cd7191d->leave($__internal_7b5ef31901e115598c1b27dd814668d7b223ebfd15cdd8de87a97d683cd7191d_prof);

        
        $__internal_fec94e3c8eb89c5e791846440c7c957c2d128bad2c0b9d720bdda484b5ca0ef9->leave($__internal_fec94e3c8eb89c5e791846440c7c957c2d128bad2c0b9d720bdda484b5ca0ef9_prof);

    }

    // line 108
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_d8a3f9c3c68b6596f3121690b231fbc3f5574b2874cbcc8f7f0b3856b6adb317 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8a3f9c3c68b6596f3121690b231fbc3f5574b2874cbcc8f7f0b3856b6adb317->enter($__internal_d8a3f9c3c68b6596f3121690b231fbc3f5574b2874cbcc8f7f0b3856b6adb317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_f875e8ba7b00dcd32d546a19f9a85e082eaf03f8a228e1a26509427219ced15b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f875e8ba7b00dcd32d546a19f9a85e082eaf03f8a228e1a26509427219ced15b->enter($__internal_f875e8ba7b00dcd32d546a19f9a85e082eaf03f8a228e1a26509427219ced15b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_f875e8ba7b00dcd32d546a19f9a85e082eaf03f8a228e1a26509427219ced15b->leave($__internal_f875e8ba7b00dcd32d546a19f9a85e082eaf03f8a228e1a26509427219ced15b_prof);

        
        $__internal_d8a3f9c3c68b6596f3121690b231fbc3f5574b2874cbcc8f7f0b3856b6adb317->leave($__internal_d8a3f9c3c68b6596f3121690b231fbc3f5574b2874cbcc8f7f0b3856b6adb317_prof);

    }

    // line 110
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_fdde23dfb14c1c873a02aa8fdb0ed1e168d342065786afd57bed07ea1de5a3ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdde23dfb14c1c873a02aa8fdb0ed1e168d342065786afd57bed07ea1de5a3ca->enter($__internal_fdde23dfb14c1c873a02aa8fdb0ed1e168d342065786afd57bed07ea1de5a3ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_1a03a415683497147c66fa6b0175a94dbaa2bbe7a6cadccb23470fe9d3aacd6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a03a415683497147c66fa6b0175a94dbaa2bbe7a6cadccb23470fe9d3aacd6f->enter($__internal_1a03a415683497147c66fa6b0175a94dbaa2bbe7a6cadccb23470fe9d3aacd6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 111
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_1a03a415683497147c66fa6b0175a94dbaa2bbe7a6cadccb23470fe9d3aacd6f->leave($__internal_1a03a415683497147c66fa6b0175a94dbaa2bbe7a6cadccb23470fe9d3aacd6f_prof);

        
        $__internal_fdde23dfb14c1c873a02aa8fdb0ed1e168d342065786afd57bed07ea1de5a3ca->leave($__internal_fdde23dfb14c1c873a02aa8fdb0ed1e168d342065786afd57bed07ea1de5a3ca_prof);

    }

    // line 117
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e4054e234bb3474311f6ec6c9b9224c0ef8f3bb0d4f2aae1fe7817fcdb5debde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4054e234bb3474311f6ec6c9b9224c0ef8f3bb0d4f2aae1fe7817fcdb5debde->enter($__internal_e4054e234bb3474311f6ec6c9b9224c0ef8f3bb0d4f2aae1fe7817fcdb5debde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_583eafb083828d77e02b70aafa4b32ff9a063194b0f9453dfbb6b014203933de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_583eafb083828d77e02b70aafa4b32ff9a063194b0f9453dfbb6b014203933de->enter($__internal_583eafb083828d77e02b70aafa4b32ff9a063194b0f9453dfbb6b014203933de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_583eafb083828d77e02b70aafa4b32ff9a063194b0f9453dfbb6b014203933de->leave($__internal_583eafb083828d77e02b70aafa4b32ff9a063194b0f9453dfbb6b014203933de_prof);

        
        $__internal_e4054e234bb3474311f6ec6c9b9224c0ef8f3bb0d4f2aae1fe7817fcdb5debde->leave($__internal_e4054e234bb3474311f6ec6c9b9224c0ef8f3bb0d4f2aae1fe7817fcdb5debde_prof);

    }

    // line 123
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_82068b53f97c72b536d757f27438c7121c3cb08d926ebae06906040073bb938a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82068b53f97c72b536d757f27438c7121c3cb08d926ebae06906040073bb938a->enter($__internal_82068b53f97c72b536d757f27438c7121c3cb08d926ebae06906040073bb938a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_9f2f0b8e28fb3a1c95e5d9fb5d63a543c30e75d51d4bc7b560cb97a9ef49a9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f2f0b8e28fb3a1c95e5d9fb5d63a543c30e75d51d4bc7b560cb97a9ef49a9d0->enter($__internal_9f2f0b8e28fb3a1c95e5d9fb5d63a543c30e75d51d4bc7b560cb97a9ef49a9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 124
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_9f2f0b8e28fb3a1c95e5d9fb5d63a543c30e75d51d4bc7b560cb97a9ef49a9d0->leave($__internal_9f2f0b8e28fb3a1c95e5d9fb5d63a543c30e75d51d4bc7b560cb97a9ef49a9d0_prof);

        
        $__internal_82068b53f97c72b536d757f27438c7121c3cb08d926ebae06906040073bb938a->leave($__internal_82068b53f97c72b536d757f27438c7121c3cb08d926ebae06906040073bb938a_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f89c9c4e48440ad514fdde298ef51c3fd6dbf5ee234b69d217233affe26ba55b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f89c9c4e48440ad514fdde298ef51c3fd6dbf5ee234b69d217233affe26ba55b->enter($__internal_f89c9c4e48440ad514fdde298ef51c3fd6dbf5ee234b69d217233affe26ba55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_edf0719d2e1b6e2309661b57614743941d1f68679f48aad755a0c4004083cf40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edf0719d2e1b6e2309661b57614743941d1f68679f48aad755a0c4004083cf40->enter($__internal_edf0719d2e1b6e2309661b57614743941d1f68679f48aad755a0c4004083cf40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_edf0719d2e1b6e2309661b57614743941d1f68679f48aad755a0c4004083cf40->leave($__internal_edf0719d2e1b6e2309661b57614743941d1f68679f48aad755a0c4004083cf40_prof);

        
        $__internal_f89c9c4e48440ad514fdde298ef51c3fd6dbf5ee234b69d217233affe26ba55b->leave($__internal_f89c9c4e48440ad514fdde298ef51c3fd6dbf5ee234b69d217233affe26ba55b_prof);

    }

    // line 143
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_57e9fd0d0f8748d0d9e62ac3bfae88fe687f12bc2175327b82ffe06e83e362e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57e9fd0d0f8748d0d9e62ac3bfae88fe687f12bc2175327b82ffe06e83e362e5->enter($__internal_57e9fd0d0f8748d0d9e62ac3bfae88fe687f12bc2175327b82ffe06e83e362e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_552a8e8c54e3ace7d54d3df5740eef299edbe7bcf6c266a608a2ffbdb3f1116f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_552a8e8c54e3ace7d54d3df5740eef299edbe7bcf6c266a608a2ffbdb3f1116f->enter($__internal_552a8e8c54e3ace7d54d3df5740eef299edbe7bcf6c266a608a2ffbdb3f1116f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_552a8e8c54e3ace7d54d3df5740eef299edbe7bcf6c266a608a2ffbdb3f1116f->leave($__internal_552a8e8c54e3ace7d54d3df5740eef299edbe7bcf6c266a608a2ffbdb3f1116f_prof);

        
        $__internal_57e9fd0d0f8748d0d9e62ac3bfae88fe687f12bc2175327b82ffe06e83e362e5->leave($__internal_57e9fd0d0f8748d0d9e62ac3bfae88fe687f12bc2175327b82ffe06e83e362e5_prof);

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
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
