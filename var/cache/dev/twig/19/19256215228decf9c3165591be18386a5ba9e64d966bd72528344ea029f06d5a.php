<?php

/* @SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_fa6e3f3ad3e35d5a0f53699def68af204cd471f7034fae964b33fbe05239a7f8 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60a11e20dd7b2c3753a53d5601c1e45556bbcc3c7d3ff141ea3fa11a3a882a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60a11e20dd7b2c3753a53d5601c1e45556bbcc3c7d3ff141ea3fa11a3a882a6c->enter($__internal_60a11e20dd7b2c3753a53d5601c1e45556bbcc3c7d3ff141ea3fa11a3a882a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $__internal_33dbc9f3c6e1c151abf5d3ecc7db8cdbdf3d0c1141c12dfdf2ae916951013736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33dbc9f3c6e1c151abf5d3ecc7db8cdbdf3d0c1141c12dfdf2ae916951013736->enter($__internal_33dbc9f3c6e1c151abf5d3ecc7db8cdbdf3d0c1141c12dfdf2ae916951013736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60a11e20dd7b2c3753a53d5601c1e45556bbcc3c7d3ff141ea3fa11a3a882a6c->leave($__internal_60a11e20dd7b2c3753a53d5601c1e45556bbcc3c7d3ff141ea3fa11a3a882a6c_prof);

        
        $__internal_33dbc9f3c6e1c151abf5d3ecc7db8cdbdf3d0c1141c12dfdf2ae916951013736->leave($__internal_33dbc9f3c6e1c151abf5d3ecc7db8cdbdf3d0c1141c12dfdf2ae916951013736_prof);

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
