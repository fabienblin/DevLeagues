<?php

/* @DevLeagues/League/remove.html.twig */
class __TwigTemplate_453afc065bcdd3f94cc15aad7365819a61d9f2d5b11c5a5e43cebc19b71755e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:League:base.html.twig", "@DevLeagues/League/remove.html.twig", 1);
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
        $__internal_e026191d243f042d62166da9c263bd85c42d7f26f03153b24a63e32a5d70d3eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e026191d243f042d62166da9c263bd85c42d7f26f03153b24a63e32a5d70d3eb->enter($__internal_e026191d243f042d62166da9c263bd85c42d7f26f03153b24a63e32a5d70d3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/remove.html.twig"));

        $__internal_3c0d3d6e52e15ab96a99c2bd8108048ce102cbd1dc82a53879e4ead46da91da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c0d3d6e52e15ab96a99c2bd8108048ce102cbd1dc82a53879e4ead46da91da6->enter($__internal_3c0d3d6e52e15ab96a99c2bd8108048ce102cbd1dc82a53879e4ead46da91da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/League/remove.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e026191d243f042d62166da9c263bd85c42d7f26f03153b24a63e32a5d70d3eb->leave($__internal_e026191d243f042d62166da9c263bd85c42d7f26f03153b24a63e32a5d70d3eb_prof);

        
        $__internal_3c0d3d6e52e15ab96a99c2bd8108048ce102cbd1dc82a53879e4ead46da91da6->leave($__internal_3c0d3d6e52e15ab96a99c2bd8108048ce102cbd1dc82a53879e4ead46da91da6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc7aa6a9bc1cdb7a09afa82712e5aae208c94186688fde80ededd69b762b690e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7aa6a9bc1cdb7a09afa82712e5aae208c94186688fde80ededd69b762b690e->enter($__internal_fc7aa6a9bc1cdb7a09afa82712e5aae208c94186688fde80ededd69b762b690e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ac5abc354df86aa926a53cfae25995a0450c7801a8d8fb4897d33309c54471a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac5abc354df86aa926a53cfae25995a0450c7801a8d8fb4897d33309c54471a->enter($__internal_1ac5abc354df86aa926a53cfae25995a0450c7801a8d8fb4897d33309c54471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the League:remove page</h1>
";
        
        $__internal_1ac5abc354df86aa926a53cfae25995a0450c7801a8d8fb4897d33309c54471a->leave($__internal_1ac5abc354df86aa926a53cfae25995a0450c7801a8d8fb4897d33309c54471a_prof);

        
        $__internal_fc7aa6a9bc1cdb7a09afa82712e5aae208c94186688fde80ededd69b762b690e->leave($__internal_fc7aa6a9bc1cdb7a09afa82712e5aae208c94186688fde80ededd69b762b690e_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/League/remove.html.twig";
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
<h1>Welcome to the League:remove page</h1>
{% endblock %}
", "@DevLeagues/League/remove.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/League/remove.html.twig");
    }
}
