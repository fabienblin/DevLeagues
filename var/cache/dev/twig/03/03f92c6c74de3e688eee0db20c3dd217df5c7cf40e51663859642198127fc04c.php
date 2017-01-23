<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_215e755e0392f5a86e985d84aa289b41bd45990bc08faf06de7cbcc0bb646a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts_head' => array($this, 'block_javascripts_head'),
            'page_content' => array($this, 'block_page_content'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascripts_inline' => array($this, 'block_javascripts_inline'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a14f18c00987968b0f987b54b10511731a2bdcedfa2cec5df26b84b382b9d34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a14f18c00987968b0f987b54b10511731a2bdcedfa2cec5df26b84b382b9d34->enter($__internal_2a14f18c00987968b0f987b54b10511731a2bdcedfa2cec5df26b84b382b9d34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        $__internal_be2b093cc60307e90c5b5a3de54ab79c5e973fa73f48272433309244fd0c2297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2b093cc60307e90c5b5a3de54ab79c5e973fa73f48272433309244fd0c2297->enter($__internal_be2b093cc60307e90c5b5a3de54ab79c5e973fa73f48272433309244fd0c2297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("AvanzuAdminThemeBundle:layout:macros.html.twig", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", 1);
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
        // line 19
        echo "

    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

    ";
        // line 24
        echo "    ";
        $this->displayBlock('javascripts_head', $context, $blocks);
        // line 31
        echo "
</head>
<body class=\"login-page\">
";
        // line 34
        $this->displayBlock('page_content', $context, $blocks);
        // line 35
        echo "

";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 41
        echo "
";
        // line 43
        $this->displayBlock('javascripts_inline', $context, $blocks);
        // line 45
        echo "</body>
</html>
";
        
        $__internal_2a14f18c00987968b0f987b54b10511731a2bdcedfa2cec5df26b84b382b9d34->leave($__internal_2a14f18c00987968b0f987b54b10511731a2bdcedfa2cec5df26b84b382b9d34_prof);

        
        $__internal_be2b093cc60307e90c5b5a3de54ab79c5e973fa73f48272433309244fd0c2297->leave($__internal_be2b093cc60307e90c5b5a3de54ab79c5e973fa73f48272433309244fd0c2297_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9c4cd67e36398503c01574096a94f7858a191684ec4be4ba87035d7089d290f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9c4cd67e36398503c01574096a94f7858a191684ec4be4ba87035d7089d290f->enter($__internal_b9c4cd67e36398503c01574096a94f7858a191684ec4be4ba87035d7089d290f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_67d4091d3e0cf4ce274caf67fdb1679e9b0b22bbe15bdaa4bf64a2919c37ed6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67d4091d3e0cf4ce274caf67fdb1679e9b0b22bbe15bdaa4bf64a2919c37ed6f->enter($__internal_67d4091d3e0cf4ce274caf67fdb1679e9b0b22bbe15bdaa4bf64a2919c37ed6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_67d4091d3e0cf4ce274caf67fdb1679e9b0b22bbe15bdaa4bf64a2919c37ed6f->leave($__internal_67d4091d3e0cf4ce274caf67fdb1679e9b0b22bbe15bdaa4bf64a2919c37ed6f_prof);

        
        $__internal_b9c4cd67e36398503c01574096a94f7858a191684ec4be4ba87035d7089d290f->leave($__internal_b9c4cd67e36398503c01574096a94f7858a191684ec4be4ba87035d7089d290f_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eb3433c6aa38ac13e94245316937389363ece6ba1ccb8bbb1eca131d35afc08f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb3433c6aa38ac13e94245316937389363ece6ba1ccb8bbb1eca131d35afc08f->enter($__internal_eb3433c6aa38ac13e94245316937389363ece6ba1ccb8bbb1eca131d35afc08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_bbe557890a1bcaa109ed7f051469e48e5ff44eb976a80aeded872bd53d1276d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe557890a1bcaa109ed7f051469e48e5ff44eb976a80aeded872bd53d1276d3->enter($__internal_bbe557890a1bcaa109ed7f051469e48e5ff44eb976a80aeded872bd53d1276d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_bbe557890a1bcaa109ed7f051469e48e5ff44eb976a80aeded872bd53d1276d3->leave($__internal_bbe557890a1bcaa109ed7f051469e48e5ff44eb976a80aeded872bd53d1276d3_prof);

        
        $__internal_eb3433c6aa38ac13e94245316937389363ece6ba1ccb8bbb1eca131d35afc08f->leave($__internal_eb3433c6aa38ac13e94245316937389363ece6ba1ccb8bbb1eca131d35afc08f_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_707f9575b064c1b9636ccbaed77ba2941bf8271c5c7dfb139605dcf35dd3e9cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707f9575b064c1b9636ccbaed77ba2941bf8271c5c7dfb139605dcf35dd3e9cf->enter($__internal_707f9575b064c1b9636ccbaed77ba2941bf8271c5c7dfb139605dcf35dd3e9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_f43bf45c6b0fd14248d9c2cd54a6d9ede3554a3bf0e989c90c98bee341fe390f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43bf45c6b0fd14248d9c2cd54a6d9ede3554a3bf0e989c90c98bee341fe390f->enter($__internal_f43bf45c6b0fd14248d9c2cd54a6d9ede3554a3bf0e989c90c98bee341fe390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_f43bf45c6b0fd14248d9c2cd54a6d9ede3554a3bf0e989c90c98bee341fe390f->leave($__internal_f43bf45c6b0fd14248d9c2cd54a6d9ede3554a3bf0e989c90c98bee341fe390f_prof);

        
        $__internal_707f9575b064c1b9636ccbaed77ba2941bf8271c5c7dfb139605dcf35dd3e9cf->leave($__internal_707f9575b064c1b9636ccbaed77ba2941bf8271c5c7dfb139605dcf35dd3e9cf_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_ccec02636e8db9a1decaffe4241ec84692e44bee15a9a96b27332a3081801746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccec02636e8db9a1decaffe4241ec84692e44bee15a9a96b27332a3081801746->enter($__internal_ccec02636e8db9a1decaffe4241ec84692e44bee15a9a96b27332a3081801746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_c7e6e837b9087279cf04314691c03d03cf8c3680265af94e564ec2171050d361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e6e837b9087279cf04314691c03d03cf8c3680265af94e564ec2171050d361->enter($__internal_c7e6e837b9087279cf04314691c03d03cf8c3680265af94e564ec2171050d361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_c7e6e837b9087279cf04314691c03d03cf8c3680265af94e564ec2171050d361->leave($__internal_c7e6e837b9087279cf04314691c03d03cf8c3680265af94e564ec2171050d361_prof);

        
        $__internal_ccec02636e8db9a1decaffe4241ec84692e44bee15a9a96b27332a3081801746->leave($__internal_ccec02636e8db9a1decaffe4241ec84692e44bee15a9a96b27332a3081801746_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_350821b42525b1b2f19426dcafff24f213ccaff0c1d59a0952e7020677ed13b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_350821b42525b1b2f19426dcafff24f213ccaff0c1d59a0952e7020677ed13b3->enter($__internal_350821b42525b1b2f19426dcafff24f213ccaff0c1d59a0952e7020677ed13b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5a15a008875a5a0e0fd2ae614bd5875218edafd1026ef53a35597aef3b724f52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a15a008875a5a0e0fd2ae614bd5875218edafd1026ef53a35597aef3b724f52->enter($__internal_5a15a008875a5a0e0fd2ae614bd5875218edafd1026ef53a35597aef3b724f52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5a15a008875a5a0e0fd2ae614bd5875218edafd1026ef53a35597aef3b724f52->leave($__internal_5a15a008875a5a0e0fd2ae614bd5875218edafd1026ef53a35597aef3b724f52_prof);

        
        $__internal_350821b42525b1b2f19426dcafff24f213ccaff0c1d59a0952e7020677ed13b3->leave($__internal_350821b42525b1b2f19426dcafff24f213ccaff0c1d59a0952e7020677ed13b3_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_a04e205654cd4b85a4635d21f0f92721acc99e568697264f87b92842a1228daa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04e205654cd4b85a4635d21f0f92721acc99e568697264f87b92842a1228daa->enter($__internal_a04e205654cd4b85a4635d21f0f92721acc99e568697264f87b92842a1228daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_7f6b573d221a0b72d9b3e65bd1084dc66e3a50ea0723b4643a3a7f528c1eb34b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6b573d221a0b72d9b3e65bd1084dc66e3a50ea0723b4643a3a7f528c1eb34b->enter($__internal_7f6b573d221a0b72d9b3e65bd1084dc66e3a50ea0723b4643a3a7f528c1eb34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_7f6b573d221a0b72d9b3e65bd1084dc66e3a50ea0723b4643a3a7f528c1eb34b->leave($__internal_7f6b573d221a0b72d9b3e65bd1084dc66e3a50ea0723b4643a3a7f528c1eb34b_prof);

        
        $__internal_a04e205654cd4b85a4635d21f0f92721acc99e568697264f87b92842a1228daa->leave($__internal_a04e205654cd4b85a4635d21f0f92721acc99e568697264f87b92842a1228daa_prof);

    }

    public function getTemplateName()
    {
        return "AvanzuAdminThemeBundle:layout:login-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 43,  188 => 39,  179 => 38,  162 => 34,  145 => 25,  136 => 24,  123 => 17,  114 => 16,  96 => 13,  84 => 45,  82 => 43,  79 => 41,  77 => 38,  73 => 35,  71 => 34,  66 => 31,  63 => 24,  58 => 21,  54 => 19,  51 => 16,  46 => 13,  33 => 2,  31 => 1,);
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
    {% endblock %}


    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

    {# --------------------------------------------------------------------------------------------- JAVASCRIPTS_HEAD #}
    {%  block javascripts_head %}
        <script type=\"text/javascript\" src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/modernizr.js') }}\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    {% endblock %}

</head>
<body class=\"login-page\">
{% block page_content %}{% endblock %}


{# ------------------------------------------------------------------------------------------------------ JAVASCRIPTS #}
{% block javascripts %}
    <script src=\"{{ asset('bundles/avanzuadmintheme/static/'~ app.environment ~'/scripts/admin-lte-all.js') }}\"></script>
{% endblock %}

{# ----------------------------------------------------------------------------------------------- JAVASCRIPTS_INLINE #}
{% block javascripts_inline %}
{% endblock %}
</body>
</html>
", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/layout/login-layout.html.twig");
    }
}
