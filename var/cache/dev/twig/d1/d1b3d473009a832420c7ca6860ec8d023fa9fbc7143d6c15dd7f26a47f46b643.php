<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_4145095847b2b203c10fcc6f813289968aa636c76a6450ea6a61f406e954a134 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_exception.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b92f538320d5e2e30743e2389bb06ec25a97bde59c489e91eb94faa2ee2977f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b92f538320d5e2e30743e2389bb06ec25a97bde59c489e91eb94faa2ee2977f->enter($__internal_5b92f538320d5e2e30743e2389bb06ec25a97bde59c489e91eb94faa2ee2977f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $__internal_9aed95d1f7945496494585f40b78e7d8e2c624f5e5c2849615033fa5cd915089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aed95d1f7945496494585f40b78e7d8e2c624f5e5c2849615033fa5cd915089->enter($__internal_9aed95d1f7945496494585f40b78e7d8e2c624f5e5c2849615033fa5cd915089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b92f538320d5e2e30743e2389bb06ec25a97bde59c489e91eb94faa2ee2977f->leave($__internal_5b92f538320d5e2e30743e2389bb06ec25a97bde59c489e91eb94faa2ee2977f_prof);

        
        $__internal_9aed95d1f7945496494585f40b78e7d8e2c624f5e5c2849615033fa5cd915089->leave($__internal_9aed95d1f7945496494585f40b78e7d8e2c624f5e5c2849615033fa5cd915089_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_f3b7243a303352dd90c7af88f56810b8a276f9b963a2b34dead80b7e70ab4b46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3b7243a303352dd90c7af88f56810b8a276f9b963a2b34dead80b7e70ab4b46->enter($__internal_f3b7243a303352dd90c7af88f56810b8a276f9b963a2b34dead80b7e70ab4b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_45edfbd9023d4aaeecea7c60879d486e306fe4df4762eea3940a07eb886e5738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45edfbd9023d4aaeecea7c60879d486e306fe4df4762eea3940a07eb886e5738->enter($__internal_45edfbd9023d4aaeecea7c60879d486e306fe4df4762eea3940a07eb886e5738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"cms-block-exception\">
        <h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "name", array()), "html", null, true);
        echo "</h2>
        <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo "</h3>
    </div>
";
        
        $__internal_45edfbd9023d4aaeecea7c60879d486e306fe4df4762eea3940a07eb886e5738->leave($__internal_45edfbd9023d4aaeecea7c60879d486e306fe4df4762eea3940a07eb886e5738_prof);

        
        $__internal_f3b7243a303352dd90c7af88f56810b8a276f9b963a2b34dead80b7e70ab4b46->leave($__internal_f3b7243a303352dd90c7af88f56810b8a276f9b963a2b34dead80b7e70ab4b46_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <div class=\"cms-block-exception\">
        <h2>{{ block.name }}</h2>
        <h3>{{ exception.message }}</h3>
    </div>
{% endblock %}
", "@SonataBlock/Block/block_exception.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_exception.html.twig");
    }
}
