<?php

/* @SonataBlock/Block/block_core_action.html.twig */
class __TwigTemplate_a292bc7eab0b0601af3278ec3d73276185df47df2ba574822ceeedf3ec86ea99 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9b62e4c251b5937bfc0eec67e01e360fc8a509e599abe839bd0cf8cb425e722b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b62e4c251b5937bfc0eec67e01e360fc8a509e599abe839bd0cf8cb425e722b->enter($__internal_9b62e4c251b5937bfc0eec67e01e360fc8a509e599abe839bd0cf8cb425e722b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $__internal_0ea1742d2b8d2a286f34d4fe7ca01c40ffa2ef15420994c87ea6a4ff8cae795f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea1742d2b8d2a286f34d4fe7ca01c40ffa2ef15420994c87ea6a4ff8cae795f->enter($__internal_0ea1742d2b8d2a286f34d4fe7ca01c40ffa2ef15420994c87ea6a4ff8cae795f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b62e4c251b5937bfc0eec67e01e360fc8a509e599abe839bd0cf8cb425e722b->leave($__internal_9b62e4c251b5937bfc0eec67e01e360fc8a509e599abe839bd0cf8cb425e722b_prof);

        
        $__internal_0ea1742d2b8d2a286f34d4fe7ca01c40ffa2ef15420994c87ea6a4ff8cae795f->leave($__internal_0ea1742d2b8d2a286f34d4fe7ca01c40ffa2ef15420994c87ea6a4ff8cae795f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_67111d732d61fa2ef19d1d0a0695ca7d6e5f32e78def11eae4612f4dd95129fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67111d732d61fa2ef19d1d0a0695ca7d6e5f32e78def11eae4612f4dd95129fb->enter($__internal_67111d732d61fa2ef19d1d0a0695ca7d6e5f32e78def11eae4612f4dd95129fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_94ab5e7a472750185feddd961e359b5d9e38a76dd70435d7eaa178c729820b31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ab5e7a472750185feddd961e359b5d9e38a76dd70435d7eaa178c729820b31->enter($__internal_94ab5e7a472750185feddd961e359b5d9e38a76dd70435d7eaa178c729820b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
";
        
        $__internal_94ab5e7a472750185feddd961e359b5d9e38a76dd70435d7eaa178c729820b31->leave($__internal_94ab5e7a472750185feddd961e359b5d9e38a76dd70435d7eaa178c729820b31_prof);

        
        $__internal_67111d732d61fa2ef19d1d0a0695ca7d6e5f32e78def11eae4612f4dd95129fb->leave($__internal_67111d732d61fa2ef19d1d0a0695ca7d6e5f32e78def11eae4612f4dd95129fb_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  39 => 14,  18 => 12,);
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
    {{ content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_action.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_action.html.twig");
    }
}
