<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_01c0a3c1395503c5d0add2552f096611f76ee9a7fc985a6d96a2d9a366848c04 extends Twig_Template
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
        $__internal_ffaed21bdf5be2701a493636a2df3959eb3fd84030e0f08cc596ae805ac819cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffaed21bdf5be2701a493636a2df3959eb3fd84030e0f08cc596ae805ac819cc->enter($__internal_ffaed21bdf5be2701a493636a2df3959eb3fd84030e0f08cc596ae805ac819cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        $__internal_50b0c6909ab67fa814eb2c4a7d5257754819f6b1e236a3e98908c55bf05d3a30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b0c6909ab67fa814eb2c4a7d5257754819f6b1e236a3e98908c55bf05d3a30->enter($__internal_50b0c6909ab67fa814eb2c4a7d5257754819f6b1e236a3e98908c55bf05d3a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_ffaed21bdf5be2701a493636a2df3959eb3fd84030e0f08cc596ae805ac819cc->leave($__internal_ffaed21bdf5be2701a493636a2df3959eb3fd84030e0f08cc596ae805ac819cc_prof);

        
        $__internal_50b0c6909ab67fa814eb2c4a7d5257754819f6b1e236a3e98908c55bf05d3a30->leave($__internal_50b0c6909ab67fa814eb2c4a7d5257754819f6b1e236a3e98908c55bf05d3a30_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_76b0e09014e397c9183cc00f8d4ca3b28016797907ade65211b683e5ee2f4444 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b0e09014e397c9183cc00f8d4ca3b28016797907ade65211b683e5ee2f4444->enter($__internal_76b0e09014e397c9183cc00f8d4ca3b28016797907ade65211b683e5ee2f4444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64d3e74f86138649269609cceb9daae2c10ccdf0cc04756c03cec8fd9f3fb8be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64d3e74f86138649269609cceb9daae2c10ccdf0cc04756c03cec8fd9f3fb8be->enter($__internal_64d3e74f86138649269609cceb9daae2c10ccdf0cc04756c03cec8fd9f3fb8be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_64d3e74f86138649269609cceb9daae2c10ccdf0cc04756c03cec8fd9f3fb8be->leave($__internal_64d3e74f86138649269609cceb9daae2c10ccdf0cc04756c03cec8fd9f3fb8be_prof);

        
        $__internal_76b0e09014e397c9183cc00f8d4ca3b28016797907ade65211b683e5ee2f4444->leave($__internal_76b0e09014e397c9183cc00f8d4ca3b28016797907ade65211b683e5ee2f4444_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f2f80645f372954f5d3b8caef8c04c2a7142982bd951c715bab64e8ffce1a63e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f80645f372954f5d3b8caef8c04c2a7142982bd951c715bab64e8ffce1a63e->enter($__internal_f2f80645f372954f5d3b8caef8c04c2a7142982bd951c715bab64e8ffce1a63e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_f9e4aa0cb10e6a8d8bf6ddd7c80e65d2a80d26690f37ce3c37fcec3778db57d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9e4aa0cb10e6a8d8bf6ddd7c80e65d2a80d26690f37ce3c37fcec3778db57d7->enter($__internal_f9e4aa0cb10e6a8d8bf6ddd7c80e65d2a80d26690f37ce3c37fcec3778db57d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_f9e4aa0cb10e6a8d8bf6ddd7c80e65d2a80d26690f37ce3c37fcec3778db57d7->leave($__internal_f9e4aa0cb10e6a8d8bf6ddd7c80e65d2a80d26690f37ce3c37fcec3778db57d7_prof);

        
        $__internal_f2f80645f372954f5d3b8caef8c04c2a7142982bd951c715bab64e8ffce1a63e->leave($__internal_f2f80645f372954f5d3b8caef8c04c2a7142982bd951c715bab64e8ffce1a63e_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_7d3be7bf77d99c5a7e5e61a6a888f8409f96369f5a1ba2a5b3dd7eab0bb76f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d3be7bf77d99c5a7e5e61a6a888f8409f96369f5a1ba2a5b3dd7eab0bb76f2d->enter($__internal_7d3be7bf77d99c5a7e5e61a6a888f8409f96369f5a1ba2a5b3dd7eab0bb76f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_4f6cd407133b76d695abd449701a0c85604d2a4871929f284d8308ac3fc924bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f6cd407133b76d695abd449701a0c85604d2a4871929f284d8308ac3fc924bc->enter($__internal_4f6cd407133b76d695abd449701a0c85604d2a4871929f284d8308ac3fc924bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_4f6cd407133b76d695abd449701a0c85604d2a4871929f284d8308ac3fc924bc->leave($__internal_4f6cd407133b76d695abd449701a0c85604d2a4871929f284d8308ac3fc924bc_prof);

        
        $__internal_7d3be7bf77d99c5a7e5e61a6a888f8409f96369f5a1ba2a5b3dd7eab0bb76f2d->leave($__internal_7d3be7bf77d99c5a7e5e61a6a888f8409f96369f5a1ba2a5b3dd7eab0bb76f2d_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_d4ee054e365ee67e3e945aa3f9bf117fa1021f8b5dc519a47ff60c6ad77df7bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4ee054e365ee67e3e945aa3f9bf117fa1021f8b5dc519a47ff60c6ad77df7bc->enter($__internal_d4ee054e365ee67e3e945aa3f9bf117fa1021f8b5dc519a47ff60c6ad77df7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_600f30b4bc5eea39cc484933e0f332e1f60144ef1dcc9f24f95b69f0dbd19a15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600f30b4bc5eea39cc484933e0f332e1f60144ef1dcc9f24f95b69f0dbd19a15->enter($__internal_600f30b4bc5eea39cc484933e0f332e1f60144ef1dcc9f24f95b69f0dbd19a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_600f30b4bc5eea39cc484933e0f332e1f60144ef1dcc9f24f95b69f0dbd19a15->leave($__internal_600f30b4bc5eea39cc484933e0f332e1f60144ef1dcc9f24f95b69f0dbd19a15_prof);

        
        $__internal_d4ee054e365ee67e3e945aa3f9bf117fa1021f8b5dc519a47ff60c6ad77df7bc->leave($__internal_d4ee054e365ee67e3e945aa3f9bf117fa1021f8b5dc519a47ff60c6ad77df7bc_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_83aeaf03015ece83a79396ff874c14e7604a895a44be54c1e3e0fd1b8b93457b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83aeaf03015ece83a79396ff874c14e7604a895a44be54c1e3e0fd1b8b93457b->enter($__internal_83aeaf03015ece83a79396ff874c14e7604a895a44be54c1e3e0fd1b8b93457b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6ed84ce4682377ffba77bd6ea42f000cf6fd07e1294073df925966a8bb9795f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed84ce4682377ffba77bd6ea42f000cf6fd07e1294073df925966a8bb9795f6->enter($__internal_6ed84ce4682377ffba77bd6ea42f000cf6fd07e1294073df925966a8bb9795f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6ed84ce4682377ffba77bd6ea42f000cf6fd07e1294073df925966a8bb9795f6->leave($__internal_6ed84ce4682377ffba77bd6ea42f000cf6fd07e1294073df925966a8bb9795f6_prof);

        
        $__internal_83aeaf03015ece83a79396ff874c14e7604a895a44be54c1e3e0fd1b8b93457b->leave($__internal_83aeaf03015ece83a79396ff874c14e7604a895a44be54c1e3e0fd1b8b93457b_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_82bef92f8ed21519c0b4a00790361538c55e0e551a2eec8c242df3c78ec23d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82bef92f8ed21519c0b4a00790361538c55e0e551a2eec8c242df3c78ec23d94->enter($__internal_82bef92f8ed21519c0b4a00790361538c55e0e551a2eec8c242df3c78ec23d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_138326005718794a0bd222cd14e32e80011286706f1ec25009b626a95b767f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138326005718794a0bd222cd14e32e80011286706f1ec25009b626a95b767f79->enter($__internal_138326005718794a0bd222cd14e32e80011286706f1ec25009b626a95b767f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_138326005718794a0bd222cd14e32e80011286706f1ec25009b626a95b767f79->leave($__internal_138326005718794a0bd222cd14e32e80011286706f1ec25009b626a95b767f79_prof);

        
        $__internal_82bef92f8ed21519c0b4a00790361538c55e0e551a2eec8c242df3c78ec23d94->leave($__internal_82bef92f8ed21519c0b4a00790361538c55e0e551a2eec8c242df3c78ec23d94_prof);

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
", "AvanzuAdminThemeBundle:layout:login-layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../app/Resources/AvanzuAdminThemeBundle/views/layout/login-layout.html.twig");
    }
}
