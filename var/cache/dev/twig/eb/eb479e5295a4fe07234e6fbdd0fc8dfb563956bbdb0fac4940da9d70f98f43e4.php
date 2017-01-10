<?php

/* @DevLeagues/About/index.html.twig */
class __TwigTemplate_faeeaaa499ddbff2dd83598b39c12f5cd7e30ff7db69a30e8a9554681ad1e32b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/About/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d36d54ff792ba43c93c32222b4a85b4178a5854dfd50a6104fffdb7ada2379c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d36d54ff792ba43c93c32222b4a85b4178a5854dfd50a6104fffdb7ada2379c->enter($__internal_7d36d54ff792ba43c93c32222b4a85b4178a5854dfd50a6104fffdb7ada2379c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/About/index.html.twig"));

        $__internal_96ffa6c001608c43456133feed008e3cdb71bc081e9d65df190d44100aa6a324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96ffa6c001608c43456133feed008e3cdb71bc081e9d65df190d44100aa6a324->enter($__internal_96ffa6c001608c43456133feed008e3cdb71bc081e9d65df190d44100aa6a324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/About/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d36d54ff792ba43c93c32222b4a85b4178a5854dfd50a6104fffdb7ada2379c->leave($__internal_7d36d54ff792ba43c93c32222b4a85b4178a5854dfd50a6104fffdb7ada2379c_prof);

        
        $__internal_96ffa6c001608c43456133feed008e3cdb71bc081e9d65df190d44100aa6a324->leave($__internal_96ffa6c001608c43456133feed008e3cdb71bc081e9d65df190d44100aa6a324_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5693b133c1cc5bac9fca149dbe8abb7e65355b678049b024f231445e8b8d500 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5693b133c1cc5bac9fca149dbe8abb7e65355b678049b024f231445e8b8d500->enter($__internal_b5693b133c1cc5bac9fca149dbe8abb7e65355b678049b024f231445e8b8d500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_64272ec87c56838dd6cc1067782c64dca733068143d8b5da7ea971fbf14190a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64272ec87c56838dd6cc1067782c64dca733068143d8b5da7ea971fbf14190a1->enter($__internal_64272ec87c56838dd6cc1067782c64dca733068143d8b5da7ea971fbf14190a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the About:index page</h1>
";
        
        $__internal_64272ec87c56838dd6cc1067782c64dca733068143d8b5da7ea971fbf14190a1->leave($__internal_64272ec87c56838dd6cc1067782c64dca733068143d8b5da7ea971fbf14190a1_prof);

        
        $__internal_b5693b133c1cc5bac9fca149dbe8abb7e65355b678049b024f231445e8b8d500->leave($__internal_b5693b133c1cc5bac9fca149dbe8abb7e65355b678049b024f231445e8b8d500_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/About/index.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}
<h1>Welcome to the About:index page</h1>
{% endblock %}", "@DevLeagues/About/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
