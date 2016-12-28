<?php

/* DevLeaguesBundle:Profile:index.html.twig */
class __TwigTemplate_ee4597ae0dc0a9e2c3f62bf355e291a9162309d5ab341a0f44851c75423368a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Profile:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fec43bfc6fc0c1bc63d0408d8795eba55503c5899dadc22416e14e5a2e130053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fec43bfc6fc0c1bc63d0408d8795eba55503c5899dadc22416e14e5a2e130053->enter($__internal_fec43bfc6fc0c1bc63d0408d8795eba55503c5899dadc22416e14e5a2e130053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Profile:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fec43bfc6fc0c1bc63d0408d8795eba55503c5899dadc22416e14e5a2e130053->leave($__internal_fec43bfc6fc0c1bc63d0408d8795eba55503c5899dadc22416e14e5a2e130053_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fca097dcbc9c27f48c88ed08ce45514df241395d738a8a43222bcf9145d18d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fca097dcbc9c27f48c88ed08ce45514df241395d738a8a43222bcf9145d18d3->enter($__internal_5fca097dcbc9c27f48c88ed08ce45514df241395d738a8a43222bcf9145d18d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<h1>All Users</h1>

<div class=\"row\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 9
            echo "\t\t";
            $this->loadTemplate("DevLeaguesBundle:Profile:showReduced.html.twig", "DevLeaguesBundle:Profile:index.html.twig", 9)->display($context);
            // line 10
            echo "\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</div>

";
        
        $__internal_5fca097dcbc9c27f48c88ed08ce45514df241395d738a8a43222bcf9145d18d3->leave($__internal_5fca097dcbc9c27f48c88ed08ce45514df241395d738a8a43222bcf9145d18d3_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Profile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 11,  66 => 10,  63 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle::base.html.twig\" %}

{% block body %}

<h1>All Users</h1>

<div class=\"row\">
\t{% for user in users %}
\t\t{% include 'DevLeaguesBundle:Profile:showReduced.html.twig' %}
\t{% endfor %}
</div>

{% endblock %}
", "DevLeaguesBundle:Profile:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Profile/index.html.twig");
    }
}
