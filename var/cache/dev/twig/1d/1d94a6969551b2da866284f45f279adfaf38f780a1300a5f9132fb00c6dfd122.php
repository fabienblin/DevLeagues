<?php

/* SonataAdminBundle:CRUD:base_show_compare.html.twig */
class __TwigTemplate_0d5af9c13bb3379b4a7244010067db5d86f7fa8d09adc63946235331da7a32d0 extends Twig_Template
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
        $__internal_c4a072138f2af9360352211831d2480876c6c043e999508305a55aac5880620b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4a072138f2af9360352211831d2480876c6c043e999508305a55aac5880620b->enter($__internal_c4a072138f2af9360352211831d2480876c6c043e999508305a55aac5880620b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $__internal_3039a4667af05ac30e5e0aa94760552494e76a70062274cc4514fc5b484d841f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3039a4667af05ac30e5e0aa94760552494e76a70062274cc4514fc5b484d841f->enter($__internal_3039a4667af05ac30e5e0aa94760552494e76a70062274cc4514fc5b484d841f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_compare.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4a072138f2af9360352211831d2480876c6c043e999508305a55aac5880620b->leave($__internal_c4a072138f2af9360352211831d2480876c6c043e999508305a55aac5880620b_prof);

        
        $__internal_3039a4667af05ac30e5e0aa94760552494e76a70062274cc4514fc5b484d841f->leave($__internal_3039a4667af05ac30e5e0aa94760552494e76a70062274cc4514fc5b484d841f_prof);

    }

    // line 14
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_bb8c2f577c80fb26f5f5fe1d19fd212a40832ef917cff55b5c501e83f4699691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb8c2f577c80fb26f5f5fe1d19fd212a40832ef917cff55b5c501e83f4699691->enter($__internal_bb8c2f577c80fb26f5f5fe1d19fd212a40832ef917cff55b5c501e83f4699691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_6a61eb0983897f40a0009386a030852410e0a92eeb6284d708ddcd8f5de68154 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a61eb0983897f40a0009386a030852410e0a92eeb6284d708ddcd8f5de68154->enter($__internal_6a61eb0983897f40a0009386a030852410e0a92eeb6284d708ddcd8f5de68154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

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
        
        $__internal_6a61eb0983897f40a0009386a030852410e0a92eeb6284d708ddcd8f5de68154->leave($__internal_6a61eb0983897f40a0009386a030852410e0a92eeb6284d708ddcd8f5de68154_prof);

        
        $__internal_bb8c2f577c80fb26f5f5fe1d19fd212a40832ef917cff55b5c501e83f4699691->leave($__internal_bb8c2f577c80fb26f5f5fe1d19fd212a40832ef917cff55b5c501e83f4699691_prof);

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
