<?php

/* @SonataAdmin/Block/block_stats.html.twig */
class __TwigTemplate_882b1acb337228f4eaf78a88a3844f83ab1cdab9d04f7735156c1ce22a77029e extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataAdmin/Block/block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3bc7a1310aa604ea7fbc4a362cf30063a9991dde237ae64ad49d149c2eda9ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc7a1310aa604ea7fbc4a362cf30063a9991dde237ae64ad49d149c2eda9ad1->enter($__internal_3bc7a1310aa604ea7fbc4a362cf30063a9991dde237ae64ad49d149c2eda9ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $__internal_7781e485ed6d62948092cfa76d0116bc6cb28dd5fa5e15cdbcc73ef66a8a18f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7781e485ed6d62948092cfa76d0116bc6cb28dd5fa5e15cdbcc73ef66a8a18f9->enter($__internal_7781e485ed6d62948092cfa76d0116bc6cb28dd5fa5e15cdbcc73ef66a8a18f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bc7a1310aa604ea7fbc4a362cf30063a9991dde237ae64ad49d149c2eda9ad1->leave($__internal_3bc7a1310aa604ea7fbc4a362cf30063a9991dde237ae64ad49d149c2eda9ad1_prof);

        
        $__internal_7781e485ed6d62948092cfa76d0116bc6cb28dd5fa5e15cdbcc73ef66a8a18f9->leave($__internal_7781e485ed6d62948092cfa76d0116bc6cb28dd5fa5e15cdbcc73ef66a8a18f9_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_8af00a304d6068a225a479be9a584d1f5a3ef63dc8ac15c4aec8070c29d03fa6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8af00a304d6068a225a479be9a584d1f5a3ef63dc8ac15c4aec8070c29d03fa6->enter($__internal_8af00a304d6068a225a479be9a584d1f5a3ef63dc8ac15c4aec8070c29d03fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_1f1b09929fe01066742e2dc1d5e60958a0a12c8ad32f081c99c20319f675112a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1b09929fe01066742e2dc1d5e60958a0a12c8ad32f081c99c20319f675112a->enter($__internal_1f1b09929fe01066742e2dc1d5e60958a0a12c8ad32f081c99c20319f675112a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["pager"] ?? $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_1f1b09929fe01066742e2dc1d5e60958a0a12c8ad32f081c99c20319f675112a->leave($__internal_1f1b09929fe01066742e2dc1d5e60958a0a12c8ad32f081c99c20319f675112a_prof);

        
        $__internal_8af00a304d6068a225a479be9a584d1f5a3ef63dc8ac15c4aec8070c29d03fa6->leave($__internal_8af00a304d6068a225a479be9a584d1f5a3ef63dc8ac15c4aec8070c29d03fa6_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_stats.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  72 => 25,  67 => 23,  61 => 20,  56 => 18,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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
    <!-- small box -->
    <div class=\"small-box {{ settings.color }}\">
        <div class=\"inner\">
            <h3>{{ pager.count() }}</h3>

            <p>{{ settings.text|trans({}, admin.translationDomain) }}</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa {{ settings.icon }}\"></i>
        </div>
        <a href=\"{{ admin.generateUrl('list', {filter: settings.filters}) }}\" class=\"small-box-footer\">
            {{ 'stats_view_more'|trans({}, 'SonataAdminBundle') }} <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_stats.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
