<?php

/* @SonataAdmin/Helper/short-object-description.html.twig */
class __TwigTemplate_992b071eabe479a7570804ec04bfe2398971ef34701d8221aa336448e78525e4 extends Twig_Template
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
        $__internal_06c32a9b6f945bc4b8de40d38e02834bb2faaa12d43fe4eb005a4e963c025807 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c32a9b6f945bc4b8de40d38e02834bb2faaa12d43fe4eb005a4e963c025807->enter($__internal_06c32a9b6f945bc4b8de40d38e02834bb2faaa12d43fe4eb005a4e963c025807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

        $__internal_87c0d888b2c5f3f4e8953db10991049fba654a35d44fba50b0d161f49d053008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87c0d888b2c5f3f4e8953db10991049fba654a35d44fba50b0d161f49d053008->enter($__internal_87c0d888b2c5f3f4e8953db10991049fba654a35d44fba50b0d161f49d053008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Helper/short-object-description.html.twig"));

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
        
        $__internal_06c32a9b6f945bc4b8de40d38e02834bb2faaa12d43fe4eb005a4e963c025807->leave($__internal_06c32a9b6f945bc4b8de40d38e02834bb2faaa12d43fe4eb005a4e963c025807_prof);

        
        $__internal_87c0d888b2c5f3f4e8953db10991049fba654a35d44fba50b0d161f49d053008->leave($__internal_87c0d888b2c5f3f4e8953db10991049fba654a35d44fba50b0d161f49d053008_prof);

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
