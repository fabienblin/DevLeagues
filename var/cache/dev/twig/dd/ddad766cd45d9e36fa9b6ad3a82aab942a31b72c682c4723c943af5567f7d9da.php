<?php

/* DevLeaguesBundle::base.html.twig */
class __TwigTemplate_f891fa5cd2ad90f70c43c16be572077603a782197299889fe99c3a0a5e4949cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "DevLeaguesBundle::base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ad98d999f5018f504e038204ffbbd690f3cd9c11d642c661f75fe65210a5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54ad98d999f5018f504e038204ffbbd690f3cd9c11d642c661f75fe65210a5e5->enter($__internal_54ad98d999f5018f504e038204ffbbd690f3cd9c11d642c661f75fe65210a5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $__internal_1a0feaeb60f70fba43b467f21482eceff22b19c9ef424ba4316e77af81c69f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a0feaeb60f70fba43b467f21482eceff22b19c9ef424ba4316e77af81c69f30->enter($__internal_1a0feaeb60f70fba43b467f21482eceff22b19c9ef424ba4316e77af81c69f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle::base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ad98d999f5018f504e038204ffbbd690f3cd9c11d642c661f75fe65210a5e5->leave($__internal_54ad98d999f5018f504e038204ffbbd690f3cd9c11d642c661f75fe65210a5e5_prof);

        
        $__internal_1a0feaeb60f70fba43b467f21482eceff22b19c9ef424ba4316e77af81c69f30->leave($__internal_1a0feaeb60f70fba43b467f21482eceff22b19c9ef424ba4316e77af81c69f30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_db662a8f882706ce7fa7a42f021a20b7a72e2de6e855b0c82ae9d1173a1cf211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db662a8f882706ce7fa7a42f021a20b7a72e2de6e855b0c82ae9d1173a1cf211->enter($__internal_db662a8f882706ce7fa7a42f021a20b7a72e2de6e855b0c82ae9d1173a1cf211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f3c92d676e99ebbb3e9e910b4771fe90e25ee6c7fcb1a415f6131c2610e47ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3c92d676e99ebbb3e9e910b4771fe90e25ee6c7fcb1a415f6131c2610e47ff0->enter($__internal_f3c92d676e99ebbb3e9e910b4771fe90e25ee6c7fcb1a415f6131c2610e47ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_f3c92d676e99ebbb3e9e910b4771fe90e25ee6c7fcb1a415f6131c2610e47ff0->leave($__internal_f3c92d676e99ebbb3e9e910b4771fe90e25ee6c7fcb1a415f6131c2610e47ff0_prof);

        
        $__internal_db662a8f882706ce7fa7a42f021a20b7a72e2de6e855b0c82ae9d1173a1cf211->leave($__internal_db662a8f882706ce7fa7a42f021a20b7a72e2de6e855b0c82ae9d1173a1cf211_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2a412b67416954169de8832747a96402740583cd8ef1938e2549dab0a1cb0d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a412b67416954169de8832747a96402740583cd8ef1938e2549dab0a1cb0d0a->enter($__internal_2a412b67416954169de8832747a96402740583cd8ef1938e2549dab0a1cb0d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_c6daa0cdea63938c9531925701a2aec2f81b5dcb2c9e88fa7d1b0ce8cf10b8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6daa0cdea63938c9531925701a2aec2f81b5dcb2c9e88fa7d1b0ce8cf10b8b2->enter($__internal_c6daa0cdea63938c9531925701a2aec2f81b5dcb2c9e88fa7d1b0ce8cf10b8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
";
        
        $__internal_c6daa0cdea63938c9531925701a2aec2f81b5dcb2c9e88fa7d1b0ce8cf10b8b2->leave($__internal_c6daa0cdea63938c9531925701a2aec2f81b5dcb2c9e88fa7d1b0ce8cf10b8b2_prof);

        
        $__internal_2a412b67416954169de8832747a96402740583cd8ef1938e2549dab0a1cb0d0a->leave($__internal_2a412b67416954169de8832747a96402740583cd8ef1938e2549dab0a1cb0d0a_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_content %}

{% endblock %}
", "DevLeaguesBundle::base.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}
