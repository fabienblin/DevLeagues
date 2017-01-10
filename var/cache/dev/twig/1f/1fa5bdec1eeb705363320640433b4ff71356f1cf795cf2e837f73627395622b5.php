<?php

/* @SonataAdmin/Helper/short-object-description.html.twig */
class __TwigTemplate_c081be142fea4571d33e22c07ae7d42e74b399d600cc32fa4a662410553aad11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2df08b9fe7ea2afbdbf09de2b24371cd50019537366686f86fbb337e8650721a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2df08b9fe7ea2afbdbf09de2b24371cd50019537366686f86fbb337e8650721a->enter($__internal_2df08b9fe7ea2afbdbf09de2b24371cd50019537366686f86fbb337e8650721a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

        $__internal_d873419fd6d56ea8a794b6f686edf7792e73b17089b5660ed7d3584eeb474557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d873419fd6d56ea8a794b6f686edf7792e73b17089b5660ed7d3584eeb474557->enter($__internal_d873419fd6d56ea8a794b6f686edf7792e73b17089b5660ed7d3584eeb474557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if (((($context["object"] ?? $this->getContext($context, "object")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => ($context["object"] ?? $this->getContext($context, "object")), 2 => ($context["link_parameters"] ?? $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, ($context["description"] ?? $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_2df08b9fe7ea2afbdbf09de2b24371cd50019537366686f86fbb337e8650721a->leave($__internal_2df08b9fe7ea2afbdbf09de2b24371cd50019537366686f86fbb337e8650721a_prof);

        
        $__internal_d873419fd6d56ea8a794b6f686edf7792e73b17089b5660ed7d3584eeb474557->leave($__internal_d873419fd6d56ea8a794b6f686edf7792e73b17089b5660ed7d3584eeb474557_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Helper/short-object-description.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  38 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<span class=\"inner-field-short-description\">
    {% if object and admin.hasRoute('edit') and admin.isGranted('EDIT') %}
        <a href=\"{{ admin.generateObjectUrl('edit', object, link_parameters) }}\" target=\"new\">{{ description }}</a>
    {% else %}
        {{ description }}
    {% endif %}
</span>
", "@SonataAdmin/Helper/short-object-description.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
