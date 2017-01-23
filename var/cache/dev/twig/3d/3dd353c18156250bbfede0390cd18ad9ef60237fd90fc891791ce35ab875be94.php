<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_8a6cc886a406c50537315d7bd355dc0cffc87e4c22b67bc2624a90d6009ce8d2 extends Twig_Template
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
        $__internal_ae4cfcdbf4120e0e9d0a156340f575cb1337e4b7be75842bfecc82101953f5b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae4cfcdbf4120e0e9d0a156340f575cb1337e4b7be75842bfecc82101953f5b1->enter($__internal_ae4cfcdbf4120e0e9d0a156340f575cb1337e4b7be75842bfecc82101953f5b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_e1f99ac90d8d43c6bd28dadabcf4e1b38832f378e95bb15fd03502aec98f2d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1f99ac90d8d43c6bd28dadabcf4e1b38832f378e95bb15fd03502aec98f2d17->enter($__internal_e1f99ac90d8d43c6bd28dadabcf4e1b38832f378e95bb15fd03502aec98f2d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_ae4cfcdbf4120e0e9d0a156340f575cb1337e4b7be75842bfecc82101953f5b1->leave($__internal_ae4cfcdbf4120e0e9d0a156340f575cb1337e4b7be75842bfecc82101953f5b1_prof);

        
        $__internal_e1f99ac90d8d43c6bd28dadabcf4e1b38832f378e95bb15fd03502aec98f2d17->leave($__internal_e1f99ac90d8d43c6bd28dadabcf4e1b38832f378e95bb15fd03502aec98f2d17_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_95ff31ba58476897142428608ff43ae123c8dc722d73277cbaea34e906fc213f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ff31ba58476897142428608ff43ae123c8dc722d73277cbaea34e906fc213f->enter($__internal_95ff31ba58476897142428608ff43ae123c8dc722d73277cbaea34e906fc213f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e69f6b1de89a2d638af47a652b399aabb3495c65e94344930125f405f444158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e69f6b1de89a2d638af47a652b399aabb3495c65e94344930125f405f444158->enter($__internal_7e69f6b1de89a2d638af47a652b399aabb3495c65e94344930125f405f444158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_7e69f6b1de89a2d638af47a652b399aabb3495c65e94344930125f405f444158->leave($__internal_7e69f6b1de89a2d638af47a652b399aabb3495c65e94344930125f405f444158_prof);

        
        $__internal_95ff31ba58476897142428608ff43ae123c8dc722d73277cbaea34e906fc213f->leave($__internal_95ff31ba58476897142428608ff43ae123c8dc722d73277cbaea34e906fc213f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b7c39b0ba16fd3d3a302ee6967f5687288ba44631f50a183f2d3c5a8df6f1da3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7c39b0ba16fd3d3a302ee6967f5687288ba44631f50a183f2d3c5a8df6f1da3->enter($__internal_b7c39b0ba16fd3d3a302ee6967f5687288ba44631f50a183f2d3c5a8df6f1da3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_684a35f8adffb5720b70b937b5e6d8eb8ca351804eea456c6f4d706924563233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684a35f8adffb5720b70b937b5e6d8eb8ca351804eea456c6f4d706924563233->enter($__internal_684a35f8adffb5720b70b937b5e6d8eb8ca351804eea456c6f4d706924563233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_684a35f8adffb5720b70b937b5e6d8eb8ca351804eea456c6f4d706924563233->leave($__internal_684a35f8adffb5720b70b937b5e6d8eb8ca351804eea456c6f4d706924563233_prof);

        
        $__internal_b7c39b0ba16fd3d3a302ee6967f5687288ba44631f50a183f2d3c5a8df6f1da3->leave($__internal_b7c39b0ba16fd3d3a302ee6967f5687288ba44631f50a183f2d3c5a8df6f1da3_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_534c7bdf78da669d7d670f38b786f79641d7c34c11562c2c7bf3b4deb8ca0b80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_534c7bdf78da669d7d670f38b786f79641d7c34c11562c2c7bf3b4deb8ca0b80->enter($__internal_534c7bdf78da669d7d670f38b786f79641d7c34c11562c2c7bf3b4deb8ca0b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_89d66e1912fd1ed239ff34cd3dc77d9950b29841c8e7980dc7f8e408ecce7c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d66e1912fd1ed239ff34cd3dc77d9950b29841c8e7980dc7f8e408ecce7c54->enter($__internal_89d66e1912fd1ed239ff34cd3dc77d9950b29841c8e7980dc7f8e408ecce7c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
<!--[if lt IE 9]>

<![endif]-->

";
        
        $__internal_89d66e1912fd1ed239ff34cd3dc77d9950b29841c8e7980dc7f8e408ecce7c54->leave($__internal_89d66e1912fd1ed239ff34cd3dc77d9950b29841c8e7980dc7f8e408ecce7c54_prof);

        
        $__internal_534c7bdf78da669d7d670f38b786f79641d7c34c11562c2c7bf3b4deb8ca0b80->leave($__internal_534c7bdf78da669d7d670f38b786f79641d7c34c11562c2c7bf3b4deb8ca0b80_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_e62ade26b78e42654dcea2684552cccb7242a8206fdbcf4865fec9d73059b5d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e62ade26b78e42654dcea2684552cccb7242a8206fdbcf4865fec9d73059b5d5->enter($__internal_e62ade26b78e42654dcea2684552cccb7242a8206fdbcf4865fec9d73059b5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_c38947cef777e4764537fe775795ba7fe83150fdbea5957e82f10e5dbbe2069a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38947cef777e4764537fe775795ba7fe83150fdbea5957e82f10e5dbbe2069a->enter($__internal_c38947cef777e4764537fe775795ba7fe83150fdbea5957e82f10e5dbbe2069a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_c38947cef777e4764537fe775795ba7fe83150fdbea5957e82f10e5dbbe2069a->leave($__internal_c38947cef777e4764537fe775795ba7fe83150fdbea5957e82f10e5dbbe2069a_prof);

        
        $__internal_e62ade26b78e42654dcea2684552cccb7242a8206fdbcf4865fec9d73059b5d5->leave($__internal_e62ade26b78e42654dcea2684552cccb7242a8206fdbcf4865fec9d73059b5d5_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_bb96b7392dbdedca8c64e99812a6fce2451280e67df7fcc4f7a99382fafdd507 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb96b7392dbdedca8c64e99812a6fce2451280e67df7fcc4f7a99382fafdd507->enter($__internal_bb96b7392dbdedca8c64e99812a6fce2451280e67df7fcc4f7a99382fafdd507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_625fc088ea367da79fd45b3c0f3e8d7c7cd0c5c2073f65dae8e383f5ab0c50df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_625fc088ea367da79fd45b3c0f3e8d7c7cd0c5c2073f65dae8e383f5ab0c50df->enter($__internal_625fc088ea367da79fd45b3c0f3e8d7c7cd0c5c2073f65dae8e383f5ab0c50df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t<!-- Add the class icon to your logo image or logo icon to add the margining -->
\t\t\t\t";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
\t\t\t</a>
\t\t\t";
        
        $__internal_625fc088ea367da79fd45b3c0f3e8d7c7cd0c5c2073f65dae8e383f5ab0c50df->leave($__internal_625fc088ea367da79fd45b3c0f3e8d7c7cd0c5c2073f65dae8e383f5ab0c50df_prof);

        
        $__internal_bb96b7392dbdedca8c64e99812a6fce2451280e67df7fcc4f7a99382fafdd507->leave($__internal_bb96b7392dbdedca8c64e99812a6fce2451280e67df7fcc4f7a99382fafdd507_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_79caed667e93fb9119df0b4fde63e4bf2974d6c92c49be004fd61a18f2d03326 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79caed667e93fb9119df0b4fde63e4bf2974d6c92c49be004fd61a18f2d03326->enter($__internal_79caed667e93fb9119df0b4fde63e4bf2974d6c92c49be004fd61a18f2d03326_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_66c52ed82ca3431fece87bf95776ca0729ce37275397869919fcbed8916bd0a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66c52ed82ca3431fece87bf95776ca0729ce37275397869919fcbed8916bd0a9->enter($__internal_66c52ed82ca3431fece87bf95776ca0729ce37275397869919fcbed8916bd0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_66c52ed82ca3431fece87bf95776ca0729ce37275397869919fcbed8916bd0a9->leave($__internal_66c52ed82ca3431fece87bf95776ca0729ce37275397869919fcbed8916bd0a9_prof);

        
        $__internal_79caed667e93fb9119df0b4fde63e4bf2974d6c92c49be004fd61a18f2d03326->leave($__internal_79caed667e93fb9119df0b4fde63e4bf2974d6c92c49be004fd61a18f2d03326_prof);

    }

    // line 80
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_842fd4a71bda112d8cbbdd454a9c9492e8f571f5134d7daffe5894b0dac6ba9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_842fd4a71bda112d8cbbdd454a9c9492e8f571f5134d7daffe5894b0dac6ba9f->enter($__internal_842fd4a71bda112d8cbbdd454a9c9492e8f571f5134d7daffe5894b0dac6ba9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_940ddcba204f0dec0623e9b31a1c0b1e2df10350e869d95e79cc70dd420c603e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_940ddcba204f0dec0623e9b31a1c0b1e2df10350e869d95e79cc70dd420c603e->enter($__internal_940ddcba204f0dec0623e9b31a1c0b1e2df10350e869d95e79cc70dd420c603e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_940ddcba204f0dec0623e9b31a1c0b1e2df10350e869d95e79cc70dd420c603e->leave($__internal_940ddcba204f0dec0623e9b31a1c0b1e2df10350e869d95e79cc70dd420c603e_prof);

        
        $__internal_842fd4a71bda112d8cbbdd454a9c9492e8f571f5134d7daffe5894b0dac6ba9f->leave($__internal_842fd4a71bda112d8cbbdd454a9c9492e8f571f5134d7daffe5894b0dac6ba9f_prof);

    }

    // line 96
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_8343fde157149e9423d7f927f7d1074bb55df25f3e4506a63c574e11689e1b17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8343fde157149e9423d7f927f7d1074bb55df25f3e4506a63c574e11689e1b17->enter($__internal_8343fde157149e9423d7f927f7d1074bb55df25f3e4506a63c574e11689e1b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_cff36647f85dccd9b916be8f4a3fe8f90b0070b264652d3bb71c87615d30d0bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cff36647f85dccd9b916be8f4a3fe8f90b0070b264652d3bb71c87615d30d0bb->enter($__internal_cff36647f85dccd9b916be8f4a3fe8f90b0070b264652d3bb71c87615d30d0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_cff36647f85dccd9b916be8f4a3fe8f90b0070b264652d3bb71c87615d30d0bb->leave($__internal_cff36647f85dccd9b916be8f4a3fe8f90b0070b264652d3bb71c87615d30d0bb_prof);

        
        $__internal_8343fde157149e9423d7f927f7d1074bb55df25f3e4506a63c574e11689e1b17->leave($__internal_8343fde157149e9423d7f927f7d1074bb55df25f3e4506a63c574e11689e1b17_prof);

    }

    // line 97
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_6c2944c4a4dbd859e78b5892625651168612d04b461c83c79a20c2cfc179749e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c2944c4a4dbd859e78b5892625651168612d04b461c83c79a20c2cfc179749e->enter($__internal_6c2944c4a4dbd859e78b5892625651168612d04b461c83c79a20c2cfc179749e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_35d41929abb8301b0084c03fdb38d8a5c7b504f4a5427c6d780847127e2ef4a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35d41929abb8301b0084c03fdb38d8a5c7b504f4a5427c6d780847127e2ef4a7->enter($__internal_35d41929abb8301b0084c03fdb38d8a5c7b504f4a5427c6d780847127e2ef4a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_35d41929abb8301b0084c03fdb38d8a5c7b504f4a5427c6d780847127e2ef4a7->leave($__internal_35d41929abb8301b0084c03fdb38d8a5c7b504f4a5427c6d780847127e2ef4a7_prof);

        
        $__internal_6c2944c4a4dbd859e78b5892625651168612d04b461c83c79a20c2cfc179749e->leave($__internal_6c2944c4a4dbd859e78b5892625651168612d04b461c83c79a20c2cfc179749e_prof);

    }

    // line 99
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_96f0e4b4c07cf87840beddd42f1a626d13875919c22c5a9f05dc1a6c303fcf46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f0e4b4c07cf87840beddd42f1a626d13875919c22c5a9f05dc1a6c303fcf46->enter($__internal_96f0e4b4c07cf87840beddd42f1a626d13875919c22c5a9f05dc1a6c303fcf46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_4905bef82ae802f5e23be9d666f01537a98cde4f7e4c8a60e916ad415f8ce00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4905bef82ae802f5e23be9d666f01537a98cde4f7e4c8a60e916ad415f8ce00e->enter($__internal_4905bef82ae802f5e23be9d666f01537a98cde4f7e4c8a60e916ad415f8ce00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 100
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
\t\t\t";
        
        $__internal_4905bef82ae802f5e23be9d666f01537a98cde4f7e4c8a60e916ad415f8ce00e->leave($__internal_4905bef82ae802f5e23be9d666f01537a98cde4f7e4c8a60e916ad415f8ce00e_prof);

        
        $__internal_96f0e4b4c07cf87840beddd42f1a626d13875919c22c5a9f05dc1a6c303fcf46->leave($__internal_96f0e4b4c07cf87840beddd42f1a626d13875919c22c5a9f05dc1a6c303fcf46_prof);

    }

    // line 106
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ee66f6796fa13059e10881d4e40c91b93463651f889b532daac3243c9c0e8cb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee66f6796fa13059e10881d4e40c91b93463651f889b532daac3243c9c0e8cb0->enter($__internal_ee66f6796fa13059e10881d4e40c91b93463651f889b532daac3243c9c0e8cb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_4235ff1b23fa82a3f143d39937aa7edd9c1f494ab756bf2ded7f0510af69fd67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4235ff1b23fa82a3f143d39937aa7edd9c1f494ab756bf2ded7f0510af69fd67->enter($__internal_4235ff1b23fa82a3f143d39937aa7edd9c1f494ab756bf2ded7f0510af69fd67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_4235ff1b23fa82a3f143d39937aa7edd9c1f494ab756bf2ded7f0510af69fd67->leave($__internal_4235ff1b23fa82a3f143d39937aa7edd9c1f494ab756bf2ded7f0510af69fd67_prof);

        
        $__internal_ee66f6796fa13059e10881d4e40c91b93463651f889b532daac3243c9c0e8cb0->leave($__internal_ee66f6796fa13059e10881d4e40c91b93463651f889b532daac3243c9c0e8cb0_prof);

    }

    // line 112
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_b9daedefeca713bd7588aec871677e9ce07cfacb95046053235ba4cefb2c32cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9daedefeca713bd7588aec871677e9ce07cfacb95046053235ba4cefb2c32cd->enter($__internal_b9daedefeca713bd7588aec871677e9ce07cfacb95046053235ba4cefb2c32cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_14a073d4c486b090e0906f7f754ae416b186e2a06a5d61be49b4a3b837052de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14a073d4c486b090e0906f7f754ae416b186e2a06a5d61be49b4a3b837052de4->enter($__internal_14a073d4c486b090e0906f7f754ae416b186e2a06a5d61be49b4a3b837052de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 113
        echo "\t<footer class=\"main-footer\">
\t\t<div class=\"pull-right hidden-xs\">
\t\t\t<b>Version</b> 0.1
\t\t</div>
\t\t<strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
\t</footer>
";
        
        $__internal_14a073d4c486b090e0906f7f754ae416b186e2a06a5d61be49b4a3b837052de4->leave($__internal_14a073d4c486b090e0906f7f754ae416b186e2a06a5d61be49b4a3b837052de4_prof);

        
        $__internal_b9daedefeca713bd7588aec871677e9ce07cfacb95046053235ba4cefb2c32cd->leave($__internal_b9daedefeca713bd7588aec871677e9ce07cfacb95046053235ba4cefb2c32cd_prof);

    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aa085e51cdd312cb82406190c4aa2755381af561d1df85b5beb5de47b3fb01d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa085e51cdd312cb82406190c4aa2755381af561d1df85b5beb5de47b3fb01d9->enter($__internal_aa085e51cdd312cb82406190c4aa2755381af561d1df85b5beb5de47b3fb01d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fd8b2345ed9bd6d13c5dd4a82d3f2b528d1c6717e189ab0d71a90a312be50d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd8b2345ed9bd6d13c5dd4a82d3f2b528d1c6717e189ab0d71a90a312be50d58->enter($__internal_fd8b2345ed9bd6d13c5dd4a82d3f2b528d1c6717e189ab0d71a90a312be50d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 126
        echo "
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_fd8b2345ed9bd6d13c5dd4a82d3f2b528d1c6717e189ab0d71a90a312be50d58->leave($__internal_fd8b2345ed9bd6d13c5dd4a82d3f2b528d1c6717e189ab0d71a90a312be50d58_prof);

        
        $__internal_aa085e51cdd312cb82406190c4aa2755381af561d1df85b5beb5de47b3fb01d9->leave($__internal_aa085e51cdd312cb82406190c4aa2755381af561d1df85b5beb5de47b3fb01d9_prof);

    }

    // line 132
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_5b7f724ac151d7df322a7684db592e5cc4612563267f05651efba95793039fc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7f724ac151d7df322a7684db592e5cc4612563267f05651efba95793039fc0->enter($__internal_5b7f724ac151d7df322a7684db592e5cc4612563267f05651efba95793039fc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_0db7cf6c74bd0e6f0f43b9b89fc72a9e4de7c6f3eadc6a4d710294c6fdc7c687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db7cf6c74bd0e6f0f43b9b89fc72a9e4de7c6f3eadc6a4d710294c6fdc7c687->enter($__internal_0db7cf6c74bd0e6f0f43b9b89fc72a9e4de7c6f3eadc6a4d710294c6fdc7c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_0db7cf6c74bd0e6f0f43b9b89fc72a9e4de7c6f3eadc6a4d710294c6fdc7c687->leave($__internal_0db7cf6c74bd0e6f0f43b9b89fc72a9e4de7c6f3eadc6a4d710294c6fdc7c687_prof);

        
        $__internal_5b7f724ac151d7df322a7684db592e5cc4612563267f05651efba95793039fc0->leave($__internal_5b7f724ac151d7df322a7684db592e5cc4612563267f05651efba95793039fc0_prof);

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
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
