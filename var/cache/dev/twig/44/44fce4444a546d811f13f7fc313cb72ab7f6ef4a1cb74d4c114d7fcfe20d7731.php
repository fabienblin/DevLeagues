<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_9d84c7f1b5a44e98b8db0c57f3c33210f6a732397556fa1df72117d03f540493 extends Twig_Template
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
        $__internal_67b64301fceb6d1188654c798c39039375426f0f07eccc72d56e505f5250fe60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67b64301fceb6d1188654c798c39039375426f0f07eccc72d56e505f5250fe60->enter($__internal_67b64301fceb6d1188654c798c39039375426f0f07eccc72d56e505f5250fe60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_ca93b7ce50604a8e2837eb55480dbc7bed809fdb5972adbef3fd87e779236c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca93b7ce50604a8e2837eb55480dbc7bed809fdb5972adbef3fd87e779236c31->enter($__internal_ca93b7ce50604a8e2837eb55480dbc7bed809fdb5972adbef3fd87e779236c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        // line 77
        echo "
        <!-- Left side column. contains the logo and sidebar -->
        <aside class=\"main-sidebar sidebar-offcanvas\">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class=\"sidebar\">
                ";
        // line 82
        $this->displayBlock('avanzu_sidebar', $context, $blocks);
        // line 89
        echo "            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Right side column. Contains the navbar and content of the page -->
        <div class=\"content-wrapper\">
            <nav class=\"navbar DL_second_navbar\">
              <div class=\"container-fluid\">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class=\"navbar-custom-menu\">
                  <ul class=\"nav navbar-nav navbar-right\">
                    <li><a href=\"";
        // line 100
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\">About</a></li>
                    <li><a href=\"";
        // line 102
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("news");
        echo "\">News</a></li>
                    <li><a href=\"";
        // line 103
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("community");
        echo "\">Community</a></li>
                    <li><a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("challenge");
        echo "\">Challenges</a></li>
                    <li><a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("league");
        echo "\">Leagues</a></li>
                    <li><a href=\"";
        // line 106
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
        // line 114
        $this->displayBlock('page_title', $context, $blocks);
        // line 115
        echo "                    <small>";
        $this->displayBlock('page_subtitle', $context, $blocks);
        echo "</small>
                </h1>
                ";
        // line 117
        $this->displayBlock('avanzu_breadcrumb', $context, $blocks);
        // line 120
        echo "            </section>

            <!-- Main content -->
            <section class=\"content\">
                ";
        // line 124
        $this->displayBlock('page_content', $context, $blocks);
        // line 125
        echo "            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    ";
        // line 130
        $this->displayBlock('avanzu_admin_footer', $context, $blocks);
        // line 138
        echo "
    </div>
<!-- ./wrapper -->

";
        // line 143
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "
";
        // line 150
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 152
        echo "</body>
</html>
";
        
        $__internal_67b64301fceb6d1188654c798c39039375426f0f07eccc72d56e505f5250fe60->leave($__internal_67b64301fceb6d1188654c798c39039375426f0f07eccc72d56e505f5250fe60_prof);

        
        $__internal_ca93b7ce50604a8e2837eb55480dbc7bed809fdb5972adbef3fd87e779236c31->leave($__internal_ca93b7ce50604a8e2837eb55480dbc7bed809fdb5972adbef3fd87e779236c31_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_09dde25d205c53264226834d5cf0f2287a8335e521d751a9a84320999245db2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dde25d205c53264226834d5cf0f2287a8335e521d751a9a84320999245db2c->enter($__internal_09dde25d205c53264226834d5cf0f2287a8335e521d751a9a84320999245db2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5b88a47acabe707489a4abb2f82fc971f22e66c5d7b6d0638069ade0358fa040 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b88a47acabe707489a4abb2f82fc971f22e66c5d7b6d0638069ade0358fa040->enter($__internal_5b88a47acabe707489a4abb2f82fc971f22e66c5d7b6d0638069ade0358fa040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_5b88a47acabe707489a4abb2f82fc971f22e66c5d7b6d0638069ade0358fa040->leave($__internal_5b88a47acabe707489a4abb2f82fc971f22e66c5d7b6d0638069ade0358fa040_prof);

        
        $__internal_09dde25d205c53264226834d5cf0f2287a8335e521d751a9a84320999245db2c->leave($__internal_09dde25d205c53264226834d5cf0f2287a8335e521d751a9a84320999245db2c_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_291ac3a07a5dfc304b91bc4c63364f6387f449853c092c15d20261a8b0c22a21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_291ac3a07a5dfc304b91bc4c63364f6387f449853c092c15d20261a8b0c22a21->enter($__internal_291ac3a07a5dfc304b91bc4c63364f6387f449853c092c15d20261a8b0c22a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_eadb62f231c8c779032bcc5925991ade27a123472d032a4e8e98a8813265ee96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadb62f231c8c779032bcc5925991ade27a123472d032a4e8e98a8813265ee96->enter($__internal_eadb62f231c8c779032bcc5925991ade27a123472d032a4e8e98a8813265ee96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_eadb62f231c8c779032bcc5925991ade27a123472d032a4e8e98a8813265ee96->leave($__internal_eadb62f231c8c779032bcc5925991ade27a123472d032a4e8e98a8813265ee96_prof);

        
        $__internal_291ac3a07a5dfc304b91bc4c63364f6387f449853c092c15d20261a8b0c22a21->leave($__internal_291ac3a07a5dfc304b91bc4c63364f6387f449853c092c15d20261a8b0c22a21_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_fa61e5ca589e4c7fd70cdc2ca3925c95615cdb2aa0040b8a6f9833e08b7688b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa61e5ca589e4c7fd70cdc2ca3925c95615cdb2aa0040b8a6f9833e08b7688b1->enter($__internal_fa61e5ca589e4c7fd70cdc2ca3925c95615cdb2aa0040b8a6f9833e08b7688b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_bd5eaefc3436b82e8eff47898dd9a72c53e773c2c51b94fab13f5c4cd87e6f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd5eaefc3436b82e8eff47898dd9a72c53e773c2c51b94fab13f5c4cd87e6f4c->enter($__internal_bd5eaefc3436b82e8eff47898dd9a72c53e773c2c51b94fab13f5c4cd87e6f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_bd5eaefc3436b82e8eff47898dd9a72c53e773c2c51b94fab13f5c4cd87e6f4c->leave($__internal_bd5eaefc3436b82e8eff47898dd9a72c53e773c2c51b94fab13f5c4cd87e6f4c_prof);

        
        $__internal_fa61e5ca589e4c7fd70cdc2ca3925c95615cdb2aa0040b8a6f9833e08b7688b1->leave($__internal_fa61e5ca589e4c7fd70cdc2ca3925c95615cdb2aa0040b8a6f9833e08b7688b1_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_4c23a4855e263890d9a88d3179b559a8f67a366e60960d94cb9d9ea42c553c35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c23a4855e263890d9a88d3179b559a8f67a366e60960d94cb9d9ea42c553c35->enter($__internal_4c23a4855e263890d9a88d3179b559a8f67a366e60960d94cb9d9ea42c553c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_66818c7e51c1feff38f35d0bfd398f41a6d4704ac2e7b79e0f16f15b676620e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66818c7e51c1feff38f35d0bfd398f41a6d4704ac2e7b79e0f16f15b676620e6->enter($__internal_66818c7e51c1feff38f35d0bfd398f41a6d4704ac2e7b79e0f16f15b676620e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
\t\t\t\t";
        } else {
            // line 66
            echo "\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 68
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 69
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
                ";
        }
        // line 73
        echo "            </nav>
          </header>

    ";
        
        $__internal_66818c7e51c1feff38f35d0bfd398f41a6d4704ac2e7b79e0f16f15b676620e6->leave($__internal_66818c7e51c1feff38f35d0bfd398f41a6d4704ac2e7b79e0f16f15b676620e6_prof);

        
        $__internal_4c23a4855e263890d9a88d3179b559a8f67a366e60960d94cb9d9ea42c553c35->leave($__internal_4c23a4855e263890d9a88d3179b559a8f67a366e60960d94cb9d9ea42c553c35_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_b4e9ae0be0c21ae11964a6776f3a582cc46c7c5e81beed9a2f4ce14e72f7b595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4e9ae0be0c21ae11964a6776f3a582cc46c7c5e81beed9a2f4ce14e72f7b595->enter($__internal_b4e9ae0be0c21ae11964a6776f3a582cc46c7c5e81beed9a2f4ce14e72f7b595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_361de2781b2ca4869ec090da33c2bbb3aab0dbb07fadd6195f2625692532a080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_361de2781b2ca4869ec090da33c2bbb3aab0dbb07fadd6195f2625692532a080->enter($__internal_361de2781b2ca4869ec090da33c2bbb3aab0dbb07fadd6195f2625692532a080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_361de2781b2ca4869ec090da33c2bbb3aab0dbb07fadd6195f2625692532a080->leave($__internal_361de2781b2ca4869ec090da33c2bbb3aab0dbb07fadd6195f2625692532a080_prof);

        
        $__internal_b4e9ae0be0c21ae11964a6776f3a582cc46c7c5e81beed9a2f4ce14e72f7b595->leave($__internal_b4e9ae0be0c21ae11964a6776f3a582cc46c7c5e81beed9a2f4ce14e72f7b595_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_e98070eca07b8e01c200af88c516c9fe3a289ea6c225f364626ad99395334946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98070eca07b8e01c200af88c516c9fe3a289ea6c225f364626ad99395334946->enter($__internal_e98070eca07b8e01c200af88c516c9fe3a289ea6c225f364626ad99395334946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_32a6c1df00accb073330c6b55d6f590e59fad570422a081bab917d239bfe07f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a6c1df00accb073330c6b55d6f590e59fad570422a081bab917d239bfe07f2->enter($__internal_32a6c1df00accb073330c6b55d6f590e59fad570422a081bab917d239bfe07f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_32a6c1df00accb073330c6b55d6f590e59fad570422a081bab917d239bfe07f2->leave($__internal_32a6c1df00accb073330c6b55d6f590e59fad570422a081bab917d239bfe07f2_prof);

        
        $__internal_e98070eca07b8e01c200af88c516c9fe3a289ea6c225f364626ad99395334946->leave($__internal_e98070eca07b8e01c200af88c516c9fe3a289ea6c225f364626ad99395334946_prof);

    }

    // line 82
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_27e2f11ca97faf1d6cdfaeddc6480af6de73c18fe35dc3ef5b81b382a61f7bdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27e2f11ca97faf1d6cdfaeddc6480af6de73c18fe35dc3ef5b81b382a61f7bdb->enter($__internal_27e2f11ca97faf1d6cdfaeddc6480af6de73c18fe35dc3ef5b81b382a61f7bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_ccc733f3773a1f59ff34bfdccbc34ecd86c066853f080cdff3ad98f9fbdd2562 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccc733f3773a1f59ff34bfdccbc34ecd86c066853f080cdff3ad98f9fbdd2562->enter($__internal_ccc733f3773a1f59ff34bfdccbc34ecd86c066853f080cdff3ad98f9fbdd2562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        // line 83
        echo "                    ";
        if (( !(null === $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) && $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY"))) {
            // line 84
            echo "                        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:userPanel"));
            echo "
                        ";
            // line 85
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:searchForm"));
            echo "
                    ";
        }
        // line 87
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Sidebar:menu", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()))));
        echo "
                ";
        
        $__internal_ccc733f3773a1f59ff34bfdccbc34ecd86c066853f080cdff3ad98f9fbdd2562->leave($__internal_ccc733f3773a1f59ff34bfdccbc34ecd86c066853f080cdff3ad98f9fbdd2562_prof);

        
        $__internal_27e2f11ca97faf1d6cdfaeddc6480af6de73c18fe35dc3ef5b81b382a61f7bdb->leave($__internal_27e2f11ca97faf1d6cdfaeddc6480af6de73c18fe35dc3ef5b81b382a61f7bdb_prof);

    }

    // line 114
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_a6bd211ec1ff2865137e31a549da88d1ffc55b7c48db6ff78b54cb9b45d8fd38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bd211ec1ff2865137e31a549da88d1ffc55b7c48db6ff78b54cb9b45d8fd38->enter($__internal_a6bd211ec1ff2865137e31a549da88d1ffc55b7c48db6ff78b54cb9b45d8fd38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_ce3201a9ff4cdc5839c18b6c803da148399ed4230c3584106b4aa2fddf6a4035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3201a9ff4cdc5839c18b6c803da148399ed4230c3584106b4aa2fddf6a4035->enter($__internal_ce3201a9ff4cdc5839c18b6c803da148399ed4230c3584106b4aa2fddf6a4035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_ce3201a9ff4cdc5839c18b6c803da148399ed4230c3584106b4aa2fddf6a4035->leave($__internal_ce3201a9ff4cdc5839c18b6c803da148399ed4230c3584106b4aa2fddf6a4035_prof);

        
        $__internal_a6bd211ec1ff2865137e31a549da88d1ffc55b7c48db6ff78b54cb9b45d8fd38->leave($__internal_a6bd211ec1ff2865137e31a549da88d1ffc55b7c48db6ff78b54cb9b45d8fd38_prof);

    }

    // line 115
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ea0d00244b2bf6c3b484fccc2c2e6d06ebfc14c5da9d956294079046f34de91f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0d00244b2bf6c3b484fccc2c2e6d06ebfc14c5da9d956294079046f34de91f->enter($__internal_ea0d00244b2bf6c3b484fccc2c2e6d06ebfc14c5da9d956294079046f34de91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_3ad649270337a9c7c086452095be24574eb902bf6536dcb074f3a11a96fcf665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ad649270337a9c7c086452095be24574eb902bf6536dcb074f3a11a96fcf665->enter($__internal_3ad649270337a9c7c086452095be24574eb902bf6536dcb074f3a11a96fcf665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_3ad649270337a9c7c086452095be24574eb902bf6536dcb074f3a11a96fcf665->leave($__internal_3ad649270337a9c7c086452095be24574eb902bf6536dcb074f3a11a96fcf665_prof);

        
        $__internal_ea0d00244b2bf6c3b484fccc2c2e6d06ebfc14c5da9d956294079046f34de91f->leave($__internal_ea0d00244b2bf6c3b484fccc2c2e6d06ebfc14c5da9d956294079046f34de91f_prof);

    }

    // line 117
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_df41e0bfed0fc71a96cd97a498972934dbc169f0ae862fa7168392aef6a2ae74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df41e0bfed0fc71a96cd97a498972934dbc169f0ae862fa7168392aef6a2ae74->enter($__internal_df41e0bfed0fc71a96cd97a498972934dbc169f0ae862fa7168392aef6a2ae74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_be0387ed7425a851d6c1b26130e8f8b3229684b86079a1422cd2caf9a4641a04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be0387ed7425a851d6c1b26130e8f8b3229684b86079a1422cd2caf9a4641a04->enter($__internal_be0387ed7425a851d6c1b26130e8f8b3229684b86079a1422cd2caf9a4641a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 118
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_be0387ed7425a851d6c1b26130e8f8b3229684b86079a1422cd2caf9a4641a04->leave($__internal_be0387ed7425a851d6c1b26130e8f8b3229684b86079a1422cd2caf9a4641a04_prof);

        
        $__internal_df41e0bfed0fc71a96cd97a498972934dbc169f0ae862fa7168392aef6a2ae74->leave($__internal_df41e0bfed0fc71a96cd97a498972934dbc169f0ae862fa7168392aef6a2ae74_prof);

    }

    // line 124
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_0fb3b2056cbcc9c37754fcbfa5b0fd37491702145265fd31e1c31cb5c5e52e42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fb3b2056cbcc9c37754fcbfa5b0fd37491702145265fd31e1c31cb5c5e52e42->enter($__internal_0fb3b2056cbcc9c37754fcbfa5b0fd37491702145265fd31e1c31cb5c5e52e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_31ba15fc1443381a4a1313434c57f905c7356acc523079b9ba1f20577c0fafcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ba15fc1443381a4a1313434c57f905c7356acc523079b9ba1f20577c0fafcc->enter($__internal_31ba15fc1443381a4a1313434c57f905c7356acc523079b9ba1f20577c0fafcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_31ba15fc1443381a4a1313434c57f905c7356acc523079b9ba1f20577c0fafcc->leave($__internal_31ba15fc1443381a4a1313434c57f905c7356acc523079b9ba1f20577c0fafcc_prof);

        
        $__internal_0fb3b2056cbcc9c37754fcbfa5b0fd37491702145265fd31e1c31cb5c5e52e42->leave($__internal_0fb3b2056cbcc9c37754fcbfa5b0fd37491702145265fd31e1c31cb5c5e52e42_prof);

    }

    // line 130
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_4e30c8b1a329cbf93cef3a741ee882f803777d0e1eb6b10578d2d31058703d52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e30c8b1a329cbf93cef3a741ee882f803777d0e1eb6b10578d2d31058703d52->enter($__internal_4e30c8b1a329cbf93cef3a741ee882f803777d0e1eb6b10578d2d31058703d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_6adb00f64aecaccfb34d8596dc8aa4e06929abb28b64b6137027a7e15710026f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6adb00f64aecaccfb34d8596dc8aa4e06929abb28b64b6137027a7e15710026f->enter($__internal_6adb00f64aecaccfb34d8596dc8aa4e06929abb28b64b6137027a7e15710026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 131
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_6adb00f64aecaccfb34d8596dc8aa4e06929abb28b64b6137027a7e15710026f->leave($__internal_6adb00f64aecaccfb34d8596dc8aa4e06929abb28b64b6137027a7e15710026f_prof);

        
        $__internal_4e30c8b1a329cbf93cef3a741ee882f803777d0e1eb6b10578d2d31058703d52->leave($__internal_4e30c8b1a329cbf93cef3a741ee882f803777d0e1eb6b10578d2d31058703d52_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fda7738fefa04308bfecef2b8dd7ac9c1e45f822c0c0e3aa7560f1f5708b3103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fda7738fefa04308bfecef2b8dd7ac9c1e45f822c0c0e3aa7560f1f5708b3103->enter($__internal_fda7738fefa04308bfecef2b8dd7ac9c1e45f822c0c0e3aa7560f1f5708b3103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6b47928a8b69e00a41abffa17dc974ce2f6504f9e2c2062c6b32bfaa3181f772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b47928a8b69e00a41abffa17dc974ce2f6504f9e2c2062c6b32bfaa3181f772->enter($__internal_6b47928a8b69e00a41abffa17dc974ce2f6504f9e2c2062c6b32bfaa3181f772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        echo "
    <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_6b47928a8b69e00a41abffa17dc974ce2f6504f9e2c2062c6b32bfaa3181f772->leave($__internal_6b47928a8b69e00a41abffa17dc974ce2f6504f9e2c2062c6b32bfaa3181f772_prof);

        
        $__internal_fda7738fefa04308bfecef2b8dd7ac9c1e45f822c0c0e3aa7560f1f5708b3103->leave($__internal_fda7738fefa04308bfecef2b8dd7ac9c1e45f822c0c0e3aa7560f1f5708b3103_prof);

    }

    // line 150
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_618bae46cc91c8e7718ac2d56b2df9c0f5487dc20c514d003b41b3e6be590a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618bae46cc91c8e7718ac2d56b2df9c0f5487dc20c514d003b41b3e6be590a05->enter($__internal_618bae46cc91c8e7718ac2d56b2df9c0f5487dc20c514d003b41b3e6be590a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_c5ae888c4929bd093ca6ef2663050d65830acc0040e8d2652b142478154c83e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ae888c4929bd093ca6ef2663050d65830acc0040e8d2652b142478154c83e2->enter($__internal_c5ae888c4929bd093ca6ef2663050d65830acc0040e8d2652b142478154c83e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_c5ae888c4929bd093ca6ef2663050d65830acc0040e8d2652b142478154c83e2->leave($__internal_c5ae888c4929bd093ca6ef2663050d65830acc0040e8d2652b142478154c83e2_prof);

        
        $__internal_618bae46cc91c8e7718ac2d56b2df9c0f5487dc20c514d003b41b3e6be590a05->leave($__internal_618bae46cc91c8e7718ac2d56b2df9c0f5487dc20c514d003b41b3e6be590a05_prof);

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
        return array (  551 => 150,  538 => 145,  535 => 144,  526 => 143,  510 => 131,  501 => 130,  484 => 124,  471 => 118,  462 => 117,  444 => 115,  426 => 114,  413 => 87,  408 => 85,  403 => 84,  400 => 83,  391 => 82,  379 => 61,  375 => 60,  371 => 59,  366 => 58,  357 => 57,  344 => 45,  340 => 43,  331 => 42,  318 => 73,  311 => 69,  307 => 68,  303 => 66,  298 => 63,  296 => 57,  292 => 55,  290 => 54,  282 => 48,  280 => 42,  277 => 41,  268 => 40,  251 => 28,  242 => 27,  230 => 18,  225 => 17,  216 => 16,  198 => 13,  186 => 152,  184 => 150,  181 => 148,  179 => 143,  173 => 138,  171 => 130,  164 => 125,  162 => 124,  156 => 120,  154 => 117,  148 => 115,  146 => 114,  135 => 106,  131 => 105,  127 => 104,  123 => 103,  119 => 102,  115 => 101,  111 => 100,  98 => 89,  96 => 82,  89 => 77,  87 => 40,  80 => 36,  76 => 34,  73 => 27,  67 => 23,  62 => 20,  59 => 16,  54 => 13,  41 => 2,  39 => 1,);
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
\t\t\t\t{% else %}
\t\t\t\t\t<div class=\"navbar-custom-menu\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_login') }}\">Login</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_registration_register') }}\">Register</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
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
                <div class=\"navbar-custom-menu\">
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
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
