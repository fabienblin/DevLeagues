<?php

/* @DevLeagues/base.html.twig */
class __TwigTemplate_0b39bff4c45fad64dae816a72cfa6c83214abe1dc47f0c6b1d92f63df34520fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@DevLeagues/base.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed556ddecbd6476db7e5848a6562a8eb4ad51ecdbc145aa5563a7c89640fd543 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed556ddecbd6476db7e5848a6562a8eb4ad51ecdbc145aa5563a7c89640fd543->enter($__internal_ed556ddecbd6476db7e5848a6562a8eb4ad51ecdbc145aa5563a7c89640fd543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/base.html.twig"));

        $__internal_fa13b848a883cad10e4cba873b3c51ce0275144e4ed55f5b181c72c82ea725e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa13b848a883cad10e4cba873b3c51ce0275144e4ed55f5b181c72c82ea725e3->enter($__internal_fa13b848a883cad10e4cba873b3c51ce0275144e4ed55f5b181c72c82ea725e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed556ddecbd6476db7e5848a6562a8eb4ad51ecdbc145aa5563a7c89640fd543->leave($__internal_ed556ddecbd6476db7e5848a6562a8eb4ad51ecdbc145aa5563a7c89640fd543_prof);

        
        $__internal_fa13b848a883cad10e4cba873b3c51ce0275144e4ed55f5b181c72c82ea725e3->leave($__internal_fa13b848a883cad10e4cba873b3c51ce0275144e4ed55f5b181c72c82ea725e3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cf72ef081c121bf63e2e9de82e3b5e965bada542d8c7ccadd1f980d5a74bab9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf72ef081c121bf63e2e9de82e3b5e965bada542d8c7ccadd1f980d5a74bab9f->enter($__internal_cf72ef081c121bf63e2e9de82e3b5e965bada542d8c7ccadd1f980d5a74bab9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2ea2258a296e35a065ad553a8bb9ea66778bc85dff7df6bc217374e26d2ab67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ea2258a296e35a065ad553a8bb9ea66778bc85dff7df6bc217374e26d2ab67->enter($__internal_a2ea2258a296e35a065ad553a8bb9ea66778bc85dff7df6bc217374e26d2ab67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    DevLeagues.com
";
        
        $__internal_a2ea2258a296e35a065ad553a8bb9ea66778bc85dff7df6bc217374e26d2ab67->leave($__internal_a2ea2258a296e35a065ad553a8bb9ea66778bc85dff7df6bc217374e26d2ab67_prof);

        
        $__internal_cf72ef081c121bf63e2e9de82e3b5e965bada542d8c7ccadd1f980d5a74bab9f->leave($__internal_cf72ef081c121bf63e2e9de82e3b5e965bada542d8c7ccadd1f980d5a74bab9f_prof);

    }

    // line 7
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_f2f71333d7d7e551134c9b098c54b861d44d6d99aa0d35ce24e394be42bcdace = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2f71333d7d7e551134c9b098c54b861d44d6d99aa0d35ce24e394be42bcdace->enter($__internal_f2f71333d7d7e551134c9b098c54b861d44d6d99aa0d35ce24e394be42bcdace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_05cb986ce472ff6e8a8570fc8af11fe3060c785555f4928fbbd6e9c3eb974d9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cb986ce472ff6e8a8570fc8af11fe3060c785555f4928fbbd6e9c3eb974d9b->enter($__internal_05cb986ce472ff6e8a8570fc8af11fe3060c785555f4928fbbd6e9c3eb974d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "EMPTY Page";
        
        $__internal_05cb986ce472ff6e8a8570fc8af11fe3060c785555f4928fbbd6e9c3eb974d9b->leave($__internal_05cb986ce472ff6e8a8570fc8af11fe3060c785555f4928fbbd6e9c3eb974d9b_prof);

        
        $__internal_f2f71333d7d7e551134c9b098c54b861d44d6d99aa0d35ce24e394be42bcdace->leave($__internal_f2f71333d7d7e551134c9b098c54b861d44d6d99aa0d35ce24e394be42bcdace_prof);

    }

    // line 8
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_0fdaa94a7cec2e61ce2ec38bc36364db1f7e3783c572564e7c081dfdf58cfd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fdaa94a7cec2e61ce2ec38bc36364db1f7e3783c572564e7c081dfdf58cfd9a->enter($__internal_0fdaa94a7cec2e61ce2ec38bc36364db1f7e3783c572564e7c081dfdf58cfd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_278dd377f0638d80131f18d6ad3b4c2979dc7b6c07c0608bf9000ac7d80d9b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278dd377f0638d80131f18d6ad3b4c2979dc7b6c07c0608bf9000ac7d80d9b59->enter($__internal_278dd377f0638d80131f18d6ad3b4c2979dc7b6c07c0608bf9000ac7d80d9b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is a temporary EMPTY page of DevLeagues.com";
        
        $__internal_278dd377f0638d80131f18d6ad3b4c2979dc7b6c07c0608bf9000ac7d80d9b59->leave($__internal_278dd377f0638d80131f18d6ad3b4c2979dc7b6c07c0608bf9000ac7d80d9b59_prof);

        
        $__internal_0fdaa94a7cec2e61ce2ec38bc36364db1f7e3783c572564e7c081dfdf58cfd9a->leave($__internal_0fdaa94a7cec2e61ce2ec38bc36364db1f7e3783c572564e7c081dfdf58cfd9a_prof);

    }

    // line 10
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_dacd48e537f90b257898247ec211f2c518b92bb5fa9de6e217a15c24d7ff7d66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dacd48e537f90b257898247ec211f2c518b92bb5fa9de6e217a15c24d7ff7d66->enter($__internal_dacd48e537f90b257898247ec211f2c518b92bb5fa9de6e217a15c24d7ff7d66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_35e41ba82a95667109ae1b2e4405498f2dfec6f19af3d7105866e2f4a3be5433 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35e41ba82a95667109ae1b2e4405498f2dfec6f19af3d7105866e2f4a3be5433->enter($__internal_35e41ba82a95667109ae1b2e4405498f2dfec6f19af3d7105866e2f4a3be5433_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 11
        echo "            THIS PAGE IS EMPTY, FOR NOW
    ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_35e41ba82a95667109ae1b2e4405498f2dfec6f19af3d7105866e2f4a3be5433->leave($__internal_35e41ba82a95667109ae1b2e4405498f2dfec6f19af3d7105866e2f4a3be5433_prof);

        
        $__internal_dacd48e537f90b257898247ec211f2c518b92bb5fa9de6e217a15c24d7ff7d66->leave($__internal_dacd48e537f90b257898247ec211f2c518b92bb5fa9de6e217a15c24d7ff7d66_prof);

    }

    public function block_body($context, array $blocks = array())
    {
        $__internal_8dc02ec6dae9809e57c0c80c3d93b245ed69dcfa7af3f1cb45c71bf1a25e197d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dc02ec6dae9809e57c0c80c3d93b245ed69dcfa7af3f1cb45c71bf1a25e197d->enter($__internal_8dc02ec6dae9809e57c0c80c3d93b245ed69dcfa7af3f1cb45c71bf1a25e197d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d0d94044eab5693b5cf4c5aea1d005390f2a4538cae7406be6e5570e1b90387e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d94044eab5693b5cf4c5aea1d005390f2a4538cae7406be6e5570e1b90387e->enter($__internal_d0d94044eab5693b5cf4c5aea1d005390f2a4538cae7406be6e5570e1b90387e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo " THIS PAGE IS EMPTY";
        
        $__internal_d0d94044eab5693b5cf4c5aea1d005390f2a4538cae7406be6e5570e1b90387e->leave($__internal_d0d94044eab5693b5cf4c5aea1d005390f2a4538cae7406be6e5570e1b90387e_prof);

        
        $__internal_8dc02ec6dae9809e57c0c80c3d93b245ed69dcfa7af3f1cb45c71bf1a25e197d->leave($__internal_8dc02ec6dae9809e57c0c80c3d93b245ed69dcfa7af3f1cb45c71bf1a25e197d_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 12,  109 => 11,  100 => 10,  82 => 8,  64 => 7,  53 => 4,  44 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block title %}
    DevLeagues.com
{% endblock %}

{% block page_title %}EMPTY Page{% endblock %}
{% block page_subtitle %}This is a temporary EMPTY page of DevLeagues.com{% endblock %}

{% block page_content %}
            THIS PAGE IS EMPTY, FOR NOW
    {% block body %} THIS PAGE IS EMPTY{% endblock %}
{% endblock %}", "@DevLeagues/base.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/base.html.twig");
    }
}
