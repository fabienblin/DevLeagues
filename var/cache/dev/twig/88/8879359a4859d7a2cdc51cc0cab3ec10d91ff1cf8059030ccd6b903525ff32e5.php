<?php

/* DevLeaguesBundle:News:show_reduced.html.twig */
class __TwigTemplate_0ae986c5f7f11607729667c6da0178f291033be59cb3382c63dc79023e42f7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "DevLeaguesBundle:News:show_reduced.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cb383639bc59c06ed1355d2438646c2d940f85371081bbed9606617e6b21c746 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb383639bc59c06ed1355d2438646c2d940f85371081bbed9606617e6b21c746->enter($__internal_cb383639bc59c06ed1355d2438646c2d940f85371081bbed9606617e6b21c746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:News:show_reduced.html.twig"));

        $__internal_81f320d91766e32d31760def58bbc191bdb9d9db49882d715a7ff62b70bb159e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81f320d91766e32d31760def58bbc191bdb9d9db49882d715a7ff62b70bb159e->enter($__internal_81f320d91766e32d31760def58bbc191bdb9d9db49882d715a7ff62b70bb159e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "DevLeaguesBundle:News:show_reduced.html.twig"));

        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "DevLeaguesBundle:News:show_reduced.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb383639bc59c06ed1355d2438646c2d940f85371081bbed9606617e6b21c746->leave($__internal_cb383639bc59c06ed1355d2438646c2d940f85371081bbed9606617e6b21c746_prof);

        
        $__internal_81f320d91766e32d31760def58bbc191bdb9d9db49882d715a7ff62b70bb159e->leave($__internal_81f320d91766e32d31760def58bbc191bdb9d9db49882d715a7ff62b70bb159e_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_e47b4603b39ada81c36073f1b075458699c69b785a4e725131333b1646e7023d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47b4603b39ada81c36073f1b075458699c69b785a4e725131333b1646e7023d->enter($__internal_e47b4603b39ada81c36073f1b075458699c69b785a4e725131333b1646e7023d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_9c13dec5960db21986f3c5250c2c290879b3848eb713a76e34b5f530b4d37171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c13dec5960db21986f3c5250c2c290879b3848eb713a76e34b5f530b4d37171->enter($__internal_9c13dec5960db21986f3c5250c2c290879b3848eb713a76e34b5f530b4d37171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "News";
        
        $__internal_9c13dec5960db21986f3c5250c2c290879b3848eb713a76e34b5f530b4d37171->leave($__internal_9c13dec5960db21986f3c5250c2c290879b3848eb713a76e34b5f530b4d37171_prof);

        
        $__internal_e47b4603b39ada81c36073f1b075458699c69b785a4e725131333b1646e7023d->leave($__internal_e47b4603b39ada81c36073f1b075458699c69b785a4e725131333b1646e7023d_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c6ea97b5e67f6716b068cfaed53bfdd0dee376d4f5846fd3cd9219f8973cd84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6ea97b5e67f6716b068cfaed53bfdd0dee376d4f5846fd3cd9219f8973cd84f->enter($__internal_c6ea97b5e67f6716b068cfaed53bfdd0dee376d4f5846fd3cd9219f8973cd84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_e001e17739cf2c58f75021b85d6f0aa1555b10c84b7d9f7eab52cf9555dad697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e001e17739cf2c58f75021b85d6f0aa1555b10c84b7d9f7eab52cf9555dad697->enter($__internal_e001e17739cf2c58f75021b85d6f0aa1555b10c84b7d9f7eab52cf9555dad697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Hot stuf";
        
        $__internal_e001e17739cf2c58f75021b85d6f0aa1555b10c84b7d9f7eab52cf9555dad697->leave($__internal_e001e17739cf2c58f75021b85d6f0aa1555b10c84b7d9f7eab52cf9555dad697_prof);

        
        $__internal_c6ea97b5e67f6716b068cfaed53bfdd0dee376d4f5846fd3cd9219f8973cd84f->leave($__internal_c6ea97b5e67f6716b068cfaed53bfdd0dee376d4f5846fd3cd9219f8973cd84f_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_923963e75982d57cc858f58568a0798aa164cc500d782d3a4a582e43a1b048d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_923963e75982d57cc858f58568a0798aa164cc500d782d3a4a582e43a1b048d5->enter($__internal_923963e75982d57cc858f58568a0798aa164cc500d782d3a4a582e43a1b048d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_28c7528e745d4f1a922e85f39f30eb62a811da372a3cf7dfe8b9d509cdf213ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c7528e745d4f1a922e85f39f30eb62a811da372a3cf7dfe8b9d509cdf213ad->enter($__internal_28c7528e745d4f1a922e85f39f30eb62a811da372a3cf7dfe8b9d509cdf213ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<ul class=\"timeline\">
\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["newss"] ?? $this->getContext($context, "newss")));
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 11
            echo "\t\t";
            echo $context["dl_macro"]->getnews_reduced($context["news"]);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "\t<li>
\t\t<i class=\"fa fa-clock-o bg-gray\"></i>
\t</li>
</ul>
";
        
        $__internal_28c7528e745d4f1a922e85f39f30eb62a811da372a3cf7dfe8b9d509cdf213ad->leave($__internal_28c7528e745d4f1a922e85f39f30eb62a811da372a3cf7dfe8b9d509cdf213ad_prof);

        
        $__internal_923963e75982d57cc858f58568a0798aa164cc500d782d3a4a582e43a1b048d5->leave($__internal_923963e75982d57cc858f58568a0798aa164cc500d782d3a4a582e43a1b048d5_prof);

    }

    public function getTemplateName()
    {
        return "DevLeaguesBundle:News:show_reduced.html.twig";
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
        return new Twig_Source("{% extends \"DevLeaguesBundle::default.html.twig\" %}

{% import \"DevLeaguesBundle::macros.html.twig\" as dl_macro %}

{% block page_title %}News{% endblock %}
{% block page_subtitle %}Hot stuf{% endblock %}

{% block page_content %}
<ul class=\"timeline\">
\t{% for news in newss %}
\t\t{{ dl_macro.news_reduced(news) }}
\t{% endfor %}
\t<li>
\t\t<i class=\"fa fa-clock-o bg-gray\"></i>
\t</li>
</ul>
{% endblock %}
", "DevLeaguesBundle:News:show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/var/cache/dev/../../../src/DevLeaguesBundle/Resources/views/News/show_reduced.html.twig");
    }
}
