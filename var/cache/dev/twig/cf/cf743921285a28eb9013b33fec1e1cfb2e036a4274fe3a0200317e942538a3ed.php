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
        $__internal_8744bd8ec678f35f3b3d27d1cf5243788ccc5a7c3d935165c78e6a3eadd31d35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8744bd8ec678f35f3b3d27d1cf5243788ccc5a7c3d935165c78e6a3eadd31d35->enter($__internal_8744bd8ec678f35f3b3d27d1cf5243788ccc5a7c3d935165c78e6a3eadd31d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_3244a069f3ce4eb9debdf142352da630bd04863a828a48341f6024e6e81017fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3244a069f3ce4eb9debdf142352da630bd04863a828a48341f6024e6e81017fe->enter($__internal_3244a069f3ce4eb9debdf142352da630bd04863a828a48341f6024e6e81017fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_8744bd8ec678f35f3b3d27d1cf5243788ccc5a7c3d935165c78e6a3eadd31d35->leave($__internal_8744bd8ec678f35f3b3d27d1cf5243788ccc5a7c3d935165c78e6a3eadd31d35_prof);

        
        $__internal_3244a069f3ce4eb9debdf142352da630bd04863a828a48341f6024e6e81017fe->leave($__internal_3244a069f3ce4eb9debdf142352da630bd04863a828a48341f6024e6e81017fe_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_927020a983822ab956020713b67ef4e77de3ea6cc6c8aa24b95312a0f5337531 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_927020a983822ab956020713b67ef4e77de3ea6cc6c8aa24b95312a0f5337531->enter($__internal_927020a983822ab956020713b67ef4e77de3ea6cc6c8aa24b95312a0f5337531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78f9163062b358a80a64fbd0929f58ad29d99c98a99a11fd58f11cbd4135d16e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f9163062b358a80a64fbd0929f58ad29d99c98a99a11fd58f11cbd4135d16e->enter($__internal_78f9163062b358a80a64fbd0929f58ad29d99c98a99a11fd58f11cbd4135d16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_78f9163062b358a80a64fbd0929f58ad29d99c98a99a11fd58f11cbd4135d16e->leave($__internal_78f9163062b358a80a64fbd0929f58ad29d99c98a99a11fd58f11cbd4135d16e_prof);

        
        $__internal_927020a983822ab956020713b67ef4e77de3ea6cc6c8aa24b95312a0f5337531->leave($__internal_927020a983822ab956020713b67ef4e77de3ea6cc6c8aa24b95312a0f5337531_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0357ea45d16ec53bf7fa452e728d9bc34c61aa539c8393566e049dd6ca13ae03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0357ea45d16ec53bf7fa452e728d9bc34c61aa539c8393566e049dd6ca13ae03->enter($__internal_0357ea45d16ec53bf7fa452e728d9bc34c61aa539c8393566e049dd6ca13ae03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_58647e3289aa4ed0dd3d8cb8446d992423823ef5c932db0df937d3cb79b4c03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58647e3289aa4ed0dd3d8cb8446d992423823ef5c932db0df937d3cb79b4c03e->enter($__internal_58647e3289aa4ed0dd3d8cb8446d992423823ef5c932db0df937d3cb79b4c03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_58647e3289aa4ed0dd3d8cb8446d992423823ef5c932db0df937d3cb79b4c03e->leave($__internal_58647e3289aa4ed0dd3d8cb8446d992423823ef5c932db0df937d3cb79b4c03e_prof);

        
        $__internal_0357ea45d16ec53bf7fa452e728d9bc34c61aa539c8393566e049dd6ca13ae03->leave($__internal_0357ea45d16ec53bf7fa452e728d9bc34c61aa539c8393566e049dd6ca13ae03_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_6346bdea4c2bc79b30d587607582a70fda3257ff4b531ca4ae8d68f22c48c91a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6346bdea4c2bc79b30d587607582a70fda3257ff4b531ca4ae8d68f22c48c91a->enter($__internal_6346bdea4c2bc79b30d587607582a70fda3257ff4b531ca4ae8d68f22c48c91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_6fa7d76db27600486f709d23f747e1b3eb11a5579642e9bb2d56e9ffe5baaaf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fa7d76db27600486f709d23f747e1b3eb11a5579642e9bb2d56e9ffe5baaaf0->enter($__internal_6fa7d76db27600486f709d23f747e1b3eb11a5579642e9bb2d56e9ffe5baaaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_6fa7d76db27600486f709d23f747e1b3eb11a5579642e9bb2d56e9ffe5baaaf0->leave($__internal_6fa7d76db27600486f709d23f747e1b3eb11a5579642e9bb2d56e9ffe5baaaf0_prof);

        
        $__internal_6346bdea4c2bc79b30d587607582a70fda3257ff4b531ca4ae8d68f22c48c91a->leave($__internal_6346bdea4c2bc79b30d587607582a70fda3257ff4b531ca4ae8d68f22c48c91a_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_7a5d71e35d471772e41e8a82e7f22a133b90ffe5ccf247660ea5a1c90bc60059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a5d71e35d471772e41e8a82e7f22a133b90ffe5ccf247660ea5a1c90bc60059->enter($__internal_7a5d71e35d471772e41e8a82e7f22a133b90ffe5ccf247660ea5a1c90bc60059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_1a1a4b85ef35370c86c2a2cf7b9bdf9d2feea8651b1412778d79dd7a38ec53a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a1a4b85ef35370c86c2a2cf7b9bdf9d2feea8651b1412778d79dd7a38ec53a9->enter($__internal_1a1a4b85ef35370c86c2a2cf7b9bdf9d2feea8651b1412778d79dd7a38ec53a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_1a1a4b85ef35370c86c2a2cf7b9bdf9d2feea8651b1412778d79dd7a38ec53a9->leave($__internal_1a1a4b85ef35370c86c2a2cf7b9bdf9d2feea8651b1412778d79dd7a38ec53a9_prof);

        
        $__internal_7a5d71e35d471772e41e8a82e7f22a133b90ffe5ccf247660ea5a1c90bc60059->leave($__internal_7a5d71e35d471772e41e8a82e7f22a133b90ffe5ccf247660ea5a1c90bc60059_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_fa29b6f35f0f061b578e7435314f42e4423b66ea71db396ee7a647c181edd066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa29b6f35f0f061b578e7435314f42e4423b66ea71db396ee7a647c181edd066->enter($__internal_fa29b6f35f0f061b578e7435314f42e4423b66ea71db396ee7a647c181edd066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_ca1ae5c0e00da17abd1522bd6c5616b2676bd16d1ff660520f7bbc1f173732a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca1ae5c0e00da17abd1522bd6c5616b2676bd16d1ff660520f7bbc1f173732a1->enter($__internal_ca1ae5c0e00da17abd1522bd6c5616b2676bd16d1ff660520f7bbc1f173732a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_ca1ae5c0e00da17abd1522bd6c5616b2676bd16d1ff660520f7bbc1f173732a1->leave($__internal_ca1ae5c0e00da17abd1522bd6c5616b2676bd16d1ff660520f7bbc1f173732a1_prof);

        
        $__internal_fa29b6f35f0f061b578e7435314f42e4423b66ea71db396ee7a647c181edd066->leave($__internal_fa29b6f35f0f061b578e7435314f42e4423b66ea71db396ee7a647c181edd066_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_49020e3f812bdf1c27fbdb58961e78bf11910bca392bfef72d269af91bdc1d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49020e3f812bdf1c27fbdb58961e78bf11910bca392bfef72d269af91bdc1d7c->enter($__internal_49020e3f812bdf1c27fbdb58961e78bf11910bca392bfef72d269af91bdc1d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_a95f244b2968c939b424f2611067ec5f9a6dc355d05d55190c520fc27e04a5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a95f244b2968c939b424f2611067ec5f9a6dc355d05d55190c520fc27e04a5bf->enter($__internal_a95f244b2968c939b424f2611067ec5f9a6dc355d05d55190c520fc27e04a5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_a95f244b2968c939b424f2611067ec5f9a6dc355d05d55190c520fc27e04a5bf->leave($__internal_a95f244b2968c939b424f2611067ec5f9a6dc355d05d55190c520fc27e04a5bf_prof);

        
        $__internal_49020e3f812bdf1c27fbdb58961e78bf11910bca392bfef72d269af91bdc1d7c->leave($__internal_49020e3f812bdf1c27fbdb58961e78bf11910bca392bfef72d269af91bdc1d7c_prof);

    }

    // line 75
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_a56ae126c3ae7b2aef304b2528d9990673fa418df17d8e555ede4e61d6d393dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56ae126c3ae7b2aef304b2528d9990673fa418df17d8e555ede4e61d6d393dd->enter($__internal_a56ae126c3ae7b2aef304b2528d9990673fa418df17d8e555ede4e61d6d393dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_ed83f45d40b3c8a1c149a3358dbe37b5551d688cee39381598f47011517f55a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed83f45d40b3c8a1c149a3358dbe37b5551d688cee39381598f47011517f55a4->enter($__internal_ed83f45d40b3c8a1c149a3358dbe37b5551d688cee39381598f47011517f55a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_ed83f45d40b3c8a1c149a3358dbe37b5551d688cee39381598f47011517f55a4->leave($__internal_ed83f45d40b3c8a1c149a3358dbe37b5551d688cee39381598f47011517f55a4_prof);

        
        $__internal_a56ae126c3ae7b2aef304b2528d9990673fa418df17d8e555ede4e61d6d393dd->leave($__internal_a56ae126c3ae7b2aef304b2528d9990673fa418df17d8e555ede4e61d6d393dd_prof);

    }

    // line 107
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_69ee40f0b891d704448501bf93dce8e633e42d01ea14c6e3b758993f770e4a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69ee40f0b891d704448501bf93dce8e633e42d01ea14c6e3b758993f770e4a73->enter($__internal_69ee40f0b891d704448501bf93dce8e633e42d01ea14c6e3b758993f770e4a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_b1ea00296c6756c4d70d3c4144c48ecb7396c57bbe7c6c300f14d5e64a5cf01f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ea00296c6756c4d70d3c4144c48ecb7396c57bbe7c6c300f14d5e64a5cf01f->enter($__internal_b1ea00296c6756c4d70d3c4144c48ecb7396c57bbe7c6c300f14d5e64a5cf01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_b1ea00296c6756c4d70d3c4144c48ecb7396c57bbe7c6c300f14d5e64a5cf01f->leave($__internal_b1ea00296c6756c4d70d3c4144c48ecb7396c57bbe7c6c300f14d5e64a5cf01f_prof);

        
        $__internal_69ee40f0b891d704448501bf93dce8e633e42d01ea14c6e3b758993f770e4a73->leave($__internal_69ee40f0b891d704448501bf93dce8e633e42d01ea14c6e3b758993f770e4a73_prof);

    }

    // line 108
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_f2d25b1beeb809a2aa465cddc3d7bd17072b1052c0f265e120d05d00d47a2ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2d25b1beeb809a2aa465cddc3d7bd17072b1052c0f265e120d05d00d47a2ab3->enter($__internal_f2d25b1beeb809a2aa465cddc3d7bd17072b1052c0f265e120d05d00d47a2ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_f832115c0ecbbb742e83af8414add4abf3ad309cf94b730b953fdc89e40acae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f832115c0ecbbb742e83af8414add4abf3ad309cf94b730b953fdc89e40acae4->enter($__internal_f832115c0ecbbb742e83af8414add4abf3ad309cf94b730b953fdc89e40acae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_f832115c0ecbbb742e83af8414add4abf3ad309cf94b730b953fdc89e40acae4->leave($__internal_f832115c0ecbbb742e83af8414add4abf3ad309cf94b730b953fdc89e40acae4_prof);

        
        $__internal_f2d25b1beeb809a2aa465cddc3d7bd17072b1052c0f265e120d05d00d47a2ab3->leave($__internal_f2d25b1beeb809a2aa465cddc3d7bd17072b1052c0f265e120d05d00d47a2ab3_prof);

    }

    // line 110
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_c8a6cd66a65e3a359e0190e3ec5ff02474a29d7a5a2eb641b919b72aa582fb9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a6cd66a65e3a359e0190e3ec5ff02474a29d7a5a2eb641b919b72aa582fb9c->enter($__internal_c8a6cd66a65e3a359e0190e3ec5ff02474a29d7a5a2eb641b919b72aa582fb9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_9c41b9cecc70097b1d96cfc84de179ba4947f2294541a35b08606952a4c6a41c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c41b9cecc70097b1d96cfc84de179ba4947f2294541a35b08606952a4c6a41c->enter($__internal_9c41b9cecc70097b1d96cfc84de179ba4947f2294541a35b08606952a4c6a41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 111
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_9c41b9cecc70097b1d96cfc84de179ba4947f2294541a35b08606952a4c6a41c->leave($__internal_9c41b9cecc70097b1d96cfc84de179ba4947f2294541a35b08606952a4c6a41c_prof);

        
        $__internal_c8a6cd66a65e3a359e0190e3ec5ff02474a29d7a5a2eb641b919b72aa582fb9c->leave($__internal_c8a6cd66a65e3a359e0190e3ec5ff02474a29d7a5a2eb641b919b72aa582fb9c_prof);

    }

    // line 117
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2a2d30ac73dd1cf60aa6e9c6ad3349fcb62544913ddddac4f76931f9213ddbb8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2d30ac73dd1cf60aa6e9c6ad3349fcb62544913ddddac4f76931f9213ddbb8->enter($__internal_2a2d30ac73dd1cf60aa6e9c6ad3349fcb62544913ddddac4f76931f9213ddbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_1e8ecc5efab64e3049b2a9a47f1cc4ba86dd676e5b0fbf16517af35310fdc5b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e8ecc5efab64e3049b2a9a47f1cc4ba86dd676e5b0fbf16517af35310fdc5b1->enter($__internal_1e8ecc5efab64e3049b2a9a47f1cc4ba86dd676e5b0fbf16517af35310fdc5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_1e8ecc5efab64e3049b2a9a47f1cc4ba86dd676e5b0fbf16517af35310fdc5b1->leave($__internal_1e8ecc5efab64e3049b2a9a47f1cc4ba86dd676e5b0fbf16517af35310fdc5b1_prof);

        
        $__internal_2a2d30ac73dd1cf60aa6e9c6ad3349fcb62544913ddddac4f76931f9213ddbb8->leave($__internal_2a2d30ac73dd1cf60aa6e9c6ad3349fcb62544913ddddac4f76931f9213ddbb8_prof);

    }

    // line 123
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_edb6db49795992e21a6bc93ec165104b0210f223e49cb958d863af6de155df45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edb6db49795992e21a6bc93ec165104b0210f223e49cb958d863af6de155df45->enter($__internal_edb6db49795992e21a6bc93ec165104b0210f223e49cb958d863af6de155df45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_df98baa950fe7fe3e0f15cb056374f763b6e9f59a9281f81767a3b22e1dc8098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df98baa950fe7fe3e0f15cb056374f763b6e9f59a9281f81767a3b22e1dc8098->enter($__internal_df98baa950fe7fe3e0f15cb056374f763b6e9f59a9281f81767a3b22e1dc8098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 124
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_df98baa950fe7fe3e0f15cb056374f763b6e9f59a9281f81767a3b22e1dc8098->leave($__internal_df98baa950fe7fe3e0f15cb056374f763b6e9f59a9281f81767a3b22e1dc8098_prof);

        
        $__internal_edb6db49795992e21a6bc93ec165104b0210f223e49cb958d863af6de155df45->leave($__internal_edb6db49795992e21a6bc93ec165104b0210f223e49cb958d863af6de155df45_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_def9bcf5d4efdcf0869f19122bff694a53483b1641c6e744c83989d6fd89eaad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def9bcf5d4efdcf0869f19122bff694a53483b1641c6e744c83989d6fd89eaad->enter($__internal_def9bcf5d4efdcf0869f19122bff694a53483b1641c6e744c83989d6fd89eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4f45fb11b84bbb5e289f802515c7e96ed11c0488a8a6b98f2869a8c527d1b990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f45fb11b84bbb5e289f802515c7e96ed11c0488a8a6b98f2869a8c527d1b990->enter($__internal_4f45fb11b84bbb5e289f802515c7e96ed11c0488a8a6b98f2869a8c527d1b990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_4f45fb11b84bbb5e289f802515c7e96ed11c0488a8a6b98f2869a8c527d1b990->leave($__internal_4f45fb11b84bbb5e289f802515c7e96ed11c0488a8a6b98f2869a8c527d1b990_prof);

        
        $__internal_def9bcf5d4efdcf0869f19122bff694a53483b1641c6e744c83989d6fd89eaad->leave($__internal_def9bcf5d4efdcf0869f19122bff694a53483b1641c6e744c83989d6fd89eaad_prof);

    }

    // line 143
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_a9fd486859cfe3c989f570ce5169c481d0c82cf9424c255c6f86b8ebb886c969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9fd486859cfe3c989f570ce5169c481d0c82cf9424c255c6f86b8ebb886c969->enter($__internal_a9fd486859cfe3c989f570ce5169c481d0c82cf9424c255c6f86b8ebb886c969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_b5b3f80f1699b6449e93f43d2389c3915df3de431b3bf03057bbe22c74e1273e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b3f80f1699b6449e93f43d2389c3915df3de431b3bf03057bbe22c74e1273e->enter($__internal_b5b3f80f1699b6449e93f43d2389c3915df3de431b3bf03057bbe22c74e1273e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_b5b3f80f1699b6449e93f43d2389c3915df3de431b3bf03057bbe22c74e1273e->leave($__internal_b5b3f80f1699b6449e93f43d2389c3915df3de431b3bf03057bbe22c74e1273e_prof);

        
        $__internal_a9fd486859cfe3c989f570ce5169c481d0c82cf9424c255c6f86b8ebb886c969->leave($__internal_a9fd486859cfe3c989f570ce5169c481d0c82cf9424c255c6f86b8ebb886c969_prof);

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
