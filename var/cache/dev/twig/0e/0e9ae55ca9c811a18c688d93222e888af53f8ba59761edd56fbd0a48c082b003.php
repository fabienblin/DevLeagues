<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_15a62984173e4ad7300acf134960b8745a865afd21a678bb54d7a076776503a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d496665d1bb9c244f870a594fce7bc02dfe9a040dbc3c92d1815c077091a313 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d496665d1bb9c244f870a594fce7bc02dfe9a040dbc3c92d1815c077091a313->enter($__internal_3d496665d1bb9c244f870a594fce7bc02dfe9a040dbc3c92d1815c077091a313_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_e2608ae3424d95fa2292719a11bd3f2ffdaa251718ecb3b0a497955d5781aa25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2608ae3424d95fa2292719a11bd3f2ffdaa251718ecb3b0a497955d5781aa25->enter($__internal_e2608ae3424d95fa2292719a11bd3f2ffdaa251718ecb3b0a497955d5781aa25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d496665d1bb9c244f870a594fce7bc02dfe9a040dbc3c92d1815c077091a313->leave($__internal_3d496665d1bb9c244f870a594fce7bc02dfe9a040dbc3c92d1815c077091a313_prof);

        
        $__internal_e2608ae3424d95fa2292719a11bd3f2ffdaa251718ecb3b0a497955d5781aa25->leave($__internal_e2608ae3424d95fa2292719a11bd3f2ffdaa251718ecb3b0a497955d5781aa25_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ff968021f5e17b17f927d2a447acc1dea784adf9fcbf7482cd53f35a45251f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff968021f5e17b17f927d2a447acc1dea784adf9fcbf7482cd53f35a45251f9->enter($__internal_5ff968021f5e17b17f927d2a447acc1dea784adf9fcbf7482cd53f35a45251f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6704a0a68e71a9d334434069a9f07c2c7080f9ffdf47beeb8719cdd253301363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6704a0a68e71a9d334434069a9f07c2c7080f9ffdf47beeb8719cdd253301363->enter($__internal_6704a0a68e71a9d334434069a9f07c2c7080f9ffdf47beeb8719cdd253301363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_6704a0a68e71a9d334434069a9f07c2c7080f9ffdf47beeb8719cdd253301363->leave($__internal_6704a0a68e71a9d334434069a9f07c2c7080f9ffdf47beeb8719cdd253301363_prof);

        
        $__internal_5ff968021f5e17b17f927d2a447acc1dea784adf9fcbf7482cd53f35a45251f9->leave($__internal_5ff968021f5e17b17f927d2a447acc1dea784adf9fcbf7482cd53f35a45251f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
