<?php

/* @SonataBlock/Block/block_template.html.twig */
class __TwigTemplate_56f1377cf0bee1337d45f89e878e865330d06160ddaedd56a4661c17c6ed2064 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_template.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_153b174316385e6651d6bc9075356047629eedff8da250cb158f1ce1284390ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153b174316385e6651d6bc9075356047629eedff8da250cb158f1ce1284390ac->enter($__internal_153b174316385e6651d6bc9075356047629eedff8da250cb158f1ce1284390ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $__internal_f112090819f143aeaa218a79bde7f9d877262c0b7a4b4f72981afc94f61797b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f112090819f143aeaa218a79bde7f9d877262c0b7a4b4f72981afc94f61797b4->enter($__internal_f112090819f143aeaa218a79bde7f9d877262c0b7a4b4f72981afc94f61797b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_template.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_153b174316385e6651d6bc9075356047629eedff8da250cb158f1ce1284390ac->leave($__internal_153b174316385e6651d6bc9075356047629eedff8da250cb158f1ce1284390ac_prof);

        
        $__internal_f112090819f143aeaa218a79bde7f9d877262c0b7a4b4f72981afc94f61797b4->leave($__internal_f112090819f143aeaa218a79bde7f9d877262c0b7a4b4f72981afc94f61797b4_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_61719fdf2b0ecc1de2b3c02835cce8dc987a546818552ed81dfb9ce9e274db03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61719fdf2b0ecc1de2b3c02835cce8dc987a546818552ed81dfb9ce9e274db03->enter($__internal_61719fdf2b0ecc1de2b3c02835cce8dc987a546818552ed81dfb9ce9e274db03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_7b06314281b31f2471bcf6b714933bb9046c7f060756247e8616c1e7368df98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b06314281b31f2471bcf6b714933bb9046c7f060756247e8616c1e7368df98c->enter($__internal_7b06314281b31f2471bcf6b714933bb9046c7f060756247e8616c1e7368df98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_7b06314281b31f2471bcf6b714933bb9046c7f060756247e8616c1e7368df98c->leave($__internal_7b06314281b31f2471bcf6b714933bb9046c7f060756247e8616c1e7368df98c_prof);

        
        $__internal_61719fdf2b0ecc1de2b3c02835cce8dc987a546818552ed81dfb9ce9e274db03->leave($__internal_61719fdf2b0ecc1de2b3c02835cce8dc987a546818552ed81dfb9ce9e274db03_prof);

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
", "@SonataBlock/Block/block_template.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_template.html.twig");
    }
}
