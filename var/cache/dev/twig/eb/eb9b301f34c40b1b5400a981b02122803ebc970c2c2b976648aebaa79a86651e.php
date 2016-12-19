<?php

/* DevLeaguesBundle:About:index.html.twig */
class __TwigTemplate_a48b60eb9b67c99c3fa1ca823594a0f191a607f1340b2ffa0dcc13dd3229072e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:About:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d7ddae6f8ca843864a29f6ab3791470ff08616eba84f58c520ed1c9d48e3ff8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ddae6f8ca843864a29f6ab3791470ff08616eba84f58c520ed1c9d48e3ff8b->enter($__internal_d7ddae6f8ca843864a29f6ab3791470ff08616eba84f58c520ed1c9d48e3ff8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:About:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ddae6f8ca843864a29f6ab3791470ff08616eba84f58c520ed1c9d48e3ff8b->leave($__internal_d7ddae6f8ca843864a29f6ab3791470ff08616eba84f58c520ed1c9d48e3ff8b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c509a72b33b5f7fbd537acc92d5ea718ee170c7873eee4e01ae508ed1608d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c509a72b33b5f7fbd537acc92d5ea718ee170c7873eee4e01ae508ed1608d5e->enter($__internal_6c509a72b33b5f7fbd537acc92d5ea718ee170c7873eee4e01ae508ed1608d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevLeaguesBundle:About:index";
        
        $__internal_6c509a72b33b5f7fbd537acc92d5ea718ee170c7873eee4e01ae508ed1608d5e->leave($__internal_6c509a72b33b5f7fbd537acc92d5ea718ee170c7873eee4e01ae508ed1608d5e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_73e6ccefc6ad47c6ca034cb9e66a309af78144d192a8dc0835ad15dc12589a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73e6ccefc6ad47c6ca034cb9e66a309af78144d192a8dc0835ad15dc12589a69->enter($__internal_73e6ccefc6ad47c6ca034cb9e66a309af78144d192a8dc0835ad15dc12589a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<h1>Welcome to the About:index page</h1>
";
        
        $__internal_73e6ccefc6ad47c6ca034cb9e66a309af78144d192a8dc0835ad15dc12589a69->leave($__internal_73e6ccefc6ad47c6ca034cb9e66a309af78144d192a8dc0835ad15dc12589a69_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:About:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title %}DevLeaguesBundle:About:index{% endblock %}

{% block body %}
<h1>Welcome to the About:index page</h1>
{% endblock %}
", "DevLeaguesBundle:About:index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/About/index.html.twig");
    }
}
