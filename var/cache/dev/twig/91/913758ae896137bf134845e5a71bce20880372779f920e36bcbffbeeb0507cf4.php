<?php

/* @DevLeagues/News/show_reduced.html.twig */
class __TwigTemplate_8248201135385917af9259ed0e04d8ed218b59f541d0ce3c7e45f584c872b92e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::default.html.twig", "@DevLeagues/News/show_reduced.html.twig", 1);
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
        $__internal_1ef87ba217bc7a73903b4a9e9c0490ac08eac412ab2308f6c5320a66e5e2a01e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef87ba217bc7a73903b4a9e9c0490ac08eac412ab2308f6c5320a66e5e2a01e->enter($__internal_1ef87ba217bc7a73903b4a9e9c0490ac08eac412ab2308f6c5320a66e5e2a01e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/News/show_reduced.html.twig"));

        $__internal_05056818cb6d5e3e14c255d47b074c90121f4cc74222d1fa618c5679852dadef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05056818cb6d5e3e14c255d47b074c90121f4cc74222d1fa618c5679852dadef->enter($__internal_05056818cb6d5e3e14c255d47b074c90121f4cc74222d1fa618c5679852dadef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/News/show_reduced.html.twig"));

        // line 3
        $context["dl_macro"] = $this->loadTemplate("DevLeaguesBundle::macros.html.twig", "@DevLeagues/News/show_reduced.html.twig", 3);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ef87ba217bc7a73903b4a9e9c0490ac08eac412ab2308f6c5320a66e5e2a01e->leave($__internal_1ef87ba217bc7a73903b4a9e9c0490ac08eac412ab2308f6c5320a66e5e2a01e_prof);

        
        $__internal_05056818cb6d5e3e14c255d47b074c90121f4cc74222d1fa618c5679852dadef->leave($__internal_05056818cb6d5e3e14c255d47b074c90121f4cc74222d1fa618c5679852dadef_prof);

    }

    // line 5
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_d4f38a5a570531771609272b2905988efb25b3e0f97e416d709216cc00c868e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4f38a5a570531771609272b2905988efb25b3e0f97e416d709216cc00c868e9->enter($__internal_d4f38a5a570531771609272b2905988efb25b3e0f97e416d709216cc00c868e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_eadb5a5f0187bfdedf53b1c1b7bad679d2a76da9b7d226996ce101805aa887d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eadb5a5f0187bfdedf53b1c1b7bad679d2a76da9b7d226996ce101805aa887d3->enter($__internal_eadb5a5f0187bfdedf53b1c1b7bad679d2a76da9b7d226996ce101805aa887d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "News";
        
        $__internal_eadb5a5f0187bfdedf53b1c1b7bad679d2a76da9b7d226996ce101805aa887d3->leave($__internal_eadb5a5f0187bfdedf53b1c1b7bad679d2a76da9b7d226996ce101805aa887d3_prof);

        
        $__internal_d4f38a5a570531771609272b2905988efb25b3e0f97e416d709216cc00c868e9->leave($__internal_d4f38a5a570531771609272b2905988efb25b3e0f97e416d709216cc00c868e9_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_99a4eaf29a6e520d25d40ef40d8c97cad236a6cb06aae84b13e163ae450e5c29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a4eaf29a6e520d25d40ef40d8c97cad236a6cb06aae84b13e163ae450e5c29->enter($__internal_99a4eaf29a6e520d25d40ef40d8c97cad236a6cb06aae84b13e163ae450e5c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_badae123419b75b57162b114b34159c08d29ed9eb7f983607a966fa059e85b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_badae123419b75b57162b114b34159c08d29ed9eb7f983607a966fa059e85b03->enter($__internal_badae123419b75b57162b114b34159c08d29ed9eb7f983607a966fa059e85b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "Hot stuf";
        
        $__internal_badae123419b75b57162b114b34159c08d29ed9eb7f983607a966fa059e85b03->leave($__internal_badae123419b75b57162b114b34159c08d29ed9eb7f983607a966fa059e85b03_prof);

        
        $__internal_99a4eaf29a6e520d25d40ef40d8c97cad236a6cb06aae84b13e163ae450e5c29->leave($__internal_99a4eaf29a6e520d25d40ef40d8c97cad236a6cb06aae84b13e163ae450e5c29_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_825748e2ba33c03290da0d4ac9ef1beea5cc85783718ec2bb02b57d66c917397 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_825748e2ba33c03290da0d4ac9ef1beea5cc85783718ec2bb02b57d66c917397->enter($__internal_825748e2ba33c03290da0d4ac9ef1beea5cc85783718ec2bb02b57d66c917397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e9b4617c38a5674426d67ce9b92137bdf8e50e87d75e4749028add79005de99d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9b4617c38a5674426d67ce9b92137bdf8e50e87d75e4749028add79005de99d->enter($__internal_e9b4617c38a5674426d67ce9b92137bdf8e50e87d75e4749028add79005de99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_e9b4617c38a5674426d67ce9b92137bdf8e50e87d75e4749028add79005de99d->leave($__internal_e9b4617c38a5674426d67ce9b92137bdf8e50e87d75e4749028add79005de99d_prof);

        
        $__internal_825748e2ba33c03290da0d4ac9ef1beea5cc85783718ec2bb02b57d66c917397->leave($__internal_825748e2ba33c03290da0d4ac9ef1beea5cc85783718ec2bb02b57d66c917397_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/News/show_reduced.html.twig";
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
", "@DevLeagues/News/show_reduced.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/News/show_reduced.html.twig");
    }
}
