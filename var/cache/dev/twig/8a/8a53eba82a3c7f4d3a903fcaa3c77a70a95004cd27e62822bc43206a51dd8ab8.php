<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_8828af61009d15d91f5d7f27f4677ea6d62177b1cc27dd4bf9ad2f603a5f3dea extends Twig_Template
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
        $__internal_03611d0ce911fcdc62f3aa52e262bafaba9500c9ebbb65f317b9e28d6173cad4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03611d0ce911fcdc62f3aa52e262bafaba9500c9ebbb65f317b9e28d6173cad4->enter($__internal_03611d0ce911fcdc62f3aa52e262bafaba9500c9ebbb65f317b9e28d6173cad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        $__internal_6fb2cd40df259aec1412e66c02f84f5a0e2e894eb6633d43895fdf216cd9e274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb2cd40df259aec1412e66c02f84f5a0e2e894eb6633d43895fdf216cd9e274->enter($__internal_6fb2cd40df259aec1412e66c02f84f5a0e2e894eb6633d43895fdf216cd9e274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_03611d0ce911fcdc62f3aa52e262bafaba9500c9ebbb65f317b9e28d6173cad4->leave($__internal_03611d0ce911fcdc62f3aa52e262bafaba9500c9ebbb65f317b9e28d6173cad4_prof);

        
        $__internal_6fb2cd40df259aec1412e66c02f84f5a0e2e894eb6633d43895fdf216cd9e274->leave($__internal_6fb2cd40df259aec1412e66c02f84f5a0e2e894eb6633d43895fdf216cd9e274_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c91ea5e66bf472181c4eacdc5c70812238321cbcaff4f3ab822f1e923acdb56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c91ea5e66bf472181c4eacdc5c70812238321cbcaff4f3ab822f1e923acdb56->enter($__internal_8c91ea5e66bf472181c4eacdc5c70812238321cbcaff4f3ab822f1e923acdb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14314af150a0936b79a967454c2e38e5a00cbd143179c1643ef0feb9d30ef91e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14314af150a0936b79a967454c2e38e5a00cbd143179c1643ef0feb9d30ef91e->enter($__internal_14314af150a0936b79a967454c2e38e5a00cbd143179c1643ef0feb9d30ef91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_14314af150a0936b79a967454c2e38e5a00cbd143179c1643ef0feb9d30ef91e->leave($__internal_14314af150a0936b79a967454c2e38e5a00cbd143179c1643ef0feb9d30ef91e_prof);

        
        $__internal_8c91ea5e66bf472181c4eacdc5c70812238321cbcaff4f3ab822f1e923acdb56->leave($__internal_8c91ea5e66bf472181c4eacdc5c70812238321cbcaff4f3ab822f1e923acdb56_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_824491746237f9fe0557622fd8bc131797d9b79929b582be69ee2b00ce115d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824491746237f9fe0557622fd8bc131797d9b79929b582be69ee2b00ce115d01->enter($__internal_824491746237f9fe0557622fd8bc131797d9b79929b582be69ee2b00ce115d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e0612ba21be35a7d29e36f1346b15326ff0ac4e3aea8e7462dd9a80d151e9cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0612ba21be35a7d29e36f1346b15326ff0ac4e3aea8e7462dd9a80d151e9cf0->enter($__internal_e0612ba21be35a7d29e36f1346b15326ff0ac4e3aea8e7462dd9a80d151e9cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_e0612ba21be35a7d29e36f1346b15326ff0ac4e3aea8e7462dd9a80d151e9cf0->leave($__internal_e0612ba21be35a7d29e36f1346b15326ff0ac4e3aea8e7462dd9a80d151e9cf0_prof);

        
        $__internal_824491746237f9fe0557622fd8bc131797d9b79929b582be69ee2b00ce115d01->leave($__internal_824491746237f9fe0557622fd8bc131797d9b79929b582be69ee2b00ce115d01_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_b1c4bd5ef264f9080190e95470a907d099e561ed55701fe593e2b8aa55dc63d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1c4bd5ef264f9080190e95470a907d099e561ed55701fe593e2b8aa55dc63d0->enter($__internal_b1c4bd5ef264f9080190e95470a907d099e561ed55701fe593e2b8aa55dc63d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_9a80a5253b53dd02c1073af6ff1755e36dee20dde0b7fe9aa393880f09d2dab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a80a5253b53dd02c1073af6ff1755e36dee20dde0b7fe9aa393880f09d2dab4->enter($__internal_9a80a5253b53dd02c1073af6ff1755e36dee20dde0b7fe9aa393880f09d2dab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_9a80a5253b53dd02c1073af6ff1755e36dee20dde0b7fe9aa393880f09d2dab4->leave($__internal_9a80a5253b53dd02c1073af6ff1755e36dee20dde0b7fe9aa393880f09d2dab4_prof);

        
        $__internal_b1c4bd5ef264f9080190e95470a907d099e561ed55701fe593e2b8aa55dc63d0->leave($__internal_b1c4bd5ef264f9080190e95470a907d099e561ed55701fe593e2b8aa55dc63d0_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_85e4cef9ee3003c8be9629e40295938351f43faf97e74997e3450bd4da705565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85e4cef9ee3003c8be9629e40295938351f43faf97e74997e3450bd4da705565->enter($__internal_85e4cef9ee3003c8be9629e40295938351f43faf97e74997e3450bd4da705565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_a2af893f67ef1cc604472db3bdbf925afbf915663b2c7ad16a941a96753a47fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2af893f67ef1cc604472db3bdbf925afbf915663b2c7ad16a941a96753a47fc->enter($__internal_a2af893f67ef1cc604472db3bdbf925afbf915663b2c7ad16a941a96753a47fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_a2af893f67ef1cc604472db3bdbf925afbf915663b2c7ad16a941a96753a47fc->leave($__internal_a2af893f67ef1cc604472db3bdbf925afbf915663b2c7ad16a941a96753a47fc_prof);

        
        $__internal_85e4cef9ee3003c8be9629e40295938351f43faf97e74997e3450bd4da705565->leave($__internal_85e4cef9ee3003c8be9629e40295938351f43faf97e74997e3450bd4da705565_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7fd31eec6a230ec9c68d5e8f4fb4c93282a47f69337a2891aec7ddbc3c942b01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd31eec6a230ec9c68d5e8f4fb4c93282a47f69337a2891aec7ddbc3c942b01->enter($__internal_7fd31eec6a230ec9c68d5e8f4fb4c93282a47f69337a2891aec7ddbc3c942b01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_90b24eb9653b983711169d2eaba5b81f9706bdb764a922d4b1186b010cf47d5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90b24eb9653b983711169d2eaba5b81f9706bdb764a922d4b1186b010cf47d5c->enter($__internal_90b24eb9653b983711169d2eaba5b81f9706bdb764a922d4b1186b010cf47d5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_90b24eb9653b983711169d2eaba5b81f9706bdb764a922d4b1186b010cf47d5c->leave($__internal_90b24eb9653b983711169d2eaba5b81f9706bdb764a922d4b1186b010cf47d5c_prof);

        
        $__internal_7fd31eec6a230ec9c68d5e8f4fb4c93282a47f69337a2891aec7ddbc3c942b01->leave($__internal_7fd31eec6a230ec9c68d5e8f4fb4c93282a47f69337a2891aec7ddbc3c942b01_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_5a40174a15097f369204d137460342af3938775bf6ae83703ab279b04949b3bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a40174a15097f369204d137460342af3938775bf6ae83703ab279b04949b3bb->enter($__internal_5a40174a15097f369204d137460342af3938775bf6ae83703ab279b04949b3bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_df37d9fee576dbceebcf84e975982d4cf70d1e09e926748fb85df8fa518cbeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df37d9fee576dbceebcf84e975982d4cf70d1e09e926748fb85df8fa518cbeb0->enter($__internal_df37d9fee576dbceebcf84e975982d4cf70d1e09e926748fb85df8fa518cbeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_df37d9fee576dbceebcf84e975982d4cf70d1e09e926748fb85df8fa518cbeb0->leave($__internal_df37d9fee576dbceebcf84e975982d4cf70d1e09e926748fb85df8fa518cbeb0_prof);

        
        $__internal_5a40174a15097f369204d137460342af3938775bf6ae83703ab279b04949b3bb->leave($__internal_5a40174a15097f369204d137460342af3938775bf6ae83703ab279b04949b3bb_prof);

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
