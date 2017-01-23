<?php

/* @SonataAdmin/CRUD/list_string.html.twig */
class __TwigTemplate_5e4e4bb4e5cb873575ea0cbbabe235990842bd72d2007ab9c79016642cf5b8af extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_string.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1352ce2c6b6bf49f8bc99098e92dd38294bf4cdf21df63104dd0e83666090243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1352ce2c6b6bf49f8bc99098e92dd38294bf4cdf21df63104dd0e83666090243->enter($__internal_1352ce2c6b6bf49f8bc99098e92dd38294bf4cdf21df63104dd0e83666090243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $__internal_4948ccccb2069f20c80e92b118d58583a5ea19390c3a00a293bf108d69e388fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4948ccccb2069f20c80e92b118d58583a5ea19390c3a00a293bf108d69e388fa->enter($__internal_4948ccccb2069f20c80e92b118d58583a5ea19390c3a00a293bf108d69e388fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_string.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1352ce2c6b6bf49f8bc99098e92dd38294bf4cdf21df63104dd0e83666090243->leave($__internal_1352ce2c6b6bf49f8bc99098e92dd38294bf4cdf21df63104dd0e83666090243_prof);

        
        $__internal_4948ccccb2069f20c80e92b118d58583a5ea19390c3a00a293bf108d69e388fa->leave($__internal_4948ccccb2069f20c80e92b118d58583a5ea19390c3a00a293bf108d69e388fa_prof);

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
", "@SonataAdmin/CRUD/list_string.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_string.html.twig");
    }
}
