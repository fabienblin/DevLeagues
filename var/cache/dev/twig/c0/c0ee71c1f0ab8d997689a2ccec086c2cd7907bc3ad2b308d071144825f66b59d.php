<?php

/* @SonataBlock/Block/block_core_rss.html.twig */
class __TwigTemplate_c30154d99a360031b9e7a211fdf39a0e7b608aa5070cbe94a8efffc83ce33bc0 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates", array()), "block_base", array()), "@SonataBlock/Block/block_core_rss.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_792b1b1dfb468b5a63d342c76d9ade5efbebc14bd316bd508c266d34be9d93ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_792b1b1dfb468b5a63d342c76d9ade5efbebc14bd316bd508c266d34be9d93ba->enter($__internal_792b1b1dfb468b5a63d342c76d9ade5efbebc14bd316bd508c266d34be9d93ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $__internal_5ecc897c8ab29d6d26b4ef079ea49851f4f568b27c42e5a5268e617b67c69f49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecc897c8ab29d6d26b4ef079ea49851f4f568b27c42e5a5268e617b67c69f49->enter($__internal_5ecc897c8ab29d6d26b4ef079ea49851f4f568b27c42e5a5268e617b67c69f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataBlock/Block/block_core_rss.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_792b1b1dfb468b5a63d342c76d9ade5efbebc14bd316bd508c266d34be9d93ba->leave($__internal_792b1b1dfb468b5a63d342c76d9ade5efbebc14bd316bd508c266d34be9d93ba_prof);

        
        $__internal_5ecc897c8ab29d6d26b4ef079ea49851f4f568b27c42e5a5268e617b67c69f49->leave($__internal_5ecc897c8ab29d6d26b4ef079ea49851f4f568b27c42e5a5268e617b67c69f49_prof);

    }

    // line 13
    public function block_block($context, array $blocks = array())
    {
        $__internal_8d49cdec6ba6d9e115e2f697b30b31c1f3b7ddd2af218962778488736062a688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d49cdec6ba6d9e115e2f697b30b31c1f3b7ddd2af218962778488736062a688->enter($__internal_8d49cdec6ba6d9e115e2f697b30b31c1f3b7ddd2af218962778488736062a688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        $__internal_902d7e117974d17af6df4106f06c095da6f6f1819c543e6ca01f7de5f20e7904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902d7e117974d17af6df4106f06c095da6f6f1819c543e6ca01f7de5f20e7904->enter($__internal_902d7e117974d17af6df4106f06c095da6f6f1819c543e6ca01f7de5f20e7904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        // line 14
        echo "    <h3 class=\"sonata-feed-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h3>

    <div class=\"sonata-feeds-container\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["feeds"]) ? $context["feeds"] : $this->getContext($context, "feeds")));
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
        
        $__internal_902d7e117974d17af6df4106f06c095da6f6f1819c543e6ca01f7de5f20e7904->leave($__internal_902d7e117974d17af6df4106f06c095da6f6f1819c543e6ca01f7de5f20e7904_prof);

        
        $__internal_8d49cdec6ba6d9e115e2f697b30b31c1f3b7ddd2af218962778488736062a688->leave($__internal_8d49cdec6ba6d9e115e2f697b30b31c1f3b7ddd2af218962778488736062a688_prof);

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
", "@SonataBlock/Block/block_core_rss.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/block-bundle/Resources/views/Block/block_core_rss.html.twig");
    }
}
