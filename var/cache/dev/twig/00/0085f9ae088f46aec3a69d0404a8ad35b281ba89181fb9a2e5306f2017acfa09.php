<?php

/* @DevLeagues/News/show.html.twig */
class __TwigTemplate_b70dffaafc2aa93786101a7c057190239c722f16cf3a46356d4277f27e1f2bab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/News/show.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_01754c8396baeb46f23209f66487a212d38d3f02b7839c3be86b65c51e805159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01754c8396baeb46f23209f66487a212d38d3f02b7839c3be86b65c51e805159->enter($__internal_01754c8396baeb46f23209f66487a212d38d3f02b7839c3be86b65c51e805159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/News/show.html.twig"));

        $__internal_0a4787531cb945408c3db169e61eb460d14708faa187f0bca9c5a41d92c8e97c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4787531cb945408c3db169e61eb460d14708faa187f0bca9c5a41d92c8e97c->enter($__internal_0a4787531cb945408c3db169e61eb460d14708faa187f0bca9c5a41d92c8e97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/News/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01754c8396baeb46f23209f66487a212d38d3f02b7839c3be86b65c51e805159->leave($__internal_01754c8396baeb46f23209f66487a212d38d3f02b7839c3be86b65c51e805159_prof);

        
        $__internal_0a4787531cb945408c3db169e61eb460d14708faa187f0bca9c5a41d92c8e97c->leave($__internal_0a4787531cb945408c3db169e61eb460d14708faa187f0bca9c5a41d92c8e97c_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_76c3dbcb33eaa04bc182d81f8c8a0d8843ff580055a8db47e3efbce60980f64a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c3dbcb33eaa04bc182d81f8c8a0d8843ff580055a8db47e3efbce60980f64a->enter($__internal_76c3dbcb33eaa04bc182d81f8c8a0d8843ff580055a8db47e3efbce60980f64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_4614898e52a455a8867f093b7811e43a5e177d157451d4efe83048ae23d96199 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4614898e52a455a8867f093b7811e43a5e177d157451d4efe83048ae23d96199->enter($__internal_4614898e52a455a8867f093b7811e43a5e177d157451d4efe83048ae23d96199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "News";
        
        $__internal_4614898e52a455a8867f093b7811e43a5e177d157451d4efe83048ae23d96199->leave($__internal_4614898e52a455a8867f093b7811e43a5e177d157451d4efe83048ae23d96199_prof);

        
        $__internal_76c3dbcb33eaa04bc182d81f8c8a0d8843ff580055a8db47e3efbce60980f64a->leave($__internal_76c3dbcb33eaa04bc182d81f8c8a0d8843ff580055a8db47e3efbce60980f64a_prof);

    }

    // line 4
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_806ff5f7b4c76cce73a857ca399f304adc96c63b621f00f450644cd69153a60a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_806ff5f7b4c76cce73a857ca399f304adc96c63b621f00f450644cd69153a60a->enter($__internal_806ff5f7b4c76cce73a857ca399f304adc96c63b621f00f450644cd69153a60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_7761a31b83fb623643dbb717c3908fc83aaef223b21d38010287d0f02a963414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7761a31b83fb623643dbb717c3908fc83aaef223b21d38010287d0f02a963414->enter($__internal_7761a31b83fb623643dbb717c3908fc83aaef223b21d38010287d0f02a963414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Read Only";
        
        $__internal_7761a31b83fb623643dbb717c3908fc83aaef223b21d38010287d0f02a963414->leave($__internal_7761a31b83fb623643dbb717c3908fc83aaef223b21d38010287d0f02a963414_prof);

        
        $__internal_806ff5f7b4c76cce73a857ca399f304adc96c63b621f00f450644cd69153a60a->leave($__internal_806ff5f7b4c76cce73a857ca399f304adc96c63b621f00f450644cd69153a60a_prof);

    }

    // line 6
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_08423efee8723b57a55178b9c2431771d3298625666a99d0b89b9aa0f42df588 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08423efee8723b57a55178b9c2431771d3298625666a99d0b89b9aa0f42df588->enter($__internal_08423efee8723b57a55178b9c2431771d3298625666a99d0b89b9aa0f42df588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_113b1f480caa69fa7696c88a1d70e685285ab2be7b1479f4c689d906f7973039 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113b1f480caa69fa7696c88a1d70e685285ab2be7b1479f4c689d906f7973039->enter($__internal_113b1f480caa69fa7696c88a1d70e685285ab2be7b1479f4c689d906f7973039_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 7
        echo "<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? $this->getContext($context, "news")), "name", array()), "html", null, true);
        echo "</h3>
\t\t\t\t<p class=\"text-muted text-center\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? $this->getContext($context, "news")), "date", array()), "html", null, true);
        echo "</p>
\t\t\t</div>
\t\t\t<p>
\t\t\t\t";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["news"] ?? $this->getContext($context, "news")), "content", array()), "html", null, true);
        echo "
\t\t\t</p>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
";
        
        $__internal_113b1f480caa69fa7696c88a1d70e685285ab2be7b1479f4c689d906f7973039->leave($__internal_113b1f480caa69fa7696c88a1d70e685285ab2be7b1479f4c689d906f7973039_prof);

        
        $__internal_08423efee8723b57a55178b9c2431771d3298625666a99d0b89b9aa0f42df588->leave($__internal_08423efee8723b57a55178b9c2431771d3298625666a99d0b89b9aa0f42df588_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/News/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 18,  100 => 15,  96 => 14,  87 => 7,  78 => 6,  60 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block page_title %}News{% endblock %}
{% block page_subtitle %}Read Only{% endblock %}

{% block page_content %}
<div class=\"row\">
\t<div class=\"col-lg-12\">
\t\t<div class=\"box box-primary\">
\t\t\t<div class=\"box-header\">
\t\t\t\t<img src=\"\"
\t\t\t\talt=\"image de la ligue\"
\t\t\t\tclass=\"profile-user-img img-responsive img-circle\"/>
\t\t\t\t<h3 class=\"profile-username text-center\">{{ news.name }}</h3>
\t\t\t\t<p class=\"text-muted text-center\">{{ news.date }}</p>
\t\t\t</div>
\t\t\t<p>
\t\t\t\t{{ news.content }}
\t\t\t</p>
\t\t\t<div class=\"box-footer\">
\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-block\">Edit</a>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "@DevLeagues/News/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/News/show.html.twig");
    }
}
