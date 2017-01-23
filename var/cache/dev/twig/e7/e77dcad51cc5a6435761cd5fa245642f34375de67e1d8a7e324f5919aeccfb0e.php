<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_3ed9e3a86408382eb7610fa2afc196bb5e6c0ec268e7e47bfb71acb2ed26f173 extends Twig_Template
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
        $__internal_6382cf9bb43f46d98976a47c7ac44890ee801f53bde51a6f9a86e7410af3cc18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6382cf9bb43f46d98976a47c7ac44890ee801f53bde51a6f9a86e7410af3cc18->enter($__internal_6382cf9bb43f46d98976a47c7ac44890ee801f53bde51a6f9a86e7410af3cc18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_a0ebabc103420bc024af04e39db1ea34b1212559303e4809d75cf9ea51294703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ebabc103420bc024af04e39db1ea34b1212559303e4809d75cf9ea51294703->enter($__internal_a0ebabc103420bc024af04e39db1ea34b1212559303e4809d75cf9ea51294703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
\t<meta charset=\"utf-8\">
\t<meta name=\"author\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
\t<title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t";
        // line 16
        echo "\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "

<!-- Custom styles for this template -->
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />


";
        // line 27
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 34
        echo "
</head>
<body class=\"";
        // line 36
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter(($context["admin_skin"] ?? $this->getContext($context, "admin_skin")), "skin-blue")) : ("skin-blue")), "html", null, true);
        echo "\">
\t<div class=\"wrapper\">


\t\t";
        // line 40
        $this->displayBlock('avanzu_admin_header', $context, $blocks);
        // line 75
        echo "
\t<!-- Left side column. contains the logo and sidebar -->
\t<aside class=\"main-sidebar sidebar-offcanvas\">
\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t<section class=\"sidebar\">
\t\t\t";
        // line 80
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 87
        echo "\t\t</section>
\t\t<!-- /.sidebar -->
\t</aside>

\t<!-- Right side column. Contains the navbar and content of the page -->
\t<div class=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<h1>
\t\t\t\t";
        // line 96
        $this->displayBlock('page_title', $context, $blocks);
        // line 97
        echo "\t\t\t\t<small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
\t\t\t</h1>
\t\t\t";
        // line 99
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 102
        echo "\t\t</section>

\t\t<!-- Main content -->
\t\t<section class=\"content\">
\t\t\t";
        // line 106
        $this->displayBlock('page_content', $context, $blocks);
        // line 107
        echo "\t\t</section>
\t\t<!-- /.content -->
\t</div>
\t<!-- /.content-wrapper -->

\t";
        // line 112
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 120
        echo "
</div>
<!-- ./wrapper -->

";
        // line 125
        $this->displayBlock('javascripts', $context, $blocks);
        // line 130
        echo "
";
        // line 132
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 134
        echo "</body>
