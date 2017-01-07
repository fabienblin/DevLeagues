<?php

/* @SonataAdmin/CRUD/list__select.html.twig */
class __TwigTemplate_061144811128e7d9c3a55c7eb6a5b22648b385070f94a7781489e634a7b38c78 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__select.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fde149f7399224701b85b56d22b7d85eb62e89a699fc6dd720c78b404700e98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fde149f7399224701b85b56d22b7d85eb62e89a699fc6dd720c78b404700e98->enter($__internal_0fde149f7399224701b85b56d22b7d85eb62e89a699fc6dd720c78b404700e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $__internal_7652a0e7f4e6e3ca64d50569c414cc9c854abd69661aa4d82acb1afc8b4b986c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7652a0e7f4e6e3ca64d50569c414cc9c854abd69661aa4d82acb1afc8b4b986c->enter($__internal_7652a0e7f4e6e3ca64d50569c414cc9c854abd69661aa4d82acb1afc8b4b986c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__select.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fde149f7399224701b85b56d22b7d85eb62e89a699fc6dd720c78b404700e98->leave($__internal_0fde149f7399224701b85b56d22b7d85eb62e89a699fc6dd720c78b404700e98_prof);

        
        $__internal_7652a0e7f4e6e3ca64d50569c414cc9c854abd69661aa4d82acb1afc8b4b986c->leave($__internal_7652a0e7f4e6e3ca64d50569c414cc9c854abd69661aa4d82acb1afc8b4b986c_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_aab886bdf78ad61357886be7d407406a4081272e25b7149e7a0c3046ad25b56a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aab886bdf78ad61357886be7d407406a4081272e25b7149e7a0c3046ad25b56a->enter($__internal_aab886bdf78ad61357886be7d407406a4081272e25b7149e7a0c3046ad25b56a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_d2c908546a2e5012eb3a6b99ccc5cbf5d1ff2709ef8a157de9a6eddbf5aac577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2c908546a2e5012eb3a6b99ccc5cbf5d1ff2709ef8a157de9a6eddbf5aac577->enter($__internal_d2c908546a2e5012eb3a6b99ccc5cbf5d1ff2709ef8a157de9a6eddbf5aac577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
        echo "\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("list_select", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </a>
";
        
        $__internal_d2c908546a2e5012eb3a6b99ccc5cbf5d1ff2709ef8a157de9a6eddbf5aac577->leave($__internal_d2c908546a2e5012eb3a6b99ccc5cbf5d1ff2709ef8a157de9a6eddbf5aac577_prof);

        
        $__internal_aab886bdf78ad61357886be7d407406a4081272e25b7149e7a0c3046ad25b56a->leave($__internal_aab886bdf78ad61357886be7d407406a4081272e25b7149e7a0c3046ad25b56a_prof);

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
", "@SonataAdmin/CRUD/list__select.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__select.html.twig");
    }
}
