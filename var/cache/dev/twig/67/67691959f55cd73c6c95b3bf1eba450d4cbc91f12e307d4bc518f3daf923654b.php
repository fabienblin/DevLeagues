<?php

/* @DevLeagues/Community/index.html.twig */
class __TwigTemplate_8071588e91f4f784362b45cc655ffde5e1ae9bd7fa34b6d0b365ca345310654b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "@DevLeagues/Community/index.html.twig", 1);
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
        $__internal_8c52bb722de4c6515195010e4e7daa1ca924c20bb5ab09de0c6eefede1168f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c52bb722de4c6515195010e4e7daa1ca924c20bb5ab09de0c6eefede1168f9c->enter($__internal_8c52bb722de4c6515195010e4e7daa1ca924c20bb5ab09de0c6eefede1168f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Community/index.html.twig"));

        $__internal_eeefc24fcde74745db5b239707d409799d81279eb0d2a000a2ed8140d87bec59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeefc24fcde74745db5b239707d409799d81279eb0d2a000a2ed8140d87bec59->enter($__internal_eeefc24fcde74745db5b239707d409799d81279eb0d2a000a2ed8140d87bec59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Community/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c52bb722de4c6515195010e4e7daa1ca924c20bb5ab09de0c6eefede1168f9c->leave($__internal_8c52bb722de4c6515195010e4e7daa1ca924c20bb5ab09de0c6eefede1168f9c_prof);

        
        $__internal_eeefc24fcde74745db5b239707d409799d81279eb0d2a000a2ed8140d87bec59->leave($__internal_eeefc24fcde74745db5b239707d409799d81279eb0d2a000a2ed8140d87bec59_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ce8faa9905f66382c4f9b2758abbf50fcc1e65018be360ed96e82f0e45b4431 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce8faa9905f66382c4f9b2758abbf50fcc1e65018be360ed96e82f0e45b4431->enter($__internal_3ce8faa9905f66382c4f9b2758abbf50fcc1e65018be360ed96e82f0e45b4431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_79572100e93a61a87b2f7181cb7166b13e9dbaf97c1ef19d2cbb6e47281995eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79572100e93a61a87b2f7181cb7166b13e9dbaf97c1ef19d2cbb6e47281995eb->enter($__internal_79572100e93a61a87b2f7181cb7166b13e9dbaf97c1ef19d2cbb6e47281995eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Community:index page</h1>
";
        
        $__internal_79572100e93a61a87b2f7181cb7166b13e9dbaf97c1ef19d2cbb6e47281995eb->leave($__internal_79572100e93a61a87b2f7181cb7166b13e9dbaf97c1ef19d2cbb6e47281995eb_prof);

        
        $__internal_3ce8faa9905f66382c4f9b2758abbf50fcc1e65018be360ed96e82f0e45b4431->leave($__internal_3ce8faa9905f66382c4f9b2758abbf50fcc1e65018be360ed96e82f0e45b4431_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Community/index.html.twig";
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
<h1>Welcome to the Community:index page</h1>
{% endblock %}
", "@DevLeagues/Community/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Community/index.html.twig");
    }
}
