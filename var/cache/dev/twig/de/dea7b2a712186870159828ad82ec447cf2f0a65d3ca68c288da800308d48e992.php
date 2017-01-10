<?php

/* @SonataAdmin/Block/block_rss_dashboard.html.twig */
class __TwigTemplate_0d43825ea7f81b4ccc1b84cf44a49a69e63b86ca356ca5ffa4482f975a69417a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataBlockBundle:Block:block_core_rss.html.twig", "@SonataAdmin/Block/block_rss_dashboard.html.twig", 12);
        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataBlockBundle:Block:block_core_rss.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c193bc9f71136761a7c2dfa2021b3f9b2880d4789ad3f50d3f423f392757c8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c193bc9f71136761a7c2dfa2021b3f9b2880d4789ad3f50d3f423f392757c8b->enter($__internal_1c193bc9f71136761a7c2dfa2021b3f9b2880d4789ad3f50d3f423f392757c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $__internal_5f815c555e3d32ec7edf2229d22adf863a5b08aab2607b2a89c68841c073d16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f815c555e3d32ec7edf2229d22adf863a5b08aab2607b2a89c68841c073d16a->enter($__internal_5f815c555e3d32ec7edf2229d22adf863a5b08aab2607b2a89c68841c073d16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c193bc9f71136761a7c2dfa2021b3f9b2880d4789ad3f50d3f423f392757c8b->leave($__internal_1c193bc9f71136761a7c2dfa2021b3f9b2880d4789ad3f50d3f423f392757c8b_prof);

        
        $__internal_5f815c555e3d32ec7edf2229d22adf863a5b08aab2607b2a89c68841c073d16a->leave($__internal_5f815c555e3d32ec7edf2229d22adf863a5b08aab2607b2a89c68841c073d16a_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_381958b9614943bcd40560eb54a3b4ef66ac5e282fbf500ba2cecbf4c3002e9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_381958b9614943bcd40560eb54a3b4ef66ac5e282fbf500ba2cecbf4c3002e9d->enter($__internal_381958b9614943bcd40560eb54a3b4ef66ac5e282fbf500ba2cecbf4c3002e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_8a272aaad0f3175c09cd803d1983bc7355d56689b70eabde0ca215949987654f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a272aaad0f3175c09cd803d1983bc7355d56689b70eabde0ca215949987654f->enter($__internal_8a272aaad0f3175c09cd803d1983bc7355d56689b70eabde0ca215949987654f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 15
        echo "    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feeds"] ?? $this->getContext($context, "feeds")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["feed"]) {
            // line 22
            echo "                <a class=\"list-group-item\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "link", array()), "html", null, true);
            echo "\" rel=\"nofollow\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "\">
                    <strong>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["feed"], "title", array()), "html", null, true);
            echo "</strong>
                    <div>";
            // line 24
            echo $this->getAttribute($context["feed"], "description", array());
            echo "</div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 27
            echo "                <div class=\"list-group-item\">No feeds available.</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </div>
    </div>
";
        
        $__internal_8a272aaad0f3175c09cd803d1983bc7355d56689b70eabde0ca215949987654f->leave($__internal_8a272aaad0f3175c09cd803d1983bc7355d56689b70eabde0ca215949987654f_prof);

        
        $__internal_381958b9614943bcd40560eb54a3b4ef66ac5e282fbf500ba2cecbf4c3002e9d->leave($__internal_381958b9614943bcd40560eb54a3b4ef66ac5e282fbf500ba2cecbf4c3002e9d_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Block/block_rss_dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 29,  84 => 27,  76 => 24,  72 => 23,  65 => 22,  60 => 21,  53 => 17,  49 => 15,  40 => 14,  11 => 12,);
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

{% extends \"SonataBlockBundle:Block:block_core_rss.html.twig\" %}

{% block block %}
    <div class=\"box box-warning\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title sonata-feed-title\"><i class=\"fa fa-rss\" aria-hidden=\"true\"></i> {{ settings.title }}</h3>
        </div>

        <div class=\"sonata-feeds-container list-group\">
            {% for feed in feeds %}
                <a class=\"list-group-item\" href=\"{{ feed.link}}\" rel=\"nofollow\" title=\"{{ feed.title }}\">
                    <strong>{{ feed.title }}</strong>
                    <div>{{ feed.description|raw }}</div>
                </a>
            {% else %}
                <div class=\"list-group-item\">No feeds available.</div>
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/Block/block_rss_dashboard.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Block/block_rss_dashboard.html.twig");
    }
}
