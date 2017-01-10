<?php

/* @SonataAdmin/CRUD/list_time.html.twig */
class __TwigTemplate_eeeb9a03580f88e9efca22f0022af0804fd7b99e781a6391d20dcdd80e6ba383 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_time.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95b856ee26259efbe3f76a0ed48ec26c07c715f429ed6f421e7bddcdabf1d06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b856ee26259efbe3f76a0ed48ec26c07c715f429ed6f421e7bddcdabf1d06c->enter($__internal_95b856ee26259efbe3f76a0ed48ec26c07c715f429ed6f421e7bddcdabf1d06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $__internal_da4278b981cd90efb189fb6c4d60808fa18c76e68d6559aca227f0b768bd0ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4278b981cd90efb189fb6c4d60808fa18c76e68d6559aca227f0b768bd0ed5->enter($__internal_da4278b981cd90efb189fb6c4d60808fa18c76e68d6559aca227f0b768bd0ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_time.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b856ee26259efbe3f76a0ed48ec26c07c715f429ed6f421e7bddcdabf1d06c->leave($__internal_95b856ee26259efbe3f76a0ed48ec26c07c715f429ed6f421e7bddcdabf1d06c_prof);

        
        $__internal_da4278b981cd90efb189fb6c4d60808fa18c76e68d6559aca227f0b768bd0ed5->leave($__internal_da4278b981cd90efb189fb6c4d60808fa18c76e68d6559aca227f0b768bd0ed5_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_a4dd3b1ce9e6e28c71bb6e86ecb47893989981f7ec119983d2f0543aff74ca85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4dd3b1ce9e6e28c71bb6e86ecb47893989981f7ec119983d2f0543aff74ca85->enter($__internal_a4dd3b1ce9e6e28c71bb6e86ecb47893989981f7ec119983d2f0543aff74ca85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4cc8aa8efb536fbef99566341d727b0f5c4034377bee1ff6394319d3b5ce9381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cc8aa8efb536fbef99566341d727b0f5c4034377bee1ff6394319d3b5ce9381->enter($__internal_4cc8aa8efb536fbef99566341d727b0f5c4034377bee1ff6394319d3b5ce9381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        if (twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } else {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "H:i:s"), "html", null, true);
        }
        
        $__internal_4cc8aa8efb536fbef99566341d727b0f5c4034377bee1ff6394319d3b5ce9381->leave($__internal_4cc8aa8efb536fbef99566341d727b0f5c4034377bee1ff6394319d3b5ce9381_prof);

        
        $__internal_a4dd3b1ce9e6e28c71bb6e86ecb47893989981f7ec119983d2f0543aff74ca85->leave($__internal_a4dd3b1ce9e6e28c71bb6e86ecb47893989981f7ec119983d2f0543aff74ca85_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  50 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    {%- if value is empty -%}
        &nbsp;
    {%- else -%}
        {{ value|date('H:i:s') }}
    {%- endif -%}
{% endblock %}
", "@SonataAdmin/CRUD/list_time.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_time.html.twig");
    }
}
