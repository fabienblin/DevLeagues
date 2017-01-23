<?php

/* DevLeaguesBundle:Community:index.html.twig */
class __TwigTemplate_1754d9319d1c5ef3c7c8c1cf49319b0e297da0174b3d30441a5bf88d535b3bc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "DevLeaguesBundle:Community:index.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8874452d8c60d7b90cb577b6cb53b5f3365081125c481228accd9fc2cc8814ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8874452d8c60d7b90cb577b6cb53b5f3365081125c481228accd9fc2cc8814ae->enter($__internal_8874452d8c60d7b90cb577b6cb53b5f3365081125c481228accd9fc2cc8814ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Community:index.html.twig"));

        $__internal_555d5ee5835c9eb0a413eddfce0b984ad727f1c6dcac9a530f10418f9032a4ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555d5ee5835c9eb0a413eddfce0b984ad727f1c6dcac9a530f10418f9032a4ea->enter($__internal_555d5ee5835c9eb0a413eddfce0b984ad727f1c6dcac9a530f10418f9032a4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:Community:index.html.twig"));

        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "DevLeaguesBundle:Community:index.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8874452d8c60d7b90cb577b6cb53b5f3365081125c481228accd9fc2cc8814ae->leave($__internal_8874452d8c60d7b90cb577b6cb53b5f3365081125c481228accd9fc2cc8814ae_prof);

        
        $__internal_555d5ee5835c9eb0a413eddfce0b984ad727f1c6dcac9a530f10418f9032a4ea->leave($__internal_555d5ee5835c9eb0a413eddfce0b984ad727f1c6dcac9a530f10418f9032a4ea_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_5313dd731ca0a13a536d8997296c493fbfdc1bb2ffed34fbda7076fc9a577260 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5313dd731ca0a13a536d8997296c493fbfdc1bb2ffed34fbda7076fc9a577260->enter($__internal_5313dd731ca0a13a536d8997296c493fbfdc1bb2ffed34fbda7076fc9a577260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_a63cffef53d211997724d393ee5c4c2d950be47834b66e2b07d1c665eab30dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a63cffef53d211997724d393ee5c4c2d950be47834b66e2b07d1c665eab30dcf->enter($__internal_a63cffef53d211997724d393ee5c4c2d950be47834b66e2b07d1c665eab30dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "People";
        
        $__internal_a63cffef53d211997724d393ee5c4c2d950be47834b66e2b07d1c665eab30dcf->leave($__internal_a63cffef53d211997724d393ee5c4c2d950be47834b66e2b07d1c665eab30dcf_prof);

        
        $__internal_5313dd731ca0a13a536d8997296c493fbfdc1bb2ffed34fbda7076fc9a577260->leave($__internal_5313dd731ca0a13a536d8997296c493fbfdc1bb2ffed34fbda7076fc9a577260_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_28f7db07e496ada5b20509c3b49b222892d30a1b0f0cfdc7faa8c98b98c5a5fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28f7db07e496ada5b20509c3b49b222892d30a1b0f0cfdc7faa8c98b98c5a5fa->enter($__internal_28f7db07e496ada5b20509c3b49b222892d30a1b0f0cfdc7faa8c98b98c5a5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_d468641f22173dfe83d2b286f541f66495cc602d9a43d2eb9989199e664dcc02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d468641f22173dfe83d2b286f541f66495cc602d9a43d2eb9989199e664dcc02->enter($__internal_d468641f22173dfe83d2b286f541f66495cc602d9a43d2eb9989199e664dcc02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "whatever";
        
        $__internal_d468641f22173dfe83d2b286f541f66495cc602d9a43d2eb9989199e664dcc02->leave($__internal_d468641f22173dfe83d2b286f541f66495cc602d9a43d2eb9989199e664dcc02_prof);

        
        $__internal_28f7db07e496ada5b20509c3b49b222892d30a1b0f0cfdc7faa8c98b98c5a5fa->leave($__internal_28f7db07e496ada5b20509c3b49b222892d30a1b0f0cfdc7faa8c98b98c5a5fa_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_e7a2bbd383d33d82a678957fe11c4fb820f8284a5ee248b51a2c51359de5804a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7a2bbd383d33d82a678957fe11c4fb820f8284a5ee248b51a2c51359de5804a->enter($__internal_e7a2bbd383d33d82a678957fe11c4fb820f8284a5ee248b51a2c51359de5804a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d6e2fabfc71ba2488976113c128349116a4f162bc67558b0a90c6aa6cd98e744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6e2fabfc71ba2488976113c128349116a4f162bc67558b0a90c6aa6cd98e744->enter($__internal_d6e2fabfc71ba2488976113c128349116a4f162bc67558b0a90c6aa6cd98e744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<div class=\"row\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "\t\t";
            echo $context["dl_macro"]->getuser_reduced($context["user"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</div>
";
        
        $__internal_d6e2fabfc71ba2488976113c128349116a4f162bc67558b0a90c6aa6cd98e744->leave($__internal_d6e2fabfc71ba2488976113c128349116a4f162bc67558b0a90c6aa6cd98e744_prof);

        
        $__internal_e7a2bbd383d33d82a678957fe11c4fb820f8284a5ee248b51a2c51359de5804a->leave($__internal_e7a2bbd383d33d82a678957fe11c4fb820f8284a5ee248b51a2c51359de5804a_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:Community:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 13,  97 => 11,  93 => 10,  90 => 9,  81 => 8,  63 => 6,  45 => 5,  35 => 1,  33 => 3,  11 => 1,);
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

{% import \"DevLeaguesBundle::macros.html.twig\" as dl_macro %}

{% block page_title %}People{% endblock %}
{% block page_subtitle %}whatever{% endblock %}

{% block page_content %}
<div class=\"row\">
\t{% for user in users %}
\t\t{{ dl_macro.user_reduced(user) }}
\t{% endfor %}
</div>
{% endblock %}
", "DevLeaguesBundle:Community:index.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/Community/index.html.twig");
    }
}
