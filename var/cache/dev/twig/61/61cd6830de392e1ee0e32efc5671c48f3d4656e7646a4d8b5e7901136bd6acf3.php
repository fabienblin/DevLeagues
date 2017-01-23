<?php

/* @SonataAdmin/Block/block_rss_dashboard.html.twig */
class __TwigTemplate_faf67e7f19ddefb357a10cd5ad1052d2a7e7eb6a5e2f7ff2f2307570e09f7730 extends Twig_Template
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
        $__internal_cd2f817f201c9f84f638bc7aa6a6b2394901801fd8d624d3d0b6dba10ad097bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2f817f201c9f84f638bc7aa6a6b2394901801fd8d624d3d0b6dba10ad097bd->enter($__internal_cd2f817f201c9f84f638bc7aa6a6b2394901801fd8d624d3d0b6dba10ad097bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $__internal_8c5733549c091be0d0ffd99a77ebf60ba955b81164327b10cca3dcb2556e96b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5733549c091be0d0ffd99a77ebf60ba955b81164327b10cca3dcb2556e96b6->enter($__internal_8c5733549c091be0d0ffd99a77ebf60ba955b81164327b10cca3dcb2556e96b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Block/block_rss_dashboard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2f817f201c9f84f638bc7aa6a6b2394901801fd8d624d3d0b6dba10ad097bd->leave($__internal_cd2f817f201c9f84f638bc7aa6a6b2394901801fd8d624d3d0b6dba10ad097bd_prof);

        
        $__internal_8c5733549c091be0d0ffd99a77ebf60ba955b81164327b10cca3dcb2556e96b6->leave($__internal_8c5733549c091be0d0ffd99a77ebf60ba955b81164327b10cca3dcb2556e96b6_prof);

    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        $__internal_65f3f58675cfb7f015a78a33c8d00c2b2cbefd18603108335a7e8583fd3f18e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65f3f58675cfb7f015a78a33c8d00c2b2cbefd18603108335a7e8583fd3f18e9->enter($__internal_65f3f58675cfb7f015a78a33c8d00c2b2cbefd18603108335a7e8583fd3f18e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_78cd02e3e279f189c629e7d817ec6ff479d89457afb5b90a8cfdefd9993677da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78cd02e3e279f189c629e7d817ec6ff479d89457afb5b90a8cfdefd9993677da->enter($__internal_78cd02e3e279f189c629e7d817ec6ff479d89457afb5b90a8cfdefd9993677da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_78cd02e3e279f189c629e7d817ec6ff479d89457afb5b90a8cfdefd9993677da->leave($__internal_78cd02e3e279f189c629e7d817ec6ff479d89457afb5b90a8cfdefd9993677da_prof);

        
        $__internal_65f3f58675cfb7f015a78a33c8d00c2b2cbefd18603108335a7e8583fd3f18e9->leave($__internal_65f3f58675cfb7f015a78a33c8d00c2b2cbefd18603108335a7e8583fd3f18e9_prof);

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
