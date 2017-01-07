<?php

/* @SonataAdmin/Block/block_stats.html.twig */
class __TwigTemplate_758c2c1a22ee40dda1a3b3758ba5e26596921a0dce2b75db45d01ec799dc9314 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataAdmin/Block/block_stats.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c07b07646f6b302feaddd35b0ee1209e7a7f8246b039ee73b15e7ffd462975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0c07b07646f6b302feaddd35b0ee1209e7a7f8246b039ee73b15e7ffd462975->enter($__internal_a0c07b07646f6b302feaddd35b0ee1209e7a7f8246b039ee73b15e7ffd462975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $__internal_efc763614bee787607e0bf7f908586b85531fba40b7b8b45b3b3032ce37b644f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efc763614bee787607e0bf7f908586b85531fba40b7b8b45b3b3032ce37b644f->enter($__internal_efc763614bee787607e0bf7f908586b85531fba40b7b8b45b3b3032ce37b644f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_stats.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c07b07646f6b302feaddd35b0ee1209e7a7f8246b039ee73b15e7ffd462975->leave($__internal_a0c07b07646f6b302feaddd35b0ee1209e7a7f8246b039ee73b15e7ffd462975_prof);

        
        $__internal_efc763614bee787607e0bf7f908586b85531fba40b7b8b45b3b3032ce37b644f->leave($__internal_efc763614bee787607e0bf7f908586b85531fba40b7b8b45b3b3032ce37b644f_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_188365aa8ffc0f68aeb16367006c109a703d3878deb35128f860422cccf93408 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_188365aa8ffc0f68aeb16367006c109a703d3878deb35128f860422cccf93408->enter($__internal_188365aa8ffc0f68aeb16367006c109a703d3878deb35128f860422cccf93408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_eb343617e8fa6f0915f200602d531d53f6e20c2487e3cfe1680c3f4379bf4a97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb343617e8fa6f0915f200602d531d53f6e20c2487e3cfe1680c3f4379bf4a97->enter($__internal_eb343617e8fa6f0915f200602d531d53f6e20c2487e3cfe1680c3f4379bf4a97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <!-- small box -->
    <div class=\"small-box ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "color", array()), "html", null, true);
        echo "\">
        <div class=\"inner\">
            <h3>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pager"]) ? $context["pager"] : $this->getContext($context, "pager")), "count", array(), "method"), "html", null, true);
        echo "</h3>

            <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "text", array()), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "html", null, true);
        echo "</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "icon", array()), "html", null, true);
        echo "\"></i>
        </div>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filter" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "filters", array()))), "method"), "html", null, true);
        echo "\" class=\"small-box-footer\">
            ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("stats_view_more", array(), "SonataAdminBundle"), "html", null, true);
        echo " <i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i>
        </a>
    </div>
";
        
        $__internal_eb343617e8fa6f0915f200602d531d53f6e20c2487e3cfe1680c3f4379bf4a97->leave($__internal_eb343617e8fa6f0915f200602d531d53f6e20c2487e3cfe1680c3f4379bf4a97_prof);

        
        $__internal_188365aa8ffc0f68aeb16367006c109a703d3878deb35128f860422cccf93408->leave($__internal_188365aa8ffc0f68aeb16367006c109a703d3878deb35128f860422cccf93408_prof);

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
", "@SonataAdmin/Block/block_stats.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Block/block_stats.html.twig");
    }
}
