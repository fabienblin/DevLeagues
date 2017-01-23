<?php

/* @SonataAdmin/empty_layout.html.twig */
class __TwigTemplate_04bdf306d5185cf87e78fd45b5b595c1963fbd428970b74cc869aa704ec28607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin_pool"] ?? $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "layout"), "method"), "@SonataAdmin/empty_layout.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b6900de229145cd3bccfe61f0572442d21736d36578853105a7ad6e371295953 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6900de229145cd3bccfe61f0572442d21736d36578853105a7ad6e371295953->enter($__internal_b6900de229145cd3bccfe61f0572442d21736d36578853105a7ad6e371295953_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $__internal_989c9f5b77af77de98b1c28d326ec9207aaa97aff73eac8b81685f2b2d238c93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989c9f5b77af77de98b1c28d326ec9207aaa97aff73eac8b81685f2b2d238c93->enter($__internal_989c9f5b77af77de98b1c28d326ec9207aaa97aff73eac8b81685f2b2d238c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/empty_layout.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6900de229145cd3bccfe61f0572442d21736d36578853105a7ad6e371295953->leave($__internal_b6900de229145cd3bccfe61f0572442d21736d36578853105a7ad6e371295953_prof);

        
        $__internal_989c9f5b77af77de98b1c28d326ec9207aaa97aff73eac8b81685f2b2d238c93->leave($__internal_989c9f5b77af77de98b1c28d326ec9207aaa97aff73eac8b81685f2b2d238c93_prof);

    }

    // line 14
    public function block_sonata_header($context, array $blocks = array())
    {
        $__internal_a447082c0d9f7246a32d8c381a2e5431a567b1c960b5ceae7dc6a106729144b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a447082c0d9f7246a32d8c381a2e5431a567b1c960b5ceae7dc6a106729144b3->enter($__internal_a447082c0d9f7246a32d8c381a2e5431a567b1c960b5ceae7dc6a106729144b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        $__internal_89b2b9d7b11984fe6977d5c1a867a43e15b990c465a84a7fa25db94cbd2f1e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b2b9d7b11984fe6977d5c1a867a43e15b990c465a84a7fa25db94cbd2f1e6b->enter($__internal_89b2b9d7b11984fe6977d5c1a867a43e15b990c465a84a7fa25db94cbd2f1e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_header"));

        
        $__internal_89b2b9d7b11984fe6977d5c1a867a43e15b990c465a84a7fa25db94cbd2f1e6b->leave($__internal_89b2b9d7b11984fe6977d5c1a867a43e15b990c465a84a7fa25db94cbd2f1e6b_prof);

        
        $__internal_a447082c0d9f7246a32d8c381a2e5431a567b1c960b5ceae7dc6a106729144b3->leave($__internal_a447082c0d9f7246a32d8c381a2e5431a567b1c960b5ceae7dc6a106729144b3_prof);

    }

    // line 15
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_79c5e02fb5ece0ec4c9130093ee91bafd282526849b23407d579ff0b103372c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79c5e02fb5ece0ec4c9130093ee91bafd282526849b23407d579ff0b103372c6->enter($__internal_79c5e02fb5ece0ec4c9130093ee91bafd282526849b23407d579ff0b103372c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        $__internal_efdaaf4ac3851ae4105459e1c0e8fd21b4aa7b374608997b2e8dca112538be4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efdaaf4ac3851ae4105459e1c0e8fd21b4aa7b374608997b2e8dca112538be4d->enter($__internal_efdaaf4ac3851ae4105459e1c0e8fd21b4aa7b374608997b2e8dca112538be4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_efdaaf4ac3851ae4105459e1c0e8fd21b4aa7b374608997b2e8dca112538be4d->leave($__internal_efdaaf4ac3851ae4105459e1c0e8fd21b4aa7b374608997b2e8dca112538be4d_prof);

        
        $__internal_79c5e02fb5ece0ec4c9130093ee91bafd282526849b23407d579ff0b103372c6->leave($__internal_79c5e02fb5ece0ec4c9130093ee91bafd282526849b23407d579ff0b103372c6_prof);

    }

    // line 16
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_e65af429980cb116cb563a4169449943c9b3c85d9c472a887e6e3d1b10aeb92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e65af429980cb116cb563a4169449943c9b3c85d9c472a887e6e3d1b10aeb92b->enter($__internal_e65af429980cb116cb563a4169449943c9b3c85d9c472a887e6e3d1b10aeb92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        $__internal_2f93b72efa799c4967ef88b09215de837451161fc2a9f05430bcd170ee8a5243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f93b72efa799c4967ef88b09215de837451161fc2a9f05430bcd170ee8a5243->enter($__internal_2f93b72efa799c4967ef88b09215de837451161fc2a9f05430bcd170ee8a5243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_2f93b72efa799c4967ef88b09215de837451161fc2a9f05430bcd170ee8a5243->leave($__internal_2f93b72efa799c4967ef88b09215de837451161fc2a9f05430bcd170ee8a5243_prof);

        
        $__internal_e65af429980cb116cb563a4169449943c9b3c85d9c472a887e6e3d1b10aeb92b->leave($__internal_e65af429980cb116cb563a4169449943c9b3c85d9c472a887e6e3d1b10aeb92b_prof);

    }

    // line 17
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        $__internal_fcac4822221c57a9f7b39a60750de17e0ecf2618b1021383e9a935fd83233d3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fcac4822221c57a9f7b39a60750de17e0ecf2618b1021383e9a935fd83233d3b->enter($__internal_fcac4822221c57a9f7b39a60750de17e0ecf2618b1021383e9a935fd83233d3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        $__internal_f491fe1447a1abdc8e2f3fe37dcade52d7c15fc0ff435964f5dff08cad466012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f491fe1447a1abdc8e2f3fe37dcade52d7c15fc0ff435964f5dff08cad466012->enter($__internal_f491fe1447a1abdc8e2f3fe37dcade52d7c15fc0ff435964f5dff08cad466012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_breadcrumb"));

        
        $__internal_f491fe1447a1abdc8e2f3fe37dcade52d7c15fc0ff435964f5dff08cad466012->leave($__internal_f491fe1447a1abdc8e2f3fe37dcade52d7c15fc0ff435964f5dff08cad466012_prof);

        
        $__internal_fcac4822221c57a9f7b39a60750de17e0ecf2618b1021383e9a935fd83233d3b->leave($__internal_fcac4822221c57a9f7b39a60750de17e0ecf2618b1021383e9a935fd83233d3b_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9e691e2d7494a2031ceec2e23c97a8ce1f571184e2c3630336e77f712c65169 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9e691e2d7494a2031ceec2e23c97a8ce1f571184e2c3630336e77f712c65169->enter($__internal_a9e691e2d7494a2031ceec2e23c97a8ce1f571184e2c3630336e77f712c65169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c335a7aef607ce7be5aa9d5d81b52a6c2716289a6ab2038ac6f4d079c8dc57e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c335a7aef607ce7be5aa9d5d81b52a6c2716289a6ab2038ac6f4d079c8dc57e1->enter($__internal_c335a7aef607ce7be5aa9d5d81b52a6c2716289a6ab2038ac6f4d079c8dc57e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

";
        
        $__internal_c335a7aef607ce7be5aa9d5d81b52a6c2716289a6ab2038ac6f4d079c8dc57e1->leave($__internal_c335a7aef607ce7be5aa9d5d81b52a6c2716289a6ab2038ac6f4d079c8dc57e1_prof);

        
        $__internal_a9e691e2d7494a2031ceec2e23c97a8ce1f571184e2c3630336e77f712c65169->leave($__internal_a9e691e2d7494a2031ceec2e23c97a8ce1f571184e2c3630336e77f712c65169_prof);

    }

    // line 31
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_c07ef015bdb217852df1a3695258fcce356c1f82eae5836d3750e56f4210432d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c07ef015bdb217852df1a3695258fcce356c1f82eae5836d3750e56f4210432d->enter($__internal_c07ef015bdb217852df1a3695258fcce356c1f82eae5836d3750e56f4210432d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        $__internal_6c2a71e918e4f98c6303ae002317b488fc0a5da72335a0e8d6974f40169f3bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2a71e918e4f98c6303ae002317b488fc0a5da72335a0e8d6974f40169f3bbe->enter($__internal_6c2a71e918e4f98c6303ae002317b488fc0a5da72335a0e8d6974f40169f3bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 32
        echo "    ";
        $this->displayBlock('sonata_page_content', $context, $blocks);
        
        $__internal_6c2a71e918e4f98c6303ae002317b488fc0a5da72335a0e8d6974f40169f3bbe->leave($__internal_6c2a71e918e4f98c6303ae002317b488fc0a5da72335a0e8d6974f40169f3bbe_prof);

        
        $__internal_c07ef015bdb217852df1a3695258fcce356c1f82eae5836d3750e56f4210432d->leave($__internal_c07ef015bdb217852df1a3695258fcce356c1f82eae5836d3750e56f4210432d_prof);

    }

    public function block_sonata_page_content($context, array $blocks = array())
    {
        $__internal_52c5240f9c5a93c3235f046c3475809a6cee7d77fe3e3e40ef1b22bd01b8bba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c5240f9c5a93c3235f046c3475809a6cee7d77fe3e3e40ef1b22bd01b8bba2->enter($__internal_52c5240f9c5a93c3235f046c3475809a6cee7d77fe3e3e40ef1b22bd01b8bba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        $__internal_f03a0b8d77f45ff909a69e323dbb7f741ae816cd6ff2ebc5e893141affd04681 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f03a0b8d77f45ff909a69e323dbb7f741ae816cd6ff2ebc5e893141affd04681->enter($__internal_f03a0b8d77f45ff909a69e323dbb7f741ae816cd6ff2ebc5e893141affd04681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_page_content"));

        // line 33
        echo "        ";
        $this->displayParentBlock("sonata_page_content", $context, $blocks);
        echo "
    ";
        
        $__internal_f03a0b8d77f45ff909a69e323dbb7f741ae816cd6ff2ebc5e893141affd04681->leave($__internal_f03a0b8d77f45ff909a69e323dbb7f741ae816cd6ff2ebc5e893141affd04681_prof);

        
        $__internal_52c5240f9c5a93c3235f046c3475809a6cee7d77fe3e3e40ef1b22bd01b8bba2->leave($__internal_52c5240f9c5a93c3235f046c3475809a6cee7d77fe3e3e40ef1b22bd01b8bba2_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/empty_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 33,  152 => 32,  143 => 31,  122 => 20,  113 => 19,  96 => 17,  79 => 16,  62 => 15,  45 => 14,  24 => 12,);
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

{% extends admin_pool.getTemplate('layout') %}

{% block sonata_header %}{% endblock %}
{% block sonata_left_side %}{% endblock %}
{% block sonata_nav %}{% endblock %}
{% block sonata_breadcrumb %}{% endblock %}

{% block stylesheets %}
    {{ parent() }}

    <style>
        .content {
            margin: 0px;
            padding: 0px;
        }
    </style>

{% endblock %}

{% block sonata_wrapper %}
    {% block sonata_page_content %}
        {{ parent() }}
    {% endblock %}
{% endblock %}
", "@SonataAdmin/empty_layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/empty_layout.html.twig");
    }
}
