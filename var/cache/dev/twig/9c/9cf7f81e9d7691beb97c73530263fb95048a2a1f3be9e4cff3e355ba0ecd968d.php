<?php

/* @SonataAdmin/CRUD/list__batch.html.twig */
class __TwigTemplate_0f15986d460f87d5538e9166cc6d63160622939fe825d81ade49045f406e0c20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__batch.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb0eb32f47a1441d7e9cb8d3541a98068de84219c5f8ebf154c601edc51c7df8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb0eb32f47a1441d7e9cb8d3541a98068de84219c5f8ebf154c601edc51c7df8->enter($__internal_fb0eb32f47a1441d7e9cb8d3541a98068de84219c5f8ebf154c601edc51c7df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $__internal_a0d7741e4c21e769587493bbba537f870e19c6d891f2ec56cee8794e20bf2d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d7741e4c21e769587493bbba537f870e19c6d891f2ec56cee8794e20bf2d03->enter($__internal_a0d7741e4c21e769587493bbba537f870e19c6d891f2ec56cee8794e20bf2d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__batch.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb0eb32f47a1441d7e9cb8d3541a98068de84219c5f8ebf154c601edc51c7df8->leave($__internal_fb0eb32f47a1441d7e9cb8d3541a98068de84219c5f8ebf154c601edc51c7df8_prof);

        
        $__internal_a0d7741e4c21e769587493bbba537f870e19c6d891f2ec56cee8794e20bf2d03->leave($__internal_a0d7741e4c21e769587493bbba537f870e19c6d891f2ec56cee8794e20bf2d03_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_4c4a1f42bad8d36d2bb27fcbf6ef88737a262c0d439590dde21cc2d0db33d428 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4a1f42bad8d36d2bb27fcbf6ef88737a262c0d439590dde21cc2d0db33d428->enter($__internal_4c4a1f42bad8d36d2bb27fcbf6ef88737a262c0d439590dde21cc2d0db33d428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_3a1ca366e183407c2d29ec947d8e42d4f257ab7f55382aa9aede11fb2c4c28a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1ca366e183407c2d29ec947d8e42d4f257ab7f55382aa9aede11fb2c4c28a5->enter($__internal_3a1ca366e183407c2d29ec947d8e42d4f257ab7f55382aa9aede11fb2c4c28a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <input type=\"checkbox\" name=\"idx[]\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
        echo "\">
";
        
        $__internal_3a1ca366e183407c2d29ec947d8e42d4f257ab7f55382aa9aede11fb2c4c28a5->leave($__internal_3a1ca366e183407c2d29ec947d8e42d4f257ab7f55382aa9aede11fb2c4c28a5_prof);

        
        $__internal_4c4a1f42bad8d36d2bb27fcbf6ef88737a262c0d439590dde21cc2d0db33d428->leave($__internal_4c4a1f42bad8d36d2bb27fcbf6ef88737a262c0d439590dde21cc2d0db33d428_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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

{% block field %}
    <input type=\"checkbox\" name=\"idx[]\" value=\"{{ admin.id(object) }}\">
{% endblock %}
", "@SonataAdmin/CRUD/list__batch.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__batch.html.twig");
    }
}
