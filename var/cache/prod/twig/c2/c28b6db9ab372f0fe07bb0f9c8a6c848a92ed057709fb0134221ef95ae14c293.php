<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_7e6de3bc9722fef1cef6fcfacfe21ff7cda45ea6e8d8c5e6b145bf1f74807c54 extends Twig_Template
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
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter(($context["admin_skin"] ?? null), "skin-blue")) : ("skin-blue")), "html", null, true);
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
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Avanzu Admin!";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? null), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 28
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? null), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
<!--[if lt IE 9]>

<![endif]-->

";
    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
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
        if (( !(null === $this->getAttribute(($context["app"] ?? null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        // line 43
        echo "\t\t\t<a href=\"#\" class=\"logo\">
\t\t\t\t<!-- Add the class icon to your logo image or logo icon to add the margining -->
\t\t\t\t";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
\t\t\t</a>
\t\t\t";
    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
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
    }

    // line 80
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 81
        echo "\t\t\t\t";
        if (( !(null === $this->getAttribute(($context["app"] ?? null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
        echo "
\t\t\t";
    }

    // line 96
    public function block_page_title($context, array $blocks = array())
    {
        echo "Blank page";
    }

    // line 97
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Control panel";
    }

    // line 99
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        // line 100
        echo "\t\t\t";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
\t\t\t";
    }

    // line 106
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 112
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        // line 113
        echo "\t<footer class=\"main-footer\">
\t\t<div class=\"pull-right hidden-xs\">
\t\t\t<b>Version</b> 0.1
\t\t</div>
\t\t<strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
\t</footer>
";
    }

    // line 125
    public function block_javascripts($context, array $blocks = array())
    {
        // line 126
        echo "
<script src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? null), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
    }

    // line 132
    public function block_javascripts_inline($context, array $blocks = array())
    {
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
        return array (  343 => 132,  336 => 127,  333 => 126,  330 => 125,  320 => 113,  317 => 112,  312 => 106,  305 => 100,  302 => 99,  296 => 97,  290 => 96,  283 => 85,  278 => 83,  273 => 82,  270 => 81,  267 => 80,  261 => 61,  257 => 60,  253 => 59,  248 => 58,  245 => 57,  238 => 45,  234 => 43,  231 => 42,  223 => 70,  217 => 67,  213 => 66,  210 => 65,  206 => 63,  204 => 57,  201 => 56,  199 => 55,  190 => 48,  188 => 42,  185 => 41,  182 => 40,  171 => 28,  168 => 27,  162 => 18,  157 => 17,  154 => 16,  148 => 13,  142 => 134,  140 => 132,  137 => 130,  135 => 125,  129 => 120,  127 => 112,  120 => 107,  118 => 106,  112 => 102,  110 => 99,  104 => 97,  102 => 96,  91 => 87,  89 => 80,  82 => 75,  80 => 40,  73 => 36,  69 => 34,  67 => 27,  61 => 23,  56 => 20,  53 => 16,  48 => 13,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
