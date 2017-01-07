<?php

/* @DevLeagues/League/show_reduced.html.twig */
class __TwigTemplate_4b700095b6e7bbecc9a5ccfe0f5e209eac68db4424378f7fbe5f9550aab719c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/show_reduced.html.twig", 1);
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
        $__internal_f453b43422b066a19235f157db6bc98b43f625d1e941fc3e86fae9f0cab5cdef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f453b43422b066a19235f157db6bc98b43f625d1e941fc3e86fae9f0cab5cdef->enter($__internal_f453b43422b066a19235f157db6bc98b43f625d1e941fc3e86fae9f0cab5cdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show_reduced.html.twig"));

        $__internal_3527132cb58897d0c99b2091411e80e6603b4e465a7ffa823a90b26f8e33df89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3527132cb58897d0c99b2091411e80e6603b4e465a7ffa823a90b26f8e33df89->enter($__internal_3527132cb58897d0c99b2091411e80e6603b4e465a7ffa823a90b26f8e33df89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/show_reduced.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f453b43422b066a19235f157db6bc98b43f625d1e941fc3e86fae9f0cab5cdef->leave($__internal_f453b43422b066a19235f157db6bc98b43f625d1e941fc3e86fae9f0cab5cdef_prof);

        
        $__internal_3527132cb58897d0c99b2091411e80e6603b4e465a7ffa823a90b26f8e33df89->leave($__internal_3527132cb58897d0c99b2091411e80e6603b4e465a7ffa823a90b26f8e33df89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94279bf303a4e7bebaa854df4840de00bfc67617ac21ddff793fc8b68283639e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94279bf303a4e7bebaa854df4840de00bfc67617ac21ddff793fc8b68283639e->enter($__internal_94279bf303a4e7bebaa854df4840de00bfc67617ac21ddff793fc8b68283639e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c38da34316c4c111d5d5df069e67c39c1bdabffdf77ac67767d1687556b98f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c38da34316c4c111d5d5df069e67c39c1bdabffdf77ac67767d1687556b98f2f->enter($__internal_c38da34316c4c111d5d5df069e67c39c1bdabffdf77ac67767d1687556b98f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:showReduced page</h1>
";
        
        $__internal_c38da34316c4c111d5d5df069e67c39c1bdabffdf77ac67767d1687556b98f2f->leave($__internal_c38da34316c4c111d5d5df069e67c39c1bdabffdf77ac67767d1687556b98f2f_prof);

        
        $__internal_94279bf303a4e7bebaa854df4840de00bfc67617ac21ddff793fc8b68283639e->leave($__internal_94279bf303a4e7bebaa854df4840de00bfc67617ac21ddff793fc8b68283639e_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/show_reduced.html.twig";
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
<h1>Welcome to the League:showReduced page</h1>
{% endblock %}
", "@DevLeagues/League/show_reduced.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/League/show_reduced.html.twig");
    }
}
