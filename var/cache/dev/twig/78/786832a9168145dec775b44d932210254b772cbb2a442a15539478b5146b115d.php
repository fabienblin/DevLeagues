<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_6042fec18668e0b062fc8ac00ac7ec7f4cf0ef396fc8f3560483e6da42172081 extends Twig_Template
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
        $__internal_13519659ef847f5c6f8691a5b70e35cbd8157c465297825e3304a65917f9e594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13519659ef847f5c6f8691a5b70e35cbd8157c465297825e3304a65917f9e594->enter($__internal_13519659ef847f5c6f8691a5b70e35cbd8157c465297825e3304a65917f9e594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $__internal_06cac0b0c756768a6124bc13c573961e49e188f2a6bfd8a890050207ac0c9612 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06cac0b0c756768a6124bc13c573961e49e188f2a6bfd8a890050207ac0c9612->enter($__internal_06cac0b0c756768a6124bc13c573961e49e188f2a6bfd8a890050207ac0c9612_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13519659ef847f5c6f8691a5b70e35cbd8157c465297825e3304a65917f9e594->leave($__internal_13519659ef847f5c6f8691a5b70e35cbd8157c465297825e3304a65917f9e594_prof);

        
        $__internal_06cac0b0c756768a6124bc13c573961e49e188f2a6bfd8a890050207ac0c9612->leave($__internal_06cac0b0c756768a6124bc13c573961e49e188f2a6bfd8a890050207ac0c9612_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_e29a2d9736091655d15c085bae9fb42ee59e1dd20d8765faf0a4331b63f6900c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e29a2d9736091655d15c085bae9fb42ee59e1dd20d8765faf0a4331b63f6900c->enter($__internal_e29a2d9736091655d15c085bae9fb42ee59e1dd20d8765faf0a4331b63f6900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_92b89d39b98b03c5105efcbbcd0af0c1cac49e1a0e61a610298a23e6a2047b77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b89d39b98b03c5105efcbbcd0af0c1cac49e1a0e61a610298a23e6a2047b77->enter($__internal_92b89d39b98b03c5105efcbbcd0af0c1cac49e1a0e61a610298a23e6a2047b77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_92b89d39b98b03c5105efcbbcd0af0c1cac49e1a0e61a610298a23e6a2047b77->leave($__internal_92b89d39b98b03c5105efcbbcd0af0c1cac49e1a0e61a610298a23e6a2047b77_prof);

        
        $__internal_e29a2d9736091655d15c085bae9fb42ee59e1dd20d8765faf0a4331b63f6900c->leave($__internal_e29a2d9736091655d15c085bae9fb42ee59e1dd20d8765faf0a4331b63f6900c_prof);

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
