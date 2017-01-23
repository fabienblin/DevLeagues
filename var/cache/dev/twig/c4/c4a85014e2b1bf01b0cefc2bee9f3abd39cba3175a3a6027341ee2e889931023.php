<?php

/* @SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_935adc78e83ddb5960f9f8702ac4a833a47d7e6edaa684e767dfe28e9324da47 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31a81b52284153d51343ad1eda7afcf430b0e5bfd5c42cf658daebc78bc39154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a81b52284153d51343ad1eda7afcf430b0e5bfd5c42cf658daebc78bc39154->enter($__internal_31a81b52284153d51343ad1eda7afcf430b0e5bfd5c42cf658daebc78bc39154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $__internal_033a8cf40ef050d03ef625ce7987b8213f41a7fc55ad93d9dd3a6907219c3094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033a8cf40ef050d03ef625ce7987b8213f41a7fc55ad93d9dd3a6907219c3094->enter($__internal_033a8cf40ef050d03ef625ce7987b8213f41a7fc55ad93d9dd3a6907219c3094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31a81b52284153d51343ad1eda7afcf430b0e5bfd5c42cf658daebc78bc39154->leave($__internal_31a81b52284153d51343ad1eda7afcf430b0e5bfd5c42cf658daebc78bc39154_prof);

        
        $__internal_033a8cf40ef050d03ef625ce7987b8213f41a7fc55ad93d9dd3a6907219c3094->leave($__internal_033a8cf40ef050d03ef625ce7987b8213f41a7fc55ad93d9dd3a6907219c3094_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig";
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

{% extends base_template %}
", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
