<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_af9f9b3db3384de1ef5cebf79becbc7598f0d86a13107b36f31ef2d1567230ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab4ee92ba0aff79e354ab65291a68e6b305af6c8fac959e5993e9891ddedc91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab4ee92ba0aff79e354ab65291a68e6b305af6c8fac959e5993e9891ddedc91e->enter($__internal_ab4ee92ba0aff79e354ab65291a68e6b305af6c8fac959e5993e9891ddedc91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $__internal_5031d475c125f8ccd6f28b2eee2081d0ee637c839299d337f50c5e5e5329cb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5031d475c125f8ccd6f28b2eee2081d0ee637c839299d337f50c5e5e5329cb58->enter($__internal_5031d475c125f8ccd6f28b2eee2081d0ee637c839299d337f50c5e5e5329cb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab4ee92ba0aff79e354ab65291a68e6b305af6c8fac959e5993e9891ddedc91e->leave($__internal_ab4ee92ba0aff79e354ab65291a68e6b305af6c8fac959e5993e9891ddedc91e_prof);

        
        $__internal_5031d475c125f8ccd6f28b2eee2081d0ee637c839299d337f50c5e5e5329cb58->leave($__internal_5031d475c125f8ccd6f28b2eee2081d0ee637c839299d337f50c5e5e5329cb58_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_ece859047c878912610cb64e9e2304babc88cfa5c34d1ae2a9fa865d26b17266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece859047c878912610cb64e9e2304babc88cfa5c34d1ae2a9fa865d26b17266->enter($__internal_ece859047c878912610cb64e9e2304babc88cfa5c34d1ae2a9fa865d26b17266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_f02298838d4265d097523d33d8053eb008c00f1d5cc676f4322b45e82dbafc3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02298838d4265d097523d33d8053eb008c00f1d5cc676f4322b45e82dbafc3a->enter($__internal_f02298838d4265d097523d33d8053eb008c00f1d5cc676f4322b45e82dbafc3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>";
        // line 33
        echo "{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}";
        echo "</pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>";
        // line 43
        echo "{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}";
        echo "</pre>
";
        
        $__internal_f02298838d4265d097523d33d8053eb008c00f1d5cc676f4322b45e82dbafc3a->leave($__internal_f02298838d4265d097523d33d8053eb008c00f1d5cc676f4322b45e82dbafc3a_prof);

        
        $__internal_ece859047c878912610cb64e9e2304babc88cfa5c34d1ae2a9fa865d26b17266->leave($__internal_ece859047c878912610cb64e9e2304babc88cfa5c34d1ae2a9fa865d26b17266_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 43,  53 => 33,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends sonata_block.templates.block_base %}

{% block block %}
    <h3>Sonata Block Template</h3>
    If you want to use the <code>sonata.block.template</code> block type, you need to create a template :

    <pre>
        {%- verbatim -%}
{# file: 'MyBundle:Block:my_block_feature_1.html.twig' #}
{% extends sonata_block.templates.block_base %}

{% block block %}
    &lt;h3&gt;The block title&lt;/h3&gt;
    &lt;p&gt;
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel turpis at lacus
        vehicula fringilla at eu lectus. Duis vitae arcu congue, porttitor nisi sit amet,
        mattis metus. Nunc mollis elit ut lectus cursus luctus. Aliquam eu magna sit amet
        massa volutpat auctor.
    &lt;/p&gt;
{% endblock %}
        {%- endverbatim -%}
    </pre>

    And then call it from a template with the <code>sonata_block_render</code> helper:

    <pre>
{%- verbatim -%}
{{ sonata_block_render({ 'type': 'sonata.block.service.template' }, {
    'template': 'MyBundle:Block:my_block_feature_1.html.twig',
}) }}
{%- endverbatim -%}
    </pre>
{% endblock %}
", "@SonataBlock/Block/block_template.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
