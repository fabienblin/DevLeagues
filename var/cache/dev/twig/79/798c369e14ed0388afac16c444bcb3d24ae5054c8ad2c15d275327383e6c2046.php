<?php

/* @DevLeagues/Challenge/show.html.twig */
class __TwigTemplate_d48276167b8da323efaa9058eb22bff6b339fbe012167ff7223f9d395d825f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle:Challenge:index.html.twig", "@DevLeagues/Challenge/show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle:Challenge:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c186df814cc2fcbee957923fa582a03647c00e35f38660756a8432ba77a297b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c186df814cc2fcbee957923fa582a03647c00e35f38660756a8432ba77a297b2->enter($__internal_c186df814cc2fcbee957923fa582a03647c00e35f38660756a8432ba77a297b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show.html.twig"));

        $__internal_60a460e74d898b591400ae89967b3aaadcbaa524468ded26f8f4b6892c0b57fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60a460e74d898b591400ae89967b3aaadcbaa524468ded26f8f4b6892c0b57fe->enter($__internal_60a460e74d898b591400ae89967b3aaadcbaa524468ded26f8f4b6892c0b57fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Challenge/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c186df814cc2fcbee957923fa582a03647c00e35f38660756a8432ba77a297b2->leave($__internal_c186df814cc2fcbee957923fa582a03647c00e35f38660756a8432ba77a297b2_prof);

        
        $__internal_60a460e74d898b591400ae89967b3aaadcbaa524468ded26f8f4b6892c0b57fe->leave($__internal_60a460e74d898b591400ae89967b3aaadcbaa524468ded26f8f4b6892c0b57fe_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4348a0817ee611649f5e6026afef940ea16271a9abacc29007dac39389ee2034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4348a0817ee611649f5e6026afef940ea16271a9abacc29007dac39389ee2034->enter($__internal_4348a0817ee611649f5e6026afef940ea16271a9abacc29007dac39389ee2034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9433a397e892dba6dd5f2ee70d6bd50dcb1a61a34f6124d44762f7bec2685904 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9433a397e892dba6dd5f2ee70d6bd50dcb1a61a34f6124d44762f7bec2685904->enter($__internal_9433a397e892dba6dd5f2ee70d6bd50dcb1a61a34f6124d44762f7bec2685904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<h1>Welcome to the Challenge:show page</h1>
";
        
        $__internal_9433a397e892dba6dd5f2ee70d6bd50dcb1a61a34f6124d44762f7bec2685904->leave($__internal_9433a397e892dba6dd5f2ee70d6bd50dcb1a61a34f6124d44762f7bec2685904_prof);

        
        $__internal_4348a0817ee611649f5e6026afef940ea16271a9abacc29007dac39389ee2034->leave($__internal_4348a0817ee611649f5e6026afef940ea16271a9abacc29007dac39389ee2034_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Challenge/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"DevLeaguesBundle:Challenge:index.html.twig\" %}

{% block body %}
<h1>Welcome to the Challenge:show page</h1>
{% endblock %}
", "@DevLeagues/Challenge/show.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Challenge/show.html.twig");
    }
}