</html>
";
        
        $__internal_6382cf9bb43f46d98976a47c7ac44890ee801f53bde51a6f9a86e7410af3cc18->leave($__internal_6382cf9bb43f46d98976a47c7ac44890ee801f53bde51a6f9a86e7410af3cc18_prof);

        
        $__internal_a0ebabc103420bc024af04e39db1ea34b1212559303e4809d75cf9ea51294703->leave($__internal_a0ebabc103420bc024af04e39db1ea34b1212559303e4809d75cf9ea51294703_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_99200b953a64130c727b4e2b5bb4ede3714a02bd4d8617df842ea6410034209c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99200b953a64130c727b4e2b5bb4ede3714a02bd4d8617df842ea6410034209c->enter($__internal_99200b953a64130c727b4e2b5bb4ede3714a02bd4d8617df842ea6410034209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6daca28daae6401621e71f6a42e4755b6709db65ec1ea282023a1495bb4db32f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6daca28daae6401621e71f6a42e4755b6709db65ec1ea282023a1495bb4db32f->enter($__internal_6daca28daae6401621e71f6a42e4755b6709db65ec1ea282023a1495bb4db32f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_6daca28daae6401621e71f6a42e4755b6709db65ec1ea282023a1495bb4db32f->leave($__internal_6daca28daae6401621e71f6a42e4755b6709db65ec1ea282023a1495bb4db32f_prof);

        
        $__internal_99200b953a64130c727b4e2b5bb4ede3714a02bd4d8617df842ea6410034209c->leave($__internal_99200b953a64130c727b4e2b5bb4ede3714a02bd4d8617df842ea6410034209c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_289a99089c4e580a107706ebbb411e1e252c5543cdc74d578a41f1e0b377f1b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_289a99089c4e580a107706ebbb411e1e252c5543cdc74d578a41f1e0b377f1b5->enter($__internal_289a99089c4e580a107706ebbb411e1e252c5543cdc74d578a41f1e0b377f1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_cf2bde138a38b4dbb81dfc6e49214b548c29a330d56f0755796d357446385beb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2bde138a38b4dbb81dfc6e49214b548c29a330d56f0755796d357446385beb->enter($__internal_cf2bde138a38b4dbb81dfc6e49214b548c29a330d56f0755796d357446385beb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_cf2bde138a38b4dbb81dfc6e49214b548c29a330d56f0755796d357446385beb->leave($__internal_cf2bde138a38b4dbb81dfc6e49214b548c29a330d56f0755796d357446385beb_prof);

        
        $__internal_289a99089c4e580a107706ebbb411e1e252c5543cdc74d578a41f1e0b377f1b5->leave($__internal_289a99089c4e580a107706ebbb411e1e252c5543cdc74d578a41f1e0b377f1b5_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_9a428e0f3566921cb57ed0dd9649a7f2bccb5c8b41c8def6fb2b15d10d81de8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a428e0f3566921cb57ed0dd9649a7f2bccb5c8b41c8def6fb2b15d10d81de8a->enter($__internal_9a428e0f3566921cb57ed0dd9649a7f2bccb5c8b41c8def6fb2b15d10d81de8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_a473c304b4d74e814b36764ee75a560cfa3f83b8f57a1149ee77fa5127b873f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a473c304b4d74e814b36764ee75a560cfa3f83b8f57a1149ee77fa5127b873f2->enter($__internal_a473c304b4d74e814b36764ee75a560cfa3f83b8f57a1149ee77fa5127b873f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
<!--[if lt IE 9]>

<![endif]-->

";
        
        $__internal_a473c304b4d74e814b36764ee75a560cfa3f83b8f57a1149ee77fa5127b873f2->leave($__internal_a473c304b4d74e814b36764ee75a560cfa3f83b8f57a1149ee77fa5127b873f2_prof);

        
        $__internal_9a428e0f3566921cb57ed0dd9649a7f2bccb5c8b41c8def6fb2b15d10d81de8a->leave($__internal_9a428e0f3566921cb57ed0dd9649a7f2bccb5c8b41c8def6fb2b15d10d81de8a_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_d049cf462b525df69ac3f5de50119da18e8ca2e0842d61f4a0eb8d82e872c703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d049cf462b525df69ac3f5de50119da18e8ca2e0842d61f4a0eb8d82e872c703->enter($__internal_d049cf462b525df69ac3f5de50119da18e8ca2e0842d61f4a0eb8d82e872c703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_6fd772ff742d0b3f2b583d3be5f9f27522b96716db66b6f890ebd54472db039e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd772ff742d0b3f2b583d3be5f9f27522b96716db66b6f890ebd54472db039e->enter($__internal_6fd772ff742d0b3f2b583d3be5f9f27522b96716db66b6f890ebd54472db039e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        // line 41
        echo "\t\t<header class=\"main-header\">
\t\t\t";
        // line 42
        $this->displayBlock('avanzu_logo', $context, $blocks);
        // line 48
        echo "\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t<nav class=\"navbar navbar-static-top\">
\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t</a>
\t\t\t\t<div id=\"DL_top-bar\" class=\"navbar-custom-menu\">
\t\t\t\t";
        // line 55
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 56
            echo "\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t";
            // line 57
            $this->displayBlock('avanzu_navbar', $context, $blocks);
            // line 63
            echo "\t\t\t\t\t</ul>
\t\t\t\t";
        } else {
            // line 65
            echo "\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"";
            // line 67
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
\t\t\t\t\t</ul>
\t\t\t\t";
        }
        // line 70
        echo "\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

\t";
        
        $__internal_6fd772ff742d0b3f2b583d3be5f9f27522b96716db66b6f890ebd54472db039e->leave($__internal_6fd772ff742d0b3f2b583d3be5f9f27522b96716db66b6f890ebd54472db039e_prof);

        
        $__internal_d049cf462b525df69ac3f5de50119da18e8ca2e0842d61f4a0eb8d82e872c703->leave($__internal_d049cf462b525df69ac3f5de50119da18e8ca2e0842d61f4a0eb8d82e872c703_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_0c59cb967081efbaec5cc7a33582f25266cc4c33bfd4be0a86c5facaadc1bffb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c59cb967081efbaec5cc7a33582f25266cc4c33bfd4be0a86c5facaadc1bffb->enter($__internal_0c59cb967081efbaec5cc7a33582f25266cc4c33bfd4be0a86c5facaadc1bffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_e137cabde47de0af5d93d0efa995c863a05e3604ff94034f0c497e0bf15d5178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e137cabde47de0af5d93d0efa995c863a05e3604ff94034f0c497e0bf15d5178->enter($__internal_e137cabde47de0af5d93d0efa995c863a05e3604ff94034f0c497e0bf15d5178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t<!-- Add the class icon to your logo image or logo icon to add the margining -->
\t\t\t\t";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
\t\t\t</a>
\t\t\t";
        
        $__internal_e137cabde47de0af5d93d0efa995c863a05e3604ff94034f0c497e0bf15d5178->leave($__internal_e137cabde47de0af5d93d0efa995c863a05e3604ff94034f0c497e0bf15d5178_prof);

        
        $__internal_0c59cb967081efbaec5cc7a33582f25266cc4c33bfd4be0a86c5facaadc1bffb->leave($__internal_0c59cb967081efbaec5cc7a33582f25266cc4c33bfd4be0a86c5facaadc1bffb_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_0be0a49e5034c62b945cca27f944e94093dcdcc7a39c283267ce5c65e4e7c58c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0be0a49e5034c62b945cca27f944e94093dcdcc7a39c283267ce5c65e4e7c58c->enter($__internal_0be0a49e5034c62b945cca27f944e94093dcdcc7a39c283267ce5c65e4e7c58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_bfb93c577171b1beb2cdb6d87cf51c170c39cdd02f706061cb94280f52070f1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfb93c577171b1beb2cdb6d87cf51c170c39cdd02f706061cb94280f52070f1f->enter($__internal_bfb93c577171b1beb2cdb6d87cf51c170c39cdd02f706061cb94280f52070f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        // line 58
        echo "\t\t\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:messages"));
        echo "
\t\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:notifications"));
        echo "
\t\t\t\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:tasks"));
        echo "
\t\t\t\t\t\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Navbar:user"));
        echo "
\t\t\t\t\t\t";
        
        $__internal_bfb93c577171b1beb2cdb6d87cf51c170c39cdd02f706061cb94280f52070f1f->leave($__internal_bfb93c577171b1beb2cdb6d87cf51c170c39cdd02f706061cb94280f52070f1f_prof);

        
        $__internal_0be0a49e5034c62b945cca27f944e94093dcdcc7a39c283267ce5c65e4e7c58c->leave($__internal_0be0a49e5034c62b945cca27f944e94093dcdcc7a39c283267ce5c65e4e7c58c_prof);

    }

    // line 80
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_02dc3f9f7a5c394ead9325b11c310f56295dc8882df9b9d51ef9620d88409295 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02dc3f9f7a5c394ead9325b11c310f56295dc8882df9b9d51ef9620d88409295->enter($__internal_02dc3f9f7a5c394ead9325b11c310f56295dc8882df9b9d51ef9620d88409295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_3ad87bc21411189c851a5753ab19d67134363d138985ce47337053940eee0027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad87bc21411189c851a5753ab19d67134363d138985ce47337053940eee0027->enter($__internal_3ad87bc21411189c851a5753ab19d67134363d138985ce47337053940eee0027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 81
        echo "\t\t\t\t";
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 82
            echo "\t\t\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
\t\t\t\t\t";
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
\t\t\t\t";
        }
        // line 85
        echo "\t\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "
\t\t\t";
        
        $__internal_3ad87bc21411189c851a5753ab19d67134363d138985ce47337053940eee0027->leave($__internal_3ad87bc21411189c851a5753ab19d67134363d138985ce47337053940eee0027_prof);

        
        $__internal_02dc3f9f7a5c394ead9325b11c310f56295dc8882df9b9d51ef9620d88409295->leave($__internal_02dc3f9f7a5c394ead9325b11c310f56295dc8882df9b9d51ef9620d88409295_prof);

    }

    // line 96
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_dc0fe4faa5a9e11e951a32140b9fcf0ecef6c8299c7220040bd91943453696c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0fe4faa5a9e11e951a32140b9fcf0ecef6c8299c7220040bd91943453696c6->enter($__internal_dc0fe4faa5a9e11e951a32140b9fcf0ecef6c8299c7220040bd91943453696c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_834442c64b8e3382c02ed7a866f0a82168380af0077d7bd2c5f3ef99c7a7c9f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_834442c64b8e3382c02ed7a866f0a82168380af0077d7bd2c5f3ef99c7a7c9f8->enter($__internal_834442c64b8e3382c02ed7a866f0a82168380af0077d7bd2c5f3ef99c7a7c9f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_834442c64b8e3382c02ed7a866f0a82168380af0077d7bd2c5f3ef99c7a7c9f8->leave($__internal_834442c64b8e3382c02ed7a866f0a82168380af0077d7bd2c5f3ef99c7a7c9f8_prof);

        
        $__internal_dc0fe4faa5a9e11e951a32140b9fcf0ecef6c8299c7220040bd91943453696c6->leave($__internal_dc0fe4faa5a9e11e951a32140b9fcf0ecef6c8299c7220040bd91943453696c6_prof);

    }

    // line 97
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6c290958779f703cda59e9b26e40431e764c1c4bdf6d95d932f3b2285e1d1920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c290958779f703cda59e9b26e40431e764c1c4bdf6d95d932f3b2285e1d1920->enter($__internal_6c290958779f703cda59e9b26e40431e764c1c4bdf6d95d932f3b2285e1d1920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_8084adc70d3b4f7e306e7df81f1042ed02479d9ed795207ba727412f1fa24681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8084adc70d3b4f7e306e7df81f1042ed02479d9ed795207ba727412f1fa24681->enter($__internal_8084adc70d3b4f7e306e7df81f1042ed02479d9ed795207ba727412f1fa24681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_8084adc70d3b4f7e306e7df81f1042ed02479d9ed795207ba727412f1fa24681->leave($__internal_8084adc70d3b4f7e306e7df81f1042ed02479d9ed795207ba727412f1fa24681_prof);

        
        $__internal_6c290958779f703cda59e9b26e40431e764c1c4bdf6d95d932f3b2285e1d1920->leave($__internal_6c290958779f703cda59e9b26e40431e764c1c4bdf6d95d932f3b2285e1d1920_prof);

    }

    // line 99
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_f83719333b7336284dc074ddb46d6b224846384b2fc5809537827d71fc830b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f83719333b7336284dc074ddb46d6b224846384b2fc5809537827d71fc830b7c->enter($__internal_f83719333b7336284dc074ddb46d6b224846384b2fc5809537827d71fc830b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_56dc899cb2254f976a84af1a5294030d7cb81d94d6d17bd51deac3a8a6702447 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56dc899cb2254f976a84af1a5294030d7cb81d94d6d17bd51deac3a8a6702447->enter($__internal_56dc899cb2254f976a84af1a5294030d7cb81d94d6d17bd51deac3a8a6702447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 100
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
\t\t\t";
        
        $__internal_56dc899cb2254f976a84af1a5294030d7cb81d94d6d17bd51deac3a8a6702447->leave($__internal_56dc899cb2254f976a84af1a5294030d7cb81d94d6d17bd51deac3a8a6702447_prof);

        
        $__internal_f83719333b7336284dc074ddb46d6b224846384b2fc5809537827d71fc830b7c->leave($__internal_f83719333b7336284dc074ddb46d6b224846384b2fc5809537827d71fc830b7c_prof);

    }

    // line 106
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5c6b2539de535c93408c33b8d71bf78b74eaefe8081a9a4ecc095679f01a9937 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c6b2539de535c93408c33b8d71bf78b74eaefe8081a9a4ecc095679f01a9937->enter($__internal_5c6b2539de535c93408c33b8d71bf78b74eaefe8081a9a4ecc095679f01a9937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_345ba969ab37132f7a42238abe9227f0d3ccce86e8dd52216636ef1d1ad6af36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_345ba969ab37132f7a42238abe9227f0d3ccce86e8dd52216636ef1d1ad6af36->enter($__internal_345ba969ab37132f7a42238abe9227f0d3ccce86e8dd52216636ef1d1ad6af36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_345ba969ab37132f7a42238abe9227f0d3ccce86e8dd52216636ef1d1ad6af36->leave($__internal_345ba969ab37132f7a42238abe9227f0d3ccce86e8dd52216636ef1d1ad6af36_prof);

        
        $__internal_5c6b2539de535c93408c33b8d71bf78b74eaefe8081a9a4ecc095679f01a9937->leave($__internal_5c6b2539de535c93408c33b8d71bf78b74eaefe8081a9a4ecc095679f01a9937_prof);

    }

    // line 112
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_cb184c65701ddb18c76f36893e332af36271c64c07bb923153af2974868910d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb184c65701ddb18c76f36893e332af36271c64c07bb923153af2974868910d4->enter($__internal_cb184c65701ddb18c76f36893e332af36271c64c07bb923153af2974868910d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_aefb6502fd576aa5dda7706f05ead319204c0dff971608436578a5806b887351 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aefb6502fd576aa5dda7706f05ead319204c0dff971608436578a5806b887351->enter($__internal_aefb6502fd576aa5dda7706f05ead319204c0dff971608436578a5806b887351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 113
        echo "\t<footer class=\"main-footer\">
\t\t<div class=\"pull-right hidden-xs\">
\t\t\t<b>Version</b> 0.1
\t\t</div>
\t\t<strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
\t</footer>
";
        
        $__internal_aefb6502fd576aa5dda7706f05ead319204c0dff971608436578a5806b887351->leave($__internal_aefb6502fd576aa5dda7706f05ead319204c0dff971608436578a5806b887351_prof);

        
        $__internal_cb184c65701ddb18c76f36893e332af36271c64c07bb923153af2974868910d4->leave($__internal_cb184c65701ddb18c76f36893e332af36271c64c07bb923153af2974868910d4_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5a6fe4a77ec1f77e0ed106ba3cbafbac1c27d36a489286a24477a1f01bde2613 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a6fe4a77ec1f77e0ed106ba3cbafbac1c27d36a489286a24477a1f01bde2613->enter($__internal_5a6fe4a77ec1f77e0ed106ba3cbafbac1c27d36a489286a24477a1f01bde2613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f0d01116ff32296f5a777acd400272d9aa76a45f6c462b67cff07b9ede4a30bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0d01116ff32296f5a777acd400272d9aa76a45f6c462b67cff07b9ede4a30bb->enter($__internal_f0d01116ff32296f5a777acd400272d9aa76a45f6c462b67cff07b9ede4a30bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_f0d01116ff32296f5a777acd400272d9aa76a45f6c462b67cff07b9ede4a30bb->leave($__internal_f0d01116ff32296f5a777acd400272d9aa76a45f6c462b67cff07b9ede4a30bb_prof);

        
        $__internal_5a6fe4a77ec1f77e0ed106ba3cbafbac1c27d36a489286a24477a1f01bde2613->leave($__internal_5a6fe4a77ec1f77e0ed106ba3cbafbac1c27d36a489286a24477a1f01bde2613_prof);

    }

    // line 132
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_82f3fcaa4876c0fac85af0bee3a2ac30d36b132be29459da77a8fe1182ba7173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82f3fcaa4876c0fac85af0bee3a2ac30d36b132be29459da77a8fe1182ba7173->enter($__internal_82f3fcaa4876c0fac85af0bee3a2ac30d36b132be29459da77a8fe1182ba7173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_f65d5d2a1c068a72b25de0d4bd14c06ce8ac716a493cd5560fde22693b046f8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f65d5d2a1c068a72b25de0d4bd14c06ce8ac716a493cd5560fde22693b046f8d->enter($__internal_f65d5d2a1c068a72b25de0d4bd14c06ce8ac716a493cd5560fde22693b046f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_f65d5d2a1c068a72b25de0d4bd14c06ce8ac716a493cd5560fde22693b046f8d->leave($__internal_f65d5d2a1c068a72b25de0d4bd14c06ce8ac716a493cd5560fde22693b046f8d_prof);

        
        $__internal_82f3fcaa4876c0fac85af0bee3a2ac30d36b132be29459da77a8fe1182ba7173->leave($__internal_82f3fcaa4876c0fac85af0bee3a2ac30d36b132be29459da77a8fe1182ba7173_prof);

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
        return array (  511 => 132,  498 => 127,  495 => 126,  486 => 125,  470 => 113,  461 => 112,  444 => 106,  431 => 100,  422 => 99,  404 => 97,  386 => 96,  373 => 85,  368 => 83,  363 => 82,  360 => 81,  351 => 80,  339 => 61,  335 => 60,  331 => 59,  326 => 58,  317 => 57,  304 => 45,  300 => 43,  291 => 42,  277 => 70,  271 => 67,  267 => 66,  264 => 65,  260 => 63,  258 => 57,  255 => 56,  253 => 55,  244 => 48,  242 => 42,  239 => 41,  230 => 40,  213 => 28,  204 => 27,  192 => 18,  187 => 17,  178 => 16,  160 => 13,  148 => 134,  146 => 132,  143 => 130,  141 => 125,  135 => 120,  133 => 112,  126 => 107,  124 => 106,  118 => 102,  116 => 99,  110 => 97,  108 => 96,  97 => 87,  95 => 80,  88 => 75,  86 => 40,  79 => 36,  75 => 34,  73 => 27,  67 => 23,  62 => 20,  59 => 16,  54 => 13,  41 => 2,  39 => 1,);
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
\t<meta charset=\"utf-8\">
\t<meta name=\"author\" content=\"\">
\t<meta name=\"keywords\" content=\"\">
\t<meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
\t<title>{% block title %}Avanzu Admin!{% endblock %}</title>

\t{# -------------------------------------------------------------------------------------------------- STYLESHEETS #}
\t{% block stylesheets %}
\t<link rel=\"stylesheet\" href=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/styles/admin-lte-all.css') }}\" />
\t<link href=\"{{ asset('bundles/devleagues/css/main.css') }}\" rel=\"stylesheet\">
{% endblock %}


<!-- Custom styles for this template -->
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />


{# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
{%  block javascripts_head %}
<script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~app.environment~'/scripts/modernizr.js') }}\"></script>
<!--[if lt IE 9]>

<![endif]-->

{% endblock %}

</head>
<body class=\"{{ admin_skin|default('skin-blue')}}\">
\t<div class=\"wrapper\">


\t\t{% block avanzu_admin_header %}
\t\t<header class=\"main-header\">
\t\t\t{% block avanzu_logo %}
\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t<!-- Add the class icon to your logo image or logo icon to add the margining -->
\t\t\t\t{{ block('title') }}
\t\t\t</a>
\t\t\t{% endblock %}
\t\t\t<!-- Header Navbar: style can be found in header.less -->
\t\t\t<nav class=\"navbar navbar-static-top\">
\t\t\t\t<!-- Sidebar toggle button-->
\t\t\t\t<a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t</a>
\t\t\t\t<div id=\"DL_top-bar\" class=\"navbar-custom-menu\">
\t\t\t\t{% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t{% block avanzu_navbar %}
\t\t\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Navbar:messages')) }}
\t\t\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Navbar:notifications')) }}
\t\t\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Navbar:tasks')) }}
\t\t\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Navbar:user')) }}
\t\t\t\t\t\t{% endblock %}
\t\t\t\t\t</ul>
\t\t\t\t{% else %}
\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>

\t{% endblock %}

\t<!-- Left side column. contains the logo and sidebar -->
\t<aside class=\"main-sidebar sidebar-offcanvas\">
\t\t<!-- sidebar: style can be found in sidebar.less -->
\t\t<section class=\"sidebar\">
\t\t\t{% block avanzu_sidebar %}
\t\t\t\t{% if app.user is not null and is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Sidebar:userPanel')) }}
\t\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Sidebar:searchForm')) }}
\t\t\t\t{% endif %}
\t\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Sidebar:menu', {'request':app.request})) }}
\t\t\t{% endblock %}
\t\t</section>
\t\t<!-- /.sidebar -->
\t</aside>

\t<!-- Right side column. Contains the navbar and content of the page -->
\t<div class=\"content-wrapper\">
\t\t<!-- Content Header (Page header) -->
\t\t<section class=\"content-header\">
\t\t\t<h1>
\t\t\t\t{% block page_title %}Blank page{% endblock %}
\t\t\t\t<small>{% block page_subtitle %}Control panel{% endblock %}</small>
\t\t\t</h1>
\t\t\t{% block avanzu_breadcrumb %}
\t\t\t{{ render(controller('AvanzuAdminThemeBundle:Breadcrumb:breadcrumb', {'request':app.request, 'title' : block('page_title')})) }}
\t\t\t{% endblock %}
\t\t</section>

\t\t<!-- Main content -->
\t\t<section class=\"content\">
\t\t\t{% block page_content %}{% endblock %}
\t\t</section>
\t\t<!-- /.content -->
\t</div>
\t<!-- /.content-wrapper -->

\t{% block avanzu_admin_footer %}
\t<footer class=\"main-footer\">
\t\t<div class=\"pull-right hidden-xs\">
\t\t\t<b>Version</b> 0.1
\t\t</div>
\t\t<strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
\t</footer>
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
