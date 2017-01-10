<?php

/* AvanzuAdminThemeBundle:layout:login-layout.html.twig */
class __TwigTemplate_074d2e474845a41cf590eba42aad183eeb6d096e01dc1f47306d77f35cd65add extends Twig_Template
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
        $__internal_55dd03f286078a3e3a2f4782a3f13b1a0e77923ccafb3afc5f4e530301734c1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55dd03f286078a3e3a2f4782a3f13b1a0e77923ccafb3afc5f4e530301734c1e->enter($__internal_55dd03f286078a3e3a2f4782a3f13b1a0e77923ccafb3afc5f4e530301734c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

        $__internal_dba026fdec71899194d8252bdf0b13a82036ccfc6b21477c7e8373f90282d989 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dba026fdec71899194d8252bdf0b13a82036ccfc6b21477c7e8373f90282d989->enter($__internal_dba026fdec71899194d8252bdf0b13a82036ccfc6b21477c7e8373f90282d989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AvanzuAdminThemeBundle:layout:login-layout.html.twig"));

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
        
        $__internal_55dd03f286078a3e3a2f4782a3f13b1a0e77923ccafb3afc5f4e530301734c1e->leave($__internal_55dd03f286078a3e3a2f4782a3f13b1a0e77923ccafb3afc5f4e530301734c1e_prof);

        
        $__internal_dba026fdec71899194d8252bdf0b13a82036ccfc6b21477c7e8373f90282d989->leave($__internal_dba026fdec71899194d8252bdf0b13a82036ccfc6b21477c7e8373f90282d989_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_90a2a9bde0924af9f7f7fab0b7ecfb7488df27ae5c01e9ecffab27fe4a78e058 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90a2a9bde0924af9f7f7fab0b7ecfb7488df27ae5c01e9ecffab27fe4a78e058->enter($__internal_90a2a9bde0924af9f7f7fab0b7ecfb7488df27ae5c01e9ecffab27fe4a78e058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fba3eaf8ae361dae4e344bd128ebbeaf04cb43c1ca80686306417b3686201896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fba3eaf8ae361dae4e344bd128ebbeaf04cb43c1ca80686306417b3686201896->enter($__internal_fba3eaf8ae361dae4e344bd128ebbeaf04cb43c1ca80686306417b3686201896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Avanzu Admin!";
        
        $__internal_fba3eaf8ae361dae4e344bd128ebbeaf04cb43c1ca80686306417b3686201896->leave($__internal_fba3eaf8ae361dae4e344bd128ebbeaf04cb43c1ca80686306417b3686201896_prof);

        
        $__internal_90a2a9bde0924af9f7f7fab0b7ecfb7488df27ae5c01e9ecffab27fe4a78e058->leave($__internal_90a2a9bde0924af9f7f7fab0b7ecfb7488df27ae5c01e9ecffab27fe4a78e058_prof);

    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f66459e383875d5b23468e038b02b1e70e2716ae185e27496ff8818e65a0c2b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f66459e383875d5b23468e038b02b1e70e2716ae185e27496ff8818e65a0c2b9->enter($__internal_f66459e383875d5b23468e038b02b1e70e2716ae185e27496ff8818e65a0c2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c23cda2dc16b1427f3d5a698592867705dd32ac118fae6ca4545083b65907084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23cda2dc16b1427f3d5a698592867705dd32ac118fae6ca4545083b65907084->enter($__internal_c23cda2dc16b1427f3d5a698592867705dd32ac118fae6ca4545083b65907084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 17
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/styles/admin-lte-all.css")), "html", null, true);
        echo "\" />
    ";
        
        $__internal_c23cda2dc16b1427f3d5a698592867705dd32ac118fae6ca4545083b65907084->leave($__internal_c23cda2dc16b1427f3d5a698592867705dd32ac118fae6ca4545083b65907084_prof);

        
        $__internal_f66459e383875d5b23468e038b02b1e70e2716ae185e27496ff8818e65a0c2b9->leave($__internal_f66459e383875d5b23468e038b02b1e70e2716ae185e27496ff8818e65a0c2b9_prof);

    }

    // line 24
    public function block_javascripts_head($context, array $blocks = array())
    {
        $__internal_4a00f207faab379855dbd61032e5fb91041483278c251baea3fb856559adaefd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a00f207faab379855dbd61032e5fb91041483278c251baea3fb856559adaefd->enter($__internal_4a00f207faab379855dbd61032e5fb91041483278c251baea3fb856559adaefd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        $__internal_8ca18fc6a216848c48c897f527b8933ff9268d86f741cd6b19c4b64df8a111a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ca18fc6a216848c48c897f527b8933ff9268d86f741cd6b19c4b64df8a111a6->enter($__internal_8ca18fc6a216848c48c897f527b8933ff9268d86f741cd6b19c4b64df8a111a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_head"));

        // line 25
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/modernizr.js")), "html", null, true);
        echo "\"></script>
        <!--[if lt IE 9]>

        <![endif]-->

    ";
        
        $__internal_8ca18fc6a216848c48c897f527b8933ff9268d86f741cd6b19c4b64df8a111a6->leave($__internal_8ca18fc6a216848c48c897f527b8933ff9268d86f741cd6b19c4b64df8a111a6_prof);

        
        $__internal_4a00f207faab379855dbd61032e5fb91041483278c251baea3fb856559adaefd->leave($__internal_4a00f207faab379855dbd61032e5fb91041483278c251baea3fb856559adaefd_prof);

    }

    // line 34
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_13a9380eb7f13b6d61911bc560f34ed953ad23c3536aafa0de7e8e4ea2ba2ead = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a9380eb7f13b6d61911bc560f34ed953ad23c3536aafa0de7e8e4ea2ba2ead->enter($__internal_13a9380eb7f13b6d61911bc560f34ed953ad23c3536aafa0de7e8e4ea2ba2ead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_c982c48c387e7afec77e5334a7d59ef3c70638b38ebe06ce0dba2e21ae9ac98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c982c48c387e7afec77e5334a7d59ef3c70638b38ebe06ce0dba2e21ae9ac98c->enter($__internal_c982c48c387e7afec77e5334a7d59ef3c70638b38ebe06ce0dba2e21ae9ac98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        
        $__internal_c982c48c387e7afec77e5334a7d59ef3c70638b38ebe06ce0dba2e21ae9ac98c->leave($__internal_c982c48c387e7afec77e5334a7d59ef3c70638b38ebe06ce0dba2e21ae9ac98c_prof);

        
        $__internal_13a9380eb7f13b6d61911bc560f34ed953ad23c3536aafa0de7e8e4ea2ba2ead->leave($__internal_13a9380eb7f13b6d61911bc560f34ed953ad23c3536aafa0de7e8e4ea2ba2ead_prof);

    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8418410f4bd3ac74b9f4a44ab3f7ad75bacaeca33c0092946d2a2f221a36f85f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8418410f4bd3ac74b9f4a44ab3f7ad75bacaeca33c0092946d2a2f221a36f85f->enter($__internal_8418410f4bd3ac74b9f4a44ab3f7ad75bacaeca33c0092946d2a2f221a36f85f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_929dfb686003ae7ec8c72cac91cba60d88f125e50db92b7a86c93f858c4a7e92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_929dfb686003ae7ec8c72cac91cba60d88f125e50db92b7a86c93f858c4a7e92->enter($__internal_929dfb686003ae7ec8c72cac91cba60d88f125e50db92b7a86c93f858c4a7e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 39
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("bundles/avanzuadmintheme/static/" . $this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "environment", array())) . "/scripts/admin-lte-all.js")), "html", null, true);
        echo "\"></script>
";
        
        $__internal_929dfb686003ae7ec8c72cac91cba60d88f125e50db92b7a86c93f858c4a7e92->leave($__internal_929dfb686003ae7ec8c72cac91cba60d88f125e50db92b7a86c93f858c4a7e92_prof);

        
        $__internal_8418410f4bd3ac74b9f4a44ab3f7ad75bacaeca33c0092946d2a2f221a36f85f->leave($__internal_8418410f4bd3ac74b9f4a44ab3f7ad75bacaeca33c0092946d2a2f221a36f85f_prof);

    }

    // line 43
    public function block_javascripts_inline($context, array $blocks = array())
    {
        $__internal_21c8a7c9d8268ad36034c92f3286474e908f8565e623d6dbfaf4cf6420dbc139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21c8a7c9d8268ad36034c92f3286474e908f8565e623d6dbfaf4cf6420dbc139->enter($__internal_21c8a7c9d8268ad36034c92f3286474e908f8565e623d6dbfaf4cf6420dbc139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        $__internal_879a452534360c934b5fcd158f4d81b276fa5b6a1c243cecb37f4083aeb4a25c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_879a452534360c934b5fcd158f4d81b276fa5b6a1c243cecb37f4083aeb4a25c->enter($__internal_879a452534360c934b5fcd158f4d81b276fa5b6a1c243cecb37f4083aeb4a25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts_inline"));

        
        $__internal_879a452534360c934b5fcd158f4d81b276fa5b6a1c243cecb37f4083aeb4a25c->leave($__internal_879a452534360c934b5fcd158f4d81b276fa5b6a1c243cecb37f4083aeb4a25c_prof);

        
        $__internal_21c8a7c9d8268ad36034c92f3286474e908f8565e623d6dbfaf4cf6420dbc139->leave($__internal_21c8a7c9d8268ad36034c92f3286474e908f8565e623d6dbfaf4cf6420dbc139_prof);

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
