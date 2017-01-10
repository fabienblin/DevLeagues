<?php

/* @SonataBlock/Block/block_exception.html.twig */
class __TwigTemplate_dcdddff2f07c4c5d0305a5950f0cb25299a0ac9fa571fa6cfe982ce919d71b6c extends Twig_Template
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
        $__internal_7e5717dd71f5974262ef936831cc87eddf40d590e8a29443e131621e46708551 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e5717dd71f5974262ef936831cc87eddf40d590e8a29443e131621e46708551->enter($__internal_7e5717dd71f5974262ef936831cc87eddf40d590e8a29443e131621e46708551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $__internal_27a3797420adadc945f6eb4bae8aa11caa2ba2ed1d7fec89ad50f6d688e43982 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27a3797420adadc945f6eb4bae8aa11caa2ba2ed1d7fec89ad50f6d688e43982->enter($__internal_27a3797420adadc945f6eb4bae8aa11caa2ba2ed1d7fec89ad50f6d688e43982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_exception.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e5717dd71f5974262ef936831cc87eddf40d590e8a29443e131621e46708551->leave($__internal_7e5717dd71f5974262ef936831cc87eddf40d590e8a29443e131621e46708551_prof);

        
        $__internal_27a3797420adadc945f6eb4bae8aa11caa2ba2ed1d7fec89ad50f6d688e43982->leave($__internal_27a3797420adadc945f6eb4bae8aa11caa2ba2ed1d7fec89ad50f6d688e43982_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_3b8cbc16faf96d0472047d42daaf047428e22faf714ca6fb63c51022a8ef208e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8cbc16faf96d0472047d42daaf047428e22faf714ca6fb63c51022a8ef208e->enter($__internal_3b8cbc16faf96d0472047d42daaf047428e22faf714ca6fb63c51022a8ef208e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_5d345a7aa77ba6b96928032b24fc91a2949693fcf7c04e97a1fe21e9eb24bf50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d345a7aa77ba6b96928032b24fc91a2949693fcf7c04e97a1fe21e9eb24bf50->enter($__internal_5d345a7aa77ba6b96928032b24fc91a2949693fcf7c04e97a1fe21e9eb24bf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_5d345a7aa77ba6b96928032b24fc91a2949693fcf7c04e97a1fe21e9eb24bf50->leave($__internal_5d345a7aa77ba6b96928032b24fc91a2949693fcf7c04e97a1fe21e9eb24bf50_prof);

        
        $__internal_3b8cbc16faf96d0472047d42daaf047428e22faf714ca6fb63c51022a8ef208e->leave($__internal_3b8cbc16faf96d0472047d42daaf047428e22faf714ca6fb63c51022a8ef208e_prof);

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
