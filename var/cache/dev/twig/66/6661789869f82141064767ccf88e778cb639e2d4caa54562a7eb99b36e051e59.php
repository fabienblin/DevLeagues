<?php

/* @SonataAdmin/Helper/short-object-description.html.twig */
class __TwigTemplate_38d4029d2e06c0962f9f1e5f437c6bb9c42e1aceeb8bb9d0c794f2be7d72cad6 extends Twig_Template
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
        $__internal_4dec31b505209d9fd40d6c9833acc71ffee2b81072e8106cf5a8f2caff5ad820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dec31b505209d9fd40d6c9833acc71ffee2b81072e8106cf5a8f2caff5ad820->enter($__internal_4dec31b505209d9fd40d6c9833acc71ffee2b81072e8106cf5a8f2caff5ad820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

        $__internal_5c4d53e7d453d3e72c15949f9d4ae25a2911ea2360e52c954174037890d4e4d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c4d53e7d453d3e72c15949f9d4ae25a2911ea2360e52c954174037890d4e4d2->enter($__internal_5c4d53e7d453d3e72c15949f9d4ae25a2911ea2360e52c954174037890d4e4d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

        // line 1
        echo "<span class=\"inner-field-short-description\">
    ";
        // line 2
        if ((((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "edit"), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT"), "method"))) {
            // line 3
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), 2 => (isset($context["link_parameters"]) ? $context["link_parameters"] : $this->getContext($context, "link_parameters"))), "method"), "html", null, true);
            echo "\" target=\"new\">";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, (isset($context["description"]) ? $context["description"] : $this->getContext($context, "description")), "html", null, true);
            echo "
    ";
        }
        // line 7
        echo "</span>
";
        
        $__internal_4dec31b505209d9fd40d6c9833acc71ffee2b81072e8106cf5a8f2caff5ad820->leave($__internal_4dec31b505209d9fd40d6c9833acc71ffee2b81072e8106cf5a8f2caff5ad820_prof);

        
        $__internal_5c4d53e7d453d3e72c15949f9d4ae25a2911ea2360e52c954174037890d4e4d2->leave($__internal_5c4d53e7d453d3e72c15949f9d4ae25a2911ea2360e52c954174037890d4e4d2_prof);

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
", "@SonataAdmin/Helper/short-object-description.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Helper/short-object-description.html.twig");
    }
}
