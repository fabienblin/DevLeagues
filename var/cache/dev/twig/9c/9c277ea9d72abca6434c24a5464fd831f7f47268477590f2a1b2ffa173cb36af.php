<?php

/* @SonataBlock/Block/block_core_text.html.twig */
class __TwigTemplate_f01dda44e2ae479c3d0b7cc3e53f0c4ee02e39261fcd042b46c76f2030825861 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_text.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5585bd29e01fa54e532775b97898692ab7217e502832d6d59cf5d7ad9f0d0872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5585bd29e01fa54e532775b97898692ab7217e502832d6d59cf5d7ad9f0d0872->enter($__internal_5585bd29e01fa54e532775b97898692ab7217e502832d6d59cf5d7ad9f0d0872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $__internal_efecf3f8e54958f6c71b642261a4d7f7c68cc2ba0271563be3832770d7ccf64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efecf3f8e54958f6c71b642261a4d7f7c68cc2ba0271563be3832770d7ccf64a->enter($__internal_efecf3f8e54958f6c71b642261a4d7f7c68cc2ba0271563be3832770d7ccf64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_text.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5585bd29e01fa54e532775b97898692ab7217e502832d6d59cf5d7ad9f0d0872->leave($__internal_5585bd29e01fa54e532775b97898692ab7217e502832d6d59cf5d7ad9f0d0872_prof);

        
        $__internal_efecf3f8e54958f6c71b642261a4d7f7c68cc2ba0271563be3832770d7ccf64a->leave($__internal_efecf3f8e54958f6c71b642261a4d7f7c68cc2ba0271563be3832770d7ccf64a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_2cd2954b8ac3eb0a33a628f75218e5d8d030e3a2db499e25d4591ac8b6afb286 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd2954b8ac3eb0a33a628f75218e5d8d030e3a2db499e25d4591ac8b6afb286->enter($__internal_2cd2954b8ac3eb0a33a628f75218e5d8d030e3a2db499e25d4591ac8b6afb286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_f015151cba6254ffb5662409769be5e1972e3f709e112caccb5d7eb240741f21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f015151cba6254ffb5662409769be5e1972e3f709e112caccb5d7eb240741f21->enter($__internal_f015151cba6254ffb5662409769be5e1972e3f709e112caccb5d7eb240741f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    ";
        echo $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "content", array());
        echo "
";
        
        $__internal_f015151cba6254ffb5662409769be5e1972e3f709e112caccb5d7eb240741f21->leave($__internal_f015151cba6254ffb5662409769be5e1972e3f709e112caccb5d7eb240741f21_prof);

        
        $__internal_2cd2954b8ac3eb0a33a628f75218e5d8d030e3a2db499e25d4591ac8b6afb286->leave($__internal_2cd2954b8ac3eb0a33a628f75218e5d8d030e3a2db499e25d4591ac8b6afb286_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_text.html.twig";
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
    {{ settings.content|raw }}
{% endblock %}
", "@SonataBlock/Block/block_core_text.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_text.html.twig");
    }
}
