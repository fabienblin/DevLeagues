<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_b5bef34f7c49b08986fee263c0b3b802d6b8b48ab7ced5873f38cc40ccbb56b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show.html.twig", "SonataAdminBundle:CRUD:base_show_compare.html.twig", 12);
        $this->blocks = array(
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42427a0c00ee91c27870eb2cb40975618edb76443cfc51d9f3456b83dc57453e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42427a0c00ee91c27870eb2cb40975618edb76443cfc51d9f3456b83dc57453e->enter($__internal_42427a0c00ee91c27870eb2cb40975618edb76443cfc51d9f3456b83dc57453e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_076ff2c2c560c07d3fa9d1c8e89f876ee7a565309a0c215532db61306bfbde4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_076ff2c2c560c07d3fa9d1c8e89f876ee7a565309a0c215532db61306bfbde4c->enter($__internal_076ff2c2c560c07d3fa9d1c8e89f876ee7a565309a0c215532db61306bfbde4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42427a0c00ee91c27870eb2cb40975618edb76443cfc51d9f3456b83dc57453e->leave($__internal_42427a0c00ee91c27870eb2cb40975618edb76443cfc51d9f3456b83dc57453e_prof);

        
        $__internal_076ff2c2c560c07d3fa9d1c8e89f876ee7a565309a0c215532db61306bfbde4c->leave($__internal_076ff2c2c560c07d3fa9d1c8e89f876ee7a565309a0c215532db61306bfbde4c_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_52d1c850f003b560b0b6024f7802690bf4963fb6c94af7cb892ebe11187dd6e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52d1c850f003b560b0b6024f7802690bf4963fb6c94af7cb892ebe11187dd6e0->enter($__internal_52d1c850f003b560b0b6024f7802690bf4963fb6c94af7cb892ebe11187dd6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_4649b890e9e734f77328536d950595479b8df2030f4e40a610267d7f6e6bf607 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4649b890e9e734f77328536d950595479b8df2030f4e40a610267d7f6e6bf607->enter($__internal_4649b890e9e734f77328536d950595479b8df2030f4e40a610267d7f6e6bf607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 15
        echo "    <tr class=\"sonata-ba-view-container history-audit-compare\">
        ";
        // line 16
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 17
            echo "            ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElementCompare($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")), ($context["object_compare"] ?? $this->getContext($context, "object_compare")));
            echo "
        ";
        }
        // line 19
        echo "    </tr>
";
        
        $__internal_4649b890e9e734f77328536d950595479b8df2030f4e40a610267d7f6e6bf607->leave($__internal_4649b890e9e734f77328536d950595479b8df2030f4e40a610267d7f6e6bf607_prof);

        
        $__internal_52d1c850f003b560b0b6024f7802690bf4963fb6c94af7cb892ebe11187dd6e0->leave($__internal_52d1c850f003b560b0b6024f7802690bf4963fb6c94af7cb892ebe11187dd6e0_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_compare.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  54 => 17,  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show.html.twig' %}

{% block show_field %}
    <tr class=\"sonata-ba-view-container history-audit-compare\">
        {% if elements[field_name] is defined %}
            {{ elements[field_name]|render_view_element_compare(object, object_compare) }}
        {% endif %}
    </tr>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_compare.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_compare.html.twig");
    }
}
