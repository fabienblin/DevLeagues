<?php

/* @SonataBlock/Block/block_core_rss.html.twig */
class __TwigTemplate_579534cf1189b576ec5c2015958913e031e641936495250e16efae8d1898fc76 extends Twig_Template
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
        $__internal_0481437d329c3456c69c5c9a0a2b3674c95dc1e967ffaf79f80aece3f950a637 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0481437d329c3456c69c5c9a0a2b3674c95dc1e967ffaf79f80aece3f950a637->enter($__internal_0481437d329c3456c69c5c9a0a2b3674c95dc1e967ffaf79f80aece3f950a637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $__internal_c0c41d85fed7d89f7632d3b9c9255986ef9ae9dfe9afdd539fb51d5cc420578b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0c41d85fed7d89f7632d3b9c9255986ef9ae9dfe9afdd539fb51d5cc420578b->enter($__internal_c0c41d85fed7d89f7632d3b9c9255986ef9ae9dfe9afdd539fb51d5cc420578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0481437d329c3456c69c5c9a0a2b3674c95dc1e967ffaf79f80aece3f950a637->leave($__internal_0481437d329c3456c69c5c9a0a2b3674c95dc1e967ffaf79f80aece3f950a637_prof);

        
        $__internal_c0c41d85fed7d89f7632d3b9c9255986ef9ae9dfe9afdd539fb51d5cc420578b->leave($__internal_c0c41d85fed7d89f7632d3b9c9255986ef9ae9dfe9afdd539fb51d5cc420578b_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_655cbdf24a7fe307b656ad7627eada815b1fe28775a11004cac57009149158ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_655cbdf24a7fe307b656ad7627eada815b1fe28775a11004cac57009149158ff->enter($__internal_655cbdf24a7fe307b656ad7627eada815b1fe28775a11004cac57009149158ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_ebd9fd1026d77d29904db437b8552f001434ec9035b725093d0de6b71b8274a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebd9fd1026d77d29904db437b8552f001434ec9035b725093d0de6b71b8274a2->enter($__internal_ebd9fd1026d77d29904db437b8552f001434ec9035b725093d0de6b71b8274a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

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
        
        $__internal_ebd9fd1026d77d29904db437b8552f001434ec9035b725093d0de6b71b8274a2->leave($__internal_ebd9fd1026d77d29904db437b8552f001434ec9035b725093d0de6b71b8274a2_prof);

        
        $__internal_655cbdf24a7fe307b656ad7627eada815b1fe28775a11004cac57009149158ff->leave($__internal_655cbdf24a7fe307b656ad7627eada815b1fe28775a11004cac57009149158ff_prof);

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
