<?php

/* @SonataAdmin/CRUD/show_percent.html.twig */
class __TwigTemplate_c07e439fb642ab8c5b83759e15e14b1083b52a7c0f49014fddeb5c407fe1c777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_show_field.html.twig", "@SonataAdmin/CRUD/show_percent.html.twig", 12);
        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72bb7e505362958bdb0540d1e8e73c3a26bd8fd80d3629f76d2d73c7fabe00a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72bb7e505362958bdb0540d1e8e73c3a26bd8fd80d3629f76d2d73c7fabe00a8->enter($__internal_72bb7e505362958bdb0540d1e8e73c3a26bd8fd80d3629f76d2d73c7fabe00a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $__internal_3a45f58adc914c4730dc54e0ae7fb349f33dd48c251ea3733be21f98423fa9b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a45f58adc914c4730dc54e0ae7fb349f33dd48c251ea3733be21f98423fa9b7->enter($__internal_3a45f58adc914c4730dc54e0ae7fb349f33dd48c251ea3733be21f98423fa9b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/show_percent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72bb7e505362958bdb0540d1e8e73c3a26bd8fd80d3629f76d2d73c7fabe00a8->leave($__internal_72bb7e505362958bdb0540d1e8e73c3a26bd8fd80d3629f76d2d73c7fabe00a8_prof);

        
        $__internal_3a45f58adc914c4730dc54e0ae7fb349f33dd48c251ea3733be21f98423fa9b7->leave($__internal_3a45f58adc914c4730dc54e0ae7fb349f33dd48c251ea3733be21f98423fa9b7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_55203772a272c4865f1773ed87dbeb24133477a50f43ad7d3b5c606693219f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55203772a272c4865f1773ed87dbeb24133477a50f43ad7d3b5c606693219f56->enter($__internal_55203772a272c4865f1773ed87dbeb24133477a50f43ad7d3b5c606693219f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3b46174f9cb894870feb73fa9214f8a1c9072737504d1aae0523a16a671266a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b46174f9cb894870feb73fa9214f8a1c9072737504d1aae0523a16a671266a0->enter($__internal_3b46174f9cb894870feb73fa9214f8a1c9072737504d1aae0523a16a671266a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    ";
        $context["value"] = (($context["value"] ?? $this->getContext($context, "value")) * 100);
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
        echo " %
";
        
        $__internal_3b46174f9cb894870feb73fa9214f8a1c9072737504d1aae0523a16a671266a0->leave($__internal_3b46174f9cb894870feb73fa9214f8a1c9072737504d1aae0523a16a671266a0_prof);

        
        $__internal_55203772a272c4865f1773ed87dbeb24133477a50f43ad7d3b5c606693219f56->leave($__internal_55203772a272c4865f1773ed87dbeb24133477a50f43ad7d3b5c606693219f56_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/show_percent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_show_field.html.twig' %}

{% block field %}
    {% set value = value * 100 %}
    {{ value }} %
{% endblock %}
", "@SonataAdmin/CRUD/show_percent.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/show_percent.html.twig");
    }
}
