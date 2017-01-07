<?php

/* AvanzuAdminThemeBundle:layout:base-layout.html.twig */
class __TwigTemplate_aee09ce490fbf20ed956cb464cf131740d04037655decad4b6bb7e25b611d9df extends Twig_Template
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
        $__internal_7ce78be1742f80ae9dcd046e24cba0c45028654fc7da4b1eda8657a8de5bdeb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ce78be1742f80ae9dcd046e24cba0c45028654fc7da4b1eda8657a8de5bdeb4->enter($__internal_7ce78be1742f80ae9dcd046e24cba0c45028654fc7da4b1eda8657a8de5bdeb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

        $__internal_f923b5186a1d23febb16ba8d087fa4fc3799e6571b9d3e9a52293d0ed4c87eaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f923b5186a1d23febb16ba8d087fa4fc3799e6571b9d3e9a52293d0ed4c87eaa->enter($__internal_f923b5186a1d23febb16ba8d087fa4fc3799e6571b9d3e9a52293d0ed4c87eaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:base-layout.html.twig"));

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
        
        $__internal_7ce78be1742f80ae9dcd046e24cba0c45028654fc7da4b1eda8657a8de5bdeb4->leave($__internal_7ce78be1742f80ae9dcd046e24cba0c45028654fc7da4b1eda8657a8de5bdeb4_prof);

        
        $__internal_f923b5186a1d23febb16ba8d087fa4fc3799e6571b9d3e9a52293d0ed4c87eaa->leave($__internal_f923b5186a1d23febb16ba8d087fa4fc3799e6571b9d3e9a52293d0ed4c87eaa_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7a0c043f0d96e46621026477e11d4d5615ee9abd1b7891547bf569f9915e281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a0c043f0d96e46621026477e11d4d5615ee9abd1b7891547bf569f9915e281->enter($__internal_d7a0c043f0d96e46621026477e11d4d5615ee9abd1b7891547bf569f9915e281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9d8c54a013d66612b5015acf2eef2000846f5b96a59b302e9af0bd55bed3a03c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d8c54a013d66612b5015acf2eef2000846f5b96a59b302e9af0bd55bed3a03c->enter($__internal_9d8c54a013d66612b5015acf2eef2000846f5b96a59b302e9af0bd55bed3a03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_9d8c54a013d66612b5015acf2eef2000846f5b96a59b302e9af0bd55bed3a03c->leave($__internal_9d8c54a013d66612b5015acf2eef2000846f5b96a59b302e9af0bd55bed3a03c_prof);

        
        $__internal_d7a0c043f0d96e46621026477e11d4d5615ee9abd1b7891547bf569f9915e281->leave($__internal_d7a0c043f0d96e46621026477e11d4d5615ee9abd1b7891547bf569f9915e281_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_517514da19c71a069db2732c9ed0eaa53958cfdd067d7a7b3ae133c8d5a491e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_517514da19c71a069db2732c9ed0eaa53958cfdd067d7a7b3ae133c8d5a491e4->enter($__internal_517514da19c71a069db2732c9ed0eaa53958cfdd067d7a7b3ae133c8d5a491e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_30000557dff086dc70a34acaa4a57fa70bbf55b92c6226906eb34dec33b960c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30000557dff086dc70a34acaa4a57fa70bbf55b92c6226906eb34dec33b960c0->enter($__internal_30000557dff086dc70a34acaa4a57fa70bbf55b92c6226906eb34dec33b960c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/devleagues/css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_30000557dff086dc70a34acaa4a57fa70bbf55b92c6226906eb34dec33b960c0->leave($__internal_30000557dff086dc70a34acaa4a57fa70bbf55b92c6226906eb34dec33b960c0_prof);

        
        $__internal_517514da19c71a069db2732c9ed0eaa53958cfdd067d7a7b3ae133c8d5a491e4->leave($__internal_517514da19c71a069db2732c9ed0eaa53958cfdd067d7a7b3ae133c8d5a491e4_prof);

    }

    // line 27
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_369e0d2ef6c7002346dfa48ab504965a30f654a2067d0ed2451bd3a7ab5c9618 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369e0d2ef6c7002346dfa48ab504965a30f654a2067d0ed2451bd3a7ab5c9618->enter($__internal_369e0d2ef6c7002346dfa48ab504965a30f654a2067d0ed2451bd3a7ab5c9618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_9edc44c5863c6e654cbfe9fe7370ab839fa9c380f31d0128eb2cafc8279c5b56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9edc44c5863c6e654cbfe9fe7370ab839fa9c380f31d0128eb2cafc8279c5b56->enter($__internal_9edc44c5863c6e654cbfe9fe7370ab839fa9c380f31d0128eb2cafc8279c5b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 28
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_9edc44c5863c6e654cbfe9fe7370ab839fa9c380f31d0128eb2cafc8279c5b56->leave($__internal_9edc44c5863c6e654cbfe9fe7370ab839fa9c380f31d0128eb2cafc8279c5b56_prof);

        
        $__internal_369e0d2ef6c7002346dfa48ab504965a30f654a2067d0ed2451bd3a7ab5c9618->leave($__internal_369e0d2ef6c7002346dfa48ab504965a30f654a2067d0ed2451bd3a7ab5c9618_prof);

    }

    // line 40
    public function block_avanzu_admin_header($context, array $blocks = array())
    {
        $__internal_82d4ecd67a5727390a3e7cb14c303e02bf99bc0413e602a61004be172a1d751f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d4ecd67a5727390a3e7cb14c303e02bf99bc0413e602a61004be172a1d751f->enter($__internal_82d4ecd67a5727390a3e7cb14c303e02bf99bc0413e602a61004be172a1d751f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

        $__internal_8f9ab149949553a54f6b6c529d899ff3fa5125090e4b37fe1f8f4129b764ea77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f9ab149949553a54f6b6c529d899ff3fa5125090e4b37fe1f8f4129b764ea77->enter($__internal_8f9ab149949553a54f6b6c529d899ff3fa5125090e4b37fe1f8f4129b764ea77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_header"));

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
        
        $__internal_8f9ab149949553a54f6b6c529d899ff3fa5125090e4b37fe1f8f4129b764ea77->leave($__internal_8f9ab149949553a54f6b6c529d899ff3fa5125090e4b37fe1f8f4129b764ea77_prof);

        
        $__internal_82d4ecd67a5727390a3e7cb14c303e02bf99bc0413e602a61004be172a1d751f->leave($__internal_82d4ecd67a5727390a3e7cb14c303e02bf99bc0413e602a61004be172a1d751f_prof);

    }

    // line 42
    public function block_avanzu_logo($context, array $blocks = array())
    {
        $__internal_2aaad96a7d17d3be8f873b98581e8c240e688ae8b4da271bb256f7e52beaa3dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2aaad96a7d17d3be8f873b98581e8c240e688ae8b4da271bb256f7e52beaa3dd->enter($__internal_2aaad96a7d17d3be8f873b98581e8c240e688ae8b4da271bb256f7e52beaa3dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        $__internal_f859bd16883680bb7a48a9165730b631897a6e981c12e7c5f4b454ebecb1376b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f859bd16883680bb7a48a9165730b631897a6e981c12e7c5f4b454ebecb1376b->enter($__internal_f859bd16883680bb7a48a9165730b631897a6e981c12e7c5f4b454ebecb1376b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_logo"));

        // line 43
        echo "                <a href=\"#\" class=\"logo\">
                    <!-- Add the class icon to your logo image or logo icon to add the margining -->
                    ";
        // line 45
        $this->displayBlock("title", $context, $blocks);
        echo "
                </a>
            ";
        
        $__internal_f859bd16883680bb7a48a9165730b631897a6e981c12e7c5f4b454ebecb1376b->leave($__internal_f859bd16883680bb7a48a9165730b631897a6e981c12e7c5f4b454ebecb1376b_prof);

        
        $__internal_2aaad96a7d17d3be8f873b98581e8c240e688ae8b4da271bb256f7e52beaa3dd->leave($__internal_2aaad96a7d17d3be8f873b98581e8c240e688ae8b4da271bb256f7e52beaa3dd_prof);

    }

    // line 57
    public function block_avanzu_navbar($context, array $blocks = array())
    {
        $__internal_687247160dfb205b69e01e89e41d7e904e93d8f21c112ad49dab1f7a67484606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687247160dfb205b69e01e89e41d7e904e93d8f21c112ad49dab1f7a67484606->enter($__internal_687247160dfb205b69e01e89e41d7e904e93d8f21c112ad49dab1f7a67484606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

        $__internal_f0bce5135622dd2cf39eb083b842e9a2f81ea91a4a3c0a72d544f06c9c7af944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bce5135622dd2cf39eb083b842e9a2f81ea91a4a3c0a72d544f06c9c7af944->enter($__internal_f0bce5135622dd2cf39eb083b842e9a2f81ea91a4a3c0a72d544f06c9c7af944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_navbar"));

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
        
        $__internal_f0bce5135622dd2cf39eb083b842e9a2f81ea91a4a3c0a72d544f06c9c7af944->leave($__internal_f0bce5135622dd2cf39eb083b842e9a2f81ea91a4a3c0a72d544f06c9c7af944_prof);

        
        $__internal_687247160dfb205b69e01e89e41d7e904e93d8f21c112ad49dab1f7a67484606->leave($__internal_687247160dfb205b69e01e89e41d7e904e93d8f21c112ad49dab1f7a67484606_prof);

    }

    // line 75
    public function block_avanzu_sidebar($context, array $blocks = array())
    {
        $__internal_a7f679d0cd52811e8f9c02f9b2a91de3add994b1ad35e8c354fbc6d1e5ae106a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7f679d0cd52811e8f9c02f9b2a91de3add994b1ad35e8c354fbc6d1e5ae106a->enter($__internal_a7f679d0cd52811e8f9c02f9b2a91de3add994b1ad35e8c354fbc6d1e5ae106a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

        $__internal_89e7f8692889284eeeac68c0b0c9363c49685251561e7fa6514a3208296a7eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89e7f8692889284eeeac68c0b0c9363c49685251561e7fa6514a3208296a7eb4->enter($__internal_89e7f8692889284eeeac68c0b0c9363c49685251561e7fa6514a3208296a7eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_sidebar"));

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
        
        $__internal_89e7f8692889284eeeac68c0b0c9363c49685251561e7fa6514a3208296a7eb4->leave($__internal_89e7f8692889284eeeac68c0b0c9363c49685251561e7fa6514a3208296a7eb4_prof);

        
        $__internal_a7f679d0cd52811e8f9c02f9b2a91de3add994b1ad35e8c354fbc6d1e5ae106a->leave($__internal_a7f679d0cd52811e8f9c02f9b2a91de3add994b1ad35e8c354fbc6d1e5ae106a_prof);

    }

    // line 107
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_11a6f2fe3601feb99ca6a45f57c814e8dd61d174f05a45efe7921c42044b4346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11a6f2fe3601feb99ca6a45f57c814e8dd61d174f05a45efe7921c42044b4346->enter($__internal_11a6f2fe3601feb99ca6a45f57c814e8dd61d174f05a45efe7921c42044b4346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_63d1b32c973a09ae22330e4a2ac68643c6440170a5e77eaba248a5c45f60b71b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d1b32c973a09ae22330e4a2ac68643c6440170a5e77eaba248a5c45f60b71b->enter($__internal_63d1b32c973a09ae22330e4a2ac68643c6440170a5e77eaba248a5c45f60b71b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Blank page";
        
        $__internal_63d1b32c973a09ae22330e4a2ac68643c6440170a5e77eaba248a5c45f60b71b->leave($__internal_63d1b32c973a09ae22330e4a2ac68643c6440170a5e77eaba248a5c45f60b71b_prof);

        
        $__internal_11a6f2fe3601feb99ca6a45f57c814e8dd61d174f05a45efe7921c42044b4346->leave($__internal_11a6f2fe3601feb99ca6a45f57c814e8dd61d174f05a45efe7921c42044b4346_prof);

    }

    // line 108
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_52eb2b6e3cccbc0226188c186e130944c23442d857aff60790effb7a14193ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52eb2b6e3cccbc0226188c186e130944c23442d857aff60790effb7a14193ff7->enter($__internal_52eb2b6e3cccbc0226188c186e130944c23442d857aff60790effb7a14193ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_c58690514253c50b0ba6707efac790bda6669525145a1c2fb91ff43888a82590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c58690514253c50b0ba6707efac790bda6669525145a1c2fb91ff43888a82590->enter($__internal_c58690514253c50b0ba6707efac790bda6669525145a1c2fb91ff43888a82590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Control panel";
        
        $__internal_c58690514253c50b0ba6707efac790bda6669525145a1c2fb91ff43888a82590->leave($__internal_c58690514253c50b0ba6707efac790bda6669525145a1c2fb91ff43888a82590_prof);

        
        $__internal_52eb2b6e3cccbc0226188c186e130944c23442d857aff60790effb7a14193ff7->leave($__internal_52eb2b6e3cccbc0226188c186e130944c23442d857aff60790effb7a14193ff7_prof);

    }

    // line 110
    public function block_avanzu_breadcrumb($context, array $blocks = array())
    {
        $__internal_2c103249dfd2f22c6e6eb9f9509badd9f15ae28bd27d213407f67a4a25e437cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c103249dfd2f22c6e6eb9f9509badd9f15ae28bd27d213407f67a4a25e437cc->enter($__internal_2c103249dfd2f22c6e6eb9f9509badd9f15ae28bd27d213407f67a4a25e437cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        $__internal_e94e3b452b0626fcec89443a6b481c94cd543b6ad006ed6019174acb2d5ecd7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e94e3b452b0626fcec89443a6b481c94cd543b6ad006ed6019174acb2d5ecd7d->enter($__internal_e94e3b452b0626fcec89443a6b481c94cd543b6ad006ed6019174acb2d5ecd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_breadcrumb"));

        // line 111
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("AvanzuAdminThemeBundle:Breadcrumb:breadcrumb", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "title" =>         $this->renderBlock("page_title", $context, $blocks))));
        echo "
                ";
        
        $__internal_e94e3b452b0626fcec89443a6b481c94cd543b6ad006ed6019174acb2d5ecd7d->leave($__internal_e94e3b452b0626fcec89443a6b481c94cd543b6ad006ed6019174acb2d5ecd7d_prof);

        
        $__internal_2c103249dfd2f22c6e6eb9f9509badd9f15ae28bd27d213407f67a4a25e437cc->leave($__internal_2c103249dfd2f22c6e6eb9f9509badd9f15ae28bd27d213407f67a4a25e437cc_prof);

    }

    // line 117
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_85e5adc6d984051ed445938523c2d23be039017e5f42279de7d3451703a87c7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e5adc6d984051ed445938523c2d23be039017e5f42279de7d3451703a87c7a->enter($__internal_85e5adc6d984051ed445938523c2d23be039017e5f42279de7d3451703a87c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_bef366c81b53d29a025b1746312045a7430690faa186d68586df3ff38b89889f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bef366c81b53d29a025b1746312045a7430690faa186d68586df3ff38b89889f->enter($__internal_bef366c81b53d29a025b1746312045a7430690faa186d68586df3ff38b89889f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_bef366c81b53d29a025b1746312045a7430690faa186d68586df3ff38b89889f->leave($__internal_bef366c81b53d29a025b1746312045a7430690faa186d68586df3ff38b89889f_prof);

        
        $__internal_85e5adc6d984051ed445938523c2d23be039017e5f42279de7d3451703a87c7a->leave($__internal_85e5adc6d984051ed445938523c2d23be039017e5f42279de7d3451703a87c7a_prof);

    }

    // line 123
    public function block_avanzu_admin_footer($context, array $blocks = array())
    {
        $__internal_85ff71ecac7730885ae7f3dbf346d9cb5441470105d10d331ca15b12f4cbf5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85ff71ecac7730885ae7f3dbf346d9cb5441470105d10d331ca15b12f4cbf5fa->enter($__internal_85ff71ecac7730885ae7f3dbf346d9cb5441470105d10d331ca15b12f4cbf5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        $__internal_182854acfc7555a66f3e6332c88dd2a2f472829c4817b3f12f45800728536668 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182854acfc7555a66f3e6332c88dd2a2f472829c4817b3f12f45800728536668->enter($__internal_182854acfc7555a66f3e6332c88dd2a2f472829c4817b3f12f45800728536668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "avanzu_admin_footer"));

        // line 124
        echo "        <footer class=\"main-footer\">
            <div class=\"pull-right hidden-xs\">
                <b>Version</b> 0.1
            </div>
            <strong>Copyright &copy; 2016-2017 DevLeagues.com</a>.</strong> All rights reserved.
        </footer>
    ";
        
        $__internal_182854acfc7555a66f3e6332c88dd2a2f472829c4817b3f12f45800728536668->leave($__internal_182854acfc7555a66f3e6332c88dd2a2f472829c4817b3f12f45800728536668_prof);

        
        $__internal_85ff71ecac7730885ae7f3dbf346d9cb5441470105d10d331ca15b12f4cbf5fa->leave($__internal_85ff71ecac7730885ae7f3dbf346d9cb5441470105d10d331ca15b12f4cbf5fa_prof);

    }

    // line 136
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b9b95293bb0f925cb256024ec7f8d12a1d35e92fdbd7a9d5bfb0aa002844bcdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9b95293bb0f925cb256024ec7f8d12a1d35e92fdbd7a9d5bfb0aa002844bcdd->enter($__internal_b9b95293bb0f925cb256024ec7f8d12a1d35e92fdbd7a9d5bfb0aa002844bcdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dcddb00855529f7f54d9467242c2d7e9d606939c8e68474b9dd0a01b828353fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcddb00855529f7f54d9467242c2d7e9d606939c8e68474b9dd0a01b828353fd->enter($__internal_dcddb00855529f7f54d9467242c2d7e9d606939c8e68474b9dd0a01b828353fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 137
        echo "
    <script src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>

";
        
        $__internal_dcddb00855529f7f54d9467242c2d7e9d606939c8e68474b9dd0a01b828353fd->leave($__internal_dcddb00855529f7f54d9467242c2d7e9d606939c8e68474b9dd0a01b828353fd_prof);

        
        $__internal_b9b95293bb0f925cb256024ec7f8d12a1d35e92fdbd7a9d5bfb0aa002844bcdd->leave($__internal_b9b95293bb0f925cb256024ec7f8d12a1d35e92fdbd7a9d5bfb0aa002844bcdd_prof);

    }

    // line 143
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_85a6f45b4ce27e86762445e21b048d19a0d4f6816ab95cd9a297d0cad3f770d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85a6f45b4ce27e86762445e21b048d19a0d4f6816ab95cd9a297d0cad3f770d5->enter($__internal_85a6f45b4ce27e86762445e21b048d19a0d4f6816ab95cd9a297d0cad3f770d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_51484d9b449691644fcdd03f3c5afdfc300e50b52037284bd68f31509996ca02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51484d9b449691644fcdd03f3c5afdfc300e50b52037284bd68f31509996ca02->enter($__internal_51484d9b449691644fcdd03f3c5afdfc300e50b52037284bd68f31509996ca02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_51484d9b449691644fcdd03f3c5afdfc300e50b52037284bd68f31509996ca02->leave($__internal_51484d9b449691644fcdd03f3c5afdfc300e50b52037284bd68f31509996ca02_prof);

        
        $__internal_85a6f45b4ce27e86762445e21b048d19a0d4f6816ab95cd9a297d0cad3f770d5->leave($__internal_85a6f45b4ce27e86762445e21b048d19a0d4f6816ab95cd9a297d0cad3f770d5_prof);

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
", "AvanzuAdminThemeBundle:layout:base-layout.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/layout/base-layout.html.twig");
    }
}
