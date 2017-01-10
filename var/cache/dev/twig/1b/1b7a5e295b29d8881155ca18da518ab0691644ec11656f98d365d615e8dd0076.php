<?php

/* @SonataBlock/Block/block_container.html.twig */
class __TwigTemplate_0089a4eb5729a0b76c9073e2efdb5e7be032c0a36aa70888647a7d8c3f087c10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block_class' => array($this, 'block_block_class'),
            'block_role' => array($this, 'block_block_role'),
            'block' => array($this, 'block_block'),
            'block_child_render' => array($this, 'block_block_child_render'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_container.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_061aad2cff3e105c3189436c48b0701bfcc094b6902f668e45898f634d117fd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061aad2cff3e105c3189436c48b0701bfcc094b6902f668e45898f634d117fd5->enter($__internal_061aad2cff3e105c3189436c48b0701bfcc094b6902f668e45898f634d117fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $__internal_b4abaefc7ebea58a91d684a2fb3bab128e398a9d5ad49fb665ce31999cb737d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4abaefc7ebea58a91d684a2fb3bab128e398a9d5ad49fb665ce31999cb737d2->enter($__internal_b4abaefc7ebea58a91d684a2fb3bab128e398a9d5ad49fb665ce31999cb737d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_container.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061aad2cff3e105c3189436c48b0701bfcc094b6902f668e45898f634d117fd5->leave($__internal_061aad2cff3e105c3189436c48b0701bfcc094b6902f668e45898f634d117fd5_prof);

        
        $__internal_b4abaefc7ebea58a91d684a2fb3bab128e398a9d5ad49fb665ce31999cb737d2->leave($__internal_b4abaefc7ebea58a91d684a2fb3bab128e398a9d5ad49fb665ce31999cb737d2_prof);

    }

    // line 15
    public function block_block_class($context, array $blocks = array())
    {
        $__internal_b2783bde69187f8a050a38c5301e2ecb12ce610874c60cf1255027d4debf8302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2783bde69187f8a050a38c5301e2ecb12ce610874c60cf1255027d4debf8302->enter($__internal_b2783bde69187f8a050a38c5301e2ecb12ce610874c60cf1255027d4debf8302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        $__internal_8078b1f4ee4b701cff6d0ce07ccca4b73b0f140bf42a65aa8974c0c0d49af3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8078b1f4ee4b701cff6d0ce07ccca4b73b0f140bf42a65aa8974c0c0d49af3d7->enter($__internal_8078b1f4ee4b701cff6d0ce07ccca4b73b0f140bf42a65aa8974c0c0d49af3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_class"));

        echo " cms-container";
        if ( !$this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "hasParent", array(), "method")) {
            echo " cms-container-root";
        }
        if ($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array())) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "class", array()), "html", null, true);
        }
        
        $__internal_8078b1f4ee4b701cff6d0ce07ccca4b73b0f140bf42a65aa8974c0c0d49af3d7->leave($__internal_8078b1f4ee4b701cff6d0ce07ccca4b73b0f140bf42a65aa8974c0c0d49af3d7_prof);

        
        $__internal_b2783bde69187f8a050a38c5301e2ecb12ce610874c60cf1255027d4debf8302->leave($__internal_b2783bde69187f8a050a38c5301e2ecb12ce610874c60cf1255027d4debf8302_prof);

    }

    // line 18
    public function block_block_role($context, array $blocks = array())
    {
        $__internal_94ac8432e4972bf268669ce066bd0061ab9bb488838437202e44dc8c2fca7f73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ac8432e4972bf268669ce066bd0061ab9bb488838437202e44dc8c2fca7f73->enter($__internal_94ac8432e4972bf268669ce066bd0061ab9bb488838437202e44dc8c2fca7f73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        $__internal_fd06b68ee8533d01174f66b4b5877d4ae2ecb5ec2a48c0d7d075941196c50b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd06b68ee8533d01174f66b4b5877d4ae2ecb5ec2a48c0d7d075941196c50b35->enter($__internal_fd06b68ee8533d01174f66b4b5877d4ae2ecb5ec2a48c0d7d075941196c50b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_role"));

        echo "container";
        
        $__internal_fd06b68ee8533d01174f66b4b5877d4ae2ecb5ec2a48c0d7d075941196c50b35->leave($__internal_fd06b68ee8533d01174f66b4b5877d4ae2ecb5ec2a48c0d7d075941196c50b35_prof);

        
        $__internal_94ac8432e4972bf268669ce066bd0061ab9bb488838437202e44dc8c2fca7f73->leave($__internal_94ac8432e4972bf268669ce066bd0061ab9bb488838437202e44dc8c2fca7f73_prof);

    }

    // line 21
    public function block_block($context, array $blocks = array())
    {
        $__internal_32aa7a89e79f62a563d9b6ef343d6899fe45836b648405f5003e7447597c5a92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32aa7a89e79f62a563d9b6ef343d6899fe45836b648405f5003e7447597c5a92->enter($__internal_32aa7a89e79f62a563d9b6ef343d6899fe45836b648405f5003e7447597c5a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_f737dd596c393f81275cd88693898b55742b5dfe4d99864f8093cdb79d2c409e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f737dd596c393f81275cd88693898b55742b5dfe4d99864f8093cdb79d2c409e->enter($__internal_f737dd596c393f81275cd88693898b55742b5dfe4d99864f8093cdb79d2c409e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 22
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "pre", array());
        }
        // line 23
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "children", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 24
            echo "        ";
            $this->displayBlock('block_child_render', $context, $blocks);
            // line 27
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    ";
        if (($context["decorator"] ?? $this->getContext($context, "decorator"))) {
            echo $this->getAttribute(($context["decorator"] ?? $this->getContext($context, "decorator")), "post", array());
        }
        
        $__internal_f737dd596c393f81275cd88693898b55742b5dfe4d99864f8093cdb79d2c409e->leave($__internal_f737dd596c393f81275cd88693898b55742b5dfe4d99864f8093cdb79d2c409e_prof);

        
        $__internal_32aa7a89e79f62a563d9b6ef343d6899fe45836b648405f5003e7447597c5a92->leave($__internal_32aa7a89e79f62a563d9b6ef343d6899fe45836b648405f5003e7447597c5a92_prof);

    }

    // line 24
    public function block_block_child_render($context, array $blocks = array())
    {
        $__internal_af79769e4c72e99a90b87330ab60646e2bbf40b23d1b03d29ad4b0b8404886ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af79769e4c72e99a90b87330ab60646e2bbf40b23d1b03d29ad4b0b8404886ff->enter($__internal_af79769e4c72e99a90b87330ab60646e2bbf40b23d1b03d29ad4b0b8404886ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        $__internal_9f79a18800d9c325671560b33dbb036730a04f6a7a61aeb14c97fbbace5a0034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f79a18800d9c325671560b33dbb036730a04f6a7a61aeb14c97fbbace5a0034->enter($__internal_9f79a18800d9c325671560b33dbb036730a04f6a7a61aeb14c97fbbace5a0034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block_child_render"));

        // line 25
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(($context["child"] ?? $this->getContext($context, "child"))));
        echo "
        ";
        
        $__internal_9f79a18800d9c325671560b33dbb036730a04f6a7a61aeb14c97fbbace5a0034->leave($__internal_9f79a18800d9c325671560b33dbb036730a04f6a7a61aeb14c97fbbace5a0034_prof);

        
        $__internal_af79769e4c72e99a90b87330ab60646e2bbf40b23d1b03d29ad4b0b8404886ff->leave($__internal_af79769e4c72e99a90b87330ab60646e2bbf40b23d1b03d29ad4b0b8404886ff_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_container.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 25,  147 => 24,  134 => 28,  120 => 27,  117 => 24,  99 => 23,  94 => 22,  85 => 21,  67 => 18,  42 => 15,  21 => 12,);
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

{# block classes are prepended with a container class #}
{% block block_class %} cms-container{% if not block.hasParent() %} cms-container-root{%endif%}{% if settings.class %} {{ settings.class }}{% endif %}{% endblock %}

{# identify a block role used by the page editor #}
{% block block_role %}container{% endblock %}

{# render container block #}
{% block block %}
    {% if decorator %}{{ decorator.pre|raw }}{% endif %}
    {% for child in block.children %}
        {% block block_child_render %}
            {{ sonata_block_render(child) }}
        {% endblock %}
    {% endfor %}
    {% if decorator %}{{ decorator.post|raw }}{% endif %}
{% endblock %}
", "@SonataBlock/Block/block_container.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_container.html.twig");
    }
}
