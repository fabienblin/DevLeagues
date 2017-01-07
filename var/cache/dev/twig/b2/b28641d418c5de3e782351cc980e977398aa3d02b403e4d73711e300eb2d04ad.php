<?php

/* @DevLeagues/League/edit.html.twig */
class __TwigTemplate_5f0fe93c5205d44f7e33849443695620c804446b980f11c64e034bbd7eff21f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:League:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da28138c8642d610f6353d8f4fb1f6bc72238b249a739c4c2d889b3a70de2d41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da28138c8642d610f6353d8f4fb1f6bc72238b249a739c4c2d889b3a70de2d41->enter($__internal_da28138c8642d610f6353d8f4fb1f6bc72238b249a739c4c2d889b3a70de2d41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/edit.html.twig"));

        $__internal_d460186a5ab01d8725257c3a7ac9e043d3a1a15f651b122a9e5eb6c076690f84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d460186a5ab01d8725257c3a7ac9e043d3a1a15f651b122a9e5eb6c076690f84->enter($__internal_d460186a5ab01d8725257c3a7ac9e043d3a1a15f651b122a9e5eb6c076690f84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da28138c8642d610f6353d8f4fb1f6bc72238b249a739c4c2d889b3a70de2d41->leave($__internal_da28138c8642d610f6353d8f4fb1f6bc72238b249a739c4c2d889b3a70de2d41_prof);

        
        $__internal_d460186a5ab01d8725257c3a7ac9e043d3a1a15f651b122a9e5eb6c076690f84->leave($__internal_d460186a5ab01d8725257c3a7ac9e043d3a1a15f651b122a9e5eb6c076690f84_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ab16ddec0fd78d1a9cf873d27a03a87f6034b2f8e541445643f862c0840979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55ab16ddec0fd78d1a9cf873d27a03a87f6034b2f8e541445643f862c0840979->enter($__internal_55ab16ddec0fd78d1a9cf873d27a03a87f6034b2f8e541445643f862c0840979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a76b11bce1a24832b2826e23121ee5ed67b53ce5d1fe8f6ffd82636f250ab4f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76b11bce1a24832b2826e23121ee5ed67b53ce5d1fe8f6ffd82636f250ab4f9->enter($__internal_a76b11bce1a24832b2826e23121ee5ed67b53ce5d1fe8f6ffd82636f250ab4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:edit page</h1>
";
        
        $__internal_a76b11bce1a24832b2826e23121ee5ed67b53ce5d1fe8f6ffd82636f250ab4f9->leave($__internal_a76b11bce1a24832b2826e23121ee5ed67b53ce5d1fe8f6ffd82636f250ab4f9_prof);

        
        $__internal_55ab16ddec0fd78d1a9cf873d27a03a87f6034b2f8e541445643f862c0840979->leave($__internal_55ab16ddec0fd78d1a9cf873d27a03a87f6034b2f8e541445643f862c0840979_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/edit.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle:League:base.html.twig\" %}

{% block body %}
<h1>Welcome to the League:edit page</h1>
{% endblock %}
", "@DevLeagues/League/edit.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/edit.html.twig");
    }
}
