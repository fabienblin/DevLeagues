<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_e4f3b9cf65f47651cc85e1dc085dd6a05ca23e4c4343f8cf941238d845bf9237 extends Twig_Template
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
        echo twig_escape_filter($this->env, ((array_key_exists("admin_skin", $context)) ? (_twig_default_filter(($context["admin_skin"] ?? null), "skin-blue")) : ("skin-blue")), "html", null, true);
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
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? null), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
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
        if (( !(null === $this->getAttribute(($context["app"] ?? null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        // line 43
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
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
    }

    // line 75
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        // line 76
        echo "                    ";
        if (( !(null === $this->getAttribute(($context["app"] ?? null), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()))));
        echo "
                ";
    }

    // line 107
    public function block_page_title($context, array $blocks = array())
    {
        echo "Blank page";
    }

    // line 108
    public function block_page_subtitle($context, array $blocks = array())
    {
        echo "Control panel";
    }

    // line 110
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        // line 111
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? null), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
    }

    // line 117
    public function block_page_content($context, array $blocks = array())
    {
    }

    // line 123
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        // line 124
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    ";
    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        // line 137
        echo "
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? null), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
    }

    // line 143
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
        return array (  368 => 143,  361 => 138,  358 => 137,  355 => 136,  345 => 124,  342 => 123,  337 => 117,  330 => 111,  327 => 110,  321 => 108,  315 => 107,  308 => 80,  303 => 78,  298 => 77,  295 => 76,  292 => 75,  286 => 61,  282 => 60,  278 => 59,  273 => 58,  270 => 57,  263 => 45,  259 => 43,  256 => 42,  249 => 66,  244 => 63,  242 => 57,  238 => 55,  236 => 54,  228 => 48,  226 => 42,  223 => 41,  220 => 40,  209 => 28,  206 => 27,  200 => 18,  195 => 17,  192 => 16,  186 => 13,  180 => 145,  178 => 143,  175 => 141,  173 => 136,  167 => 131,  165 => 123,  158 => 118,  156 => 117,  150 => 113,  148 => 110,  142 => 108,  140 => 107,  129 => 99,  125 => 98,  121 => 97,  117 => 96,  113 => 95,  109 => 94,  105 => 93,  92 => 82,  90 => 75,  83 => 70,  81 => 40,  74 => 36,  70 => 34,  67 => 27,  61 => 23,  56 => 20,  53 => 16,  48 => 13,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/fabien/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
