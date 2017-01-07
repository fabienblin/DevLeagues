<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_1d8289660eaaf4bebc632c6ea33f9ae065b6655836bbd2ebb9fd9cb22a7421c6 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25d3b09210b6de0db1f070258cd1bda440863619df57ba76b0644c1b80581fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25d3b09210b6de0db1f070258cd1bda440863619df57ba76b0644c1b80581fd5->enter($__internal_25d3b09210b6de0db1f070258cd1bda440863619df57ba76b0644c1b80581fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $__internal_460ec603a04a06833a0341c6137b1b9d9e371c30e47e3cc802eff64c8a159747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_460ec603a04a06833a0341c6137b1b9d9e371c30e47e3cc802eff64c8a159747->enter($__internal_460ec603a04a06833a0341c6137b1b9d9e371c30e47e3cc802eff64c8a159747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25d3b09210b6de0db1f070258cd1bda440863619df57ba76b0644c1b80581fd5->leave($__internal_25d3b09210b6de0db1f070258cd1bda440863619df57ba76b0644c1b80581fd5_prof);

        
        $__internal_460ec603a04a06833a0341c6137b1b9d9e371c30e47e3cc802eff64c8a159747->leave($__internal_460ec603a04a06833a0341c6137b1b9d9e371c30e47e3cc802eff64c8a159747_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_string.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends admin.getTemplate('base_list_field') %}
", "@SonataAdmin/CRUD/list_string.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
