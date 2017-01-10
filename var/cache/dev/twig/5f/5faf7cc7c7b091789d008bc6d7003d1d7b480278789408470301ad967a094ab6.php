<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_9044b9e5a7e8d68190309f96488b5f0704223ae3bdc1bd8f7c55c0dc1fcbccf7 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c0ce0266e66afb13f3d3c7839a901017b9cab825fa310f6cc05a5875e55904e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c0ce0266e66afb13f3d3c7839a901017b9cab825fa310f6cc05a5875e55904e->enter($__internal_9c0ce0266e66afb13f3d3c7839a901017b9cab825fa310f6cc05a5875e55904e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $__internal_fdfe04ebde89747c068adbfb5f9c8d24f8a7d38fb66e9435f91c9f737807f621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfe04ebde89747c068adbfb5f9c8d24f8a7d38fb66e9435f91c9f737807f621->enter($__internal_fdfe04ebde89747c068adbfb5f9c8d24f8a7d38fb66e9435f91c9f737807f621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c0ce0266e66afb13f3d3c7839a901017b9cab825fa310f6cc05a5875e55904e->leave($__internal_9c0ce0266e66afb13f3d3c7839a901017b9cab825fa310f6cc05a5875e55904e_prof);

        
        $__internal_fdfe04ebde89747c068adbfb5f9c8d24f8a7d38fb66e9435f91c9f737807f621->leave($__internal_fdfe04ebde89747c068adbfb5f9c8d24f8a7d38fb66e9435f91c9f737807f621_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_5b9df29d61bcbb20489c5b8f6abf95e6da4a46fda160040e8cc0f4043d3f7c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b9df29d61bcbb20489c5b8f6abf95e6da4a46fda160040e8cc0f4043d3f7c8a->enter($__internal_5b9df29d61bcbb20489c5b8f6abf95e6da4a46fda160040e8cc0f4043d3f7c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_fac550d0d43f46dd0c3866665359f2ace04fbf819f3b0eb23af5a68050499b34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fac550d0d43f46dd0c3866665359f2ace04fbf819f3b0eb23af5a68050499b34->enter($__internal_fac550d0d43f46dd0c3866665359f2ace04fbf819f3b0eb23af5a68050499b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_fac550d0d43f46dd0c3866665359f2ace04fbf819f3b0eb23af5a68050499b34->leave($__internal_fac550d0d43f46dd0c3866665359f2ace04fbf819f3b0eb23af5a68050499b34_prof);

        
        $__internal_5b9df29d61bcbb20489c5b8f6abf95e6da4a46fda160040e8cc0f4043d3f7c8a->leave($__internal_5b9df29d61bcbb20489c5b8f6abf95e6da4a46fda160040e8cc0f4043d3f7c8a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 17,  48 => 15,  39 => 14,  18 => 12,);
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
    <a class=\"btn btn-primary\" href=\"{{ admin.generateUrl('list') }}\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'list_select'|trans({}, 'SonataAdminBundle') }}
    </a>
{% endblock %}
", "@SonataAdmin/CRUD/list__select.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
