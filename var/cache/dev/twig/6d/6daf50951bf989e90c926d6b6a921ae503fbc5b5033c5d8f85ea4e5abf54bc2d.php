<?php

/* @SonataBlock/Block/block_core_rss.html.twig */
class __TwigTemplate_207dcf7edaff135551bbfc431b97e4d2549ca9ea7e180340d72378ed2b082da9 extends Twig_Template
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
        // line 11
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["sonata_block"] ?? $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7e3a6c57caeda699b907ab08b894af1a66d32f377da9a75d823e940beeef801 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e3a6c57caeda699b907ab08b894af1a66d32f377da9a75d823e940beeef801->enter($__internal_e7e3a6c57caeda699b907ab08b894af1a66d32f377da9a75d823e940beeef801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $__internal_f02ebec2dc0e2f1bd5eeca68327d5064085b8c19df41c49a7662f6d1652ce5dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02ebec2dc0e2f1bd5eeca68327d5064085b8c19df41c49a7662f6d1652ce5dc->enter($__internal_f02ebec2dc0e2f1bd5eeca68327d5064085b8c19df41c49a7662f6d1652ce5dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7e3a6c57caeda699b907ab08b894af1a66d32f377da9a75d823e940beeef801->leave($__internal_e7e3a6c57caeda699b907ab08b894af1a66d32f377da9a75d823e940beeef801_prof);

        
        $__internal_f02ebec2dc0e2f1bd5eeca68327d5064085b8c19df41c49a7662f6d1652ce5dc->leave($__internal_f02ebec2dc0e2f1bd5eeca68327d5064085b8c19df41c49a7662f6d1652ce5dc_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_d4a3624bd0a10e8cc25bba455e6e75576efe622bde671373cfeebf5cd3594d89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a3624bd0a10e8cc25bba455e6e75576efe622bde671373cfeebf5cd3594d89->enter($__internal_d4a3624bd0a10e8cc25bba455e6e75576efe622bde671373cfeebf5cd3594d89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_65fff5a91273c207677d6268155f12b46eb6fc7dcf9b945323bf05ce5c0cf572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65fff5a91273c207677d6268155f12b46eb6fc7dcf9b945323bf05ce5c0cf572->enter($__internal_65fff5a91273c207677d6268155f12b46eb6fc7dcf9b945323bf05ce5c0cf572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 18
            echo "            <div>
                <strong><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</a></strong>
                <div>";
            // line 20
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "                No feeds available.
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
";
        
        $__internal_65fff5a91273c207677d6268155f12b46eb6fc7dcf9b945323bf05ce5c0cf572->leave($__internal_65fff5a91273c207677d6268155f12b46eb6fc7dcf9b945323bf05ce5c0cf572_prof);

        
        $__internal_d4a3624bd0a10e8cc25bba455e6e75576efe622bde671373cfeebf5cd3594d89->leave($__internal_d4a3624bd0a10e8cc25bba455e6e75576efe622bde671373cfeebf5cd3594d89_prof);

    }

    public function getTemplateName()
    {
        return "@SonataBlock/Block/block_core_rss.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  79 => 23,  71 => 20,  63 => 19,  60 => 18,  55 => 17,  48 => 14,  39 => 13,  18 => 11,);
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
    <h3 class=\"sonata-feed-title\">{{ settings.title }}</h3>

    <div class=\"sonata-feeds-container\">
        {% for feed in feeds %}
            <div>
                <strong><a href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">{{ feed.title }}</a></strong>
                <div>{{ feed.description|raw }}</div>
            </div>
        {% else %}
                No feeds available.
        {% endfor %}
    </div>
{% endblock %}
", "@SonataBlock/Block/block_core_rss.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
